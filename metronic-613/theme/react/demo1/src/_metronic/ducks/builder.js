import objectPath from "object-path";
import { persistReducer } from "redux-persist";
import storage from "redux-persist/lib/storage";

import LayoutConfig from "../layout/LayoutConfig";
import MenuConfig from "../layout/MenuConfig";

export const actionTypes = {
  SetMenuConfig: "builder/SET_MENU_CONFIG",
  SetLayoutConfigs: "builder/SET_LAYOUT_CONFIGS",
  SetLayoutConfigsWithPageRefresh: "builder/SET_LAYOUT_CONFIGS_WITH_PAGE_REFRESH",
  SetHtmlClassService: "builder/SET_HTML_CLASS_SERVICE"
};

export const selectors = {
  getClasses: (store, params) => {
    const { htmlClassServiceObjects } = store.builder;

    return htmlClassServiceObjects
      ? htmlClassServiceObjects.getClasses(params.path, params.toString)
      : "";
  },

  getConfig: (state, path) => {
    const { layoutConfig } = state.builder;

    if (path) {
      // if path is specified, get the value within object
      return objectPath.get(layoutConfig, path);
    }

    return "";
  },

  getLogo: ({ builder: { layoutConfig } }) => {
    const menuAsideLeftSkin = objectPath.get(layoutConfig, "brand.self.skin");
    // set brand logo
    const logoObject = objectPath.get(layoutConfig, "self.logo");
    let logo;
    if (typeof logoObject === "string") {
      logo = logoObject;
    }

    if (typeof logoObject === "object") {
      logo = objectPath.get(logoObject, menuAsideLeftSkin + "");
    }

    if (typeof logo === "undefined") {
      try {
        const logos = objectPath.get(this.layoutConfig, "self.logo");
        logo = logos[Object.keys(logos)[0]];
      } catch (e) {}
    }
    return logo;
  },

  getStickyLogo: store => {
    const { layoutConfig } = store.builder;
    let logo = objectPath.get(layoutConfig, "self.logo.sticky");
    if (typeof logo === "undefined") {
      logo = selectors.getLogo(store);
    }
    return logo + "";
  }
};

const initialState = {
  menuConfig: MenuConfig,
  layoutConfig: LayoutConfig,
  htmlClassServiceObjects: undefined
};

export const reducer = persistReducer(
  {
    storage,
    key: "build-demo1",
    blacklist: ["htmlClassServiceObjects"]
  },
  (state = initialState, { type, payload }) => {
    switch (type) {
      case actionTypes.SetMenuConfig:
        return { ...state, menuConfig: payload };

      case actionTypes.SetLayoutConfigs:
        return { ...state, layoutConfig: payload };

      case actionTypes.SetLayoutConfigsWithPageRefresh: {
        return {...state, layoutConfig: payload};
      }
      case actionTypes.SetHtmlClassService:
        return { ...state, htmlClassServiceObjects: payload };

      default:
        return state;
    }
  }
);

export const actions = {
  setMenuConfig: payload => ({ payload, type: actionTypes.SetMenuConfig }),

  setLayoutConfigs: payload => ({
    payload,
    type: actionTypes.SetLayoutConfigs
  }),

  setLayoutConfigsWithPageRefresh: payload => ({
    payload,
    type: actionTypes.SetLayoutConfigsWithPageRefresh
  }),

  setHtmlClassService: payload => ({
    payload,
    type: actionTypes.SetHtmlClassService
  })
};

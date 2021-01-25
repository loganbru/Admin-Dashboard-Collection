import {
    LOGO_BG,
    NAVBAR_BG,
    SIDEBAR_BG,
    THEME,
    DIRECTION,
    SIDEBAR_POSITION,
    HEADER_POSITION,
    LAYOUT,
    SIDEBAR_TYPE
} from '../constants/';

const INIT_STATE = {
    activeDir: "ltr",
    activeThemeLayout: "vertical",
    activeTheme: "light",
    activeSidebarType: "full",
    activeLogoBg: "skin6",
    activeNavbarBg: "skin5",
    activeSidebarBg: "skin6",
    activeSidebarPos: "fixed",
    activeHeaderPos: "fixed",
    activeLayout: "full"
}

export default (state = INIT_STATE, action) => {
    switch (action.type) {
        case LOGO_BG:
            return {
                ...state,
                activeLogoBg: action.payload
            };
        case NAVBAR_BG:
            return {
                ...state,
                activeNavbarBg: action.payload
            };
        case SIDEBAR_BG:
            return {
                ...state,
                activeSidebarBg: action.payload
            };
        case THEME:
            return {
                ...state,
                activeTheme: action.payload
            };
        case DIRECTION:
            return {
                ...state,
                activeDir: action.payload
            };
        case SIDEBAR_POSITION:
            return {
                ...state,
                activeSidebarPos: action.payload
            };
        case HEADER_POSITION:
            return {
                ...state,
                activeHeaderPos: action.payload
            };
        case LAYOUT:
            return {
                ...state,
                activeLayout: action.payload
            };
        case SIDEBAR_TYPE:
            return {
                ...state,
                activeSidebarType: action.payload
            };
        default:
            return state;
    }
};
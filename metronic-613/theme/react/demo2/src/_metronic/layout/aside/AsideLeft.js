import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import { withRouter } from "react-router-dom";
import { removeCSSClass } from "../../utils/utils";
import MenuList from "./components/MenuList";
import PerfectScrollbar from "react-perfect-scrollbar";

import * as builder from "../../ducks/builder";
import KTMenu from "../../_assets/js/menu";
import KTOffcanvas from "../../_assets/js/offcanvas";

class AsideLeft extends React.Component {
  asideOffCanvasRef = React.createRef();
  asideMenuRef = React.createRef();

  insideTm;
  outsideTm;

  componentDidMount() {
    // eslint-disable-next-line
    const ktoffConvas = new KTOffcanvas(
      this.asideOffCanvasRef.current,
      this.props.menuCanvasOptions
    );
    this.initMenu(); // By ID

    const options = this.setupMenuOptions();
    const ktMenu = new KTMenu(this.asideMenuRef.current, options); // eslint-disable-line
  }

  initMenu() {
    const { config } = this.props;

    if (
      objectPath.get(config, "aside.menu.dropdown") !== true &&
      objectPath.get(config, "aside.self.fixed")
    ) {
      this.asideMenuRef.current.setAttribute("data-ktmenu-scroll", "1");
    }

    if (objectPath.get(config, "aside.menu.dropdown")) {
      this.asideMenuRef.current.setAttribute("data-ktmenu-dropdown", "1");
      this.asideMenuRef.current.setAttribute(
        "data-ktmenu-dropdown-timeout",
        objectPath.get(config, "aside.menu.submenu.dropdown.hover-timeout")
      );
    }
  }

  setupMenuOptions() {
    let menuOptions = {
      // vertical scroll
      scroll: null,
      // submenu setup
      submenu: {
        desktop: {
          // by default the menu mode set to accordion in desktop mode
          default: "dropdown"
        },
        tablet: "accordion", // menu set to accordion in tablet mode
        mobile: "accordion" // menu set to accordion in mobile mode
      },
      // accordion setup
      accordion: {
        expandAll: false // allow having multiple expanded accordions in the menu
      }
    };

    // init aside menu
    let menuDesktopMode = "accordion";
    if (
      this.asideMenuRef.current.getAttribute("data-ktmenu-dropdown") === "1"
    ) {
      menuDesktopMode = "dropdown";
    }

    if (typeof objectPath.get(menuOptions, "submenu.desktop") === "object") {
      menuOptions.submenu.desktop.default = menuDesktopMode;
    }

    return menuOptions;
  }

  get currentUrl() {
    return this.props.location.pathname.split(/[?#]/)[0];
  }

  /**
   * Use for fixed left aside menu, to show menu on mouseenter event.
   * @param e Event
   */
  mouseEnter = e => {
    // check if the left aside menu is fixed
    if (document.body.classList.contains("kt-aside--fixed")) {
      if (this.outsideTm) {
        clearTimeout(this.outsideTm);
        this.outsideTm = null;
      }

      this.insideTm = setTimeout(() => {
        // if the left aside menu is minimized
        if (
          document.body.classList.contains("kt-aside--minimize") &&
          // eslint-disable-next-line no-undef
          KTUtil.isInResponsiveRange("desktop")
        ) {
          removeCSSClass(document.body, "kt-aside--minimize");
          removeCSSClass(document.body, "kt-aside--minimize");
          removeCSSClass(document.body, "kt-aside--minimize-hover");
        }
      }, 50);
    }
  };

  /**
   * Use for fixed left aside menu, to show menu on mouseenter event.
   * @param e Event
   */
  mouseLeave = e => {
    if (document.body.classList.contains("kt-aside--fixed")) {
      if (this.insideTm) {
        clearTimeout(this.insideTm);
        this.insideTm = null;
      }

      this.outsideTm = setTimeout(() => {
        // if the left aside menu is expand
        /* eslint-disable-next-line  */
        if (
          document.body.classList.contains("kt-aside--minimize-hover") &&
          // eslint-disable-next-line no-undef
          KTUtil.isInResponsiveRange("desktop")
        ) {
          // hide back the left aside menu
          document.body.classList.add("kt-aside--minimize");

          removeCSSClass(document.body, "kt-aside--minimize-hover");
        }
      }, 100);
    }
  };

  render() {
    const perfectScrollbarOptions = {
      wheelPropagation: false,
      wheelSpeed: 2
    };
    return (
      <>
        <button className="kt-aside-close" id="kt_aside_close_btn">
          <i className="la la-close" />
        </button>
        <div
          ref={this.asideOffCanvasRef}
          className="kt-aside kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
          id="kt_aside"
        >
          <div
            className="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid"
            id="kt_aside_menu_wrapper"
          >
            <PerfectScrollbar options={perfectScrollbarOptions}>
              <div
                ref={this.asideMenuRef}
                style={{ maxHeight: "90vh", position: "relative" }}
                id="kt_aside_menu"
                className={`kt-aside-menu ${this.props.asideClassesFromConfig}`}
                data-ktmenu-vertical="1"
                onMouseEnter={this.mouseEnter}
                onMouseLeave={this.mouseLeave}
              >
                <ul className={`kt-menu__nav ${this.props.ulClasses}`}>
                  <MenuList
                    currentUrl={this.currentUrl}
                    menuConfig={this.props.menuConfig}
                    layoutCongif={this.props.config}
                  />
                </ul>
              </div>
            </PerfectScrollbar>
          </div>
        </div>
      </>
    );
  }
}

const mapStateToProps = store => ({
  config: store.builder.layoutConfig,
  menuConfig: store.builder.menuConfig,
  ulClasses: builder.selectors.getClasses(store, {
    path: "aside_menu_nav",
    toString: true
  }),
  asideClassesFromConfig: builder.selectors.getClasses(store, {
    path: "aside_menu",
    toString: true
  }),
  menuCanvasOptions: {
    baseClass: "kt-aside",
    overlay: true,
    closeBy: "kt_aside_close_btn",
    toggleBy: {
      target: "kt_aside_mobile_toggler",
      state: "kt-header-mobile__toolbar-toggler--active"
    }
  }
});
export default withRouter(connect(mapStateToProps)(AsideLeft));

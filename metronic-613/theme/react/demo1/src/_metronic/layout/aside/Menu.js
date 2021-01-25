import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import { Link, withRouter } from "react-router-dom";
import clsx from "clsx";
import { removeCSSClass } from "../../utils/utils";
import * as builder from "../../ducks/builder";
import MenuList from "./MenuList";
import KTMenu from "../../_assets/js/menu";
import KTUtil from "../../_assets/js/util";



class AsideLeft extends React.Component {
  asideMenuRef = React.createRef();

  insideTm;
  outsideTm;

  asideMenuAttr = this.props.htmlClassService.attributes.aside_menu;

  componentDidMount() {
    this.initMenu(); // By ID

    const options = this.setupMenuOptions();
    const ktMenu = new KTMenu(this.asideMenuRef.current, options); // eslint-disable-line
  }

  initMenu() {
    const { config } = this.props;
    if (
      objectPath.get(config, "aside.menu.dropdown") !== "true" &&
      objectPath.get(config, "aside.self.fixed")
    ) {
      this.asideMenuRef.current.setAttribute("data-ktmenu-scroll", "1");
    }

    if (objectPath.get(config, "aside.menu.dropdown") === "true") {
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
    const dataKtmenuDropdown = this.asideMenuRef.current.getAttribute("data-ktmenu-dropdown");
    if (dataKtmenuDropdown === "1") {
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
          document.body.classList.add("kt-aside--minimize-hover");
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
        const kUtilIsResponsiveRange = KTUtil.isInResponsiveRange("desktop");
        const hasMinimizeHover = document.body.classList.contains(
          "kt-aside--minimize-hover"
        );
        if (
          hasMinimizeHover &&
          // eslint-disable-next-line no-undef
          kUtilIsResponsiveRange
        ) {
          // hide back the left aside menu
          removeCSSClass(document.body, "kt-aside--minimize-hover");
          document.body.classList.add("kt-aside--minimize");
        }
      }, 100);
    }
  };

  render() {
    const {
      ulClasses,
      menuConfig,
      layoutConfig,
      asideClassesFromConfig,
      location: { pathname }
    } = this.props;

    return (
      <>
        <div
          id="kt_aside_menu"
          ref={this.asideMenuRef}
          style={{ maxHeight: "90vh", position: "relative" }}
          onMouseEnter={this.mouseEnter}
          onMouseLeave={this.mouseLeave}
          data-ktmenu-vertical="1"
          className={clsx("kt-aside-menu", asideClassesFromConfig)}
          {...this.asideMenuAttr}
        >
          {this.props.disableAsideSelfDisplay && (
            <div className="kt-header-logo">
              <Link to="">
                <img alt="logo" src={this.props.headerLogo} />
              </Link>
            </div>
          )}
          <ul className={clsx("kt-menu__nav", ulClasses)}>
            <MenuList
              currentUrl={pathname}
              menuConfig={menuConfig}
              layoutConfig={layoutConfig}
            />
          </ul>
        </div>
      </>
    );
  }
}

const mapStateToProps = store => ({
  menuConfig: store.builder.menuConfig,
  layoutConfig: store.builder.layoutConfig,
  headerLogo: builder.selectors.getLogo(store),
  disableAsideSelfDisplay:
    builder.selectors.getConfig(store, "aside.self.display") === false,

  ulClasses: builder.selectors.getClasses(store, {
    path: "aside_menu_nav",
    toString: true
  }),

  asideClassesFromConfig: builder.selectors.getClasses(store, {
    path: "aside_menu",
    toString: true
  })
});

export default withRouter(connect(mapStateToProps)(AsideLeft));

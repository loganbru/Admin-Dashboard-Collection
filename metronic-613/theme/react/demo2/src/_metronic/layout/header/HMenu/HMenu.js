import React from "react";
import { connect } from "react-redux";
import { withRouter } from "react-router-dom";
import objectPath from "object-path";
import HMenuItem from "./HMenuItem";
import * as builder from "../../../ducks/builder";
import KTMenu from "../../../_assets/js/menu";
import KTOffcanvas from "../../../_assets/js/offcanvas";
import SearchDropdown from "../../../../app/partials/layout/SearchDropdown";

const offcanvasOptions = {
    overlay: true,
    baseClass: "kt-header-menu-wrapper",
    closeBy: "kt_header_menu_mobile_close_btn",
    toggleBy: {
        target: "kt_header_mobile_toggler",
        state: "kt-header-mobile__toolbar-toggler--active"
    }
};

class HMenu extends React.Component {
    offCanvasCommonRef = React.createRef();
    ktMenuCommonRef = React.createRef();

    get currentUrl() {
        return this.props.location.pathname.split(/[?#]/)[0];
    }

    componentDidMount() {
        // Canvas
        this.initOffCanvas();
        // Menu
        this.initKTMenu();
    }

    initOffCanvas = () => {
        // eslint-disable-next-line no-undef
        new KTOffcanvas(this.offCanvasCommonRef.current, offcanvasOptions);
    };

    initKTMenu = () => {
        let menuOptions = {
            submenu: {
                desktop: "dropdown",
                tablet: "accordion",
                mobile: "accordion"
            },
            accordion: {
                slideSpeed: 200, // accordion toggle slide speed in milliseconds
                expandAll: false // allow having multiple expanded accordions in the menu
            },
            dropdown: {
                timeout: 50
            }
        };

        let menuDesktopMode = "accordion";
        if (
            this.ktMenuCommonRef.current.getAttribute("data-ktmenu-dropdown") === "1"
        ) {
            menuDesktopMode = "dropdown";
        }

        if (typeof objectPath.get(menuOptions, "submenu.desktop") === "object") {
            menuOptions.submenu.desktop = {
                default: menuDesktopMode
            };
        }

        // eslint-disable-next-line no-undef
        new KTMenu(this.ktMenuCommonRef.current, menuOptions);
    };

    render() {
        const {
            ktMenuClasses,
            ulClasses,
            rootArrowEnabled
        } = this.props;
        const items = this.props.menuConfig.header.items;
        return (
            <>
                <button
                    className="kt-header-menu-wrapper-close"
                    id="kt_header_menu_mobile_close_btn"
                >
                    <i className="la la-close" />
                </button>

                <div
                    className="kt-header-menu-wrapper"
                    id="kt_header_menu_wrapper"
                    ref={this.offCanvasCommonRef}
                >
                    <div
                        id="kt_header_menu"
                        className={`kt-header-menu kt-header-menu-mobile ${ktMenuClasses}`}
                        ref={this.ktMenuCommonRef}
                    >
                        <ul className={`kt-menu__nav ${ulClasses}`}>
                            {items.map((item, index) => {
                                return (
                                    <React.Fragment key={`hmenuList${index}`}>
                                        {item.title && (
                                            <HMenuItem
                                                item={item}
                                                currentUrl={this.currentUrl}
                                                rootArrowEnabled={rootArrowEnabled}
                                            />
                                        )}
                                    </React.Fragment>
                                );
                            })}
                        </ul>
                    </div>
                    <div className="kt-header-toolbar">
                        <SearchDropdown useSVG="false" />
                    </div>
                </div>
            </>
        );
    }
}

const mapStateToProps = store => ({
    config: store.builder.layoutConfig,
    menuConfig: store.builder.menuConfig,
    ktMenuClasses: builder.selectors.getClasses(store, {
        path: "header_menu",
        toString: true
    }),
    rootArrowEnabled: builder.selectors.getConfig(
        store,
        "header.menu.self.root-arrow"
    ),
    headerSelfSkin: builder.selectors.getConfig(store, "header.self.skin"),
    ulClasses: builder.selectors.getClasses(store, {
        path: "header_menu_nav",
        toString: true
    }),
    disabledAsideSelfDisplay:
        objectPath.get(store.builder.layoutConfig, "aside.self.display") === false
});

export default withRouter(connect(mapStateToProps)(HMenu));

/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import objectPath from "object-path";
import clsx from "clsx";
import MenuItemInner from "./HMenuItemInner";
import HMenuColumn from "./HMenuColumn";
import { Link } from "react-router-dom";

export default class HMenuItem extends React.Component {
  /**
   * Returns Attribute SubMenu Toggle
   * @param item: any
   */
  getItemAttrSubmenuToggle = item => {
    const toggleEvent = objectPath.get(item, "toggle");
    if (toggleEvent === "click") {
      return "click";
    }

    if (objectPath.get(item, "submenu.type") === "tabs") {
      return "tabs";
    }

    return "hover";
  };

  /**
   * Check Menu is active
   * @param item: any
   */
  isMenuItemIsActive = item => {
    if (item.submenu) {
      return this.isMenuRootItemIsActive(item);
    }

    if (!item.page) {
      return false;
    }

    return this.props.currentUrl.indexOf(item.page) !== -1;
  };

  /**
   * Check Menu Root Item is active
   * @param item: any
   */
  isMenuRootItemIsActive = item => {
    if (item.submenu && !item.submenu.type) {
      for (const _subItem of item.submenu) {
        const isActive = this.isMenuItemIsActive(_subItem);
        if (isActive) {
          return true;
        }
      }
      return false;
    }

    if (item.submenu && item.submenu.columns) {
      for (const _column of item.submenu.columns) {
        for (const _subItem of _column.items)
        {
          const isActive = this.isMenuItemIsActive(_subItem);
          if (isActive) {
            return true;
          }
        }
      }
      return false;
    }

    return false;
  };

  /**
   * Return Css Class Name
   * @param item: any
   */
  getItemCssClasses = item => {
    let classes = "kt-menu__item";

    if (objectPath.get(item, "submenu")) {
      classes += " kt-menu__item--submenu";
    }

    const isActive = this.isMenuItemIsActive(item);
    if (!item.submenu && isActive) {
      classes += " kt-menu__item--active kt-menu__item--here";
    }

    if (item.submenu && isActive) {
      classes += " kt-menu__item--open kt-menu__item--here";
    }

    if (objectPath.get(item, "resizer")) {
      classes += " kt-menu__item--resize";
    }

    const menuType = objectPath.get(item, "submenu.type") || "classic";
    if (
        (objectPath.get(item, "root") && menuType === "classic") ||
        parseInt(objectPath.get(item, "submenu.width"), 10) > 0
    ) {
      classes += " kt-menu__item--rel";
    }

    const customClass = objectPath.get(item, "custom-class");
    if (customClass) {
      classes += " " + customClass;
    }

    if (objectPath.get(item, "icon-only")) {
      classes += " kt-menu__item--icon-only";
    }

    return classes;
  };

  /**
   * Returns Submenu CSS Class Name
   * @param item: any
   */
  getItemMenuSubmenuClass = item => {
    let classes = "";

    const alignment = objectPath.get(item, "alignment") || "right";

    if (alignment) {
      classes += " kt-menu__submenu--" + alignment;
    }

    const type = objectPath.get(item, "type") || "classic";
    if (type === "classic") {
      classes += " kt-menu__submenu--classic";
    }
    if (type === "tabs") {
      classes += " kt-menu__submenu--tabs";
    }
    if (type === "mega") {
      if (objectPath.get(item, "width")) {
        classes += " kt-menu__submenu--fixed";
      }
    }

    if (objectPath.get(item, "pull")) {
      classes += " kt-menu__submenu--pull";
    }

    return classes;
  };

  render() {
    const { item, parentItem, currentUrl, rootArrowEnabled } = this.props;
    return (
        <li
            className={this.getItemCssClasses(item)}
            aria-haspopup="true"
            data-ktmenu-submenu-toggle={this.getItemAttrSubmenuToggle(item)}
            data-ktmenu-submenu-mode={item.mode}
            data-ktmenu-dropdown-toggle-class={item["dropdown-toggle-class"]}
        >
          {/* if item has submenu */}
          {item.submenu && (
              <a
                  className={`kt-menu__link ${clsx({
                    "kt-menu__toggle": item.root || item.submenu
                  })}`}
              >
                <MenuItemInner
                    item={item}
                    parentItem={parentItem}
                    currentUrl={currentUrl}
                />
                {rootArrowEnabled && (
                    <>
                      {item.submenu && item.root && (
                          <>
                            <i className="kt-menu__hor-arrow la la-angle-down" />
                            <i className="kt-menu__ver-arrow la la-angle-right" />
                          </>
                      )}
                    </>
                )}

                {item.submenu && !item.root && (
                    <>
                      <i className="kt-menu__hor-arrow la la-angle-right" />
                      <i className="kt-menu__ver-arrow la la-angle-right" />
                    </>
                )}
              </a>
          )}

          {/* if item hasn't submenu */}
          {!item.submenu && (
              <Link to={`/${item.page || ""}`} className="kt-menu__link">
                <MenuItemInner
                    item={item}
                    parentItem={parentItem}
                    currentUrl={currentUrl}
                />
              </Link>
          )}

          {/* if menu item has submenu child then recursively call new menu item component */}
          {item.submenu && (
              <div
                  className={`kt-menu__submenu ${this.getItemMenuSubmenuClass(item)}`}
                  style={{ width: item.submenu.width }}
              >
            <span
                className={`kt-menu__arrow ${clsx({
                  "kt-menu__arrow--adjust": item.root
                })}`}
            />

                {item.submenu && item.submenu.length && (
                    <ul className="kt-menu__subnav">
                      {item.submenu.map((child, index) => {
                        return (
                            <React.Fragment key={`hmenuListInner${index}`}>
                              <HMenuItem
                                  item={child}
                                  parentItem={item}
                                  currentUrl={currentUrl}
                              />
                            </React.Fragment>
                        );
                      })}
                    </ul>
                )}

                {item.submenu.items && item.submenu.items.length && (
                    <ul className="kt-menu__subnav">
                      {item.submenu.items.map((child, index) => {
                        return (
                            <React.Fragment key={`hmenuListInner2${index}`}>
                              <HMenuItem
                                  item={child}
                                  parentItem={item}
                                  currentUrl={currentUrl}
                              />
                            </React.Fragment>
                        );
                      })}
                    </ul>
                )}

                {item.submenu.type === "mega" &&
                (item.submenu.columns && item.submenu.columns.length) && (
                    <div className="kt-menu__subnav">
                      <ul className="kt-menu__content">
                        {item.submenu.columns.map((child, index) => {
                          return (
                              <React.Fragment key={`hmenuColumnInner${index}`}>
                                <HMenuColumn
                                    item={child}
                                    parentItem={item}
                                    currentUrl={currentUrl}
                                />
                              </React.Fragment>
                          );
                        })}
                      </ul>
                    </div>
                )}
              </div>
          )}
        </li>
    );
  }
}

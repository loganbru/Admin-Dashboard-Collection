import React from "react";
import objectPath from "object-path";
import { Link } from "react-router-dom";
import MenuItemText from "./MenuItemText";
import MenuSubmenu from "./MenuSubmenu";

export default class MenuItem extends React.Component {
  isMenuItemIsActive = item => {
    if (item.submenu) {
      return this.isMenuRootItemIsActive(item);
    }

    if (!item.page) {
      return false;
    }

    return this.props.currentUrl.indexOf(item.page) !== -1;
  };

  isMenuRootItemIsActive = item => {
    let result = false;
    for (const subItem of item.submenu) {
      result = this.isMenuItemIsActive(subItem);
      if (result) {
        return true;
      }
    }
    return false;
  };

  getItemAttrSubmenuToggle = item => {
    let toggle = "hover";
    if (objectPath.get(item, "toggle") === "click") {
      toggle = "click";
    } else if (objectPath.get(item, "submenu.type") === "tabs") {
      toggle = "tabs";
    } else {
      // submenu toggle default to 'hover'
    }

    return toggle;
  };

  getItemCssClasses = item => {
    let classes = "kt-menu__item";

    if (objectPath.get(item, "submenu")) {
      classes += " kt-menu__item--submenu";
    }

    if (!item.submenu && this.isMenuItemIsActive(item)) {
      classes += " kt-menu__item--active kt-menu__item--here";
    }

    if (item.submenu && this.isMenuItemIsActive(item)) {
      classes += " kt-menu__item--open kt-menu__item--here";
    }

    // custom class for menu item
    if (objectPath.has(item, "custom-class")) {
      classes += " " + item["custom-class"];
    }

    if (objectPath.get(item, "icon-only")) {
      classes += " kt-menu__item--icon-only";
    }

    return classes;
  };

  render() {
    // TODO: dataPlacement="right"
    return (
      <li
        aria-haspopup="true"
        data-ktmenu-submenu-toggle={this.getItemAttrSubmenuToggle(
          this.props.item
        )}
        data-ktmenu-submenu-mode={this.props.item.mode}
        data-ktmenu-dropdown-toggle-class={
          this.props.item["dropdown-toggle-class"]
        }
        className={` ${this.getItemCssClasses(this.props.item)}`}
        data-placement="right"
      >
        {!this.props.item.submenu && (
          <Link
            to={this.props.item.page}
            className="kt-menu__link kt-menu__toggle"
          >
            <MenuItemText
              item={this.props.item}
              parentItem={this.props.parentItem}
              currentUrl={this.props.currentUrl}
            />
          </Link>
        )}

        {this.props.item.submenu && (
          // eslint-disable-next-line jsx-a11y/anchor-is-valid
          <a className="kt-menu__link kt-menu__toggle">
            <MenuItemText
              item={this.props.item}
              parentItem={this.props.parentItem}
              currentUrl={this.props.currentUrl}
            />
          </a>
        )}

        {this.props.item.submenu && (
          <div className="kt-menu__submenu">
            <span className="kt-menu__arrow"></span>

            {this.props.item["custom-class"] ===
              "kt-menu__item--submenu-fullheight" && (
              <div className="kt-menu__wrapper">
                <MenuSubmenu
                  item={this.props.item}
                  parentItem={this.props.item}
                  currentUrl={this.props.currentUrl}
                />
              </div>
            )}

            {this.props.item["custom-class"] !==
              "kt-menu__item--submenu-fullheight" && (
              <MenuSubmenu
                item={this.props.item}
                parentItem={this.props.item}
                currentUrl={this.props.currentUrl}
              />
            )}
          </div>
        )}
      </li>
    );
  }
}

import React from "react";

import MenuSection from "./MenuSection";
import MenuItemSeparator from "./MenuItemSeparator";
import MenuItem from "./MenuItem";

export default class MenuSubmenu extends React.Component {
  render() {
    return (
      <ul className="kt-menu__subnav">
        {this.props.item.submenu.map((child, index) => (
          <React.Fragment key={`submenu${index}`}>
            {child.section && (
              <MenuSection
                item={child}
                parentItem={this.props.item}
                currentUrl={this.props.currentUrl}
              />
            )}

            {child.separator && (
              <MenuItemSeparator
                item={child}
                parentItem={this.props.item}
                currentUrl={this.props.currentUrl}
              />
            )}

            {child.title && (
              <MenuItem
                item={child}
                parentItem={this.props.item}
                currentUrl={this.props.currentUrl}
              />
            )}
          </React.Fragment>
        ))}
      </ul>
    );
  }
}

import React from "react";
import MenuSection from "./MenuSection";
import MenuItemSeparator from "./MenuItemSeparator";
import MenuItem from "./MenuItem";

export default class MenuSubmenu extends React.Component {
  render() {
    const { item, currentUrl, layoutConfig } = this.props;

    return (
      <ul className="kt-menu__subnav">
        {item.submenu.map((child, index) => (
          <React.Fragment key={index}>
            {child.section && (
              <MenuSection
                item={child}
                parentItem={item}
                currentUrl={currentUrl}
              />
            )}

            {child.separator && (
              <MenuItemSeparator
                item={child}
                parentItem={item}
                currentUrl={currentUrl}
              />
            )}

            {child.title && (
              <MenuItem
                item={child}
                parentItem={item}
                currentUrl={currentUrl}
                layoutConfig={layoutConfig}
              />
            )}
          </React.Fragment>
        ))}
      </ul>
    );
  }
}

import React from "react";
import MenuSection from "./MenuSection";
import MenuItemSeparator from "./MenuItemSeparator";
import MenuItem from "./MenuItem";

export default class MenuList extends React.Component {
  render() {
    const items = this.props.menuConfig.aside.items;
    return items.map((child, index) => {
      return (
        <React.Fragment key={`menuList${index}`}>
          {child.section && <MenuSection item={child} />}
          {child.separator && <MenuItemSeparator item={child} />}
          {child.title && (
            <MenuItem currentUrl={this.props.currentUrl} item={child} />
          )}
        </React.Fragment>
      );
    });
  }
}

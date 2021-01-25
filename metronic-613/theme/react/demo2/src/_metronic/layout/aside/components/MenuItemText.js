import React from "react";

export default class MenuList extends React.Component {
  render() {
    return (
      <>
        {this.props.item.icon && (
          <i className={`kt-menu__link-icon ${this.props.item.icon}`} />
        )}

        {this.props.parentItem && this.props.parentItem.bullet === "dot" && (
          <i className="kt-menu__link-bullet kt-menu__link-bullet--dot">
            <span />
          </i>
        )}

        {this.props.parentItem && this.props.parentItem.bullet === "line" && (
          <i className="kt-menu__link-bullet kt-menu__link-bullet--line">
            <span />
          </i>
        )}

        <span className="kt-menu__link-text" style={{ whiteSpace: "nowrap" }}>
          {this.props.item.title}
        </span>

        {this.props.item.badge && (
          <span className="kt-menu__link-badge">
            <span className={`kt-badge ${this.props.item.badge.type}`}>
              {this.props.item.badge.value}
            </span>
          </span>
        )}

        {this.props.item.submenu && (
          <i className="kt-menu__ver-arrow la la-angle-right" />
        )}
      </>
    );
  }
}

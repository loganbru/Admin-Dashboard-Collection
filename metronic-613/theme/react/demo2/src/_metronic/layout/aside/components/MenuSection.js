import React from "react";

export default class MenuSection extends React.Component {
  render() {
    return (
      <li className="kt-menu__section">
        <h4 className="kt-menu__section-text">{this.props.item.section}</h4>
        <i className="kt-menu__section-icon flaticon-more-v2" />
      </li>
    );
  }
}

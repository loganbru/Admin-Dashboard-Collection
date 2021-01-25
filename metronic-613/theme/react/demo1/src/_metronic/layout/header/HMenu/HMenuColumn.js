import React from "react";
import HMenuItem from "./HMenuItem";

export default class HMenuColumn extends React.Component {
  render() {
    const { item, currentUrl } = this.props;
    return (
      <li className="kt-menu__item">
        {item.heading && (
          <h3 className="kt-menu__heading kt-menu__toggle">
            <span className="kt-menu__link-text">{item.heading.title}</span>
            <i className="kt-menu__ver-arrow la la-angle-right" />
          </h3>
        )}
        {item.items && item.items.length && (
          <ul className="kt-menu__inner">
            {item.items.map((child, index) => {
              return (
                <React.Fragment key={`hmenuColumnInnerColumn${index}`}>
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
      </li>
    );
  }
}

/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import Dropdown from "react-bootstrap/Dropdown";

export default function PortletHeaderDropdown() {
  return (
    <Dropdown className="kt-portlet__head-toolbar" drop="down" alignRight>
      <Dropdown.Toggle
        variant="transparent"
        className="btn btn-label-success btn-sm btn-bold dropdown-toggle"
        id="dropdown-toggle-top"
      >
        Export
      </Dropdown.Toggle>
      <Dropdown.Menu className="dropdown-menu-fit dropdown-menu-right">
        <ul className="kt-nav">
          <li className="kt-nav__item">
            <a href="#" className="kt-nav__link">
              <i className="kt-nav__link-icon flaticon2-line-chart" />
              <span className="kt-nav__link-text">Reports</span>
            </a>
          </li>
          <li className="kt-nav__item">
            <a href="#" className="kt-nav__link">
              <i className="kt-nav__link-icon flaticon2-send" />
              <span className="kt-nav__link-text">Messages</span>
            </a>
          </li>
          <li className="kt-nav__item">
            <a href="#" className="kt-nav__link">
              <i className="kt-nav__link-icon flaticon2-pie-chart-1" />
              <span className="kt-nav__link-text">Charts</span>
            </a>
          </li>
          <li className="kt-nav__item">
            <a href="#" className="kt-nav__link">
              <i className="kt-nav__link-icon flaticon2-avatar" />
              <span className="kt-nav__link-text">Members</span>
            </a>
          </li>
          <li className="kt-nav__item">
            <a href="#" className="kt-nav__link">
              <i className="kt-nav__link-icon flaticon2-settings" />
              <span className="kt-nav__link-text">Settings</span>
            </a>
          </li>
        </ul>
      </Dropdown.Menu>
    </Dropdown>
  );
}

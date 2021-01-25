/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { OverlayTrigger, Tooltip } from "react-bootstrap";
import Dropdown from "react-bootstrap/Dropdown";
import { ReactComponent as FilePlusIcon } from "../../assets/layout-svg-icons/File-plus.svg";

class QuickActionsDropdownToggle extends React.Component {
  constructor(props, context) {
    super(props, context);
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick(e) {
    e.preventDefault();
    this.props.onClick(e);
  }

  render() {
    return (
      <a
        href="#"
        onClick={this.handleClick}
        id="kt_dashboard_daterangepicker"
        className="btn btn-icon"
      >
        {" "}
        <FilePlusIcon className="kt-svg-icon kt-svg-icon--success kt-svg-icon--md" />
      </a>
    );
  }
}

export class QuickActions extends React.Component {
  render() {
    return (
      <>
        <OverlayTrigger
          placement="left"
          overlay={<Tooltip id="quick-actions-tooltip">Quick actions</Tooltip>}
        >
          <Dropdown className="dropdown-inline" drop="down" alignRight>
            <Dropdown.Toggle
              as={QuickActionsDropdownToggle}
              id="dropdown-toggle-quick-actions-subheader"
            />

            <Dropdown.Menu className="dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
              <ul className="kt-nav">
                <li className="kt-nav__head">
                  Add anything or jump to:
                  <i
                    className="flaticon2-information"
                    data-toggle="kt-tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="Click to learn more..."
                  />
                </li>
                <li className="kt-nav__separator" />
                <li className="kt-nav__item">
                  <a href="#" className="kt-nav__link">
                    <i className="kt-nav__link-icon flaticon2-drop" />
                    <span className="kt-nav__link-text">Order</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a href="#" className="kt-nav__link">
                    <i className="kt-nav__link-icon flaticon2-calendar-8" />
                    <span className="kt-nav__link-text">Ticket</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a href="#" className="kt-nav__link">
                    <i className="kt-nav__link-icon flaticon2-telegram-logo" />
                    <span className="kt-nav__link-text">Goal</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a href="#" className="kt-nav__link">
                    <i className="kt-nav__link-icon flaticon2-new-email" />
                    <span className="kt-nav__link-text">Support Case</span>
                    <span className="kt-nav__link-badge">
                      <span className="kt-badge kt-badge--brand kt-badge--rounded">
                        5
                      </span>
                    </span>
                  </a>
                </li>
                <li className="kt-nav__separator" />
                <li className="kt-nav__foot">
                  <a className="btn btn-label-brand btn-bold btn-sm" href="#">
                    Upgrade plan
                  </a>
                  <a
                    className="btn btn-clean btn-bold btn-sm kt-hidden"
                    href="#"
                    data-toggle="kt-tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="Click to learn more..."
                  >
                    Learn more
                  </a>
                </li>
              </ul>
            </Dropdown.Menu>
          </Dropdown>
        </OverlayTrigger>
      </>
    );
  }
}

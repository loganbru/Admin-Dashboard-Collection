/* eslint-disable react/jsx-no-target-blank */
/* eslint-disable no-script-url */
/* eslint-disable jsx-a11y/anchor-is-valid */
import React from "react";
import { Link } from "react-router-dom";
import { connect } from "react-redux";
import Dropdown from "react-bootstrap/Dropdown";
import * as builder from "../../ducks/builder";
import { toAbsoluteUrl } from "../../utils/utils";

class Brand extends React.Component {
  render() {
    const { brandClasses } = this.props;
    return (
      <div
        className={`kt-header__brand ${brandClasses} kt-grid__item`}
        id="kt_header_brand"
      >
        <div className="kt-header__brand-logo">
          <Link to="/">
            <img
              className="kt-header__brand-logo-default"
              alt="logo"
              src={toAbsoluteUrl("/media/logos/logo-2.png")}
            />

            <img
              className="kt-header__brand-logo-sticky"
              alt="logo"
              src={toAbsoluteUrl("/media/logos/logo-2-sm.png")}
            />
          </Link>
        </div>

        <div className="kt-header__brand-nav">
          <Dropdown drop="down">
            <Dropdown.Toggle
              variant="transparent"
              className="btn btn-default dropdown-toggle"
              id="dropdown-toggle-top"
            >
              SAAS Customers
            </Dropdown.Toggle>
            <Dropdown.Menu className="dropdown-menu-md">
              <ul className="kt-nav kt-nav--bold kt-nav--md-space">
                <li className="kt-nav__item">
                  <a className="kt-nav__link active" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon2-user" />
                    </span>
                    <span className="kt-nav__link-text">Human Resources</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a className="kt-nav__link" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon-feed" />
                    </span>
                    <span className="kt-nav__link-text">
                      Customer Relationship
                    </span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a className="kt-nav__link" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon2-settings" />
                    </span>
                    <span className="kt-nav__link-text">Order Processing</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a className="kt-nav__link" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon2-chart2" />
                    </span>
                    <span className="kt-nav__link-text">Accounting</span>
                  </a>
                </li>
                <li className="kt-nav__separator" />
                <li className="kt-nav__item">
                  <a className="kt-nav__link" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon-security" />
                    </span>
                    <span className="kt-nav__link-text">Finance</span>
                  </a>
                </li>
                <li className="kt-nav__item">
                  <a className="kt-nav__link" href="#">
                    <span className="kt-nav__link-icon">
                      <i className="flaticon2-cup" />
                    </span>
                    <span className="kt-nav__link-text">Administration</span>
                  </a>
                </li>
              </ul>
            </Dropdown.Menu>
          </Dropdown>
        </div>
      </div>
    );
  }
}

const mapStateToProps = store => {
  return {
    brandClasses: builder.selectors.getClasses(store, {
      path: "brand",
      toString: true
    })
  };
};

export default connect(mapStateToProps)(Brand);

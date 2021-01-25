/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { Nav, Tab, Dropdown } from "react-bootstrap";
import PerfectScrollbar from "react-perfect-scrollbar";
import HeaderDropdownToggle from "../content/CustomDropdowns/HeaderDropdownToggle";
import { ReactComponent as CompilingIcon } from "../../../_metronic/layout/assets/layout-svg-icons/Compiling.svg";

const perfectScrollbarOptions = {
  wheelSpeed: 2,
  wheelPropagation: false
};

export default class UserNotifications extends React.Component {
  state = { key: "Alerts" };

  getHeaderTopBarCssClassList = () => {
    let result = "kt-header__topbar-icon ";
    if (this.props.pulse) {
      result += "kt-pulse kt-pulse--brand ";
    }

    const { iconType } = this.props;
    if (iconType) {
      result += `kt-header__topbar-icon--${iconType}`;
    }

    return result;
  };

  getSvgCssClassList = () => {
    let result = "kt-svg-icon ";
    const { iconType } = this.props;
    if (iconType) {
      result += `kt-svg-icon--${iconType}`;
    }

    return result;
  };

  getHetBackGroundCssClassList = () => {
    let result = "kt-head ";
    if (this.props.skin) {
      result += `kt-head--skin-${this.props.skin} `;
    }

    result += "kt-head--fit-x kt-head--fit-b";
    return result;
  };

  backGroundStyle = () => {
    if (!this.props.bgImage) {
      return "none";
    }

    return "url(" + this.props.bgImage + ")";
  };

  userNotificationsButtonCssClassList = () => {
    let result = "btn ";
    if (this.props.type) {
      result += `btn-${this.props.type} `;
    }

    result += "btn-sm btn-bold btn-font-md";
    return result;
  };

  ulTabsClassList = () => {
    let result = "nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x  ";
    if (this.props.type) {
      result += `nav-tabs-line-${this.props.type} `;
    }

    result += "kt-notification-item-padding-x";
    return result;
  };

  render() {
    // eslint-disable-next-line no-unused-vars
    const { key } = this.state;
    const { useSVG, icon, pulse } = this.props;
    return (
      <Dropdown className="kt-header__topbar-item" drop="down" alignRight>
        <Dropdown.Toggle
          as={HeaderDropdownToggle}
          id="dropdown-toggle-user-notifications"
        >
          <span className={`kt-header__topbar-icon kt-pulse kt-pulse--warning`}>
            {!useSVG && <i className={icon} />}

            {useSVG && (
              <CompilingIcon className="kt-svg-icon kt-svg-icon--warning" />
            )}

            <span className="kt-pulse__ring" hidden={!pulse} />
          </span>
        </Dropdown.Toggle>

        <Dropdown.Menu className="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
          <form>
            {/** Head */}
            <div
              className={this.getHetBackGroundCssClassList()}
              style={{ backgroundImage: this.backGroundStyle() }}
            >
              <h3 className="kt-head__title">
                User Notifications&nbsp;
                <span className={this.userNotificationsButtonCssClassList()}>
                  23 new
                </span>
              </h3>

              <Tab.Container
                defaultActiveKey={key}
                className={this.ulTabsClassList()}
              >
                <Nav
                  className={this.ulTabsClassList()}
                  onSelect={_key => this.setState({ key: _key })}
                >
                  <Nav.Item className="nav-item">
                    <Nav.Link eventKey="Alerts" className="nav-link show">
                      Alerts
                    </Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="Events" className="nav-link show">
                      Events
                    </Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="Logs" className="nav-link show">
                      Logs
                    </Nav.Link>
                  </Nav.Item>
                </Nav>

                <Tab.Content style={{ backgroundColor: "#fff" }}>
                  <Tab.Pane eventKey="Alerts">
                    <PerfectScrollbar
                      options={perfectScrollbarOptions}
                      style={{ maxHeight: "100vh", position: "relative" }}
                    >
                      <div
                        className="kt-notification kt-margin-t-10 kt-margin-b-10"
                        style={{ maxHeight: "40vh", position: "relative" }}
                      >
                        <div
                          className="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                          data-scroll="true"
                          data-height="300"
                          data-mobile-height="200"
                        >
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-line-chart kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New order has been received
                              </div>
                              <div className="kt-notification__item-time">
                                2 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-box-1 kt-font-brand" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer is registered
                              </div>
                              <div className="kt-notification__item-time">
                                3 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-chart2 kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Application has been approved
                              </div>
                              <div className="kt-notification__item-time">
                                3 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-image-file kt-font-warning" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New file has been uploaded
                              </div>
                              <div className="kt-notification__item-time">
                                5 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-bar-chart kt-font-info" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New user feedback received
                              </div>
                              <div className="kt-notification__item-time">
                                8 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-pie-chart-2 kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                System reboot has been successfully completed
                              </div>
                              <div className="kt-notification__item-time">
                                12 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-favourite kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New order has been placed
                              </div>
                              <div className="kt-notification__item-time">
                                15 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item kt-notification__item--read">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-safe kt-font-primary" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Company meeting canceled
                              </div>
                              <div className="kt-notification__item-time">
                                19 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-psd kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New report has been received
                              </div>
                              <div className="kt-notification__item-time">
                                23 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon-download-1 kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Finance report has been generated
                              </div>
                              <div className="kt-notification__item-time">
                                25 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon-security kt-font-warning" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer comment recieved
                              </div>
                              <div className="kt-notification__item-time">
                                2 days ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-pie-chart kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer is registered
                              </div>
                              <div className="kt-notification__item-time">
                                3 days ago
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </PerfectScrollbar>
                  </Tab.Pane>
                  <Tab.Pane eventKey="Events">
                    <PerfectScrollbar
                      options={perfectScrollbarOptions}
                      style={{ maxHeight: "100vh", position: "relative" }}
                    >
                      <div
                        className="kt-notification kt-margin-t-10 kt-margin-b-10"
                        style={{ maxHeight: "40vh", position: "relative" }}
                      >
                        <div
                          className="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                          data-scroll="true"
                          data-height="300"
                          data-mobile-height="200"
                        >
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-psd kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New report has been received
                              </div>
                              <div className="kt-notification__item-time">
                                23 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon-download-1 kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Finance report has been generated
                              </div>
                              <div className="kt-notification__item-time">
                                25 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-line-chart kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New order has been received
                              </div>
                              <div className="kt-notification__item-time">
                                2 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-box-1 kt-font-brand" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer is registered
                              </div>
                              <div className="kt-notification__item-time">
                                3 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-chart2 kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Application has been approved
                              </div>
                              <div className="kt-notification__item-time">
                                3 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-image-file kt-font-warning" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New file has been uploaded
                              </div>
                              <div className="kt-notification__item-time">
                                5 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-bar-chart kt-font-info" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New user feedback received
                              </div>
                              <div className="kt-notification__item-time">
                                8 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-pie-chart-2 kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                System reboot has been successfully completed
                              </div>
                              <div className="kt-notification__item-time">
                                12 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-favourite kt-font-brand" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New order has been placed
                              </div>
                              <div className="kt-notification__item-time">
                                15 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item kt-notification__item--read">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-safe kt-font-primary" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Company meeting canceled
                              </div>
                              <div className="kt-notification__item-time">
                                19 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-psd kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New report has been received
                              </div>
                              <div className="kt-notification__item-time">
                                23 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon-download-1 kt-font-danger" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                Finance report has been generated
                              </div>
                              <div className="kt-notification__item-time">
                                25 hrs ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon-security kt-font-warning" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer comment recieved
                              </div>
                              <div className="kt-notification__item-time">
                                2 days ago
                              </div>
                            </div>
                          </a>
                          <a className="kt-notification__item">
                            <div className="kt-notification__item-icon">
                              <i className="flaticon2-pie-chart kt-font-success" />
                            </div>
                            <div className="kt-notification__item-details">
                              <div className="kt-notification__item-title">
                                New customer is registered
                              </div>
                              <div className="kt-notification__item-time">
                                3 days ago
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </PerfectScrollbar>
                  </Tab.Pane>
                  <Tab.Pane eventKey="Logs">
                    <div
                      className="kt-grid kt-grid--ver"
                      style={{ minHeight: "200px" }}
                    >
                      <div className="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                        <div className="kt-grid__item kt-grid__item--middle kt-align-center">
                          All caught up!
                          <br />
                          No new notifications.
                        </div>
                      </div>
                    </div>
                  </Tab.Pane>
                </Tab.Content>
              </Tab.Container>
            </div>
          </form>
        </Dropdown.Menu>
      </Dropdown>
    );
  }
}

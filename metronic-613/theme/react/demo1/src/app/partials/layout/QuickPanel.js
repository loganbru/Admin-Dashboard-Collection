/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid,no-undef */
import React from "react";
import PerfectScrollbar from "react-perfect-scrollbar";
import { Nav, Tab } from "react-bootstrap";

const perfectScrollbarOptions = {
  wheelSpeed: 2,
  wheelPropagation: false
};

export default class QuickPanel extends React.Component {
  state = { selectedTab: "Notifications" };
  setTab = _tabName => {
    this.setState({ selectedTab: _tabName });
  };

  render() {
    return (
      <div id="kt_quick_panel" className="kt-quick-panel">
        <a
          href="#"
          className="kt-quick-panel__close"
          id="kt_quick_panel_close_btn"
        >
          <i className="flaticon2-delete" />
        </a>
        <Tab.Container defaultActiveKey={this.state.selectedTab}>
          <div className="kt-quick-panel__nav">
            <Nav
              onSelect={this.setTab}
              className="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand kt-notification-item-padding-x"
            >
              <Nav.Item className="nav-item">
                <Nav.Link eventKey="Notifications" className="nav-link show">
                  Notifications
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link eventKey="AuditLogs" className="nav-link show">
                  Audit Logs
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link eventKey="Settings" className="nav-link show">
                  Settings
                </Nav.Link>
              </Nav.Item>
            </Nav>
          </div>
          <div className="kt-quick-panel__content">
            <Tab.Content>
              <Tab.Pane eventKey="Notifications">
                <PerfectScrollbar
                  options={perfectScrollbarOptions}
                  style={{
                    maxHeight: "calc(100vh - 100px)",
                    position: "relative"
                  }}
                >
                  <div className="kt-notification">
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
                      <div className="kt-notification__item-icon">
                        <i className="flaticon2-drop kt-font-info" />
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a
                      href="#"
                      className="kt-notification__item kt-notification__item--read"
                    >
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
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
                    <a href="#" className="kt-notification__item">
                      <div className="kt-notification__item-icon">
                        <i className="flaticon2-pie-chart kt-font-warning" />
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
                </PerfectScrollbar>
              </Tab.Pane>
              <Tab.Pane eventKey="AuditLogs">
                <PerfectScrollbar
                  options={perfectScrollbarOptions}
                  style={{
                    maxHeight: "calc(100vh - 100px)",
                    position: "relative"
                  }}
                >
                  <div className="kt-notification-v2">
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon-bell kt-font-brand" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          5 new user generated report
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Reports based on sales
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon2-box kt-font-danger" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          2 new items submited
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          by Grog John
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon-psd kt-font-brand" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          79 PSD files generated
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Reports based on sales
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon2-supermarket kt-font-warning" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          $2900 worth products sold
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Total 234 items
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon-paper-plane-1 kt-font-success" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          4.5h-avarage response time
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Fostest is Barry
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon2-information kt-font-danger" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          Database server is down
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          10 mins ago
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon2-mail-1 kt-font-brand" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          System report has been generated
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Fostest is Barry
                        </div>
                      </div>
                    </a>
                    <a href="#" className="kt-notification-v2__item">
                      <div className="kt-notification-v2__item-icon">
                        <i className="flaticon2-hangouts-logo kt-font-warning" />
                      </div>
                      <div className="kt-notification-v2__itek-wrapper">
                        <div className="kt-notification-v2__item-title">
                          4.5h-avarage response time
                        </div>
                        <div className="kt-notification-v2__item-desc">
                          Fostest is Barry
                        </div>
                      </div>
                    </a>
                  </div>
                </PerfectScrollbar>
              </Tab.Pane>
              <Tab.Pane eventKey="Settings">
                <PerfectScrollbar
                  options={perfectScrollbarOptions}
                  style={{
                    maxHeight: "calc(100vh - 100px)",
                    position: "relative"
                  }}
                >
                  <div className="kt-quick-panel__content-padding-x">
                    <form className="kt-form">
                      <div className="kt-heading kt-heading--sm kt-heading--space-sm">
                        Customer Care
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Enable Notifications:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--success kt-switch--sm">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_1"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Enable Case Tracking:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--success kt-switch--sm">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_2"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-last form-group-xs row">
                        <label className="col-8 col-form-label">
                          Support Portal:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--success kt-switch--sm">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_2"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="kt-separator kt-separator--space-md kt-separator--border-dashed" />
                      <div className="kt-heading kt-heading--sm kt-heading--space-sm">
                        Reports
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Generate Reports:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--danger">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_3"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Enable Report Export:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--danger">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_3"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-last form-group-xs row">
                        <label className="col-8 col-form-label">
                          Allow Data Collection:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--danger">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_4"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="kt-separator kt-separator--space-md kt-separator--border-dashed" />
                      <div className="kt-heading kt-heading--sm kt-heading--space-sm">
                        Members
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Enable Member singup:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--brand">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_5"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-xs row">
                        <label className="col-8 col-form-label">
                          Allow User Feedbacks:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--brand">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_5"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                      <div className="form-group form-group-last form-group-xs row">
                        <label className="col-8 col-form-label">
                          Enable Customer Portal:
                        </label>
                        <div className="col-4 kt-align-right">
                          <span className="kt-switch kt-switch--sm kt-switch--brand">
                            <label>
                              <input
                                type="checkbox"
                                name="quick_panel_notifications_6"
                              />
                              <span />
                            </label>
                          </span>
                        </div>
                      </div>
                    </form>
                  </div>
                </PerfectScrollbar>
              </Tab.Pane>
            </Tab.Content>
          </div>
        </Tab.Container>
      </div>
    );
  }
}

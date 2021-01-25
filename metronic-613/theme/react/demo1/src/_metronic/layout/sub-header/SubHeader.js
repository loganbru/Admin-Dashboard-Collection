/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import { withRouter } from "react-router-dom";
import { QuickActions } from "./quick-actions/QuickActions";
import { LayoutContextConsumer } from "../LayoutContext";
import { ReactComponent as SortNum1Icon } from "../../../_metronic/layout/assets/layout-svg-icons/SortNum1.svg";

class SubHeader extends React.Component {
  subheaderCssClasses = this.props.htmlClassService.classes.subheader;
  subheaderContainerCssClasses = this.props.htmlClassService.classes
    .subheader_container;

  render() {
    return (
      <div
        id="kt_subheader"
        className={`kt-subheader ${this.subheaderCssClasses} kt-grid__item`}
      >
        <div className={`kt-container ${this.subheaderContainerCssClasses}`}>
          <div className="kt-subheader__main">
            {this.props.subheaderMobileToggle && (
              <button
                className="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left"
                id="kt_subheader_mobile_toggle"
              >
                <span />
              </button>
            )}

            <LayoutContextConsumer>
              {({ subheader: { title } }) => (
                <h3 className="kt-subheader__title">{title}</h3>
              )}
            </LayoutContextConsumer>

            <span className="kt-subheader__separator kt-subheader__separator--v" />
            <span className="kt-subheader__desc">#XRS-45670</span>
            <a
              href="#"
              className="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10"
            >
              Add New
            </a>
          </div>

          <div className="kt-subheader__toolbar">
            <div className="kt-subheader__wrapper">
              <button type="button" className="btn kt-subheader__btn-primary">
                Actions &nbsp;
                <SortNum1Icon className="kt-svg-icon kt-svg-icon--sm" />
              </button>
              <QuickActions />
            </div>
          </div>
        </div>
      </div>
    );
  }
}

const mapStateToProps = store => ({
  config: store.builder.layoutConfig,
  menuConfig: store.builder.menuConfig,
  subheaderMobileToggle: objectPath.get(
    store.builder.layoutConfig,
    "subheader.mobile-toggle"
  )
});

export default withRouter(connect(mapStateToProps)(SubHeader));

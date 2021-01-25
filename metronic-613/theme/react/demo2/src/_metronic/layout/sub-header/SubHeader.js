/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { connect } from "react-redux";
import { withRouter } from "react-router-dom";
import objectPath from "object-path";
import { LayoutContextConsumer } from "../LayoutContext";
import { ReactComponent as SortNum1Icon } from "../../../_metronic/layout/assets/layout-svg-icons/SortNum1.svg";
import { QuickActions } from "./quick-actions/QuickActions";

class SubHeader extends React.Component {

  render() {
    const { htmlClassService } = this.props;
    const subheaderClasses = htmlClassService.classes.subheader.join(" ");
    const subheaderContainerClasses = htmlClassService.classes.subheader_container.join(" ");
    return (
      <>
        <div className={`kt-subheader kt-grid__item ${subheaderClasses}`} id="kt_subheader">
          <div className={`kt-container ${subheaderContainerClasses}`}>
            {/*Subheader Main*/}
            <div className="kt-subheader__main">
              <LayoutContextConsumer>
                {({ subheader: { title } }) => (
                    <h3 className="kt-subheader__title">{title}</h3>
                )}
              </LayoutContextConsumer>
              <span className="kt-subheader__separator kt-subheader__separator--v" />
              <a href="#" className="btn btn-label-primary btn-bold btn-icon-h">
                Add New
              </a>
            </div>

            {/*Subheader Toolbar*/}
            <div className="kt-subheader__toolbar">
              <div className="kt-subheader__wrapper">
                <button type="button" className="btn kt-subheader__btn-primary">
                  Actions &nbsp;
                  <SortNum1Icon className="kt-svg-icon kt-svg-icon--sm" />
                </button>

                <a className="btn kt-subheader__btn-primary btn-icon" href="">
                  <i className="flaticon2-file" />
                </a>

                <a className="btn kt-subheader__btn-primary btn-icon" href="#">
                  <i className="flaticon-download-1" />
                </a>

                <a className="btn kt-subheader__btn-primary btn-icon" href="#">
                  <i className="flaticon2-fax" />
                </a>

                <a className="btn kt-subheader__btn-primary btn-icon" href="#">
                  <i className="flaticon2-settings" />
                </a>

                <QuickActions />
              </div>
            </div>
          </div>
        </div>
      </>
    );
  }
}

const mapStateToProps = store => ({
  config: store.builder.layoutConfig,
  menuConfig: store.builder.menuConfig,
  menuHeaderDisplay: objectPath.get(store.builder.layoutConfig, "header.menu.self.display"),
  layout: objectPath.get(store.builder.layoutConfig, 'subheader.layout'),
  fluid: objectPath.get(store.builder.layoutConfig, 'footer.self.width') === 'fluid',
  clear: objectPath.get(store.builder.layoutConfig, 'subheader.clear'),
  isOpen: false
});

export default withRouter(connect(mapStateToProps)(SubHeader));

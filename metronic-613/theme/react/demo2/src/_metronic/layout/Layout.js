import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import Header from "./header/Header";
import { withRouter } from "react-router-dom";
import HeaderMobile from "./header/HeaderMobile";
import Footer from "./footer/Footer";
import ScrollTop from "../../app/partials/layout/ScrollTop";
import StickyToolbar from "../../app/partials/layout/StickyToolbar";
import HTMLClassService from "./HTMLClassService";
import LayoutConfig from "./LayoutConfig";
import MenuConfig from "./MenuConfig";
import LayoutInitializer from "./LayoutInitializer";
import AsideLeft from "./aside/AsideLeft";
import KtContent from "../../app/partials/layout/KtContent";
import SubHeader from "./sub-header/SubHeader";
import QuickPanel from "../../app/partials/layout/QuickPanel";
import("./assets/Base.scss");

const styles = [];
const htmlClassService = new HTMLClassService();

function Layout({
  children,
  asideDisplay,
  subheaderDisplay,
  selfLayout,
  contentExtended,
  layoutConfig,
  contentContainerClasses,
  contentClasses
}) {
  htmlClassService.setConfig(layoutConfig);
  contentClasses = htmlClassService.classes.content.join(" ");
  contentContainerClasses = htmlClassService.classes.content_container.join(
    " "
  );

  // scroll to top after location changes
  window.scrollTo(0, 0);
  return selfLayout !== "blank" ? (
    <LayoutInitializer
      styles={styles}
      menuConfig={MenuConfig}
      layoutConfig={LayoutConfig}
      htmlClassService={htmlClassService}
    >
      {/* <!-- begin:: Header Mobile --> */}
      <HeaderMobile htmlClassService={htmlClassService} />
      {/* <!-- end:: Header Mobile --> */}

      <div className="kt-grid kt-grid--hor kt-grid--root">
        <div className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
          <div
            className="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper"
            id="kt_wrapper"
          >
            {/* <!-- begin:: Header READY --> */}

            <Header htmlClassService={htmlClassService} />
            {/* <!-- end:: Header --> */}

            {/* <!-- begin:: Content --> */}
            <div
              className="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
              id="kt_body"
            >
              {asideDisplay ? (
                <div
                  className={`kt-container ${contentContainerClasses} kt-grid kt-grid--ver`}
                >
                  <AsideLeft htmlClassService={htmlClassService} />
                  <div
                    className={`kt-content ${contentClasses} kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor`}
                    id="kt_content"
                  >
                    {subheaderDisplay && (
                      <SubHeader htmlClassService={htmlClassService} />
                    )}
                    {contentExtended ? (
                      { children }
                    ) : (
                      <div
                        className={`kt-container ${contentContainerClasses} kt-grid__item kt-grid__item--fluid`}
                      >
                        {children}
                      </div>
                    )}
                  </div>
                </div>
              ) : (
                <div
                  className={`kt-content ${contentClasses} kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor`}
                  id="kt_content"
                >
                  {subheaderDisplay && (
                    <SubHeader htmlClassService={htmlClassService} />
                  )}
                  {contentExtended ? (
                    { children }
                  ) : (
                    <div
                      className={`kt-container ${contentContainerClasses} kt-grid__item kt-grid__item--fluid`}
                    >
                      {children}
                    </div>
                  )}
                </div>
              )}
              {/*<!-- end:: Content Body -->*/}
            </div>
            {/* <!-- end:: Content --> */}

            <Footer htmlClassService={htmlClassService} />
          </div>
        </div>
        {/* <!-- end:: Body --> */}
      </div>
      <ScrollTop />
      <QuickPanel />
      <StickyToolbar />
    </LayoutInitializer>
  ) : (
    <div className="kt-grid kt-grid--ver kt-grid--root kt-page">
      <KtContent>{children}</KtContent>
    </div>
  );
}

const mapStateToProps = ({ builder: { layoutConfig } }) => ({
  layoutConfig,
  selfLayout: objectPath.get(layoutConfig, "self.layout"),
  asideDisplay: objectPath.get(layoutConfig, "aside.self.display"),
  subheaderDisplay: objectPath.get(layoutConfig, "subheader.display"),
  fluid: objectPath.get(layoutConfig, "content.width") === "fluid",

  contentExtended: objectPath.get(layoutConfig, "content.extended")
});

export default withRouter(connect(mapStateToProps)(Layout));

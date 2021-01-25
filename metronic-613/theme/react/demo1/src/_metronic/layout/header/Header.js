import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import Topbar from "./Topbar";
import HMenu from "./HMenu/HMenu";
import AnimateLoading from "../../../app/partials/layout/AnimateLoading";
import KTHeader from "../../_assets/js/header";
import * as builder from "../../ducks/builder";

class Header extends React.Component {
  headerCommonRef = React.createRef();

  componentDidMount() {
    let options = {};
    if (
      this.headerCommonRef.current.getAttribute("data-ktheader-minimize") ===
      "1"
    ) {
      options["minimize.desktop.on"] = "kt-header--minimize";
      options["offset.desktop"] = 130;
    }

    // eslint-disable-next-line no-undef
    new KTHeader(this.headerCommonRef.current, options);
  }

  render() {
    const { htmlClassService, menuHeaderDisplay } = this.props;
    const headerAttributes = htmlClassService.attributes.header;
    return (
      <div
        className={`kt-header kt-grid__item ${this.props.headerClasses}`}
        id="kt_header"
        ref={this.headerCommonRef}
        {...headerAttributes}
      >
        <AnimateLoading />
        {/* <!-- begin: Header Menu --> */}
        {menuHeaderDisplay && <HMenu htmlClassService={htmlClassService} />}
        {/* <!-- end: Header Menu --> */}
        {/* <!-- begin:: Header Topbar --> */}
        {/* <!-- empty div to fix topbar to stay on the right when menu-horizontal is hidden --> */}
        {!menuHeaderDisplay && <div />}
        <Topbar htmlClassService={htmlClassService} />
        {/* <!-- end:: Header Topbar --> */}
      </div>
    );
  }
}

const mapStateToProps = store => ({
  headerClasses: builder.selectors.getClasses(store, {
    path: "header",
    toString: true
  }),
  menuHeaderDisplay: objectPath.get(
    store.builder.layoutConfig,
    "header.menu.self.display"
  ),
  fluid:
    objectPath.get(store.builder.layoutConfig, "header.self.width") === "fluid"
});

export default connect(mapStateToProps)(Header);

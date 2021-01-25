import React from "react";
import { connect } from "react-redux";
import objectPath from "object-path";
import * as builder from "../../ducks/builder";

class Footer extends React.Component {
  render() {
    const today = new Date().getFullYear();
    return (
      <div
        className={`kt-footer ${this.props.footerClasses} kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop`}
        id="kt_footer"
      >
        <div className={`kt-container ${this.props.footerContainerClasses}`}>
          <div className="kt-footer__copyright">
            {today.toString()}&nbsp;&copy;&nbsp;
            <a
              href="http://keenthemes.com/metronic"
              target="_blank"
              rel="noopener noreferrer"
              className="kt-link"
            >
              Keenthemes
            </a>
          </div>
          <div className="kt-footer__menu">
            <a
              href="http://keenthemes.com/metronic"
              target="_blank"
              rel="noopener noreferrer"
              className="kt-footer__menu-link kt-link"
            >
              About
            </a>
            <a
              href="http://keenthemes.com/metronic"
              target="_blank"
              rel="noopener noreferrer"
              className="kt-footer__menu-link kt-link"
            >
              Team
            </a>
            <a
              href="http://keenthemes.com/metronic"
              target="_blank"
              rel="noopener noreferrer"
              className="kt-footer__menu-link kt-link"
            >
              Contact
            </a>
          </div>
        </div>
      </div>
    );
  }
}

const mapStateToProps = store => ({
  fluid:
    objectPath.get(store.builder.layoutConfig, "footer.self.width") === "fluid",
  footerClasses: builder.selectors.getClasses(store, {
    path: "footer",
    toString: true
  }),
  footerContainerClasses: builder.selectors.getClasses(store, {
    path: "footer_container",
    toString: true
  })
});

export default connect(mapStateToProps)(Footer);

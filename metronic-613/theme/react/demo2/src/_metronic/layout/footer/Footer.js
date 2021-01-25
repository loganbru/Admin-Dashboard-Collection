/* eslint-disable react/jsx-no-target-blank */
/* eslint-disable no-script-url */
/* eslint-disable jsx-a11y/anchor-is-valid */
import React from "react";
import { Link } from "react-router-dom";
import objectPath from "object-path";
import { connect } from "react-redux";
import { toAbsoluteUrl } from "../../utils/utils";

class Footer extends React.Component {
  render() {
    const today = new Date().getFullYear();
    const { footerSelfLayoutIsExtended, htmlClassService } = this.props;
    const footerClasses = htmlClassService.classes.footer.join(" ");
    const footerContainerClasses = htmlClassService.classes.footer_container.join(" ");
    return (
        <div
          className={`kt-footer ${footerClasses} kt-grid__item`}
          id="kt_footer"
        >
          {footerSelfLayoutIsExtended && (
          <div className="kt-footer__top">
            <div className={`kt-container ${footerContainerClasses}`}>
              <div className="row">
                <div className="col-lg-4">
                  <div className="kt-footer__section">
                    <h3 className="kt-footer__title">About</h3>
                    <div className="kt-footer__content">
                      Whatever method you chosse,these nine will
                      make you re-think theway you craft healines
                      Why? Because they all have points in that are
                      worth from a point of view.
                    </div>
                  </div>
                </div>
                <div className="col-lg-4">
                  <div className="kt-footer__section">
                    <h3 className="kt-footer__title">Quick Links</h3>
                    <div className="kt-footer__content">
                      <div className="kt-footer__nav">
                        <div className="kt-footer__nav-section">
                          <a href="#">General Reports</a>
                          <a href="#">Dashboart Widgets</a>
                          <a href="#">Custom Pages</a>
                        </div>
                        <div className="kt-footer__nav-section">
                          <a href="#">User Setting</a>
                          <a href="#">Custom Pages</a>
                          <a href="#">Intranet Settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="col-lg-4">
                  <div className="kt-footer__section">
                    <h3 className="kt-footer__title">Get In Touch</h3>
                    <div className="kt-footer__content">
                      <form action="" className="kt-footer__subscribe">
                        <div className="input-group">
                          <input type="text" className="form-control" placeholder="Enter Your Email" />
                            <div className="input-group-append">
                              <button className="btn btn-brand" type="button">Join</button>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          )}
          <div className="kt-footer__bottom">
            <div className={`kt-container ${footerContainerClasses}`}>
              <div className="kt-footer__wrapper">
                <div className="kt-footer__logo">
                  <Link to={"/"}>
                    <img alt="Logo" src={toAbsoluteUrl("/media/logos/logo-2-sm.png")} />
                  </Link>
                  <div className="kt-footer__copyright">
                    {today}&nbsp;&copy;&nbsp;
                    <a href="http://keenthemes.com/metronic" target="_blank">Keenthemes</a>
                  </div>
                </div>
                <div className="kt-footer__menu">
                  <a href="http://keenthemes.com/metronic" target="_blank">Purchase License</a>
                  <a href="http://keenthemes.com/metronic" target="_blank">Team</a>
                  <a href="http://keenthemes.com/metronic" target="_blank">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    );
  }
}

const mapStateToProps = store => ({
  footerSelfLayoutIsExtended: objectPath.get(store.builder.layoutConfig, "footer.self.layout") === "extended"
});

export default connect(mapStateToProps)(Footer);

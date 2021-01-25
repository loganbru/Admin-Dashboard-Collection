/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid,jsx-a11y/anchor-has-content */
import React, { useRef, useState } from "react";
import { Popover } from "@material-ui/core";
import { toAbsoluteUrl } from "../../_metronic/utils/utils";

export default function AuthorsProfit() {
  const [open, setOpen] = useState(false);
  const buttonRef = useRef();

  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">Authors Profit</h3>
          </div>
          <div className="kt-portlet__head-toolbar">
            <button
              type="button"
              ref={buttonRef}
              onClick={() => setOpen(!open)}
              className="kt-header__topbar-wrapper"
            >
              <span className="btn btn-label-brand btn-bold btn-sm dropdown-toggle dropdown-toggle">
                Export
                <i className="flaticon2-down-arrow font-size-8 ml-2" />
              </span>
            </button>
            <Popover
              open={open}
              placement="bottom-end"
              anchorEl={buttonRef.current}
              onClose={() => setOpen(false)}
              anchorOrigin={{ vertical: "bottom", horizontal: "right" }}
              transformOrigin={{ vertical: "top", horizontal: "right" }}
            >
              <div className="dropdown-menu dropdown-menu-fit">
                <ul className="kt-nav">
                  <li className="kt-nav__section kt-nav__section--first">
                    <span className="kt-nav__section-text">
                      Choose an action:
                    </span>
                  </li>
                  <li className="kt-nav__item">
                    <a className="kt-nav__link">
                      <i className="kt-nav__link-icon flaticon2-graph-1" />
                      <span className="kt-nav__link-text">Export</span>
                    </a>
                  </li>
                  <li className="kt-nav__item">
                    <a className="kt-nav__link">
                      <i className="kt-nav__link-icon flaticon2-calendar-4" />
                      <span className="kt-nav__link-text">Save</span>
                    </a>
                  </li>
                  <li className="kt-nav__item">
                    <a className="kt-nav__link">
                      <i className="kt-nav__link-icon flaticon2-layers-1" />
                      <span className="kt-nav__link-text">Import</span>
                    </a>
                  </li>
                  <li className="kt-nav__item">
                    <a className="kt-nav__link">
                      <i className="kt-nav__link-icon flaticon2-calendar-4" />
                      <span className="kt-nav__link-text">Update</span>
                    </a>
                  </li>
                  <li className="kt-nav__item">
                    <a className="kt-nav__link">
                      <i className="kt-nav__link-icon flaticon2-file-1" />
                      <span className="kt-nav__link-text">Customize</span>
                    </a>
                  </li>
                </ul>
              </div>
            </Popover>
          </div>
        </div>
        <div className="kt-portlet__body">
          <div className="kt-widget4">
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/client-logos/logo5.png")}
                />
              </div>
              <div className="kt-widget4__info">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                />
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                >
                  Trump Themes
                </a>
                <p className="kt-widget4__text">Make Metronic Great Again</p>
              </div>
              <span className="kt-widget4__number kt-font-brand">+$2500</span>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/client-logos/logo3.png")}
                />
              </div>
              <div className="kt-widget4__info">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                />
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                >
                  Phyton
                </a>
                <p className="kt-widget4__text">A Programming Language</p>
              </div>
              <span className="kt-widget4__number kt-font-brand">+$17</span>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/client-logos/logo2.png")}
                />
              </div>
              <div className="kt-widget4__info">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                />
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                >
                  GreenMakers
                </a>
                <p className="kt-widget4__text">Make Green Great Again</p>
              </div>
              <span className="kt-widget4__number kt-font-brand">-$2.50</span>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/client-logos/logo4.png")}
                />
              </div>
              <div className="kt-widget4__info">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                />
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                >
                  StarBucks
                </a>
                <p className="kt-widget4__text">Good Coffee &amp; Snacks</p>
              </div>
              <span className="kt-widget4__number kt-font-brand">-$290</span>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/client-logos/logo1.png")}
                />
              </div>
              <div className="kt-widget4__info">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                />
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                >
                  FlyThemes
                </a>
                <p className="kt-widget4__text">
                  A Let's Fly Fast Again Language
                </p>
              </div>
              <span className="kt-widget4__number kt-font-brand">+200</span>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

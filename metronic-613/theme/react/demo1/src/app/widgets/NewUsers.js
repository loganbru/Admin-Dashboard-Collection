/* eslint-disable jsx-a11y/anchor-has-content,no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { toAbsoluteUrl } from "../../_metronic/utils/utils";
import PortletHeaderDropdown from "../partials/content/CustomDropdowns/PortletHeaderDropdown";

export default function NewUsers() {
  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">New Users</h3>
          </div>
          <PortletHeaderDropdown />
        </div>
        <div className="kt-portlet__body">
          <div className="kt-widget4">
            <div className="kt-widget4__item ">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/users/100_5.jpg")} />
              </div>
              <div className="kt-widget4__info ">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                >
                  Nick Stone
                </a>
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                />
                <p className="kt-widget4__text ">
                  Visual Designer, Github Inc.
                </p>
              </div>
              <a className="btn btn-sm btn-label-dark">Follow</a>
            </div>
            <div className="kt-widget4__item ">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/users/100_14.jpg")} />
              </div>
              <div className="kt-widget4__info ">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                >
                  Milano Esco
                </a>
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                />
                <p className="kt-widget4__text ">
                  Product Designer, Apple Inc.
                </p>
              </div>
              <a className="btn btn-sm btn-label-warning">Follow</a>
            </div>
            <div className="kt-widget4__item ">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/users/100_4.jpg")} />
              </div>
              <div className="kt-widget4__info ">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                >
                  Anna Strong
                </a>
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                />
                <p className="kt-widget4__text ">Visual Designer,Google Inc.</p>
              </div>
              <a className="btn btn-sm btn-label-brand">Follow</a>
            </div>
            <div className="kt-widget4__item ">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/users/100_1.jpg")} />
              </div>
              <div className="kt-widget4__info ">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                >
                  Wilter Delton
                </a>
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                />
                <p className="kt-widget4__text ">
                  Project Manager, Amazon Inc.
                </p>
              </div>
              <a className="btn btn-sm btn-label-success">Follow</a>
            </div>
            <div className="kt-widget4__item ">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/users/100_11.jpg")} />
              </div>
              <div className="kt-widget4__info ">
                <a
                  className="kt-widget4__username"
                  href="https://keenthemes.com.my/metronic"
                >
                  Nick Bold
                </a>
                <a
                  className="kt-widget4__title"
                  href="https://keenthemes.com.my/metronic"
                />
                <p className="kt-widget4__text ">
                  Web Developer, Facebook Inc.
                </p>
              </div>
              <a className="btn btn-sm btn-label-danger">Follow</a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

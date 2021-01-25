/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { toAbsoluteUrl } from "../../_metronic/utils/utils";
import PortletHeaderDropdown from "../partials/content/CustomDropdowns/PortletHeaderDropdown";

export default function BestSellers() {
  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">Best Sellers</h3>
          </div>
          <PortletHeaderDropdown />
        </div>
        <div className="kt-portlet__body">
          <div className="kt-widget5">
            <div className="kt-widget5__item ">
              <div className="kt-widget5__content">
                <div className="kt-widget5__pic">
                  <img
                    alt=""
                    className="kt-widget7__img"
                    src={toAbsoluteUrl("/media/products/product6.jpg")}
                  />
                </div>
                <div className="kt-widget5__section">
                  <a className="kt-widget5__title">Great Logo Design</a>
                  <p className="kt-widget5__desc">Metronic admin themes.</p>
                  <div className="kt-widget5__info">
                    <span>Author:</span>
                    <span className="kt-font-info">Keenthemes</span>
                    <span>Released:</span>
                    <span className="kt-font-info">23.08.17</span>
                  </div>
                </div>
              </div>
              <div className="kt-widget5__content">
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">19,200</span>
                  <span className="kt-widget5__sales">sales</span>
                </div>
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">1046</span>
                  <span className="kt-widget5__votes">votes</span>
                </div>
              </div>
            </div>
            <div className="kt-widget5__item ">
              <div className="kt-widget5__content">
                <div className="kt-widget5__pic">
                  <img
                    alt=""
                    className="kt-widget7__img"
                    src={toAbsoluteUrl("/media/products/product11.jpg")}
                  />
                </div>
                <div className="kt-widget5__section">
                  <a className="kt-widget5__title">Awesome Mobile App</a>
                  <p className="kt-widget5__desc">
                    Metronic admin themes. Lorem Ipsum Amet.
                  </p>
                  <div className="kt-widget5__info">
                    <span>Author:</span>
                    <span className="kt-font-info">Fly themes</span>
                    <span>Released:</span>
                    <span className="kt-font-info">23.08.17</span>
                  </div>
                </div>
              </div>
              <div className="kt-widget5__content">
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">210,054</span>
                  <span className="kt-widget5__sales">sales</span>
                </div>
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">1103</span>
                  <span className="kt-widget5__votes">votes</span>
                </div>
              </div>
            </div>
            <div className="kt-widget5__item ">
              <div className="kt-widget5__content">
                <div className="kt-widget5__pic">
                  <img
                    alt=""
                    className="kt-widget7__img"
                    src={toAbsoluteUrl("/media/products/product10.jpg")}
                  />
                </div>
                <div className="kt-widget5__section">
                  <a className="kt-widget5__title">Branding Mockup</a>
                  <p className="kt-widget5__desc">Metronic bootstrap themes.</p>
                  <div className="kt-widget5__info">
                    <span>Author:</span>
                    <span className="kt-font-info">Fly themes</span>
                    <span>Released:</span>
                    <span className="kt-font-info">23.08.17</span>
                  </div>
                </div>
              </div>
              <div className="kt-widget5__content">
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">24,583</span>
                  <span className="kt-widget5__sales">sales</span>
                </div>
                <div className="kt-widget5__stats">
                  <span className="kt-widget5__number">3809</span>
                  <span className="kt-widget5__votes">votes</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

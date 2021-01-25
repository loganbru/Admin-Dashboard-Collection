/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import PortletHeaderDropdown from "../partials/content/CustomDropdowns/PortletHeaderDropdown";

export default function LatestUpdates() {
  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">Latest Updates</h3>
          </div>
          <PortletHeaderDropdown />
        </div>
        <div className="kt-portlet__body">
          <div className="kt-widget4">
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon-safe-shield-protection kt-font-success" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Metronic community meet-up 2019 in Rome.
              </a>
              <span className="kt-widget4__number kt-font-success">+$1260</span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon2-rocket kt-font-brand" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Metronic VueJS version is in progress. Stay tuned!
              </a>
              <span className="kt-widget4__number kt-font-brand">+134</span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon-pie-chart-1 kt-font-info" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Metronic v6 has been arrived!
              </a>
              <span className="kt-widget4__number kt-font-info">+$500</span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon2-pie-chart-1 kt-font-primary" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                ale! Purchase Metronic at 70% off for limited time
              </a>
              <span className="kt-widget4__number kt-font-primary">
                70% Off!
              </span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon2-file kt-font-focus" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Metronic React version is in progress.
              </a>
              <span className="kt-widget4__number kt-font-focus">+13%</span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon2-line-chart kt-font-danger" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Metronic Angular 8 version will be landing soon..
              </a>
              <span className="kt-widget4__number kt-font-danger">+$1080</span>
            </div>
            <div className="kt-widget4__item">
              <span className="kt-widget4__icon">
                <i className="flaticon2-notification kt-font-warning" />
              </span>
              <a
                className="kt-widget4__title"
                href="https://keenthemes.com.my/metronic"
              >
                Black Friday! Purchase Metronic at ever lowest 90% off for
                limited time
              </a>
              <span className="kt-widget4__number kt-font-warning">
                70% Off!
              </span>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

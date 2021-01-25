/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { toAbsoluteUrl } from "../../_metronic/utils/utils";
import PortletHeaderDropdown from "../partials/content/CustomDropdowns/PortletHeaderDropdown";

export default function DownloadFiles() {
  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">Download Files</h3>
          </div>

          <PortletHeaderDropdown />
        </div>
        <div className="kt-portlet__body">
          <div className="kt-widget4">
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/files/jpg.svg")} />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Project Launch Evgent
              </a>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/files/zip.svg")} />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Download Ziped version OF 5.0
              </a>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/files/pdf.svg")} />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Full Developer Manual For 4.7
              </a>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/files/doc.svg")} />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Metronic Documentation
              </a>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img
                  alt=""
                  src={toAbsoluteUrl("/media/files/javascript.svg")}
                />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Make JS Great Again
              </a>
            </div>
            <div className="kt-widget4__item">
              <div className="kt-widget4__pic kt-widget4__pic--pic ">
                <img alt="" src={toAbsoluteUrl("/media/files/pdf.svg")} />
              </div>
              <a
                className="kt-widget4__title "
                href="https://keenthemes.com.my/metronic"
              >
                Finance Report 2016/2017
              </a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

import React from "react";
import { toAbsoluteUrl } from "../../../_metronic";
import "../../../_metronic/_assets/sass/pages/error/error-2.scss";

export function ErrorPage2() {
  return (
    <>
      <div className="kt-grid kt-grid--ver kt-grid--root">
        <div
          className="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v2"
          style={{
            backgroundImage: `url(${toAbsoluteUrl("/media/error/bg2.jpg")})`
          }}
        >
          <div className="kt-error_container">
            <div className="kt-error-v1__container">
              <span className="kt-error_title2 kt-font-light">
                <h1>OOPS!</h1>
              </span>
              <span className="kt-error_desc kt-font-light">
                Something went wrong here
              </span>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

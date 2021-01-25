import React from "react";
import { toAbsoluteUrl } from "../../../_metronic";
import "../../../_metronic/_assets/sass/pages/error/error-4.scss";

export function ErrorPage4() {
  return (
    <>
      <div className="kt-grid kt-grid--ver kt-grid--root">
        <div
          className="kt-grid__item kt-grid__item--fluid kt-grid kt-error-v4"
          style={{
            backgroundImage: `url(${toAbsoluteUrl("/media//error/bg4.jpg")})`
          }}
        >
          <div className="kt-error_container">
            <h1 className="kt-error_number">404</h1>
            <p className="kt-error_title">ERROR</p>
            <p className="kt-error_description">Nothing left to do here.</p>
          </div>
        </div>
      </div>
    </>
  );
}

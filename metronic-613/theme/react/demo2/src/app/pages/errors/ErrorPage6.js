import React from "react";
import { toAbsoluteUrl } from "../../../_metronic";
import "../../../_metronic/_assets/sass/pages/error/error-6.scss";

export function ErrorPage6() {
  return (
    <>
      <div className="kt-grid kt-grid--ver kt-grid--root">
        <div
          className="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v6"
          style={{
            backgroundImage: `url(${toAbsoluteUrl("/media//error/bg6.jpg")})`
          }}
        >
          <div className="kt-error_container">
            <div className="kt-error_subtitle kt-font-light">
              <h1>Oops...</h1>
            </div>

            <p className="kt-error_description kt-font-light">
              Looks like something went wrong.
              <br />
              We're working on it
            </p>
          </div>
        </div>
      </div>
    </>
  );
}

import React from "react";
import { toAbsoluteUrl } from "../../../_metronic";
import "../../../_metronic/_assets/sass/pages/error/error-5.scss";

export function ErrorPage5() {
  return (
    <>
      <div className="kt-grid kt-grid--ver kt-grid--root">
        <div
          className="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v5"
          style={{
            backgroundImage: `url(${toAbsoluteUrl("/media/error/bg5.jpg")})`
          }}
        >
          <div className="kt-error_container">
            <span className="kt-error_title">
              <h1>Oops!</h1>
            </span>
            <p className="kt-error_subtitle">Something went wrong here.</p>
            <p className="kt-error_description">
              We're working on it and we'll get it fixed
              <br />
              as soon possible.
              <br />
              You can back or use our Help Center.
            </p>
          </div>
        </div>
      </div>
    </>
  );
}

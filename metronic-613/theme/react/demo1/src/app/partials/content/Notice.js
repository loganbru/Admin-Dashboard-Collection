import React, { forwardRef } from "react";
import clsx from "clsx";

const Notice = forwardRef(
  (
    { icon, iconRef, textRef, iconWrapperRef, className, children, ...props },
    ref
  ) => {
    return (
      <div
        {...props}
        ref={ref}
        role="alert"
        className={clsx("alert alert-light alert-elevate", className)}
      >
        {icon && (
          <div ref={iconWrapperRef} className="alert-icon alert-icon-top">
            <i ref={iconRef} className={icon} />
          </div>
        )}

        <div className="alert-text" ref={textRef}>
          {children}
        </div>
      </div>
    );
  }
);

export default Notice;

// Set display name for debugging.
if (process.env.NODE_ENV !== "production") {
  Notice.displayName = "Notice";
}

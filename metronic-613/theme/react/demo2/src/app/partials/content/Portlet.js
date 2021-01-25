import React, { forwardRef, useEffect, useState } from "react";
import clsx from "clsx";
import { isFragment } from "react-is";

export const PortletHeaderIcon = forwardRef(({ className }, ref) => (
  <span ref={ref} className={clsx("kt-portlet__head-icon", className)} />
));

export const PortletHeaderTitle = forwardRef(({ className, ...props }, ref) => (
  // eslint-disable-next-line jsx-a11y/heading-has-content
  <h3
    {...props}
    ref={ref}
    className={clsx("kt-portlet__head-title", className)}
  />
));

export const PortletHeaderToolbar = forwardRef(
  ({ className, ...props }, ref) => (
    <div
      {...props}
      ref={ref}
      className={clsx("kt-portlet__head-toolbar", className)}
    />
  )
);

export const PortletHeader = forwardRef(
  (
    { icon, title, toolbar, className, sticky = false, labelRef, ...props },
    ref
  ) => {
    const [top, setTop] = useState(0);
    const [windowHeight, setWindowHeight] = useState(0);

    useEffect(() => {
      handleResize();

      function handleResize() {
        setWindowHeight(window.innerWidth);
      }

      window.addEventListener("resize", handleResize);

      return () => {
        window.removeEventListener("resize", handleResize);
      };
    });

    useEffect(() => {
      // Skip if sticky is disabled or on initial render when we don't know about window height.
      if (!sticky || windowHeight === 0) {
        return;
      }

      const headerElement = document.querySelector(".kt-header");
      const subheaderElement = document.querySelector(".kt-subheader");
      const headerMobileElement = document.querySelector(".kt-header-mobile");

      let nextMarginTop = 0;

      // mobile header
      if (window.getComputedStyle(headerElement).height === "0px") {
        nextMarginTop = headerMobileElement.offsetHeight;
      } else {
        // desktop header
        if (document.body.classList.contains("kt-header--minimize-topbar")) {
          // hardcoded minimized header height
          nextMarginTop = 60;
        } else {
          // normal fixed header
          if (document.body.classList.contains("kt-header--fixed")) {
            nextMarginTop += headerElement.offsetHeight;
          }

          if (document.body.classList.contains("kt-subheader--fixed")) {
            nextMarginTop += subheaderElement.offsetHeight;
          }
        }
      }

      setTop(nextMarginTop);
    }, [sticky, windowHeight]);

    return (
      <div
        ref={ref}
        className="kt-portlet__head"
        style={
          !sticky
            ? undefined
            : { top, position: "sticky", backgroundColor: "#fff" }
        }
      >
        {title != null && (
          <div
            ref={labelRef}
            className={clsx("kt-portlet__head-label", className)}
          >
            {icon}

            {/* Wrap string and fragments in PortletHeaderTitle */
            typeof title === "string" || isFragment(title) ? (
              <PortletHeaderTitle>{title}</PortletHeaderTitle>
            ) : (
              title
            )}
          </div>
        )}

        {toolbar}
      </div>
    );
  }
);

export const PortletBody = forwardRef(
  ({ fit, fluid, className, ...props }, ref) => (
    <div
      {...props}
      ref={ref}
      className={clsx(
        "kt-portlet__body",
        {
          "kt-portlet__body--fit": fit,
          "kt-portlet__body--fluid": fluid
        },
        className
      )}
    />
  )
);

export const PortletFooter = forwardRef(({ className, ...props }, ref) => (
  <div {...props} ref={ref} className={clsx("kt-portlet__foot", className)} />
));

export const Portlet = forwardRef(
  ({ fluidHeight, className, ...props }, ref) => (
    <div
      {...props}
      ref={ref}
      className={clsx(
        "kt-portlet",
        { "kt-portlet--height-fluid": fluidHeight },
        className
      )}
    />
  )
);

// Set display names for debugging.
if (process.env.NODE_ENV !== "production") {
  Portlet.displayName = "Portlet";

  PortletHeader.displayName = "PortletHeader";
  PortletHeaderIcon.displayName = "PortletHeaderIcon";
  PortletHeaderTitle.displayName = "PortletHeaderTitle";
  PortletHeaderToolbar.displayName = "PortletHeaderToolbar";

  PortletBody.displayName = "PortletBody";
  PortletFooter.displayName = "PortletFooter";
}

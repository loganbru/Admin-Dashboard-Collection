import React, { useEffect, useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import * as builder from "../ducks/builder";
import { LayoutSplashScreen } from "./LayoutContext";

function loadCss(href, anchor) {
  return new Promise((resolve, reject) => {
    const link = document.createElement("link");

    link.setAttribute("rel", "stylesheet");
    link.setAttribute("type", "text/css");

    link.onload = resolve;
    link.onerror = reject;

    link.setAttribute("href", href);

    anchor.parentNode.insertBefore(link, anchor.nextSibling);

    return link;
  });
}

/**
 * Used to synchronize current layout `menuConfig`, `layoutConfig` and
 * `htmlClassService` with redux store.
 */
export default function LayoutInitializer({
  styles,
  children,
  menuConfig,
  layoutConfig,
  htmlClassService
}) {
  const dispatch = useDispatch();
  const [loadedStyles, setLoadedStyles] = useState();
  const builderState = useSelector(({ builder }) => builder);

  useEffect(() => {
    dispatch(builder.actions.setMenuConfig(menuConfig));
  }, [dispatch, menuConfig]);

  useEffect(() => {
    if (layoutConfig.demo !== builderState.layoutConfig.demo) {
      dispatch(builder.actions.setLayoutConfigs(layoutConfig));
    }
  }, [dispatch, builderState, layoutConfig]);

  useEffect(() => {
    dispatch(builder.actions.setHtmlClassService(htmlClassService));
  }, [dispatch, htmlClassService]);

  useEffect(() => {
    if (!Array.isArray(styles)) {
      setLoadedStyles(styles);

      return;
    }

    const anchor = document.getElementById("layout-styles-anchor");

    Promise.all([...styles].reverse().map(href => loadCss(href, anchor))).then(
      () => {
        setLoadedStyles(styles);
      }
    );

    return () => {
      styles.forEach(href => {
        const link = document.querySelector(`link[href='${href}']`);

        if (link && link.parentNode) {
          link.parentNode.removeChild(link);
        }
      });
    };
  }, [styles]);

  return loadedStyles === styles &&
    htmlClassService === builderState.htmlClassServiceObjects ? (
    // Render content when `htmlClassService` synchronized with redux store.
    <>{children}</>
  ) : (
    // Otherwise sow loading splash screen.
    <LayoutSplashScreen />
  );
}

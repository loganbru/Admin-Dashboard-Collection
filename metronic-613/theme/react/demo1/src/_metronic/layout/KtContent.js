import React from "react";
import { connect } from "react-redux";
import { withRouter } from "react-router-dom";
import { animated, useTransition } from "react-spring";
import * as builder from "../ducks/builder";

function KtContent({ children, location, contentContainerClasses }) {
  // https://www.react-spring.io/docs/hooks/use-transition
  // https://codesandbox.io/embed/jp1wr1867w
  const transitions = useTransition(location, location => location.pathname, {
    // Initial element position.
    from: { opacity: 0, transform: "translate3d(0, -5%, 0)" },

    // Animate element to it's positions
    enter: { opacity: 1, transform: "translate3d(0, 0%, 0)" },

    // We don't fade out animation, just hide element.
    leave: { display: "none" }
  });

  return transitions.map(({ key, props: style }) => (
    <animated.div
      key={key}
      style={style}
      className={`kt-container ${contentContainerClasses} kt-grid__item kt-grid__item--fluid`}
    >
      {children}
    </animated.div>
  ));
}

const mapStateToProps = store => ({
  contentContainerClasses: builder.selectors.getClasses(store, {
    path: "content_container",
    toString: true
  })
});

export default withRouter(connect(mapStateToProps)(KtContent));

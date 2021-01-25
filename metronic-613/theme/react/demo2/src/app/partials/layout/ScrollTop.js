import React from "react";
import KTScrolltop from "../../../_metronic/_assets/js/scrolltop";

export default class ScrollTop extends React.Component {
  scrollTopCommonRef = React.createRef();

  componentDidMount() {
    const scrollTopOptions = {
      offset: 300,
      speed: 600
    };
    // eslint-disable-next-line no-undef
    new KTScrolltop(this.scrollTopCommonRef.current, scrollTopOptions);
  }

  render() {
    return (
      <div
        id="kt_scrolltop"
        className="kt-scrolltop"
        ref={this.scrollTopCommonRef}
      >
        <i className="la la-arrow-up" />
      </div>
    );
  }
}

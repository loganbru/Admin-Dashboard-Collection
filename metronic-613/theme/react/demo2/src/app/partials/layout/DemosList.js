/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { Link } from "react-router-dom";
import { toAbsoluteUrl } from "../../../_metronic";

export default class DemosList extends React.Component {
  render() {
    return (
      <div className="kt-demo-panel__body kt-scroll">
        <div className="kt-demo-panel__item kt-demo-panel__item--active">
          <div className="kt-demo-panel__item-title">Default</div>
          <div className="kt-demo-panel__item-preview">
            <img
              alt=""
              src={toAbsoluteUrl("/media/demos/preview/demo1.jpg")}
            />

            <div className="kt-demo-panel__item-preview-overlay">
              <a href="/" className="btn btn-brand btn-elevate ">
                Preview
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 2</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo2.jpg")} alt="" />

            <div className="kt-demo-panel__item-preview-overlay">
              {/*<a href="https://keenthemes.com/metronic/preview/react/demo2" className="btn btn-brand btn-elevate ">*/}
              <a href="#" className="btn btn-brand btn-elevate ">
              {/*Preview*/}
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 3</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo3.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 4</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo4.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 5</div>
          <div className="kt-demo-panel__item-preview">
            <img alt="" src={toAbsoluteUrl("/media/demos/preview/demo5.jpg")} />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 6</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo6.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 7</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo7.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 8</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo8.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 9</div>
          <div className="kt-demo-panel__item-preview">
            <img src={toAbsoluteUrl("/media/demos/preview/demo9.jpg")} alt="" />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 10</div>
          <div className="kt-demo-panel__item-preview">
            <img
              src={toAbsoluteUrl("/media/demos/preview/demo10.jpg")}
              alt=""
            />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 11</div>
          <div className="kt-demo-panel__item-preview">
            <img
              src={toAbsoluteUrl("/media/demos/preview/demo11.jpg")}
              alt=""
            />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 12</div>
          <div className="kt-demo-panel__item-preview">
            <img
              src={toAbsoluteUrl("/media/demos/preview/demo12.jpg")}
              alt=""
            />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 13</div>
          <div className="kt-demo-panel__item-preview">
            <img
              src={toAbsoluteUrl("/media/demos/preview/demo13.jpg")}
              alt=""
            />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <div className="kt-demo-panel__item kt-comming-soon">
          <div className="kt-demo-panel__item-title">Demo 14</div>
          <div className="kt-demo-panel__item-preview">
            <img
              src={toAbsoluteUrl("/media/demos/preview/demo14.jpg")}
              alt=""
            />
            <div className="kt-demo-panel__item-preview-overlay">
              <a href="#" className="btn btn-brand btn-elevate disabled">
                Coming soon
              </a>
            </div>
          </div>
        </div>
        <Link
          to="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?irgwc=1&clickid=Ug4T-bytnxyJUdYwUx0Mo3EzUklRgNQBBRRkUc0&iradid=275988&irpid=1330466&iradtype=ONLINE_TRACKING_LINK&irmptype=mediapartner&mp_value1=&utm_campaign=af_impact_radius_1330466&utm_medium=affiliate&utm_source=impact_radius"
          target="_blank"
          rel="noopener noreferrer"
          className="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper"
        >
          Buy Metronic Now!
        </Link>
      </div>
    );
  }
}

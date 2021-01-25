import React from "react";
import clsx from "clsx";
import { Link } from "react-router-dom";
import PerfectScrollbar from "react-perfect-scrollbar";
import { Dropdown } from "react-bootstrap";
import { toAbsoluteUrl } from "../../../_metronic";
import HeaderDropdownToggle from "../content/CustomDropdowns/HeaderDropdownToggle";
import { ReactComponent as CartNum3Icon } from "../../../_metronic/layout/assets/layout-svg-icons/CartNum3.svg";

const perfectScrollbarOptions = {
  wheelSpeed: 2,
  wheelPropagation: false
};

export default class MyCart extends React.Component {
  render() {
    const { bgImage, useSVG, icon, iconType } = this.props;

    return (
      <Dropdown className="kt-header__topbar-item" drop="down" alignRight>
        <Dropdown.Toggle as={HeaderDropdownToggle} id="dropdown-toggle-my-cart">
          <span
            className={clsx("kt-header__topbar-icon", {
              "kt-header__topbar-icon--brand": iconType === "brand"
            })}
          >
            {!useSVG && <i className={icon} />}

            {useSVG && (
              <span
                className={clsx("kt-svg-icon", {
                  "kt-svg-icon-brand": iconType === "brand"
                })}
              >
                <CartNum3Icon className="kt-svg-icon kt-svg-icon--primary" />
              </span>
            )}
          </span>
        </Dropdown.Toggle>
        <Dropdown.Menu className="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
          <form className="flex-column p-0">
            <div className="kt-mycart">
              <div
                className="kt-mycart__head kt-head"
                style={{ backgroundImage: `url(${bgImage})` }}
              >
                <div className="kt-mycart__info">
                  <span className="kt-mycart__icon">
                    <i className="flaticon2-shopping-cart-1 kt-font-success" />
                  </span>
                  <h3 className="kt-mycart__title">My Cart</h3>
                </div>
                <div className="kt-mycart__button">
                  <button type="button" className="btn btn-success btn-sm">
                    2 Items
                  </button>
                </div>
              </div>

              <PerfectScrollbar
                options={perfectScrollbarOptions}
                style={{ maxHeight: "35vh", position: "relative" }}
              >
                <div className="kt-mycart__body">
                  <div className="kt-mycart__item">
                    <div className="kt-mycart__container">
                      <div className="kt-mycart__info">
                        <Link to="cart-item" className="kt-mycart__title">
                          Samsung
                        </Link>
                        <span className="kt-mycart__desc">
                          Profile info, Timeline etc
                        </span>

                        <div className="kt-mycart__action">
                          <span className="kt-mycart__price">$ 450</span>
                          <span className="kt-mycart__text">for</span>
                          <span className="kt-mycart__quantity">7</span>
                          <span className="btn btn-label-success btn-icon">
                            −
                          </span>
                          <span className="btn btn-label-success btn-icon">
                            +
                          </span>
                        </div>
                      </div>

                      <Link to="cart-item" className="kt-mycart__pic">
                        <img
                          src={toAbsoluteUrl("/media/products/product9.jpg")}
                          alt="product"
                        />
                      </Link>
                    </div>
                  </div>

                  <div className="kt-mycart__item">
                    <div className="kt-mycart__container">
                      <div className="kt-mycart__info">
                        <Link to="cart-item" className="kt-mycart__title">
                          Panasonic
                        </Link>

                        <span className="kt-mycart__desc">
                          For PHoto &amp; Others
                        </span>

                        <div className="kt-mycart__action">
                          <span className="kt-mycart__price">$ 329</span>
                          <span className="kt-mycart__text">for</span>
                          <span className="kt-mycart__quantity">1</span>
                          <span className="btn btn-label-success btn-icon">
                            −
                          </span>
                          <span className="btn btn-label-success btn-icon">
                            +
                          </span>
                        </div>
                      </div>

                      <Link to="cart-item" className="kt-mycart__pic">
                        <img
                          src={toAbsoluteUrl("/media/products/product13.jpg")}
                          alt="product"
                        />
                      </Link>
                    </div>
                  </div>

                  <div className="kt-mycart__item">
                    <div className="kt-mycart__container">
                      <div className="kt-mycart__info">
                        <Link to="cart-item" className="kt-mycart__title">
                          Fujifilm
                        </Link>
                        <span className="kt-mycart__desc">
                          Profile info, Timeline etc
                        </span>

                        <div className="kt-mycart__action">
                          <span className="kt-mycart__price">$ 520</span>
                          <span className="kt-mycart__text">for</span>
                          <span className="btn btn-label-success btn-icon">
                            −
                          </span>
                          <span className="btn btn-label-success btn-icon">
                            +
                          </span>
                        </div>
                      </div>

                      <Link to="cart-item" className="kt-mycart__pic">
                        <img
                          src={toAbsoluteUrl("/media/products/product16.jpg")}
                          alt="product"
                        />
                      </Link>
                    </div>
                  </div>

                  <div className="kt-mycart__item">
                    <div className="kt-mycart__container">
                      <div className="kt-mycart__info">
                        <Link to="cart-item" className="kt-mycart__title">
                          Candy Machine
                        </Link>

                        <span className="kt-mycart__desc">
                          For Photo &amp; Others
                        </span>

                        <div className="kt-mycart__action">
                          <span className="kt-mycart__price">$ 784</span>
                          <span className="kt-mycart__text">for</span>
                          <span className="kt-mycart__quantity">4</span>
                          <span className="btn btn-label-success btn-icon">
                            −
                          </span>
                          <span className="btn btn-label-success btn-icon">
                            +
                          </span>
                        </div>
                      </div>

                      <Link to="cart-item" className="kt-mycart__pic">
                        <img
                          src={toAbsoluteUrl("/media/products/product15.jpg")}
                          title=""
                          alt=""
                        />
                      </Link>
                    </div>
                  </div>
                </div>
              </PerfectScrollbar>

              <div className="kt-mycart__footer">
                <div className="kt-mycart__section">
                  <div className="kt-mycart__subtitel">
                    <span>Sub Total</span>
                    <span>Taxes</span>
                    <span>Total</span>
                  </div>

                  <div className="kt-mycart__prices">
                    <span>$ 840.00</span>
                    <span>$ 72.00</span>
                    <span className="kt-font-brand">$ 912.00</span>
                  </div>
                </div>
                <div className="kt-mycart__button kt-align-right">
                  <button type="button" className="btn btn-primary btn-sm">
                    Place Order
                  </button>
                </div>
              </div>
            </div>
          </form>
        </Dropdown.Menu>
      </Dropdown>
    );
  }
}

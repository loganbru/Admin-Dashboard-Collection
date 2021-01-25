/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import PerfectScrollbar from "react-perfect-scrollbar";
import { toAbsoluteUrl } from "../../_metronic/utils/utils";
import PortletHeaderDropdown from "../partials/content/CustomDropdowns/PortletHeaderDropdown";

const perfectScrollbarOptions = {
  wheelSpeed: 2,
  wheelPropagation: false
};

export default function RecentActivities() {
  return (
    <>
      <div className="kt-portlet kt-portlet--height-fluid">
        <div className="kt-portlet__head">
          <div className="kt-portlet__head-label">
            <h3 className="kt-portlet__head-title">Recent Activities</h3>
          </div>
          <PortletHeaderDropdown />
        </div>
        <div className="kt-portlet__body">
          {/* style="max-height: 50vh;" */}
          <PerfectScrollbar
            options={perfectScrollbarOptions}
            style={{ maxHeight: "50vh", position: "relative" }}
          >
            <div className="kt-timeline-v2 ps ps--active-y">
              <div className="kt-timeline-v2__items kt-padding-top-25 kt-padding-bottom-30">
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">10:00</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-danger" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                    incididunt ut labore et dolore magna
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20" />
                </div>
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">12:45</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-success" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    AEOL Meeting With
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                    <a>
                      <img
                        src={toAbsoluteUrl("/media/users/100_4.jpg")}
                        title=""
                        alt=""
                      />
                    </a>
                    <a>
                      <img
                        src={toAbsoluteUrl("/media/users/100_13.jpg")}
                        title=""
                        alt=""
                      />
                    </a>
                    <a>
                      <img
                        src={toAbsoluteUrl("/media/users/100_11.jpg")}
                        title=""
                        alt=""
                      />
                    </a>
                    <a>
                      <img
                        src={toAbsoluteUrl("/media/users/100_14.jpg")}
                        title=""
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">14:00</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-brand" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    Make Deposit
                    <a className="kt-link kt-link--brand kt-font-bolder px-2">
                      USD 700
                    </a>
                    To ESL.
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20" />
                </div>
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">17:00</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-info" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    Placed a new order in
                    <a className="kt-link kt-link--brand kt-font-bolder pl-2">
                      SIGNATURE MOBILE
                    </a>
                    marketplace.
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20" />
                </div>
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">16:00</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-brand" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                    <br />
                    incididunt ut labore et dolore magna elit enim at minim
                    <br />
                    veniam quis nostrud
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20" />
                </div>
                <div className="kt-timeline-v2__item">
                  <span className="kt-timeline-v2__item-time">17:00</span>
                  <div className="kt-timeline-v2__item-cricle">
                    <i className="fa fa-genderless kt-font-danger" />
                  </div>
                  <div className="kt-timeline-v2__item-text kt-padding-top-5">
                    Received a new feedback on
                    <a className="kt-link kt-link--brand kt-font-bolder">
                      FinancePro App
                    </a>
                    product.
                  </div>
                  <div className="kt-list-pics kt-list-pics--sm kt-padding-l-20" />
                </div>
              </div>
            </div>
          </PerfectScrollbar>
        </div>
      </div>
    </>
  );
}

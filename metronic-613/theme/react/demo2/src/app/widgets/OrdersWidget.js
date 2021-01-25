import React from "react";

export default function OrdersWidget() {
  return (
    <div className="kt-widget1">
      <div className="kt-widget1__item ng-star-inserted">
        <div className="kt-widget1__info">
          <h3 className="kt-widget1__title">Orders</h3>
          <span className="kt-widget1__desc">Weekly Customer Orders</span>
        </div>

        <span className="kt-widget1__number kt-font-danger">+$1,800</span>
      </div>

      <div className="kt-widget1__item ng-star-inserted">
        <div className="kt-widget1__info">
          <h3 className="kt-widget1__title">Member Profit</h3>
          <span className="kt-widget1__desc">Awerage Weekly Profit</span>
        </div>
        <span className="kt-widget1__number kt-font-brand">+$17,800</span>
      </div>

      <div className="kt-widget1__item ng-star-inserted">
        <div className="kt-widget1__info">
          <h3 className="kt-widget1__title">Issue Reports</h3>
          <span className="kt-widget1__desc">System bugs and issues</span>
        </div>
        <span className="kt-widget1__number kt-font-success">-27,49%</span>
      </div>
    </div>
  );
}

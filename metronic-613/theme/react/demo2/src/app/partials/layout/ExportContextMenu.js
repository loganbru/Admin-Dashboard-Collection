/* eslint-disable no-script-url,jsx-a11y/anchor-is-valid */
import React from "react";
import { Popover } from "@material-ui/core";

export default class ExportContextMenu extends React.Component {
  state = { anchor: undefined };

  render() {
    const { anchor } = this.state;

    return (
      <>
        <button
          type="button"
          className="btn btn-label-brand btn-bold btn-sm dropdown-toggle"
          onClick={event => {
            console.log(event.target);

            this.setState({ anchor: event.target });
          }}
        >
          Export
        </button>

        <Popover
          anchorEl={anchor}
          open={anchor != null}
          placement="bottom-end"
          anchorOrigin={{ vertical: "bottom", horizontal: "right" }}
          transformOrigin={{ vertical: "top", horizontal: "right" }}
          onClose={() => {
            this.setState({ anchor: undefined });
          }}
        >
          <ul className="kt-nav">
            <li className="kt-nav__section kt-nav__section--first">
              <span className="kt-nav__section-text">Choose an action:</span>
            </li>

            <li className="kt-nav__item">
              <a className="kt-nav__link">
                <i className="kt-nav__link-icon flaticon2-graph-1" />
                <span className="kt-nav__link-text">Export</span>
              </a>
            </li>
            <li className="kt-nav__item">
              <a className="kt-nav__link">
                <i className="kt-nav__link-icon flaticon2-calendar-4" />
                <span className="kt-nav__link-text">Save</span>
              </a>
            </li>
            <li className="kt-nav__item">
              <a className="kt-nav__link">
                <i className="kt-nav__link-icon flaticon2-layers-1" />
                <span className="kt-nav__link-text">Import</span>
              </a>
            </li>
            <li className="kt-nav__item">
              <a className="kt-nav__link">
                <i className="kt-nav__link-icon flaticon2-calendar-4" />
                <span className="kt-nav__link-text">Update</span>
              </a>
            </li>
            <li className="kt-nav__item">
              <a className="kt-nav__link">
                <i className="kt-nav__link-icon flaticon2-file-1" />
                <span className="kt-nav__link-text">Customize</span>
              </a>
            </li>
          </ul>
        </Popover>
      </>
    );
  }
}

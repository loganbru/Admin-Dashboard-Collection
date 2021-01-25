/* eslint-disable react/jsx-no-duplicate-props */
import React, { createRef } from "react";
import clsx from "clsx";
import { Popover } from "@material-ui/core";
import PerfectScrollbar from "react-perfect-scrollbar";
import SearchResult from "./SearchResult";
import { toAbsoluteUrl } from "../../../_metronic";

const perfectScrollbarOptions = {
  wheelSpeed: 2,
  wheelPropagation: false
};

const fakeData = [
  {
    type: 0,
    text: "Documents"
  },
  {
    type: 1,
    text: "Annual finance report",
    iconClassName: "flaticon-interface-3 kt-font-warning"
  },
  {
    type: 1,
    text: "Company meeting schedule",
    iconClassName: "flaticon-share kt-font-success"
  },
  {
    type: 1,
    text: "Project quotations",
    iconClassName: "flaticon-paper-plane kt-font-info"
  },
  {
    icon: "",
    text: "Customers",
    type: 0
  },
  {
    type: 1,
    text: "Amanda Anderson",
    iconImage: toAbsoluteUrl("/media/users/user1.jpg")
  },
  {
    type: 1,
    text: "Kennedy Lloyd",
    iconImage: toAbsoluteUrl("/media/users/user2.jpg")
  },
  {
    type: 1,
    text: "Megan Weldon",
    iconImage: toAbsoluteUrl("/media/users/user3.jpg")
  },
  {
    type: 1,
    text: "Marc-André ter Stegen",
    iconImage: toAbsoluteUrl("/media/users/user4.jpg")
  },
  {
    type: 0,
    text: "Files"
  },
  {
    type: 1,
    text: "Revenue report",
    iconClassName: "flaticon-lifebuoy kt-font-warning"
  },
  {
    type: 1,
    text: "Annual finance report",
    iconClassName: "flaticon-coins kt-font-primary"
  },
  {
    type: 1,
    text: "Tax calculations",
    iconClassName: "flaticon-calendar kt-font-danger"
  }
];

export default class SearchDefault extends React.Component {
  inputRef = createRef();
  state = { open: false, loading: false, data: null, searchValue: "" };

  clearTimeout = () => {
    if (this.timeoutId) {
      clearTimeout(this.timeoutId);
      this.timeoutId = undefined;
    }
  };

  setFocusToInput = () => {
    this.inputRef.current.focus();
  };

  handleSearchChange = event => {
    this.setState({ data: null, searchValue: event.target.value });

    if (event.target.value.length > 2) {
      this.clearTimeout();

      this.setState({ loading: true });
      this.setState({ open: !this.state.open });

      // simulate getting search result
      this.timeoutId = setTimeout(() => {
        this.setState({ data: fakeData, loading: false });
      }, 500);
    }
  };

  clear = () => {
    this.setState({ searchValue: "" });
  };

  componentWillUnmount() {
    this.clearTimeout();
  }

  render() {
    const { open, data, loading, searchValue } = this.state;

    return (
        <div className="kt-header-toolbar">
          <div
              id="kt_quick_search_default"
              className={clsx("kt-quick-search ", {
                "kt-quick-search--has-result": data && data.length
              })}
          >
            <form className="kt-quick-search__form">
              <div
                  className={clsx("input-group", {
                    "kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right": loading
                  })}
              >
                <div className="input-group-prepend">
                    <span className="input-group-text">
                      <i className="flaticon2-search-1" />
                    </span>
                </div>

                <input
                    type="text"
                    ref={this.inputRef}
                    placeholder="Search..."
                    value={searchValue}
                    onChange={this.handleSearchChange}
                    className="form-control kt-quick-search__input"
                />
                { (searchValue && !loading)   && (
                    <div className="input-group-append" onClick={this.clear}>
                        <span className="input-group-text">
                          <i className="la la-close kt-quick-search__close"
                             style={{ display: "flex"}} />
                        </span>
                    </div>
                )}
              </div>
            </form>

            <Popover
                open={open}
                placement="bottom-end"
                anchorEl={this.inputRef.current}
                onClose={() => {
                  this.setState({
                    data: null,
                    open: false,
                    loading: false,
                  });
                  this.setFocusToInput();
                }}
                anchorOrigin={{ vertical: "bottom", horizontal: "right" }}
                transformOrigin={{ vertical: "top", horizontal: "right" }}
            >
              <div className="dropdown-menu kt-dropdown-menu-srch dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                <div
                    id="kt_quick_search_inline"
                    className={clsx("kt-quick-search kt-quick-search--inline", {
                      "kt-quick-search--has-result": data && data.length
                    })}
                >
                  <PerfectScrollbar
                      options={perfectScrollbarOptions}
                      style={{ maxHeight: "40vh", position: "relative" }}
                  >
                    <div
                        style={{ maxHeight: "40vh", position: "relative" }}
                        className="kt-quick-search__wrapper"
                    >
                      <SearchResult data={data} />
                    </div>
                  </PerfectScrollbar>
                </div>
              </div>
            </Popover>
          </div>
        </div>
    );
  }
}

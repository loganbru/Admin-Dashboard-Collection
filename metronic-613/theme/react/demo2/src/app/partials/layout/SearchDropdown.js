import React from "react";
import clsx from "clsx";
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
    text: "Reports"
  },
  {
    type: 1,
    text: "AirPlus Requirements",
    description: "by Grog John",
    iconImage: toAbsoluteUrl("/media/files/doc.svg")
  },
  {
    type: 1,
    text: "TechNav Documentation",
    description: "by Mary Brown",
    iconImage: toAbsoluteUrl("/media/files/pdf.svg")
  },
  {
    type: 1,
    text: "All Framework Docs",
    description: "by Grog John",
    iconImage: toAbsoluteUrl("/media/files/zip.svg")
  },
  {
    type: 1,
    text: "AirPlus Requirements",
    description: "by Tim Hardy",
    iconImage: toAbsoluteUrl("/media/files/xml.svg")
  },
  {
    text: "Customers",
    type: 0
  },
  {
    type: 1,
    text: "Jimmy Curry",
    description: "Software Developer",
    iconImage: toAbsoluteUrl("/media/users/300_11.jpg")
  },
  {
    type: 1,
    text: "Milena Gibson",
    description: "UI Designer",
    iconImage: toAbsoluteUrl("/media/users/300_16.jpg")
  },
  {
    type: 1,
    text: "Stefan JohnStefan",
    description: "Marketing Manager",
    iconImage: toAbsoluteUrl("/media/users/300_22.jpg")
  },
  {
    type: 1,
    text: "Anna Strong",
    description: "Software Developer",
    iconImage: toAbsoluteUrl("/media/users/300_5.jpg")
  },
  {
    type: 0,
    text: "Files"
  },
  {
    type: 1,
    text: "2 New items submitted",
    description: "Marketing Manager",
    iconClassName: "flaticon2-box kt-font-danger"
  },
  {
    type: 1,
    text: "79 PSD files generated",
    description: "by Grog John",
    iconClassName: "flaticon-psd kt-font-brand"
  },
  {
    type: 1,
    text: "$2900 worth products sold",
    description: "Total 234 items",
    iconClassName: "flaticon2-supermarket kt-font-warning"
  },
  {
    type: 1,
    text: "4 New items submitted",
    description: "Marketing Manager",
    iconClassName: "flaticon-safe-shield-protection kt-font-info"
  }
];

export default class SearchDropdown extends React.Component {
  state = { isOpen: false, loading: false, data: null, searchValue: "" };

  constructor(props) {
    super(props);
    this.setWrapperRef = this.setWrapperRef.bind(this);
    this.handleClickOutside = this.handleClickOutside.bind(this);
  }

  componentDidMount() {
    document.addEventListener("mousedown", this.handleClickOutside);
  }

  /**
   * Set the wrapper ref
   */
  setWrapperRef(node) {
    this.wrapperRef = node;
  }

  /**
   * Alert if clicked on outside of element
   */
  handleClickOutside(event) {
    if (this.wrapperRef && !this.wrapperRef.contains(event.target)) {
      this.setState({ isOpen: false });
    }
  }

  clearTimeout() {
    if (this.timeoutId) {
      clearTimeout(this.timeoutId);
      this.timeoutId = undefined;
    }
  }

  handleSearchChange = event => {
    this.setState({ data: null, searchValue: event.target.value });

    if (event.target.value.length > 2) {
      this.clearTimeout();

      this.setState({ loading: true });
      this.setState({ isOpen: true });

      // simulate getting search result
      this.timeoutId = setTimeout(() => {
        this.setState({ data: fakeData, loading: false });
      }, 500);
      return;
    }

    this.setState({ isOpen: false });
    this.setState({ loading: false });
  };

  clear = () => {
    this.setState({ data: null, searchValue: "", isOpen: false });
  };

  componentWillUnmount() {
    this.clearTimeout();
    document.removeEventListener("mousedown", this.handleClickOutside);
  }

  render() {
    const { data, loading, searchValue, isOpen } = this.state;
    return (
      <div
        id="kt_quick_search_inline"
        className={clsx(
          "kt-quick-search kt-quick-search--inline kt-quick-search--result-compact",
          {
            "kt-quick-search--has-result": data && data.length
          }
        )}
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
              autoFocus={true}
              placeholder="Search..."
              value={searchValue}
              onChange={this.handleSearchChange}
              className="form-control kt-quick-search__input"
            />

            <div className="input-group-append">
              <span className="input-group-text">
                <i
                  style={{ display: "flex" }}
                  onClick={this.clear}
                  hidden={!data || (data && !data.length)}
                  className="la la-close kt-quick-search__close"
                />
              </span>
            </div>
          </div>
        </form>
        <div className="dropdown" ref={this.setWrapperRef}>
          <div
            id="kt_quick_search_toggle"
            data-toggle="dropdown"
            data-offset="0px,10px"
            aria-expanded="false"
          />
          <div
            className={`dropdown-menu dropdown-menu-fit dropdown-menu-anim dropdown-menu-lg ${clsx(
              { show: isOpen }
            )}`}
            style={{ right: "0", left: "auto" }}
          >
            <PerfectScrollbar
              className="kt-quick-search__wrapper kt-scroll"
              data-height="325"
              data-mobile-height="200"
              data-scroll="true"
              options={perfectScrollbarOptions}
              style={{ maxHeight: "40vh" }}
            >
              <SearchResult data={data} />
            </PerfectScrollbar>
          </div>
        </div>
      </div>
    );
  }
}

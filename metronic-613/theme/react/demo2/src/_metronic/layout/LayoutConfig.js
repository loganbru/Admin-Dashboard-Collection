export const initLayoutConfig = {
  demo: "demo2",
  // == Page Splash Screen loading
  loader: {
    enabled: true,
    type: "brand"
  },
  // == Page Toolbar
  toolbar: {
    display: true
  },
  // == Colors for javascript
  colors: {
    state: {
      brand: "#374afb",
      light: "#ffffff",
      dark: "#282a3c",
      primary: "#5867dd",
      success: "#34bfa3",
      info: "#36a3f7",
      warning: "#ffb822",
      danger: "#fd3995"
    },
    base: {
      label: ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
      shape: ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
    }
  },
  header: {
    self: {
      width: "fixed",
      fixed: {
        desktop: {
          enabled: true,
          mode: "topbar"
        },
        mobile: true
      }
    },
    topbar: {
      search: {
        display: true,
        layout: "dropdown"
      },
      notifications: {
        display: true,
        layout: "dropdown",
        dropdown: {
          style: "dark"
        }
      },
      "quick-actions": {
        display: true,
        layout: "dropdown",
        dropdown: {
          style: "dark"
        }
      },
      user: {
        display: true,
        layout: "dropdown",
        dropdown: {
          style: "dark"
        }
      },
      languages: {
        display: true
      },
      cart: {
        display: true
      },
      "quick-panel": {
        display: true
      }
    },
    search: {
      display: true
    },
    menu: {
      self: {
        display: true,
        "root-arrow": false,
        "icon-style": "duotone"
      },
      desktop: {
        arrow: true,
        toggle: "click",
        submenu: {
          skin: "light",
          arrow: true
        }
      },
      mobile: {
        submenu: {
          skin: "dark",
          accordion: true
        }
      }
    }
  },
  aside: {
    self: {
      skin: "light",
      fixed: true,
      display: false,
      minimize: {
        toggle: true,
        default: false
      }
    },
    menu: {
      dropdown: false,
      scroll: true,
      submenu: {
        accordion: true,
        dropdown: {
          arrow: true,
          "hover-timeout": 500
        }
      }
    }
  },
  subheader: {
    display: true,
    fixed: false,
    layout: "subheader-v2",
    width: "fixed",
    style: "transparent"
  },
  content: {
    width: "fixed"
  },
  footer: {
    self: {
      width: "fixed",
      layout: "extended"
    }
  }
};

let LayoutConfig = JSON.parse(JSON.stringify(initLayoutConfig)); // deep object copy
export default LayoutConfig;

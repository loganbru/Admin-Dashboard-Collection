import objectPath from "object-path";

export default class HtmlClassService {
  // Public properties
  config;
  classes;
  attributes;
  /**
   * Build html element classes from layout config
   * @param layoutConfig
   */
  setConfig(layoutConfig) {
    this.config = layoutConfig;

    // scope list of classes
    this.classes = {
      header: [],
      header_container: [],
      header_mobile: [],
      header_menu: [],
      aside_menu: [],
      subheader: [],
      subheader_container: [],
      content: [],
      content_container: [],
      footer: [],
      footer_container: []
    };

    this.attributes = {
      header: {},
      aside_menu: {}
    };

    // init base layout
    this.initLayout();

    // not yet implemented
    // this.initAsideSecondary();

    // init header, subheader menu and content
    this.initHeader();
    this.initSubheader();
    this.initContent();

    // init aside and aside menu
    this.initAside();

    // init footer
    this.initFooter();

    // this.onClassesUpdated$.next(this.classes);
  }

  /**
   * Returns Classes
   *
   * @param path: string
   * @param toString boolean
   */
  getClasses(path, toString) {
    if (path) {
      const classes = objectPath.get(this.classes, path) || "";
      if (toString && Array.isArray(classes)) {
        return classes.join(" ");
      }
      return classes.toString();
    }
    return this.classes;
  }

  /**
   * Init Layout
   */
  initLayout() {
    const _backGroundImage = objectPath.get(
      this.config,
      "self.body.background-image"
    );
    if (_backGroundImage) {
      document.body.style.backgroundImage = `url("${_backGroundImage}")`;
    }

    const _selfBodyClass = objectPath.get(this.config, "self.body.class");
    if (_selfBodyClass) {
      const bodyClasses = _selfBodyClass.toString().split(" ");
      bodyClasses.forEach(cssClass => document.body.classList.add(cssClass));
    }

    if (objectPath.get(this.config, "width")) {
      document.body.classList.add(
        "kt-page--" + objectPath.get(this.config, "width")
      );
    }

    // Offcanvas directions
    document.body.classList.add("kt-quick-panel--right");
    document.body.classList.add("kt-demo-panel--right");
    document.body.classList.add("kt-offcanvas-panel--right");
  }

  /**
   * Init Header
   */
  initHeader() {
    // Fixed header
    if (objectPath.get(this.config, "header.self.fixed.desktop.enabled")) {
      document.body.classList.add("kt-header--fixed");
      objectPath.push(this.classes, "header", "kt-header--fixed");
      document.body.classList.add(
        "kt-header--minimize-" +
          objectPath.get(this.config, "header.self.fixed.desktop.mode")
      );
      this.attributes.header["data-ktheader-minimize"] = "on";
    } else {
      document.body.classList.add("kt-header--static");
    }

    if (objectPath.get(this.config, "header.self.fixed.mobile")) {
      document.body.classList.add("kt-header-mobile--fixed");
      objectPath.push(this.classes, "header_mobile", "kt-header-mobile--fixed");
    }

    if (objectPath.get(this.config, "header.self.width") === "fluid") {
      objectPath.push(this.classes, "header_container", "kt-container--fluid");
    }
  }

  /**
   * Init Subheader
   */
  initSubheader() {
    // Fixed content head
    if (objectPath.get(this.config, "subheader.fixed")) {
      document.body.classList.add("kt-subheader--fixed");
    }

    if (objectPath.get(this.config, "subheader.display")) {
      document.body.classList.add("kt-subheader--enabled");
    }

    const _subheaderStyle = objectPath.get(this.config, "subheader.style");
    if (_subheaderStyle) {
      document.body.classList.add(`kt-subheader--${_subheaderStyle}`);
    }

    if (objectPath.get(this.config, "subheader.width") === "fluid") {
      objectPath.push(
        this.classes,
        "subheader_container",
        "kt-container--fluid"
      );
    }

    if (objectPath.get(this.config, "subheader.clear")) {
      objectPath.push(
        this.classes,
        "subheader_container",
        "kt-container--clear"
      );
    }
  }

  /**
   * Init Content
   */
  initContent() {
    if (objectPath.get(this.config, "content.fit-top")) {
      objectPath.push(this.classes, "content", "kt-content--fit-top");
    }

    if (objectPath.get(this.config, "content.fit-bottom")) {
      objectPath.push(this.classes, "content", "kt-content--fit-bottom");
    }

    if (objectPath.get(this.config, "content.width") === "fluid") {
      objectPath.push(this.classes, "content_container", "kt-container--fluid");
    }
  }

  /**
   * Init Aside
   */
  initAside() {
    if (objectPath.get(this.config, "aside.self.display") !== true) {
      return;
    }

    document.body.classList.add("kt-aside--enabled");
    // Fixed Aside
    if (objectPath.get(this.config, "aside.self.fixed")) {
      document.body.classList.add("kt-aside--fixed");
      objectPath.push(this.classes, "aside", "kt-aside--fixed");
    } else {
      document.body.classList.add("kt-aside--static");
    }

    // Default fixed
    if (objectPath.get(this.config, "aside.self.minimize.default")) {
      document.body.classList.add("kt-aside--minimize");
    }

    // Menu
    // Dropdown Submenu
    if (
      objectPath.get(this.config, "aside.self.fixed") !== true &&
      objectPath.get(this.config, "aside.menu.dropdown")
    ) {
      objectPath.push(this.classes, "aside_menu", "kt-aside-menu--dropdown");
      this.attributes.aside_menu["data-ktmenu-dropdown"] = "1";
    }

    // Scrollable Menu
    if (objectPath.get(this.config, "aside.self.fixed")) {
      this.attributes.aside_menu["data-ktmenu-scroll"] = "1";
    } else {
      this.attributes.aside_menu["data-ktmenu-scroll"] = "0";
    }
  }

  /**
   * Init Footer
   */
  initFooter() {
    // Fixed header
    const _footerSelfLayout = objectPath.get(this.config, "footer.self.layout");
    if (_footerSelfLayout) {
      objectPath.push(
        this.classes,
        "footer",
        `kt-footer--${_footerSelfLayout}`
      );
    }

    if (objectPath.get(this.config, "footer.self.width") === "fluid") {
      objectPath.push(this.classes, "footer_container", "kt-container--fluid");
    }
  }
}

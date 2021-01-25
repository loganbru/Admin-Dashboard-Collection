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
      aside: [],
      aside_menu: [],
      subheader: [],
      subheader_container: [],
      content: [],
      content_container: [],
      footer_container: []
    };

    this.attributes = {
      aside_menu: {},
      header_mobile: {},
      header_menu: {}
    };

    // init base layout
    this.initLayout();
    this.initLoader();

    // not yet implemented
    // this.initAsideSecondary();

    // init header and subheader menu
    this.initHeader();
    this.initSubheader();

    this.initContent();
    // init aside and aside menu
    this.initAside();

    // init footer
    this.initFooter();

    this.initSkin();
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
    if (objectPath.has(this.config, "self.body.background-image")) {
      document.body.style.backgroundImage =
        'url("' +
        objectPath.get(this.config, "self.body.background-image") +
        '")';
    }

    const _selfBodyClass = objectPath.get(this.config, "self.body.class");
    if (_selfBodyClass) {
      if (_selfBodyClass) {
        const bodyClasses = _selfBodyClass.toString().split(" ");
        bodyClasses.forEach(cssClass => document.body.classList.add(cssClass));
      }
    }

    // Offcanvas directions
    document.body.classList.add("kt-quick-panel--right");
    document.body.classList.add("kt-demo-panel--right");
    document.body.classList.add("kt-offcanvas-panel--right");
  }

  /**
   * Init Loader
   */
  initLoader() {}

  /**
   * Init Header
   */
  initHeader() {
    // Fixed header
    if (objectPath.get(this.config, "header.self.fixed.desktop")) {
      document.body.classList.add("kt-header--fixed");
      objectPath.push(this.classes, "header", "kt-header--fixed");
    } else {
      document.body.classList.add("kt-header--static");
    }

    if (objectPath.get(this.config, "header.self.fixed.mobile")) {
      document.body.classList.add("kt-header-mobile--fixed");
      objectPath.push(this.classes, "header_mobile", "kt-header-mobile--fixed");
    }

    const additionalHeaderCssClass = objectPath.get(
      this.config,
      "header.menu.self.layout"
    );
    if (additionalHeaderCssClass) {
      objectPath.push(
        this.classes,
        "header_menu",
        "kt-header-menu--layout-" + additionalHeaderCssClass
      );
    }

    if (objectPath.get(this.config, "header.self.width") === "fluid") {
      objectPath.push(this.classes, "header_container", "kt-container--fluid");
    }
  }

  /**
   * Init Subheader
   */
  initSubheader() {
    if (objectPath.get(this.config, "subheader.display")) {
      document.body.classList.add("kt-subheader--enabled");
    }

    // Fixed content head
    if (
      objectPath.get(this.config, "subheader.fixed") &&
      objectPath.get(this.config, "header.self.fixed.desktop")
    ) {
      document.body.classList.add("kt-subheader--fixed");
    }

    if (objectPath.has(this.config, "subheader.style")) {
      document.body.classList.add(
        "kt-subheader--" + objectPath.get(this.config, "subheader.style")
      );
    }

    if (objectPath.get(this.config, "subheader.width") === "fluid") {
      objectPath.push(
        this.classes,
        "subheader_container",
        "kt-container--fluid"
      );
    }

    if (objectPath.get(this.config, "subheader.clear")) {
      objectPath.push(this.classes, "subheader", "kt-subheader--clear");
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
    if (objectPath.get(this.config, "aside.menu.dropdown") === "true") {
      objectPath.push(this.classes, "aside_menu", "kt-aside-menu--dropdown");
      document.body.classList.add("kt-aside-menu--dropdown");
      this.attributes.aside_menu["data-ktmenu-dropdown"] = "1";
      this.attributes.aside_menu["data-ktmenu-scroll"] = "0";
    } else {
      this.attributes.aside_menu["data-ktmenu-scroll"] = "1";
    }

    const asideSubmenuDHoverTimeout = objectPath.get(this.config, "aside.menu.submenu.dropdown.hover-timeout");
    if (asideSubmenuDHoverTimeout) {
      this.attributes.aside_menu["data-ktmenu-dropdown-timeout"] = asideSubmenuDHoverTimeout;
    }
  }

  /**
   * Init Footer
   */
  initFooter() {
    // Fixed header
    if (objectPath.get(this.config, "footer.self.fixed")) {
      document.body.classList.add("kt-footer--fixed");
    }

    if (objectPath.get(this.config, "footer.self.width") === "fluid") {
      objectPath.push(this.classes, "footer_container", "kt-container--fluid");
    }
  }

  /**
   *   Set the body class name based on page skin options
   */
  initSkin() {
    if (objectPath.get(this.config, "header.self.skin")) {
      document.body.classList.add(
        "kt-header-base-" + objectPath.get(this.config, "header.self.skin")
      );
    }

    if (objectPath.get(this.config, "header.menu.desktop.submenu.skin")) {
      document.body.classList.add(
        "kt-header-menu-" +
          objectPath.get(this.config, "header.menu.desktop.submenu.skin")
      );
    }

    if (objectPath.get(this.config, "aside.self.display") === false) {
      document.body.classList.add(
        "kt-header-base-" + objectPath.get(this.config, "header.self.skin")
      );
    } else {
      document.body.classList.add(
        "kt-brand-" + objectPath.get(this.config, "brand.self.skin")
      );
    }

    if (objectPath.get(this.config, "aside.self.skin")) {
      document.body.classList.add(
        "kt-aside-" + objectPath.get(this.config, "aside.self.skin")
      );
    }
  }
}

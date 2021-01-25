import React, { useMemo, useState } from "react";
import { shallowEqual, useDispatch, useSelector } from "react-redux";
import { Formik } from "formik";
import { get, merge } from "lodash";
import { FormHelperText, Switch, Tab, Tabs } from "@material-ui/core";
import clsx from "clsx";
import { metronic, initLayoutConfig, LayoutConfig } from "../../../_metronic";
import {
  Portlet,
  PortletBody,
  PortletFooter,
  PortletHeader,
  PortletHeaderToolbar
} from "../../partials/content/Portlet";
import { CodeBlock } from "../../partials/content/CodeExample";
import Notice from "../../partials/content/Notice";

const localStorageActiveTabKey = "builderActiveTab";
export default function Builder() {
  const activeTab = localStorage.getItem(localStorageActiveTabKey);
  const [tab, setTab] = useState(activeTab ? +activeTab : 0);
  const dispatch = useDispatch();
  const { layoutConfig } = useSelector(
    ({ builder }) => ({ layoutConfig: builder.layoutConfig }),
    shallowEqual
  );
  const [loadingPreview, setLoadingPreview] = useState(false);
  const [loadingButtonPreviewStyle, setLoadingButtonPreviewStyle] = useState({
    paddingRight: "2.5rem"
  });
  const [loadingReset, setLoadingReset] = useState(false);
  const [loadingButtonResetStyle, setLoadingButtonResetStyle] = useState({
    paddingRight: "2.5rem"
  });

  const enableLoadingPreview = () => {
    setLoadingPreview(true);
    setLoadingButtonPreviewStyle({ paddingRight: "3.5rem" });
  };
  const enableLoadingReset = () => {
    setLoadingReset(true);
    setLoadingButtonResetStyle({ paddingRight: "3.5rem" });
  };
  const updateLayoutConfig = _config => {
    dispatch(metronic.builder.actions.setLayoutConfigs(_config));
    setTimeout(() => {
      window.location.reload();
    }, 1000);
  };

  const initialValues = useMemo(
    () =>
      merge(
        // Fulfill changeable fields.
        LayoutConfig,
        layoutConfig
      ),
    [layoutConfig]
  );

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        The layout builder helps to configure the layout with preferred options
        and preview it in real time. The configured layout options will be saved
        until you change or reset them. To use the layout builder choose the
        layout options and click the <code>Preview</code> button to preview the
        changes.
      </Notice>
      {/*Formic off site: https://jaredpalmer.com/formik/docs/overview*/}
      <Formik
        initialValues={initialValues}
        onSubmit={values => {
          enableLoadingPreview();
          updateLayoutConfig(values);
        }}
        onReset={() => {
          enableLoadingReset();
          updateLayoutConfig(initLayoutConfig);
        }}
      >
        {({ values, handleReset, handleSubmit, handleChange, handleBlur }) => (
          <div className="kt-form kt-form--label-right">
            <Portlet>
              <PortletHeader
                toolbar={
                  <PortletHeaderToolbar>
                    <Tabs
                      component="div"
                      className="builder-tabs"
                      value={tab}
                      onChange={(_, nextTab) => {
                        setTab(nextTab);
                        localStorage.setItem(localStorageActiveTabKey, nextTab);
                      }}
                    >
                      <Tab label="Skins" />
                      {/* <Tab label="Page" /> */}
                      <Tab label="Header" />
                      <Tab label="Subheader" />
                      <Tab label="Content" />
                      <Tab label="Aside" />
                      <Tab label="Footer" />
                    </Tabs>
                  </PortletHeaderToolbar>
                }
              />

              {tab === 0 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Header Skin:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="header.self.skin"
                            onBlur={handleBlur}
                            value={get(values, "header.self.skin")}
                            onChange={handleChange}
                          >
                            <option value="light">Light (Default)</option>
                            <option value="dark">Dark</option>
                          </select>
                          <FormHelperText>Select header skin</FormHelperText>
                        </div>
                      </div>
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Header Menu Skin:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="header.menu.desktop.submenu.skin"
                            onBlur={handleBlur}
                            value={get(
                              values,
                              "header.menu.desktop.submenu.skin"
                            )}
                            onChange={handleChange}
                          >
                            <option value="light">Light (Default)</option>
                            <option value="dark">Dark</option>
                          </select>
                          <FormHelperText>
                            Select header menu skin
                          </FormHelperText>
                        </div>
                      </div>
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Logo Bar Skin:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="brand.self.skin"
                            onBlur={handleBlur}
                            value={get(values, "brand.self.skin")}
                            onChange={handleChange}
                          >
                            <option value="dark">Dark (Default)</option>
                            <option value="light">Light</option>
                          </select>
                          <FormHelperText>Select logo bar skin</FormHelperText>
                        </div>
                      </div>
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Aside Skin:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="aside.self.skin"
                            onBlur={handleBlur}
                            value={get(values, "aside.self.skin")}
                            onChange={handleChange}
                          >
                            <option value="dark">Dark (Default)</option>
                            <option value="light">Light</option>
                          </select>
                          <FormHelperText>Select logo bar skin</FormHelperText>
                        </div>
                      </div>
                    </div>
                  </div>
                </PortletBody>
              )}

              {tab === 1 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Fixed Desktop Header:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="header.self.fixed.desktop"
                            checked={get(values, "header.self.fixed.desktop")}
                          />
                          <FormHelperText>
                            Enable fixed header for mobile mode
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Mobile Fixed Header:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="header.self.fixed.mobile"
                            checked={get(values, "header.self.fixed.mobile")}
                          />
                          <FormHelperText>
                            Enable fixed header for mobile mode
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="kt-separator kt-separator--space-lg kt-separator--border-dashed" />

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Display Header Menu:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="header.menu.self.display"
                            checked={get(values, "header.menu.self.display")}
                          />
                          <FormHelperText>Display header menu</FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Header Menu Layout:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="header.menu.self.layout"
                            onBlur={handleBlur}
                            value={get(values, "header.menu.self.layout")}
                            onChange={handleChange}
                          >
                            <option value="default">Default</option>
                            <option value="tab">Tab</option>
                          </select>
                          <FormHelperText>
                            Select header menu layout style
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="kt-separator kt-separator--space-lg kt-separator--border-dashed" />

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Header Menu Arrows:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="header.menu.self.root-arrow"
                            checked={get(values, "header.menu.self.root-arrow")}
                          />
                          <FormHelperText>
                            Enable header menu root link arrows
                          </FormHelperText>
                        </div>
                      </div>
                    </div>
                  </div>
                </PortletBody>
              )}

              {tab === 2 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Display Subheader:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="subheader.display"
                            checked={get(values, "subheader.display")}
                          />
                          <FormHelperText>
                            Enable/Disable subheader
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Fixed Subheader:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="subheader.fixed"
                            checked={get(values, "subheader.fixed")}
                          />
                          <FormHelperText>
                            Enable fixed(sticky) subheader. Requires{" "}
                            <code>Solid</code> subheader style.
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Width:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="subheader.width"
                            onBlur={handleBlur}
                            value={get(values, "subheader.width")}
                            onChange={handleChange}
                          >
                            <option value="fluid">Fluid</option>
                            <option value="fixed">Fixed</option>
                          </select>
                          <FormHelperText>
                            Select layout width type
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Subheader Style:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="subheader.style"
                            onBlur={handleBlur}
                            value={get(values, "subheader.style")}
                            onChange={handleChange}
                          >
                            <option value="transparent">Transparent</option>
                            <option value="solid">Solid</option>
                          </select>
                          <FormHelperText>
                            Select subheader style
                          </FormHelperText>
                        </div>
                      </div>

                      {/*    <div className="row">*/}
                      {/*      <div className="col-md-6">*/}
                      {/*       */}

                      {/*        /!* <TextField*/}
                      {/*  select={true}*/}
                      {/*  margin="normal"*/}
                      {/*  label="Subheader Layout"*/}
                      {/*  helperText="Select subheader layout"*/}
                      {/*  name="subheader.layout"*/}
                      {/*  onBlur={handleBlur}*/}
                      {/*  onChange={handleChange}*/}
                      {/*  value={get(values, "subheader.layout")}*/}
                      {/*>*/}
                      {/*  <MenuItem value="subheader-v1">Subheader 1</MenuItem>*/}
                      {/*  <MenuItem value="subheader-v2">Subheader 2</MenuItem>*/}
                      {/*  <MenuItem value="subheader-v3">Subheader 3</MenuItem>*/}
                      {/*</TextField> *!/*/}
                      {/*      </div>*/}
                      {/*    </div>*/}
                    </div>
                  </div>
                </PortletBody>
              )}

              {tab === 3 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Width:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="content.width"
                            onBlur={handleBlur}
                            value={get(values, "content.width")}
                            onChange={handleChange}
                          >
                            <option value="fluid">Fluid</option>
                            <option value="fixed">Fixed</option>
                          </select>
                          <FormHelperText>
                            Select layout width type
                          </FormHelperText>
                        </div>
                      </div>
                    </div>
                  </div>
                </PortletBody>
              )}

              {tab === 4 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Display:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="aside.self.display"
                            checked={get(values, "aside.self.display")}
                          />
                          <FormHelperText>Display aside menu</FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Fixed:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="aside.self.fixed"
                            checked={get(values, "aside.self.fixed")}
                          />
                          <FormHelperText>
                            Set fixed aside layout
                          </FormHelperText>
                        </div>
                      </div>
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Minimize:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="aside.self.minimize.toggle"
                            checked={get(values, "aside.self.minimize.toggle")}
                          />
                          <FormHelperText>
                            Allow aside minimizing
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Default Minimize:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="aside.self.minimize.default"
                            checked={get(values, "aside.self.minimize.default")}
                          />
                          <FormHelperText>
                            Set aside minimized by default
                          </FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label pt-4">
                          Submenu Toggle:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          {" "}
                          <select
                            className="form-control"
                            name="aside.menu.dropdown"
                            onBlur={handleBlur}
                            value={get(
                              values,
                              "aside.menu.dropdown"
                            ).toString()}
                            onChange={handleChange}
                          >
                            <option value="true">Dropdown</option>
                            <option value="false">Accordion</option>
                          </select>
                          <FormHelperText>
                            Select submenu toggle mode (works only when{" "}
                            <code>Fixed Mode</code> is disabled)
                          </FormHelperText>
                        </div>
                      </div>
                    </div>
                  </div>
                </PortletBody>
              )}

              {tab === 5 && (
                <PortletBody>
                  <div className="kt-section kt-margin-t-30">
                    <div className="kt-section__body">
                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Fixed Footer:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <Switch
                            onBlur={handleBlur}
                            onChange={handleChange}
                            name="footer.self.fixed"
                            checked={get(values, "footer.self.fixed")}
                          />

                          <FormHelperText>Set fixed footer</FormHelperText>
                        </div>
                      </div>

                      <div className="form-group row">
                        <label className="col-lg-3 col-form-label">
                          Width:
                        </label>
                        <div className="col-lg-9 col-xl-4">
                          <select
                            className="form-control"
                            name="footer.self.width"
                            onBlur={handleBlur}
                            value={get(values, "footer.self.width")}
                            onChange={handleChange}
                          >
                            <option value="fluid">Fluid</option>
                            <option value="fixed">Fixed</option>
                          </select>
                          <FormHelperText>
                            Select layout width type
                          </FormHelperText>
                        </div>
                      </div>
                    </div>
                  </div>
                </PortletBody>
              )}

              <PortletFooter>
                <div className="kt-padding-30 text-center">
                  <button
                    type="button"
                    onClick={handleSubmit}
                    style={loadingButtonPreviewStyle}
                    className={`btn btn-primary btn-elevate kt-login__btn-primary ${clsx(
                      {
                        "kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light": loadingPreview
                      }
                    )}`}
                  >
                    <i className="la la-eye" /> Preview
                  </button>{" "}
                  <button
                    type="button"
                    onClick={handleReset}
                    style={loadingButtonResetStyle}
                    className={`btn btn-secondary btn-elevate kt-login__btn-primary ${clsx(
                      {
                        "kt-spinner kt-spinner--right kt-spinner--md kt-spinner--dark": loadingReset
                      }
                    )}`}
                  >
                    <i className="la la-recycle" /> Reset
                  </button>
                </div>
              </PortletFooter>
            </Portlet>

            <Portlet>
              <PortletHeader
                title={
                  <>
                    Generated Config{" "}
                    <small>
                      can be used for layout config in{" "}
                      <code>/src/_metronic/layouts/demo1/LayoutConfig.js</code>
                    </small>
                  </>
                }
              />

              <PortletBody>
                <CodeBlock
                  disableCopy="true"
                  language="json"
                  code={JSON.stringify(values, null, 2)}
                />
              </PortletBody>
            </Portlet>
          </div>
        )}
      </Formik>
    </>
  );
}

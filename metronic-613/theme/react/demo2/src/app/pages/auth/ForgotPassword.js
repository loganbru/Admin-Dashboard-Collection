import React, { Component } from "react";
import { Formik } from "formik";
import { connect } from "react-redux";
import { TextField } from "@material-ui/core";
import { Link, Redirect } from "react-router-dom";
import { FormattedMessage, injectIntl } from "react-intl";
import * as auth from "../../store/ducks/auth.duck";
import { requestPassword } from "../../crud/auth.crud";

class ForgotPassword extends Component {
  state = { isRequested: false };

  render() {
    const { intl } = this.props;
    const { isRequested } = this.state;

    if (isRequested) {
      return <Redirect to="/auth" />;
    }

    return (
      <div className="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
        <div className="kt-login__body">
          <div className="kt-login__form">
            <div className="kt-login__title">
              <h3>
                <FormattedMessage id="AUTH.FORGOT.TITLE" />
              </h3>
            </div>

            <Formik
              initialValues={{ email: "" }}
              validate={values => {
                const errors = {};

                if (!values.email) {
                  errors.email = intl.formatMessage({
                    id: "AUTH.VALIDATION.REQUIRED_FIELD"
                  });
                } else if (
                  !/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(values.email)
                ) {
                  errors.email = intl.formatMessage({
                    id: "AUTH.VALIDATION.INVALID_FIELD"
                  });
                }

                return errors;
              }}
              onSubmit={(values, { setStatus, setSubmitting }) => {
                requestPassword(values.email)
                  .then(() => {
                    this.setState({ isRequested: true });
                  })
                  .catch(() => {
                    setSubmitting(false);
                    setStatus(
                      intl.formatMessage(
                        { id: "AUTH.VALIDATION.NOT_FOUND" },
                        { name: values.email }
                      )
                    );
                  });
              }}
            >
              {({
                values,
                status,
                errors,
                touched,
                handleChange,
                handleBlur,
                handleSubmit,
                isSubmitting
              }) => (
                <form onSubmit={handleSubmit} className="kt-form">
                  {status && (
                    <div role="alert" className="alert alert-danger">
                      <div className="alert-text">{status}</div>
                    </div>
                  )}

                  <div className="form-group">
                    <TextField
                      type="email"
                      label="Email"
                      margin="normal"
                      fullWidth={true}
                      name="email"
                      onBlur={handleBlur}
                      onChange={handleChange}
                      value={values.email}
                      helperText={touched.email && errors.email}
                      error={Boolean(touched.email && errors.email)}
                    />
                  </div>

                  <div className="kt-login__actions">
                    <Link
                      to="/auth"
                      className="btn btn-secondary btn-elevate kt-login__btn-secondary"
                    >
                      Back
                    </Link>

                    <button
                      type="submit"
                      className="btn btn-primary btn-elevate kt-login__btn-primary"
                      disabled={isSubmitting}
                    >
                      Submit
                    </button>
                  </div>
                </form>
              )}
            </Formik>
          </div>
        </div>
      </div>
    );
  }
}

export default injectIntl(
  connect(
    null,
    auth.actions
  )(ForgotPassword)
);

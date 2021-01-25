import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { Spinner, Button, ButtonToolbar } from "react-bootstrap";

export default class SpinnersExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://react-bootstrap.github.io/components/spinners/"
          >
            demos & documentation
          </a>
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Spinners">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Spinners can be used to show the loading state in your
                  projects.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <Spinner animation="border" role="status">
                  <span className="sr-only">Loading...</span>
                </Spinner>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode2} beforeCodeTitle="Animations">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Bootstrap offers two animation styles for spinners. The
                  animation style can be configured with the{" "}
                  <code>animation</code> property. An animation style must
                  always be provided when creating a spinner.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <Spinner animation="grow" />
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode3} beforeCodeTitle="Variants">
              <div className="kt-section">
                <span className="kt-section__sub">
                  All standard visual variants are available for both animation
                  styles by setting the <code>variant</code> property.
                  Alternatively spinners can be custom sized with the{" "}
                  <code>style</code> property, or custom CSS classes.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <p>
                  <span className="pr-4">
                    <Spinner animation="border" variant="primary" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="secondary" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="success" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="danger" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="warning" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="info" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="light" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" variant="dark" />
                  </span>
                </p>
                <p>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="primary" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="secondary" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="success" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="danger" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="warning" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="info" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="light" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" variant="dark" />
                  </span>
                </p>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode4} beforeCodeTitle="Sizing">
              <div className="kt-section">
                <span className="kt-section__sub">
                  In addition to the standard size, a smaller additional
                  preconfigured size is available by configuring the{" "}
                  <code>size</code> property to <code>sm</code>.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <>
                  <span className="pr-4">
                    <Spinner animation="border" size="sm" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="border" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" size="sm" />
                  </span>
                  <span className="pr-4">
                    <Spinner animation="grow" />
                  </span>
                </>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Buttons">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Like the original Bootstrap spinners, these can also be used
                  with buttons. To use this component out-of-the-box it is
                  recommended you change the element type to <code>span</code>{" "}
                  by configuring the <code>as</code> property when using
                  spinners inside buttons.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar>
                  <Button variant="primary" disabled>
                    <Spinner
                      as="span"
                      animation="border"
                      size="sm"
                      role="status"
                      aria-hidden="true"
                    />
                    <span className="sr-only">Loading...</span>
                  </Button>
                  <Button variant="primary" disabled>
                    <Spinner
                      as="span"
                      animation="grow"
                      size="sm"
                      role="status"
                      aria-hidden="true"
                    />
                    Loading...
                  </Button>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Accessibility">
              <div className="kt-section">
                <span className="kt-section__sub">
                  To ensure the maximum accessibility for spinner components it
                  is recommended you provide a relevant ARIA <code>role</code>{" "}
                  property, and include screenreader-only readable text
                  representation of the spinner's meaning inside the component
                  using Bootstrap's <code>sr-only</code> class.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <Spinner animation="border" role="status">
                  <span className="sr-only">Loading...</span>
                </Spinner>
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<Spinner animation="border" role="status">
  <span className="sr-only">Loading...</span>
</Spinner>
`;
const jsCode2 = `
<Spinner animation="grow" />
`;
const jsCode3 = `
<>
  <Spinner animation="border" variant="primary" />
  <Spinner animation="border" variant="secondary" />
  <Spinner animation="border" variant="success" />
  <Spinner animation="border" variant="danger" />
  <Spinner animation="border" variant="warning" />
  <Spinner animation="border" variant="info" />
  <Spinner animation="border" variant="light" />
  <Spinner animation="border" variant="dark" />
  <Spinner animation="grow" variant="primary" />
  <Spinner animation="grow" variant="secondary" />
  <Spinner animation="grow" variant="success" />
  <Spinner animation="grow" variant="danger" />
  <Spinner animation="grow" variant="warning" />
  <Spinner animation="grow" variant="info" />
  <Spinner animation="grow" variant="light" />
  <Spinner animation="grow" variant="dark" />
</>
`;
const jsCode4 = `
<>
  <Spinner animation="border" size="sm" />
  <Spinner animation="border" />
  <Spinner animation="grow" size="sm" />
  <Spinner animation="grow" />
</>
`;
const jsCode5 = `
<ButtonToolbar>
  <Button variant="primary" disabled>
    <Spinner
      as="span"
      animation="border"
      size="sm"
      role="status"
      aria-hidden="true"
    />
    <span className="sr-only">Loading...</span>
  </Button>
  <Button variant="primary" disabled>
    <Spinner
      as="span"
      animation="grow"
      size="sm"
      role="status"
      aria-hidden="true"
    />
    Loading...
  </Button>
</ButtonToolbar>
`;
const jsCode6 = `
<Spinner animation="border" role="status">
  <span className="sr-only">Loading...</span>
</Spinner>
`;

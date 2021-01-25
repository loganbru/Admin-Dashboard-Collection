import React from "react";
import Notice from "../../../../partials/content/Notice";
import { Box } from "@material-ui/core";
import CodeExample from "../../../../partials/content/CodeExample";

const jsCode = `
<Box component="span" m={5}>
  <Button />
</Box>
`;
const jsCode2 = `
<Box color="text.primary" clone>
  <Button />
</Box>
`;
const jsCode3 = `
<Box color="text.primary">
  {props => <Button {...props} />}
</Box>
`;

export default function BoxExamplesPage() {
  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          The Box component serves as a wrapper component for most of the CSS
          utility needs.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/box/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode} beforeCodeTitle="Common example">
        <div className="kt-section">
          <span className="kt-section__sub">
            The Box component wraps your component. It creates a new DOM
            element, a <code>&lt;div&gt;</code> by default that can be changed
            with the <code>component</code> property. Let's say you want to use
            a <code>&lt;span&gt;</code> with <code>margin</code> instead of{" "}
            <code>&lt;div&gt;</code>:
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Box component="span" m={5}>
              <button type="button" className="btn btn-primary">
                Button with margin 5
              </button>
            </Box>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode2} beforeCodeTitle="Clone example">
        <div className="kt-section">
          <p className="kt-section__sub">
            However, sometimes you have to target the underlying DOM element.
            For instance, you want to change the text color of the button. The
            Button component defines its own color. CSS inheritance doesn't
            help. To workaround the problem, you have two options:
          </p>
          <p className="kt-section__sub">
            1. <code>Use React.cloneElement()</code>
          </p>
          <p className="kt-section__sub">
            The Box component has a clone property to enable the usage of the
            clone element method of React.
          </p>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Box color="text.primary">
              <button type="button" className="btn">
                Primary text
              </button>
            </Box>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode3} beforeCodeTitle="Props example">
        <div className="kt-section">
          <p className="kt-section__sub">
            2. <code>Use render props</code>
          </p>
          <p className="kt-section__sub">
            The Box children accepts a render props function. You can pull out
            the <code>className</code>.
          </p>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Box color="text.primary">
              {props => (
                <button type="button" className="btn" {...props}>
                  PROPS{" "}
                </button>
              )}
            </Box>
          </div>
        </div>
      </CodeExample>

      <Notice icon="flaticon-warning kt-font-primary" className="alert-warning">
        The CSS specificity relies on the import order. If you want the
        guarantee that the wrapped component's style will be overridden, you
        need to import the Box last.
      </Notice>
    </>
  );
}

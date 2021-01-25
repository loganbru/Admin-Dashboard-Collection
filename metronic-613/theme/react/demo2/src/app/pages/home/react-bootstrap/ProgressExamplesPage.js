import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { ProgressBar } from "react-bootstrap";

const now = 60;
const progressInstance = <ProgressBar now={now} label={`${now}%`} />;
const progressInstance1 = <ProgressBar now={now} label={`${now}%`} srOnly />;

export default class ProgressExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>
            Provide up-to-date feedback on the progress of a workflow or action
            with simple yet flexible progress bars.
          </p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href="https://react-bootstrap.github.io/components/progress/"
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
              <div className="kt-section">
                <span className="kt-section__sub">Default progress bar.</span>
                <div className="kt-separator kt-separator--dashed"></div>
                <ProgressBar now={60} />
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode2} beforeCodeTitle="With label">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Add a <code>label</code> prop to show a visible percentage.
                  For low percentages, consider adding a min-width to ensure the
                  label's text is fully visible.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                {progressInstance}
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode3}
              beforeCodeTitle="Screenreader only label"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  Add a <code>srOnly</code> prop to hide the label visually.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                {progressInstance1}
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode4}
              beforeCodeTitle="Contextual alternatives"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  Progress bars use some of the same button and alert classes
                  for consistent styles.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <div>
                  <ProgressBar variant="success" now={40} />
                  <ProgressBar variant="info" now={20} />
                  <ProgressBar variant="warning" now={60} />
                  <ProgressBar variant="danger" now={80} />
                </div>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Striped">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Uses a gradient to create a striped effect. Not available in
                  IE8.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <div>
                  <ProgressBar striped variant="success" now={40} />
                  <ProgressBar striped variant="info" now={20} />
                  <ProgressBar striped variant="warning" now={60} />
                  <ProgressBar striped variant="danger" now={80} />
                </div>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Animated">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Add <code>animated</code> prop to animate the stripes right to
                  left. Not available in IE9 and below.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <ProgressBar animated now={45} />
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode7} beforeCodeTitle="Stacked">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Nest <code>&lt;ProgressBar /&gt;</code>s to stack them.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <div>
                  <ProgressBar striped variant="success" now={40} />
                  <ProgressBar striped variant="info" now={20} />
                  <ProgressBar striped variant="warning" now={60} />
                  <ProgressBar striped variant="danger" now={80} />
                </div>
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<ProgressBar now={60} />
`;
const jsCode2 = `
const now = 60;

const progressInstance = <ProgressBar now={now} label={\`\${now}%\`} />;

render(progressInstance);
`;
const jsCode3 = `
const now = 60;

const progressInstance = <ProgressBar now={now} label={\`\${now}%\`} srOnly />;

render(progressInstance);
`;
const jsCode4 = `
<div>
  <ProgressBar variant="success" now={40} />
  <ProgressBar variant="info" now={20} />
  <ProgressBar variant="warning" now={60} />
  <ProgressBar variant="danger" now={80} />
</div>
`;
const jsCode5 = `
<div>
  <ProgressBar striped variant="success" now={40} />
  <ProgressBar striped variant="info" now={20} />
  <ProgressBar striped variant="warning" now={60} />
  <ProgressBar striped variant="danger" now={80} />
</div>
`;
const jsCode6 = `
<ProgressBar animated now={45} />
`;
const jsCode7 = `
<ProgressBar>
  <ProgressBar striped variant="success" now={35} key={1} />
  <ProgressBar variant="warning" now={20} key={2} />
  <ProgressBar striped variant="danger" now={10} key={3} />
</ProgressBar>
`;

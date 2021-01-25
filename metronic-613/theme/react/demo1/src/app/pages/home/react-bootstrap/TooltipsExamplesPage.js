import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import {
  Button,
  Overlay,
  Tooltip,
  OverlayTrigger,
  ButtonToolbar
} from "react-bootstrap";

class Example extends React.Component {
  constructor(...args) {
    super(...args);

    this.attachRef = target => this.setState({ target });
    this.state = { show: false };
  }

  render() {
    const { show, target } = this.state;
    return (
      <>
        <Button
          ref={this.attachRef}
          onClick={() => this.setState({ show: !show })}
        >
          Click me!
        </Button>
        <Overlay target={target} show={show} placement="right">
          {props => (
            <Tooltip id="overlay-example" {...props}>
              My Tooltip
            </Tooltip>
          )}
        </Overlay>
      </>
    );
  }
}

export default class TooltipsExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>
            A tooltip component for a more stylish alternative to that anchor
            tag <code>title</code> attribute.
          </p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href="https://react-bootstrap.github.io/components/overlays/#tooltips"
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
          <div className="kt-section">
            <span className="kt-section__sub">
              You can pass the <code>Overlay</code> injected props directly to
              the Tooltip component.
            </span>
            <div className="kt-separator kt-separator--dashed"></div>
            <Example />
          </div>
        </CodeExample>

        <CodeExample jsCode={jsCode2} beforeCodeTitle="Trigger">
          <div className="kt-section">
            <span className="kt-section__sub">
              Or pass a Tooltip element to <code>OverlayTrigger</code> instead.
            </span>
            <div className="kt-separator kt-separator--dashed"></div>
            <ButtonToolbar>
              {["top", "right", "bottom", "left"].map(placement => (
                <OverlayTrigger
                  key={placement}
                  placement={placement}
                  overlay={
                    <Tooltip id={`tooltip-${placement}`}>
                      Tooltip on <strong>{placement}</strong>.
                    </Tooltip>
                  }
                >
                  <Button variant="secondary">Tooltip on {placement}</Button>
                </OverlayTrigger>
              ))}
            </ButtonToolbar>
          </div>
        </CodeExample>
      </>
    );
  }
}

const jsCode1 = `
class Example extends React.Component {
  constructor(...args) {
    super(...args);

    this.attachRef = target => this.setState({ target });
    this.state = { show: false };
  }

  render() {
    const { show, target } = this.state;
    return (
      <>
        <Button
          ref={this.attachRef}
          onClick={() => this.setState({ show: !show })}
        >
          Click me!
        </Button>
        <Overlay target={target} show={show} placement="right">
          {props => (
            <Tooltip id="overlay-example" {...props}>
              My Tooltip
            </Tooltip>
          )}
        </Overlay>
      </>
    );
  }
}

render(<Example />);
`;
const jsCode2 = `
<ButtonToolbar>
  {['top', 'right', 'bottom', 'left'].map(placement => (
    <OverlayTrigger
      key={placement}
      placement={placement}
      overlay={
        <Tooltip id={\`tooltip-\${placement}\`}>
          Tooltip on <strong>{placement}</strong>.
        </Tooltip>
      }
    >
      <Button variant="secondary">Tooltip on {placement}</Button>
    </OverlayTrigger>
  ))}
</ButtonToolbar>
`;

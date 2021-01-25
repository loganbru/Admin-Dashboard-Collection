import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import {
  Button,
  Popover,
  OverlayTrigger,
  ButtonToolbar
} from "react-bootstrap";

const popover = (
  <Popover id="popover-basic" title="Popover right">
    And here's some <strong>amazing</strong> content. It's very engaging. right?
  </Popover>
);

const Example = () => (
  <OverlayTrigger trigger="click" placement="right" overlay={popover}>
    <Button variant="success">Click me to see</Button>
  </OverlayTrigger>
);

export default class PopoversExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>A popover component, like those found in iOS.</p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href="https://react-bootstrap.github.io/components/overlays/#popovers"
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
          <div className="kt-section">
            <span className="kt-section__sub"></span>
            <Example />
          </div>
        </CodeExample>

        <CodeExample jsCode={jsCode2} beforeCodeTitle="Placement">
          <div className="kt-section">
            <span className="kt-section__sub">
              You can control the placement of the Popover.
            </span>
            <div className="kt-separator kt-separator--dashed"></div>
            <ButtonToolbar>
              {["top", "right", "bottom", "left"].map(placement => (
                <OverlayTrigger
                  trigger="click"
                  key={placement}
                  placement={placement}
                  overlay={
                    <Popover
                      id={`popover-positioned-${placement}`}
                      title={`Popover ${placement}`}
                    >
                      <strong>Holy guacamole!</strong> Check this info.
                    </Popover>
                  }
                >
                  <Button variant="secondary">Popover on {placement}</Button>
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
const popover = (
  <Popover id="popover-basic" title="Popover right">
    And here's some <strong>amazing</strong> content. It's very engaging. right?
  </Popover>
);

const Example = () => (
  <OverlayTrigger trigger="click" placement="right" overlay={popover}>
    <Button variant="success">Click me to see</Button>
  </OverlayTrigger>
);

render(<Example />);
`;
const jsCode2 = `
<ButtonToolbar>
  {['top', 'right', 'bottom', 'left'].map(placement => (
    <OverlayTrigger
      trigger="click"
      key={placement}
      placement={placement}
      overlay={
        <Popover
          id={\`popover-positioned-\${placement}\`}
          title={\`Popover \${placement}\`}
        >
          <strong>Holy guacamole!</strong> Check this info.
        </Popover>
      }
    >
      <Button variant="secondary">Popover on {placement}</Button>
    </OverlayTrigger>
  ))}
</ButtonToolbar>
`;

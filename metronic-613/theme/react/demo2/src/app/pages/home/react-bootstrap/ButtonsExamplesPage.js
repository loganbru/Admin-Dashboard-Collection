/* eslint-disable jsx-a11y/anchor-is-valid */
import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import {
  Button,
  ButtonToolbar,
  ButtonGroup,
  ToggleButton,
  ToggleButtonGroup
} from "react-bootstrap";

function simulateNetworkRequest() {
  return new Promise(resolve => setTimeout(resolve, 2000));
}

class LoadingButton extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.handleClick = this.handleClick.bind(this);

    this.state = {
      isLoading: false
    };
  }

  handleClick() {
    this.setState({ isLoading: true }, () => {
      simulateNetworkRequest().then(() => {
        this.setState({ isLoading: false });
      });
    });
  }

  render() {
    const { isLoading } = this.state;

    return (
      <Button
        variant="primary"
        disabled={isLoading}
        onClick={!isLoading ? this.handleClick : null}
      >
        {isLoading ? "Loading…" : "Click to load"}
      </Button>
    );
  }
}

class ToggleButtonGroupControlled extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.handleChange = this.handleChange.bind(this);

    this.state = {
      value: [1, 3]
    };
  }

  handleChange(value, event) {
    this.setState({ value });
  }

  render() {
    return (
      <ToggleButtonGroup
        type="checkbox"
        onChange={this.handleChange}
        defaultValue={this.state.value}
        name="toggleButtonGroup"
      >
        <ToggleButton value={1}>Option 1</ToggleButton>
        <ToggleButton value={2}>Option 2</ToggleButton>
        <ToggleButton value={3}>Option 3</ToggleButton>
      </ToggleButtonGroup>
    );
  }
}

export default class ButtonsExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>
            Custom button styles for actions in forms, dialogs, and more with
            support for multiple sizes, states, and more.
          </p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href=""
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Examples">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Use any of the available button style types to quickly create
                  a styled button. Just modify the <code>variant</code> prop.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar>
                  <p>
                    <span className="pr-4">
                      <Button variant="primary">Primary</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="secondary">Secondary</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="success">Success</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="warning">Warning</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="danger">Danger</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="info">Info</Button>
                    </span>
                  </p>
                  <p>
                    <span className="pr-4">
                      <Button variant="light">Light</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="dark">Dark</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="link">Link</Button>
                    </span>
                  </p>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode2} beforeCodeTitle="Outline buttons">
              <div className="kt-section">
                <span className="kt-section__sub">
                  For a lighter touch, Buttons also come in{" "}
                  <code>outline-*</code> variants with no background color.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar>
                  <p>
                    <span className="pr-4">
                      <Button variant="outline-primary">Primary</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-secondary">Secondary</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-success">Success</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-warning">Warning</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-danger">Danger</Button>
                    </span>
                  </p>
                  <p>
                    <span className="pr-4">
                      <Button variant="outline-info">Info</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-dark">Dark</Button>
                    </span>
                    <span className="pr-4">
                      <Button variant="outline-light">Light</Button>
                    </span>
                  </p>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode3} beforeCodeTitle="Button tags">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Normally <code>&lt;Button&gt;</code> components will render a
                  HTML <code>&lt;button&gt;</code> element. However you can
                  render whatever you'd like, adding a <code>href</code> prop
                  will automatically render an <code>&lt;a /&gt;</code> element.
                  You can use the <code>as</code> prop to render whatever your
                  heart desires. React Bootstrap will take care of the proper
                  ARIA roles for you.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar className="pb-2">
                  <span className="pr-1">
                    <Button href="#">Link</Button>
                  </span>
                  <span className="pr-1">
                    <Button type="submit">Button</Button>
                  </span>
                  <span className="pr-1">
                    <Button as="input" type="button" value="Input" />
                  </span>
                </ButtonToolbar>
                <ButtonToolbar>
                  <span className="pr-1">
                    <Button as="input" type="submit" value="Submit" />
                  </span>
                  <span className="pr-1">
                    <Button as="input" type="reset" value="Reset" />
                  </span>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode4} beforeCodeTitle="Sizes">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Fancy larger or smaller buttons? Add <code>size="lg"</code>,{" "}
                  <code>size="sm"</code> for additional sizes.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <div>
                  <p>
                    <ButtonToolbar>
                      <span className="pr-4">
                        <Button variant="primary" size="lg">
                          Large button
                        </Button>
                      </span>
                      <span className="pr-4">
                        <Button variant="secondary" size="lg">
                          Large button
                        </Button>
                      </span>
                    </ButtonToolbar>
                  </p>
                  <p>
                    <ButtonToolbar>
                      <span className="pr-4">
                        <Button variant="primary" size="sm">
                          Small button
                        </Button>
                      </span>
                      <span className="pr-4">
                        <Button variant="secondary" size="sm">
                          Small button
                        </Button>
                      </span>
                    </ButtonToolbar>
                  </p>
                </div>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Sizes">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Create block level buttons—those that span the full width of a
                  parent—by adding block
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <div>
                  <Button variant="primary" size="lg" block>
                    Block level button
                  </Button>
                  <Button variant="secondary" size="lg" block>
                    Block level button
                  </Button>
                </div>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Active state">
              <div className="kt-section">
                <span className="kt-section__sub">
                  To set a buttons active state simply set the components{" "}
                  <code>active</code> prop.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar>
                  <span className="pr-4">
                    <Button variant="primary" size="lg" active>
                      Primary button
                    </Button>
                  </span>
                  <span className="pr-4">
                    <Button variant="secondary" size="lg" active>
                      Button
                    </Button>
                  </span>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode7} beforeCodeTitle="Disabled state">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Make buttons look inactive by adding the <code>disabled</code>{" "}
                  prop to.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <ButtonToolbar>
                  <span className="pr-4">
                    <Button variant="primary" size="lg" disabled>
                      Primary button
                    </Button>
                  </span>
                  <span className="pr-4">
                    <Button variant="secondary" size="lg" disabled>
                      Button
                    </Button>
                  </span>
                  <span className="pr-4">
                    <Button href="#" variant="secondary" size="lg" disabled>
                      Link
                    </Button>
                  </span>
                </ButtonToolbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode8}
              beforeCodeTitle="Button loading state"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  When activating an asynchronous action from a button it is a
                  good UX pattern to give the user feedback as to the loading
                  state, this can easily be done by updating your{" "}
                  <code>&lt;Button /&gt;</code>s props from a state change like
                  below.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <LoadingButton />
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode9} beforeCodeTitle="Checkbox / Radio">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Button's can also be used to style <code>checkbox</code> and{" "}
                  <code>radio</code> form elements. This is helpful when you
                  want a toggle button that works neatly inside an HTML form.
                </span>
                <div className="kt-separator kt-separator--dashed" />
                <div className="d-flex flex-column">
                  <ButtonGroup toggle>
                    <ToggleButton type="checkbox" defaultChecked value="1">
                      Checked
                    </ToggleButton>
                  </ButtonGroup>
                  <ButtonGroup toggle className="mt-3">
                    <ToggleButton
                      type="radio"
                      name="radio"
                      defaultChecked
                      value="1"
                    >
                      Active
                    </ToggleButton>
                    <ToggleButton type="radio" name="radio" value="2">
                      Radio
                    </ToggleButton>
                    <ToggleButton type="radio" name="radio" value="3">
                      Radio
                    </ToggleButton>
                  </ButtonGroup>
                </div>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode10} beforeCodeTitle="Uncontrolled">
              <div className="kt-section">
                <span className="kt-section__sub" />
                <div className="kt-separator kt-separator--dashed" />
                <>
                  <p>
                    <ButtonToolbar>
                      <ToggleButtonGroup
                        type="checkbox"
                        defaultValue={[1, 3]}
                        name="Uncontrolled"
                      >
                        <ToggleButton value={1}>
                          Checkbox 1 (pre-checked)
                        </ToggleButton>
                        <ToggleButton value={2}>Checkbox 2</ToggleButton>
                        <ToggleButton value={3}>
                          Checkbox 3 (pre-checked)
                        </ToggleButton>
                      </ToggleButtonGroup>
                    </ButtonToolbar>
                  </p>
                  <p>
                    <ButtonToolbar>
                      <ToggleButtonGroup
                        type="radio"
                        name="options"
                        defaultValue={1}
                      >
                        <ToggleButton value={1}>
                          Radio 1 (pre-checked)
                        </ToggleButton>
                        <ToggleButton value={2}>Radio 2</ToggleButton>
                        <ToggleButton value={3}>Radio 3</ToggleButton>
                      </ToggleButtonGroup>
                    </ButtonToolbar>
                  </p>
                </>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode11} beforeCodeTitle="Controlled">
              <div className="kt-section">
                <span className="kt-section__sub"></span>
                <div className="kt-separator kt-separator--dashed"></div>
                <ToggleButtonGroupControlled />
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<ButtonToolbar>
  <Button variant="primary">Primary</Button>
  <Button variant="secondary">Secondary</Button>
  <Button variant="success">Success</Button>
  <Button variant="warning">Warning</Button>
  <Button variant="danger">Danger</Button>
  <Button variant="info">Info</Button>
  <Button variant="light">Light</Button>
  <Button variant="dark">Dark</Button>
  <Button variant="link">Link</Button>
</ButtonToolbar>
`;
const jsCode2 = `
<ButtonToolbar>
  <Button variant="outline-primary">Primary</Button>
  <Button variant="outline-secondary">Secondary</Button>
  <Button variant="outline-success">Success</Button>
  <Button variant="outline-warning">Warning</Button>
  <Button variant="outline-danger">Danger</Button>
  <Button variant="outline-info">Info</Button>
  <Button variant="outline-light">Light</Button>
  <Button variant="outline-dark">Dark</Button>
</ButtonToolbar>
`;
const jsCode3 = `
<ButtonToolbar>
  <Button href="#">Link</Button>
  <Button type="submit">Button</Button>
  <Button as="input" type="button" value="Input" />
  <Button as="input" type="submit" value="Submit" />
  <Button as="input" type="reset" value="Reset" />
</ButtonToolbar>
`;
const jsCode4 = `
<div>
  <ButtonToolbar>
    <Button variant="primary" size="lg">
      Large button
    </Button>
    <Button variant="secondary" size="lg">
      Large button
    </Button>
  </ButtonToolbar>

  <ButtonToolbar>
    <Button variant="primary" size="sm">
      Small button
    </Button>
    <Button variant="secondary" size="sm">
      Small button
    </Button>
  </ButtonToolbar>
</div>
`;
const jsCode5 = `
<div>
  <Button variant="primary" size="lg" block>
    Block level button
  </Button>
  <Button variant="secondary" size="lg" block>
    Block level button
  </Button>
</div>
`;
const jsCode6 = `
<ButtonToolbar>
  <Button variant="primary" size="lg" active>
    Primary button
  </Button>
  <Button variant="secondary" size="lg" active>
    Button
  </Button>
</ButtonToolbar>
`;
const jsCode7 = `
<ButtonToolbar>
  <Button variant="primary" size="lg" disabled>
    Primary button
  </Button>{' '}
  <Button variant="secondary" size="lg" disabled>
    Button
  </Button>{' '}
  <Button href="#" variant="secondary" size="lg" disabled>
    Link
  </Button>
</ButtonToolbar>
`;
const jsCode8 = `
function simulateNetworkRequest() {
  return new Promise(resolve => setTimeout(resolve, 2000));
}

class LoadingButton extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.handleClick = this.handleClick.bind(this);

    this.state = {
      isLoading: false,
    };
  }

  handleClick() {
    this.setState({ isLoading: true }, () => {
      simulateNetworkRequest().then(() => {
        this.setState({ isLoading: false });
      });
    });
  }

  render() {
    const { isLoading } = this.state;

    return (
      <Button
        variant="primary"
        disabled={isLoading}
        onClick={!isLoading ? this.handleClick : null}
      >
        {isLoading ? 'Loading…' : 'Click to load'}
      </Button>
    );
  }
}

render(<LoadingButton />);
`;
const jsCode9 = `
<div className="d-flex flex-column">
  <ButtonGroup toggle>
    <ToggleButton type="checkbox" defaultChecked value="1">
      Checked
    </ToggleButton>
  </ButtonGroup>
  <ButtonGroup toggle className="mt-3">
    <ToggleButton type="radio" name="radio" defaultChecked value="1">
      Active
    </ToggleButton>
    <ToggleButton type="radio" name="radio" value="2">
      Radio
    </ToggleButton>
    <ToggleButton type="radio" name="radio" value="3">
      Radio
    </ToggleButton>
  </ButtonGroup>
</div>
`;
const jsCode10 = `
<>
  <ButtonToolbar>
    <ToggleButtonGroup type="checkbox" defaultValue={[1, 3]}>
      <ToggleButton value={1}>Checkbox 1 (pre-checked)</ToggleButton>
      <ToggleButton value={2}>Checkbox 2</ToggleButton>
      <ToggleButton value={3}>Checkbox 3 (pre-checked)</ToggleButton>
    </ToggleButtonGroup>
  </ButtonToolbar>

  <ButtonToolbar>
    <ToggleButtonGroup type="radio" name="options" defaultValue={1}>
      <ToggleButton value={1}>Radio 1 (pre-checked)</ToggleButton>
      <ToggleButton value={2}>Radio 2</ToggleButton>
      <ToggleButton value={3}>Radio 3</ToggleButton>
    </ToggleButtonGroup>
  </ButtonToolbar>
</>
`;
const jsCode11 = `
class ToggleButtonGroupControlled extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.handleChange = this.handleChange.bind(this);

    this.state = {
      value: [1, 3],
    };
  }

  handleChange(value, event) {
    this.setState({ value });
  }

  render() {
    return (
      <ToggleButtonGroup
        type="checkbox"
        value={this.state.value}
        onChange={this.handleChange}
      >
        <ToggleButton value={1}>Option 1</ToggleButton>
        <ToggleButton value={2}>Option 2</ToggleButton>
        <ToggleButton value={3}>Option 3</ToggleButton>
      </ToggleButtonGroup>
    );
  }
}

render(<ToggleButtonGroupControlled />);
`;

import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { Nav, NavDropdown } from "react-bootstrap";

class NavDropdownExample extends React.Component {
  handleSelect(eventKey) {
    alert(`selected ${eventKey}`);
  }

  render() {
    return (
      <Nav variant="pills" activeKey="1" onSelect={k => this.handleSelect(k)}>
        <Nav.Item>
          <Nav.Link eventKey="1" href="#/home">
            NavLink 1 content
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="2" title="Item">
            NavLink 2 content
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="3" disabled>
            NavLink 3 content
          </Nav.Link>
        </Nav.Item>
        <NavDropdown title="Dropdown" id="nav-dropdown">
          <NavDropdown.Item eventKey="4.1">Action</NavDropdown.Item>
          <NavDropdown.Item eventKey="4.2">Another action</NavDropdown.Item>
          <NavDropdown.Item eventKey="4.3">
            Something else here
          </NavDropdown.Item>
          <NavDropdown.Divider />
          <NavDropdown.Item eventKey="4.4">Separated link</NavDropdown.Item>
        </NavDropdown>
      </Nav>
    );
  }
}

export default class NavsExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://react-bootstrap.github.io/components/navs/"
          >
            demos & documentation
          </a>
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Base Nav">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Navigation bits in Bootstrap all share a general{" "}
                  <code>Nav</code> component and styles. Swap{" "}
                  <code>variant</code>s to switch between each style. The base{" "}
                  <code>Nav</code> component is built with flexbox and provide a
                  strong foundation for building all types of navigation
                  components.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Nav
                  activeKey="/home"
                  onSelect={selectedKey => alert(`selected ${selectedKey}`)}
                >
                  <Nav.Item>
                    <Nav.Link href="/home">Active</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-1">Link</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-2">Link</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="disabled" disabled>
                      Disabled
                    </Nav.Link>
                  </Nav.Item>
                </Nav>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode2}
              beforeCodeTitle="Alignment and orientation"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  You can control the the direction and orientation of the{" "}
                  <code>Nav</code> by making use of the flexbox layout utility
                  classes. By default, navs are left-aligned, but that is easily
                  changed to center or right-aligned.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <>
                  <Nav className="justify-content-center" activeKey="/home">
                    <Nav.Item>
                      <Nav.Link href="/home">Active</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="link-1">Link</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="link-2">Link</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="disabled" disabled>
                        Disabled
                      </Nav.Link>
                    </Nav.Item>
                  </Nav>
                  <p className="text-center mt-4 mb-4">Or right-aligned</p>
                  <Nav className="justify-content-end" activeKey="/home">
                    <Nav.Item>
                      <Nav.Link href="/home">Active</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="link-1">Link</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="link-2">Link</Nav.Link>
                    </Nav.Item>
                    <Nav.Item>
                      <Nav.Link eventKey="disabled" disabled>
                        Disabled
                      </Nav.Link>
                    </Nav.Item>
                  </Nav>
                </>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode3} beforeCodeTitle="Vertical">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Create stacked navs by changing the flex item direction with
                  the <code>.flex-column</code> class, or your own css.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Nav defaultActiveKey="/home" className="flex-column">
                  <Nav.Link href="/home">Active</Nav.Link>
                  <Nav.Link eventKey="link-1">Link</Nav.Link>
                  <Nav.Link eventKey="link-2">Link</Nav.Link>
                  <Nav.Link eventKey="disabled" disabled>
                    Disabled
                  </Nav.Link>
                </Nav>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode4} beforeCodeTitle="Tabs">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Visually represent nav items as "tabs". This style pairs
                  nicely with tabbable regions created by our Tab components
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Nav variant="tabs" defaultActiveKey="/home">
                  <Nav.Item>
                    <Nav.Link href="/home">Active</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-1">Option 2</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="disabled" disabled>
                      Disabled
                    </Nav.Link>
                  </Nav.Item>
                </Nav>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Pills">
              <div className="kt-section">
                <span className="kt-section__sub">
                  An alternative visual variant.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Nav variant="pills" defaultActiveKey="/home">
                  <Nav.Item>
                    <Nav.Link href="/home">Active</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-1">Option 2</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="disabled" disabled>
                      Disabled
                    </Nav.Link>
                  </Nav.Item>
                </Nav>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Fill and justify">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Force the contents of your nav to extend the full available
                  width. To proportionately fill the space use <code>fill</code>
                  . Notice that the nav is the entire width but each nav item is
                  a different size.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Nav fill variant="tabs" defaultActiveKey="/home">
                  <Nav.Item>
                    <Nav.Link href="/home">Active</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-1">Loooonger NavLink</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="link-2">Link</Nav.Link>
                  </Nav.Item>
                  <Nav.Item>
                    <Nav.Link eventKey="disabled" disabled>
                      Disabled
                    </Nav.Link>
                  </Nav.Item>
                </Nav>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode7} beforeCodeTitle="Using dropdowns">
              <div className="kt-section">
                <span className="kt-section__sub">
                  You can mix and match the Dropdown components with the NavLink
                  and NavItem components to create a Dropdown that plays well in
                  a Nav component
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <NavDropdownExample />
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<Nav
  activeKey="/home"
  onSelect={selectedKey => alert(\`selected \${selectedKey}\`)}
>
  <Nav.Item>
    <Nav.Link href="/home">Active</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-1">Link</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-2">Link</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="disabled" disabled>
      Disabled
    </Nav.Link>
  </Nav.Item>
</Nav>
`;
const jsCode2 = `
<>
  <Nav className="justify-content-center" activeKey="/home">
    <Nav.Item>
      <Nav.Link href="/home">Active</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="link-1">Link</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="link-2">Link</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="disabled" disabled>
        Disabled
      </Nav.Link>
    </Nav.Item>
  </Nav>
  <p className="text-center mt-4 mb-4">Or right-aligned</p>
  <Nav className="justify-content-end" activeKey="/home">
    <Nav.Item>
      <Nav.Link href="/home">Active</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="link-1">Link</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="link-2">Link</Nav.Link>
    </Nav.Item>
    <Nav.Item>
      <Nav.Link eventKey="disabled" disabled>
        Disabled
      </Nav.Link>
    </Nav.Item>
  </Nav>
</>
`;
const jsCode3 = `
<Nav defaultActiveKey="/home" className="flex-column">
  <Nav.Link href="/home">Active</Nav.Link>
  <Nav.Link eventKey="link-1">Link</Nav.Link>
  <Nav.Link eventKey="link-2">Link</Nav.Link>
  <Nav.Link eventKey="disabled" disabled>
    Disabled
  </Nav.Link>
</Nav>
`;
const jsCode4 = `
<Nav variant="tabs" defaultActiveKey="/home">
  <Nav.Item>
    <Nav.Link href="/home">Active</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-1">Option 2</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="disabled" disabled>
      Disabled
    </Nav.Link>
  </Nav.Item>
</Nav>
`;
const jsCode5 = `
<Nav variant="pills" defaultActiveKey="/home">
  <Nav.Item>
    <Nav.Link href="/home">Active</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-1">Option 2</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="disabled" disabled>
      Disabled
    </Nav.Link>
  </Nav.Item>
</Nav>
`;
const jsCode6 = `
<Nav fill variant="tabs" defaultActiveKey="/home">
  <Nav.Item>
    <Nav.Link href="/home">Active</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-1">Loooonger NavLink</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="link-2">Link</Nav.Link>
  </Nav.Item>
  <Nav.Item>
    <Nav.Link eventKey="disabled" disabled>
      Disabled
    </Nav.Link>
  </Nav.Item>
</Nav>
`;
const jsCode7 = `
class NavDropdownExample extends React.Component {
  handleSelect(eventKey) {
    alert(\`selected \${eventKey}\`);
  }

  render() {
    return (
      <Nav variant="pills" activeKey="1" onSelect={k => this.handleSelect(k)}>
        <Nav.Item>
          <Nav.Link eventKey="1" href="#/home">
            NavLink 1 content
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="2" title="Item">
            NavLink 2 content
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="3" disabled>
            NavLink 3 content
          </Nav.Link>
        </Nav.Item>
        <NavDropdown title="Dropdown" id="nav-dropdown">
          <NavDropdown.Item eventKey="4.1">Action</NavDropdown.Item>
          <NavDropdown.Item eventKey="4.2">Another action</NavDropdown.Item>
          <NavDropdown.Item eventKey="4.3">
            Something else here
          </NavDropdown.Item>
          <NavDropdown.Divider />
          <NavDropdown.Item eventKey="4.4">Separated link</NavDropdown.Item>
        </NavDropdown>
      </Nav>
    );
  }
}

render(<NavDropdownExample />);
`;

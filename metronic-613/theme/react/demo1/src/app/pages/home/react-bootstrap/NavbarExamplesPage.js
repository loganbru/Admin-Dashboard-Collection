import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import {
  Button,
  Navbar,
  Nav,
  NavDropdown,
  Form,
  FormControl,
  InputGroup,
  Container
} from "react-bootstrap";

export default class NavbarExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://react-bootstrap.github.io/components/navbar/"
          >
            demos & documentation
          </a>
        </Notice>

        <Notice className="notice__paragraph">
          A powerful, responsive navigation header, the navbar. Includes support
          for branding, navigation, and more
        </Notice>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode1} beforeCodeTitle="Overview">
              <div className="kt-section">
                <span className="kt-section__sub">
                  A responsive navigation header, including support for
                  branding, navigation, and more. Here’s an example of all the
                  sub-components included in a responsive light-themed navbar
                  that automatically collapses at the lg (large) breakpoint.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Navbar bg="light" expand="lg">
                  <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
                  <Navbar.Toggle aria-controls="basic-navbar-nav" />
                  <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="mr-auto">
                      <Nav.Link href="#home">Home</Nav.Link>
                      <Nav.Link href="#link">Link</Nav.Link>
                      <NavDropdown title="Dropdown" id="basic-nav-dropdown">
                        <NavDropdown.Item href="#action/3.1">
                          Action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.2">
                          Another action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.3">
                          Something
                        </NavDropdown.Item>
                        <NavDropdown.Divider />
                        <NavDropdown.Item href="#action/3.4">
                          Separated link
                        </NavDropdown.Item>
                      </NavDropdown>
                    </Nav>
                    <Form inline>
                      <FormControl
                        type="text"
                        placeholder="Search"
                        className="mr-sm-2"
                      />
                      <Button variant="outline-success">Search</Button>
                    </Form>
                  </Navbar.Collapse>
                </Navbar>
              </div>
            </CodeExample>
            <CodeExample
              jsCode={jsCode4}
              beforeCodeTitle="Text and Non-nav links"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  Loose text and links can be wrapped <code>Navbar.Text</code>{" "}
                  in order to correctly align it vertically.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Navbar>
                  <Navbar.Brand href="#home">Navbar with text</Navbar.Brand>
                  <Navbar.Toggle />
                  <Navbar.Collapse className="justify-content-end">
                    <Navbar.Text>
                      Signed in as: <a href="#login">Mark Otto</a>
                    </Navbar.Text>
                  </Navbar.Collapse>
                </Navbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode2} beforeCodeTitle="Brand">
              <div className="kt-section">
                <span className="kt-section__sub">
                  A simple flexible branding component. Images are supported but
                  will likely require custom styling to work well.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <>
                  <Navbar bg="light">
                    <Navbar.Brand href="#home">Brand link</Navbar.Brand>
                  </Navbar>
                  <br />
                  <Navbar bg="light">
                    <Navbar.Brand>Brand text</Navbar.Brand>
                  </Navbar>
                  <br />
                  <Navbar bg="dark">
                    <Navbar.Brand href="#home">
                      <img
                        src="https://react-bootstrap.github.io/logo.svg"
                        width="30"
                        height="30"
                        className="d-inline-block align-top"
                        alt="React Bootstrap logo"
                      />
                    </Navbar.Brand>
                  </Navbar>
                  <br />
                  <Navbar bg="dark" variant="dark">
                    <Navbar.Brand href="#home">
                      <img
                        alt=""
                        src="https://react-bootstrap.github.io/logo.svg"
                        width="30"
                        height="30"
                        className="d-inline-block align-top"
                      />
                      {" React Bootstrap"}
                    </Navbar.Brand>
                  </Navbar>
                </>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample jsCode={jsCode3} beforeCodeTitle="Forms">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Use <code>&lt;Form inline&gt;</code> and your various form
                  controls within the Navbar. Align the contents as needed with
                  utility classes.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Navbar className="bg-light justify-content-between">
                  <Form inline>
                    <InputGroup>
                      <InputGroup.Prepend>
                        <InputGroup.Text id="basic-addon1">@</InputGroup.Text>
                      </InputGroup.Prepend>
                      <FormControl
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </InputGroup>
                  </Form>
                  <Form inline>
                    <FormControl
                      type="text"
                      placeholder="Search"
                      className=" mr-sm-2"
                    />
                    <Button type="submit">Submit</Button>
                  </Form>
                </Navbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode5} beforeCodeTitle="Color schemes">
              <div className="kt-section">
                <span className="kt-section__sub">
                  Theming the navbar has never been easier thanks to the
                  combination of theming classes and background-color utilities.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <>
                  <Navbar bg="dark" variant="dark">
                    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
                    <Nav className="mr-auto">
                      <Nav.Link href="#home">Home</Nav.Link>
                      <Nav.Link href="#features">Features</Nav.Link>
                      <Nav.Link href="#pricing">Pricing</Nav.Link>
                    </Nav>
                    <Form inline>
                      <FormControl
                        type="text"
                        placeholder="Search"
                        className="mr-sm-2"
                      />
                      <Button variant="outline-info">Search</Button>
                    </Form>
                  </Navbar>
                  <br />
                  <Navbar bg="primary" variant="dark">
                    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
                    <Nav className="mr-auto">
                      <Nav.Link href="#home">Home</Nav.Link>
                      <Nav.Link href="#features">Features</Nav.Link>
                      <Nav.Link href="#pricing">Pricing</Nav.Link>
                    </Nav>
                    <Form inline>
                      <FormControl
                        type="text"
                        placeholder="Search"
                        className="mr-sm-2"
                      />
                      <Button variant="outline-light">Search</Button>
                    </Form>
                  </Navbar>

                  <br />
                  <Navbar bg="light" variant="light">
                    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
                    <Nav className="mr-auto">
                      <Nav.Link href="#home">Home</Nav.Link>
                      <Nav.Link href="#features">Features</Nav.Link>
                      <Nav.Link href="#pricing">Pricing</Nav.Link>
                    </Nav>
                    <Form inline>
                      <FormControl
                        type="text"
                        placeholder="Search"
                        className="mr-sm-2"
                      />
                      <Button variant="outline-primary">Search</Button>
                    </Form>
                  </Navbar>
                </>
              </div>
            </CodeExample>
          </div>
        </div>

        <div className="row">
          <div className="col-md-6">
            <CodeExample
              jsCode={jsCode7}
              beforeCodeTitle="Responsive behaviors"
            >
              <div className="kt-section">
                <span className="kt-section__sub">
                  Use the <code>expand</code> prop as well as the{" "}
                  <code>Navbar.Toggle</code> and <code>Navbar.Collapse</code>{" "}
                  components to control when content collapses behind a button.
                </span>
                <p className="kt-section__sub">
                  Set the <code>defaultExpanded</code> prop to make the Navbar
                  start expanded. Set <code>collapseOnSelect</code> to make the
                  Navbar collapse automatically when the user selects an item.
                  You can also finely control the collapsing behavior by using
                  the <code>expanded</code> and <code>onToggle</code> props.
                </p>
                <div className="kt-separator kt-separator--dashed"></div>
                <Navbar collapseOnSelect expand="lg" bg="dark" variant="dark">
                  <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
                  <Navbar.Toggle aria-controls="responsive-navbar-nav" />
                  <Navbar.Collapse id="responsive-navbar-nav">
                    <Nav className="mr-auto">
                      <Nav.Link href="#features">Features</Nav.Link>
                      <Nav.Link href="#pricing">Pricing</Nav.Link>
                      <NavDropdown
                        title="Dropdown"
                        id="collasible-nav-dropdown"
                      >
                        <NavDropdown.Item href="#action/3.1">
                          Action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.2">
                          Another action
                        </NavDropdown.Item>
                        <NavDropdown.Item href="#action/3.3">
                          Something
                        </NavDropdown.Item>
                        <NavDropdown.Divider />
                        <NavDropdown.Item href="#action/3.4">
                          Separated link
                        </NavDropdown.Item>
                      </NavDropdown>
                    </Nav>
                    <Nav>
                      <Nav.Link href="#deets">More deets</Nav.Link>
                      <Nav.Link eventKey={2} href="#memes">
                        Dank memes
                      </Nav.Link>
                    </Nav>
                  </Navbar.Collapse>
                </Navbar>
              </div>
            </CodeExample>
          </div>
          <div className="col-md-6">
            <CodeExample jsCode={jsCode6} beforeCodeTitle="Containers">
              <div className="kt-section">
                <span className="kt-section__sub">
                  While not required, you can wrap the Navbar in a{" "}
                  <code>&lt;Container&gt;</code> component to center it on a
                  page, or add one within to only center the contents of a fixed
                  or static top navbar.
                </span>
                <div className="kt-separator kt-separator--dashed"></div>
                <Container>
                  <Navbar expand="lg" variant="light" bg="light">
                    <Navbar.Brand href="#">Navbar</Navbar.Brand>
                  </Navbar>
                </Container>
              </div>
            </CodeExample>
          </div>
        </div>
      </>
    );
  }
}

const jsCode1 = `
<Navbar bg="light" expand="lg">
  <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
  <Navbar.Toggle aria-controls="basic-navbar-nav" />
  <Navbar.Collapse id="basic-navbar-nav">
    <Nav className="mr-auto">
      <Nav.Link href="#home">Home</Nav.Link>
      <Nav.Link href="#link">Link</Nav.Link>
      <NavDropdown title="Dropdown" id="basic-nav-dropdown">
        <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
        <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
        <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
        <NavDropdown.Divider />
        <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
      </NavDropdown>
    </Nav>
    <Form inline>
      <FormControl type="text" placeholder="Search" className="mr-sm-2" />
      <Button variant="outline-success">Search</Button>
    </Form>
  </Navbar.Collapse>
</Navbar>
`;
const jsCode2 = `
<>
  <Navbar bg="light">
    <Navbar.Brand href="#home">Brand link</Navbar.Brand>
  </Navbar>
  <br />
  <Navbar bg="light">
    <Navbar.Brand>Brand text</Navbar.Brand>
  </Navbar>
  <br />
  <Navbar bg="dark">
    <Navbar.Brand href="#home">
      <img
        src="/logo.svg"
        width="30"
        height="30"
        className="d-inline-block align-top"
        alt="React Bootstrap logo"
      />
    </Navbar.Brand>
  </Navbar>
  <br />
  <Navbar bg="dark" variant="dark">
    <Navbar.Brand href="#home">
      <img
        alt=""
        src="/logo.svg"
        width="30"
        height="30"
        className="d-inline-block align-top"
      />
      {' React Bootstrap'}
    </Navbar.Brand>
  </Navbar>
</>
`;
const jsCode3 = `
<Navbar className="bg-light justify-content-between">
  <Form inline>
    <InputGroup>
      <InputGroup.Prepend>
        <InputGroup.Text id="basic-addon1">@</InputGroup.Text>
      </InputGroup.Prepend>
      <FormControl
        placeholder="Username"
        aria-label="Username"
        aria-describedby="basic-addon1"
      />
    </InputGroup>
  </Form>
  <Form inline>
    <FormControl type="text" placeholder="Search" className=" mr-sm-2" />
    <Button type="submit">Submit</Button>
  </Form>
</Navbar>
`;
const jsCode4 = `
<Navbar>
  <Navbar.Brand href="#home">Navbar with text</Navbar.Brand>
  <Navbar.Toggle />
  <Navbar.Collapse className="justify-content-end">
    <Navbar.Text>
      Signed in as: <a href="#login">Mark Otto</a>
    </Navbar.Text>
  </Navbar.Collapse>
</Navbar>
`;
const jsCode5 = `
<>
  <Navbar bg="dark" variant="dark">
    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
    <Nav className="mr-auto">
      <Nav.Link href="#home">Home</Nav.Link>
      <Nav.Link href="#features">Features</Nav.Link>
      <Nav.Link href="#pricing">Pricing</Nav.Link>
    </Nav>
    <Form inline>
      <FormControl type="text" placeholder="Search" className="mr-sm-2" />
      <Button variant="outline-info">Search</Button>
    </Form>
  </Navbar>
  <br />
  <Navbar bg="primary" variant="dark">
    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
    <Nav className="mr-auto">
      <Nav.Link href="#home">Home</Nav.Link>
      <Nav.Link href="#features">Features</Nav.Link>
      <Nav.Link href="#pricing">Pricing</Nav.Link>
    </Nav>
    <Form inline>
      <FormControl type="text" placeholder="Search" className="mr-sm-2" />
      <Button variant="outline-light">Search</Button>
    </Form>
  </Navbar>

  <br />
  <Navbar bg="light" variant="light">
    <Navbar.Brand href="#home">Navbar</Navbar.Brand>
    <Nav className="mr-auto">
      <Nav.Link href="#home">Home</Nav.Link>
      <Nav.Link href="#features">Features</Nav.Link>
      <Nav.Link href="#pricing">Pricing</Nav.Link>
    </Nav>
    <Form inline>
      <FormControl type="text" placeholder="Search" className="mr-sm-2" />
      <Button variant="outline-primary">Search</Button>
    </Form>
  </Navbar>
</>
`;
const jsCode6 = `
<Container>
  <Navbar expand="lg" variant="light" bg="light">
    <Navbar.Brand href="#">Navbar</Navbar.Brand>
  </Navbar>
</Container>
`;
const jsCode7 = `
<Navbar collapseOnSelect expand="lg" bg="dark" variant="dark">
  <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
  <Navbar.Toggle aria-controls="responsive-navbar-nav" />
  <Navbar.Collapse id="responsive-navbar-nav">
    <Nav className="mr-auto">
      <Nav.Link href="#features">Features</Nav.Link>
      <Nav.Link href="#pricing">Pricing</Nav.Link>
      <NavDropdown title="Dropdown" id="collasible-nav-dropdown">
        <NavDropdown.Item href="#action/3.1">Action</NavDropdown.Item>
        <NavDropdown.Item href="#action/3.2">Another action</NavDropdown.Item>
        <NavDropdown.Item href="#action/3.3">Something</NavDropdown.Item>
        <NavDropdown.Divider />
        <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item>
      </NavDropdown>
    </Nav>
    <Nav>
      <Nav.Link href="#deets">More deets</Nav.Link>
      <Nav.Link eventKey={2} href="#memes">
        Dank memes
      </Nav.Link>
    </Nav>
  </Navbar.Collapse>
</Navbar>
`;

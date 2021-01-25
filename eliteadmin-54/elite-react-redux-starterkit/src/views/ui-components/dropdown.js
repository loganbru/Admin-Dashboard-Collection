import React from 'react';
import {
  DropdownToggle,
  DropdownMenu,
  DropdownItem,
  Dropdown,
  UncontrolledDropdown,
  ButtonDropdown,
  Button,
  Card,
  CardBody,
  CardTitle,
  Navbar,
  Nav,
  NavItem,
  NavLink,
  Row,
  Col
} from 'reactstrap';

class Dropdowns extends React.Component {
  // For Split Buttons & Dropdowns
  constructor(props) {
    super(props);

    this.toggle1 = this.toggle1.bind(this);
    this.toggle2 = this.toggle2.bind(this);
    this.toggle3 = this.toggle3.bind(this);
    this.toggle4 = this.toggle4.bind(this);
    this.toggle5 = this.toggle5.bind(this);
    this.toggle6 = this.toggle6.bind(this);
    this.toggle7 = this.toggle7.bind(this);
    this.toggle8 = this.toggle8.bind(this);
    this.toggle9 = this.toggle9.bind(this);

    this.state = {
      'dropdownOpen': false,
      'dropdownOpen2': false,
      'isOpen1': false,
      'isOpen2': false,
      'isOpen3': false,
      'isOpen4': false,
      'isOpen5': false,
      'isOpen6': false,
      'isOpen9': false
    };
  }

  toggle1() {
    this.setState({
      'isOpen1': !this.state.isOpen1
    });
  }

  toggle2() {
    this.setState({
      'isOpen2': !this.state.isOpen2
    });
  }

  toggle3() {
    this.setState({
      'isOpen3': !this.state.isOpen3
    });
  }

  toggle4() {
    this.setState({
      'isOpen4': !this.state.isOpen4
    });
  }

  toggle5() {
    this.setState({
      'isOpen5': !this.state.isOpen5
    });
  }

  toggle6() {
    this.setState({
      'isOpen6': !this.state.isOpen6
    });
  }

  toggle7() {
    this.setState(prevState => ({
      'dropdownOpen': !prevState.dropdownOpen
    }));
  }

  toggle8() {
    this.setState(prevState => ({
      'dropdownOpen2': !prevState.dropdownOpen2
    }));
  }

  toggle9() {
    this.setState({
      'isOpen9': !this.state.isOpen9
    });
  }

  render() {
    return (
      <div>
        {/* --------------------------------------------------------------------------------*/}
        {/* Start Inner Div*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}
        <Row>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-1*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Single Button Dropdowns
              </CardTitle>
              <CardBody className="">
                <div className="d-flex align-items-center">
                  <UncontrolledDropdown className="ml-2">
                    <DropdownToggle caret color="primary">
                      Primary
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </UncontrolledDropdown>
                  <UncontrolledDropdown className="ml-2">
                    <DropdownToggle caret color="warning">
                      Warning
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </UncontrolledDropdown>
                  <UncontrolledDropdown className="ml-2">
                    <DropdownToggle caret color="success">
                      Success
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </UncontrolledDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-2*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Split Button Dropdowns
              </CardTitle>
              <CardBody className="">
                <div className="d-flex align-items-center">
                  <ButtonDropdown
                    className="ml-2"
                    isOpen={this.state.isOpen1}
                    toggle={this.toggle1}
                  >
                    <Button id="caret" color="primary">
                      Primary
                    </Button>
                    <DropdownToggle caret color="primary" />
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                  <ButtonDropdown
                    className="ml-2"
                    isOpen={this.state.isOpen2}
                    toggle={this.toggle2}
                  >
                    <Button id="caret" color="warning">
                      Warning
                    </Button>
                    <DropdownToggle caret color="warning" />
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                  <ButtonDropdown
                    className="ml-2"
                    isOpen={this.state.isOpen3}
                    toggle={this.toggle3}
                  >
                    <Button id="caret" color="success">
                      Success
                    </Button>
                    <DropdownToggle caret color="success" />
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Sizing Dropdowns
              </CardTitle>
              <CardBody className="">
                <div className="d-flex align-items-center">
                  <ButtonDropdown
                    isOpen={this.state.isOpen4}
                    toggle={this.toggle4}
                  >
                    <DropdownToggle caret size="lg">
                      Large Button
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                  <ButtonDropdown
                    className="ml-2"
                    isOpen={this.state.isOpen5}
                    toggle={this.toggle5}
                  >
                    <DropdownToggle caret size="sm">
                      Small Button
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-4*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Drop Direction Variations
              </CardTitle>
              <CardBody className="">
                <div className="d-flex align-items-center">
                  <ButtonDropdown
                    direction="up"
                    isOpen={this.state.isOpen6}
                    toggle={this.toggle6}
                  >
                    <DropdownToggle caret>Dropup</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>

                  <ButtonDropdown
                    className="ml-2"
                    direction="left"
                    isOpen={this.state.btnDropleft}
                    toggle={() => {
                      this.setState({ 'btnDropleft': !this.state.btnDropleft });
                    }}
                  >
                    <DropdownToggle caret>Dropleft</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>

                  <ButtonDropdown
                    className="ml-2"
                    direction="right"
                    isOpen={this.state.btnDropright}
                    toggle={() => {
                      this.setState({ 'btnDropright': !this.state.btnDropright });
                    }}
                  >
                    <DropdownToggle caret>Dropright</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-5*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Dropdown Alignment
              </CardTitle>
              <CardBody className="">
                <div className="d-flex align-items-center">
                  <Dropdown
                    isOpen={this.state.dropdownOpen}
                    toggle={this.toggle7}
                  >
                    <DropdownToggle caret>
                      This dropdowns menu is right-aligned
                    </DropdownToggle>
                    <DropdownMenu right>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </Dropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-6*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Custom Dropdown
              </CardTitle>
              <CardBody className="">
                <div>
                  <UncontrolledDropdown>
                    <DropdownToggle
                      tag="span"
                      onClick={this.toggle8}
                      data-toggle="dropdown"
                      aria-expanded={this.state.dropdownOpen2}
                    >
                      Custom Dropdown Content
                    </DropdownToggle>
                    <DropdownMenu>
                      <div onClick={this.toggle8}>Custom dropdown item</div>
                      <div onClick={this.toggle8}>Custom dropdown item</div>
                      <div onClick={this.toggle8}>Custom dropdown item</div>
                      <div onClick={this.toggle8}>Custom dropdown item</div>
                    </DropdownMenu>
                  </UncontrolledDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-6*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Uncontrolled Dropdown
              </CardTitle>
              <CardBody className="">
                <div>
                  <UncontrolledDropdown>
                    <DropdownToggle caret>Dropdown</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem header>Header</DropdownItem>
                      <DropdownItem disabled>Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem divider />
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </UncontrolledDropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-6*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Modifiers Dropdown
              </CardTitle>
              <CardBody className="">
                <div>
                  <Dropdown isOpen={this.state.isOpen9} toggle={this.toggle9}>
                    <DropdownToggle>Dropdown</DropdownToggle>
                    <DropdownMenu
                      modifiers={{
                        'setMaxHeight': {
                          'enabled': true,
                          'fn': data => ({
                            ...data,
                            'styles': {
                              ...data.styles,
                              'overflow': 'auto',
                              'maxHeight': 100
                            }
                          }),
                          'order': 890
                        }
                      }}
                    >
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                      <DropdownItem>Another Action</DropdownItem>
                    </DropdownMenu>
                  </Dropdown>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="12">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-6*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                setActiveFromChild
              </CardTitle>
              <CardBody className="">
                <Navbar color="light" light expand="md">
                  <Nav className="ml-auto" navbar>
                    <NavItem>
                      <NavLink href="/components/">Inactive Link</NavLink>
                    </NavItem>
                    <UncontrolledDropdown setActiveFromChild>
                      <DropdownToggle tag="a" className="nav-link" caret>
                        Dropdown
                      </DropdownToggle>
                      <DropdownMenu>
                        <DropdownItem tag="a" href="/blah" active>
                          Link
                        </DropdownItem>
                      </DropdownMenu>
                    </UncontrolledDropdown>
                  </Nav>
                </Navbar>
              </CardBody>
            </Card>
          </Col>
        </Row>
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}

        {/* --------------------------------------------------------------------------------*/}
        {/* End Inner Div*/}
        {/* --------------------------------------------------------------------------------*/}
      </div>
    );
  }
}

export default Dropdowns;

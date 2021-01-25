import React from 'react';
import {
  Button,
  ButtonGroup,
  ButtonToolbar,
  ButtonDropdown,
  DropdownToggle,
  DropdownMenu,
  DropdownItem,
  Card,
  CardBody,
  CardTitle,
  Row,
  Col
} from 'reactstrap';

class BtnGroups extends React.Component {
  // For Split Buttons
  constructor(props) {
    super(props);

    this.toggle1 = this.toggle1.bind(this);
    this.toggle2 = this.toggle2.bind(this);

    this.state = {
      'isOpen1': false,
      'isOpen2': false
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
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-1*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-checkbox-multiple-blank mr-2"> </i>
                Button Group
              </CardTitle>
              <CardBody className="">
                <div>
                  <ButtonGroup>
                    <Button>Left</Button>
                    <Button>Middle</Button>
                    <Button>Right</Button>
                  </ButtonGroup>
                </div>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-2*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-checkbox-multiple-blank mr-2"> </i>
                Button Toolbar
              </CardTitle>
              <CardBody className="">
                <ButtonToolbar>
                  <ButtonGroup>
                    <Button>1</Button>
                    <Button>2</Button>
                    <Button>3</Button>
                    <Button>4</Button>
                  </ButtonGroup>
                  <ButtonGroup>
                    <Button>5</Button>
                    <Button>6</Button>
                    <Button>7</Button>
                  </ButtonGroup>
                  <ButtonGroup>
                    <Button>8</Button>
                  </ButtonGroup>
                </ButtonToolbar>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-cards-variant mr-2"> </i>
                Nesting
              </CardTitle>
              <CardBody className="">
                <ButtonGroup>
                  <Button>1</Button>
                  <Button>2</Button>
                  <ButtonDropdown
                    isOpen={this.state.isOpen1}
                    toggle={this.toggle1}
                  >
                    <DropdownToggle caret>Dropdown</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Dropdown Link</DropdownItem>
                      <DropdownItem>Dropdown Link</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                </ButtonGroup>
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
                Sizing
              </CardTitle>
              <CardBody className="">
                <ButtonGroup size="lg">
                  <Button>Left</Button>
                  <Button>Middle</Button>
                  <Button>Right</Button>
                </ButtonGroup>
                <br />
                <ButtonGroup className="mt-2">
                  <Button>Left</Button>
                  <Button>Middle</Button>
                  <Button>Right</Button>
                </ButtonGroup>
                <br />
                <ButtonGroup className="mt-2" size="sm">
                  <Button>Left</Button>
                  <Button>Middle</Button>
                  <Button>Right</Button>
                </ButtonGroup>
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
                Vertical variation
              </CardTitle>
              <CardBody className="">
                <ButtonGroup vertical>
                  <Button>1</Button>
                  <Button>2</Button>
                  <ButtonDropdown
                    isOpen={this.state.isOpen2}
                    toggle={this.toggle2}
                  >
                    <DropdownToggle caret>Dropdown</DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>Dropdown Link</DropdownItem>
                      <DropdownItem>Dropdown Link</DropdownItem>
                    </DropdownMenu>
                  </ButtonDropdown>
                </ButtonGroup>
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

export default BtnGroups;

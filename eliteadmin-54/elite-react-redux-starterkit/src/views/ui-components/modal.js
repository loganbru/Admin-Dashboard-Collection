import React from 'react';
import {
  Card,
  CardBody,
  CardTitle,
  Button,
  Modal,
  Input,
  Label,
  Form,
  FormGroup,
  ModalHeader,
  ModalBody,
  ModalFooter,
  Row,
  Col
} from 'reactstrap';

class ModalComponent extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      'modal': false
    };

    this.state = {
      'backdrop': true,
      'modal': false
    };

    this.state = {
      'closeAll': false,
      'modal': false,
      'nestedModal': false
    };

    this.toggle = this.toggle.bind(this);

    this.toggle2 = this.toggle2.bind(this);
    this.changeBackdrop = this.changeBackdrop.bind(this);

    this.toggle3 = this.toggle3.bind(this);
    this.toggleNested = this.toggleNested.bind(this);
    this.toggleAll = this.toggleAll.bind(this);

    this.toggle4 = this.toggle4.bind(this);

    this.toggle5 = this.toggle5.bind(this);

    this.toggle6 = this.toggle6.bind(this);

    this.toggle7 = this.toggle7.bind(this);
  }

  toggle() {
    this.setState({
      'modal': !this.state.modal
    });
  }

  toggle2() {
    this.setState({
      'modal2': !this.state.modal2
    });
  }

  toggle3() {
    this.setState({
      'modal3': !this.state.modal3
    });
  }

  toggle4() {
    this.setState({
      'modal4': !this.state.modal4
    });
  }

  toggle5() {
    this.setState({
      'modal5': !this.state.modal5
    });
  }

  toggle6() {
    this.setState({
      'modal6': !this.state.modal6
    });
  }

  toggle7() {
    this.setState({
      'modal7': !this.state.modal7
    });
  }

  toggleNested() {
    this.setState({
      'closeAll': false,
      'nestedModal': !this.state.nestedModal
    });
  }

  toggleAll() {
    this.setState({
      'closeAll': true,
      'nestedModal': !this.state.nestedModal
    });
  }

  changeBackdrop(e) {
    let value = e.target.value;
    if (value !== 'static') {
      value = JSON.parse(value);
    }
    this.setState({ 'backdrop': value });
  }

  render() {
    const externalCloseBtn = (
      <button
        className="close"
        style={{
          'position': 'absolute',
          'right': '15px',
          'top': '15px'
        }}
        onClick={this.toggle}
      >
        &times;
      </button>
    );

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
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Modals
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle}>
                  Launch Modal
                </Button>
                <Modal
                  isOpen={this.state.modal}
                  toggle={this.toggle}
                  className={this.props.className}
                >
                  <ModalHeader toggle={this.toggle}>Modal title</ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Backdrop
              </CardTitle>

              <CardBody className="">
                <Form inline onSubmit={e => e.preventDefault()}>
                  <FormGroup>
                    <Label for="backdrop">Backdrop value</Label>
                    <Input
                      type="select"
                      name="backdrop"
                      id="backdrop"
                      onChange={this.changeBackdrop}
                    >
                      <option defaultValue="true">true</option>
                      <option defaultValue="false">false</option>
                      <option defaultValue="static">static</option>
                    </Input>
                  </FormGroup>
                  <Button color="danger" onClick={this.toggle2}>
                    Launch Modal
                  </Button>
                </Form>
                <Modal
                  isOpen={this.state.modal2}
                  toggle={this.toggle2}
                  className={this.props.className}
                  backdrop={this.state.backdrop}
                >
                  <ModalHeader toggle={this.toggle2}>Modal title</ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle2}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle2}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Nested Modals
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle3}>
                  Launch Modal w/ Nested Example
                </Button>
                <Modal
                  isOpen={this.state.modal3}
                  toggle={this.toggle3}
                  className={this.props.className}
                >
                  <ModalHeader toggle={this.toggle3}>Modal title</ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                    <br />
                    <Button color="success" onClick={this.toggleNested}>
                      Show Nested Modal
                    </Button>
                    <Modal isOpen={this.state.nestedModal} toggle={this.toggleNested} onClosed={this.state.closeAll ? this.toggle : undefined} >
                      <ModalHeader>Nested Modal title</ModalHeader>
                      <ModalBody>Stuff and things</ModalBody>
                      <ModalFooter>
                        <Button color="primary" onClick={this.toggleNested}>
                          Done
                        </Button>
                        <Button color="secondary" onClick={this.toggleAll}>
                          All Done
                        </Button>
                      </ModalFooter>
                    </Modal>
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle3}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle3}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Modals with Custom Transition Timeouts
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle4}>
                  Launch Modal with Custom Transition Timeouts Example
                </Button>
                <Modal
                  isOpen={this.state.modal4}
                  modalTransition={{ 'timeout': 700 }}
                  backdropTransition={{ 'timeout': 1300 }}
                  toggle={this.toggle4}
                  className={this.props.className}
                >
                  <ModalHeader toggle={this.toggle4}>Modal title</ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle4}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle4}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Launch Modal without Fade Effect Example
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle5}>
                  Launch Modal without Fade Effect Example
                </Button>
                <Modal
                  isOpen={this.state.modal5}
                  fade={false}
                  toggle={this.toggle5}
                  className={this.props.className}
                >
                  <ModalHeader toggle={this.toggle5}>Modal title</ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle5}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle5}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Modals with external button
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle6}>
                  Modals with external button
                </Button>
                <Modal
                  isOpen={this.state.modal6}
                  toggle={this.toggle6}
                  className={this.props.className}
                  external={externalCloseBtn}
                >
                  <ModalHeader>Modal title</ModalHeader>
                  <ModalBody>
                    <b>Look at the top right of the page/viewport!</b>
                    <br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle6}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle6}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi mdi-tablet mr-2"> </i>
                Modals with custom close icon
              </CardTitle>

              <CardBody className="">
                <Button color="danger" onClick={this.toggle7}>
                  Modals with custom close icon
                </Button>
                <Modal
                  isOpen={this.state.modal7}
                  toggle={this.toggle7}
                  className={this.props.className}
                >
                  <ModalHeader toggle={this.toggle7} charCode="Y">
                    Modal title
                  </ModalHeader>
                  <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                  </ModalBody>
                  <ModalFooter>
                    <Button color="primary" onClick={this.toggle7}>
                      Do Something
                    </Button>
                    <Button color="secondary" onClick={this.toggle7}>
                      Cancel
                    </Button>
                  </ModalFooter>
                </Modal>
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

export default ModalComponent;

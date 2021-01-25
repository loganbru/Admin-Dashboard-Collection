import React from 'react';
import {
  Collapse,
  Button,
  Card,
  CardBody,
  CardTitle,
  UncontrolledCollapse,
  Fade,
  Row,
  Col
} from 'reactstrap';

class CollapseComponent extends React.Component {
  constructor(props) {
    super(props);
    this.toggle = this.toggle.bind(this);
    this.toggle2 = this.toggle2.bind(this);
    this.toggle3 = this.toggle3.bind(this);
    this.state = { 'collapse': false };
    this.state = { 'fadeIn': true };

    this.onEntering = this.onEntering.bind(this);
    this.onEntered = this.onEntered.bind(this);
    this.onExiting = this.onExiting.bind(this);
    this.onExited = this.onExited.bind(this);
    this.toggle2 = this.toggle2.bind(this);
    this.state = {
      'collapse2': false,
      'status': 'Closed'
    };
  }

  toggle() {
    this.setState({ 'collapse': !this.state.collapse });
  }

  toggle3() {
    this.setState({
      'fadeIn': !this.state.fadeIn
    });
  }

  onEntering() {
    this.setState({ 'status': 'Opening...' });
  }

  onEntered() {
    this.setState({ 'status': 'Opened' });
  }

  onExiting() {
    this.setState({ 'status': 'Closing...' });
  }

  onExited() {
    this.setState({ 'status': 'Closed' });
  }

  toggle2() {
    this.setState({ 'collapse2': !this.state.collapse2 });
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
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-elevator mr-2"> </i>
                Collapse
              </CardTitle>
              <CardBody className="">
                <Button
                  color="primary"
                  onClick={this.toggle}
                  style={{ 'marginBottom': '1rem' }}
                >
                  Toggle
                </Button>
                <Collapse isOpen={this.state.collapse}>
                  <Card className="border">
                    <CardBody>
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident.
                    </CardBody>
                  </Card>
                </Collapse>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-elevator mr-2"> </i>
                Collapse with Events
              </CardTitle>
              <CardBody className="">
                <Button
                  color="primary"
                  onClick={this.toggle2}
                  style={{ 'marginBottom': '1rem' }}
                >
                  Toggle
                </Button>
                <CardTitle>Current state: {this.state.status}</CardTitle>
                <Collapse
                  isOpen={this.state.collapse2}
                  onEntering={this.onEntering}
                  onEntered={this.onEntered}
                  onExiting={this.onExiting}
                  onExited={this.onExited}
                >
                  <Card className="border">
                    <CardBody>
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident.
                    </CardBody>
                  </Card>
                </Collapse>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-elevator mr-2"> </i>
                Uncontrolled Collapse
              </CardTitle>
              <CardBody className="">
                <Button
                  color="primary"
                  id="toggler"
                  style={{ 'marginBottom': '1rem' }}
                >
                  Toggle
                </Button>
                <UncontrolledCollapse toggler="#toggler">
                  <Card className="border">
                    <CardBody>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nesciunt magni, voluptas debitis similique porro a
                      molestias consequuntur earum odio officiis natus, amet
                      hic, iste sed dignissimos esse fuga! Minus, alias.
                    </CardBody>
                  </Card>
                </UncontrolledCollapse>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="4">
            {/* --------------------------------------------------------------------------------*/}
            {/* Card-3*/}
            {/* --------------------------------------------------------------------------------*/}
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-elevator mr-2"> </i>
                Fade Collapse
              </CardTitle>
              <CardBody className="">
                <Button color="primary" onClick={this.toggle3}>
                  Toggle Fade
                </Button>
                <Fade in={this.state.fadeIn} tag="h5" className="mt-3">
                  <span className="text-primary font-medium">
                    This content will fade in and out as the button is pressed
                  </span>
                </Fade>
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

export default CollapseComponent;

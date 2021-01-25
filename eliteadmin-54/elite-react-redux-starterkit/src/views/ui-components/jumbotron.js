import React from 'react';
import {
  Card,
  CardBody,
  CardTitle,
  Jumbotron,
  Button,
  Container
} from 'reactstrap';

class JumbotronComponent extends React.Component {
  render() {
    return (
      <div>
        {/* --------------------------------------------------------------------------------*/}
        {/* Start Inner Div*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-hamburger mr-2"> </i>
            Jumbotron
          </CardTitle>
          <CardBody className="">
            <Jumbotron>
              <h1 className="display-3">Hello, world!</h1>
              <p className="lead">
                This is a simple hero unit, a simple Jumbotron-style component
                for calling extra attention to featured content or information.
              </p>
              <hr className="my-2" />
              <p>
                It uses utility classes for typography and spacing to space
                content out within the larger container.
              </p>
              <p className="lead">
                <Button color="primary">Learn More</Button>
              </p>
            </Jumbotron>
          </CardBody>
        </Card>
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-hamburger mr-2"> </i>
            Fluid Jumbotron
          </CardTitle>
          <CardBody className="">
            <Jumbotron fluid>
              <Container fluid>
                <h1 className="display-3">Fluid jumbotron</h1>
                <p className="lead">
                  This is a modified jumbotron that occupies the entire
                  horizontal space of its parent.
                </p>
              </Container>
            </Jumbotron>
          </CardBody>
        </Card>
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

export default JumbotronComponent;

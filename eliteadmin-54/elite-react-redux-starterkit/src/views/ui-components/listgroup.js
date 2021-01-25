import React from 'react';
import {
  Card,
  CardBody,
  CardTitle,
  ListGroup,
  ListGroupItem,
  ListGroupItemHeading,
  ListGroupItemText,
  Badge,
  Row,
  Col
} from 'reactstrap';

class ListComponent extends React.Component {
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
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                ListGroup
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem>Cras justo odio</ListGroupItem>
                  <ListGroupItem>Dapibus ac facilisis in</ListGroupItem>
                  <ListGroupItem>Morbi leo risus</ListGroupItem>
                  <ListGroupItem>Porta ac consectetur ac</ListGroupItem>
                  <ListGroupItem>Vestibulum at eros</ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Tags
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem className="justify-content-between">
                    Cras justo odio <Badge pill>14</Badge>
                  </ListGroupItem>
                  <ListGroupItem className="justify-content-between">
                    Dapibus ac facilisis in <Badge pill>2</Badge>
                  </ListGroupItem>
                  <ListGroupItem className="justify-content-between">
                    Morbi leo risus <Badge pill>1</Badge>
                  </ListGroupItem>
                  <ListGroupItem className="justify-content-between">
                    Morbi leo risus <Badge pill>12</Badge>
                  </ListGroupItem>
                  <ListGroupItem className="justify-content-between">
                    Morbi leo risus <Badge pill>10</Badge>
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Disabled items
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem disabled tag="a" href="#">
                    Cras justo odio
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Dapibus ac facilisis in
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Morbi leo risus
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Porta ac consectetur ac
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Vestibulum at eros
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Anchors
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem active tag="a" href="" action>
                    Cras justo odio
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="" action>
                    Dapibus ac facilisis in
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="" action>
                    Morbi leo risus
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="" action>
                    Porta ac consectetur ac
                  </ListGroupItem>
                  <ListGroupItem disabled tag="a" href="" action>
                    Vestibulum at eros
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Buttons
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem active tag="button" action>
                    Cras justo odio
                  </ListGroupItem>
                  <ListGroupItem tag="button" action>
                    Dapibus ac facilisis in
                  </ListGroupItem>
                  <ListGroupItem tag="button" action>
                    Morbi leo risus
                  </ListGroupItem>
                  <ListGroupItem tag="button" action>
                    Porta ac consectetur ac
                  </ListGroupItem>
                  <ListGroupItem disabled tag="button" action>
                    Vestibulum at eros
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="6">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Contextual classes
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem color="success">Cras justo odio</ListGroupItem>
                  <ListGroupItem color="info">
                    Dapibus ac facilisis in
                  </ListGroupItem>
                  <ListGroupItem color="warning">Morbi leo risus</ListGroupItem>
                  <ListGroupItem color="danger">
                    Porta ac consectetur ac
                  </ListGroupItem>
                  <ListGroupItem color="secondary">
                    Porta ac consectetur ac
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="12">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Contextual classes
              </CardTitle>

              <CardBody className="">
                <ListGroup>
                  <ListGroupItem active>
                    <ListGroupItemHeading>
                      List group item heading
                    </ListGroupItemHeading>
                    <ListGroupItemText>
                      Donec id elit non mi porta gravida at eget metus. Maecenas
                      sed diam eget risus varius blandit.
                    </ListGroupItemText>
                  </ListGroupItem>
                  <ListGroupItem>
                    <ListGroupItemHeading>
                      List group item heading
                    </ListGroupItemHeading>
                    <ListGroupItemText>
                      Donec id elit non mi porta gravida at eget metus. Maecenas
                      sed diam eget risus varius blandit.
                    </ListGroupItemText>
                  </ListGroupItem>
                  <ListGroupItem>
                    <ListGroupItemHeading>
                      List group item heading
                    </ListGroupItemHeading>
                    <ListGroupItemText>
                      Donec id elit non mi porta gravida at eget metus. Maecenas
                      sed diam eget risus varius blandit.
                    </ListGroupItemText>
                  </ListGroupItem>
                </ListGroup>
              </CardBody>
            </Card>
          </Col>
          <Col xs="12" md="12">
            <Card>
              <CardTitle className="bg-light border-bottom p-3 mb-0">
                <i className="mdi mdi-format-list-bulleted mr-2"> </i>
                Flush
              </CardTitle>

              <CardBody className="">
                <ListGroup flush>
                  <ListGroupItem disabled tag="a" href="#">
                    Cras justo odio
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Dapibus ac facilisis in
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Morbi leo risus
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Porta ac consectetur ac
                  </ListGroupItem>
                  <ListGroupItem tag="a" href="#">
                    Vestibulum at eros
                  </ListGroupItem>
                </ListGroup>
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

export default ListComponent;

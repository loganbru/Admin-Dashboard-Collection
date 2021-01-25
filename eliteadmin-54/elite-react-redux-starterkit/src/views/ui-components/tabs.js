import React from 'react';
import {
  TabContent,
  TabPane,
  Nav,
  NavItem,
  NavLink,
  Card,
  Button,
  CardTitle,
  CardText,
  CardBody,
  Row,
  Col
} from 'reactstrap';
import classnames from 'classnames';

class JumbotronComponent extends React.Component {
  constructor(props) {
    super(props);

    this.toggle = this.toggle.bind(this);
    this.state = {
      'activeTab': '1'
    };
  }

  toggle(tab) {
    if (this.state.activeTab !== tab) {
      this.setState({
        'activeTab': tab
      });
    }
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
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-tab-unselected mr-2"> </i>
            Tabs
          </CardTitle>

          <CardBody className="">
            <Nav tabs>
              <NavItem>
                <NavLink
                  className={classnames({
                    'active': this.state.activeTab === '1'
                  })}
                  onClick={() => {
                    this.toggle('1');
                  }}
                >
                  Tab1
                </NavLink>
              </NavItem>
              <NavItem>
                <NavLink
                  className={classnames({
                    'active': this.state.activeTab === '2'
                  })}
                  onClick={() => {
                    this.toggle('2');
                  }}
                >
                  Moar Tabs
                </NavLink>
              </NavItem>
            </Nav>
            <TabContent activeTab={this.state.activeTab}>
              <TabPane tabId="1">
                <Row>
                  <Col sm="12">
                    <Card body>
                      <h4>Tab 1 Contents</h4>
                    </Card>
                  </Col>
                </Row>
              </TabPane>
              <TabPane tabId="2">
                <Row>
                  <Col sm="6">
                    <Card body>
                      <CardTitle>Special Title Treatment</CardTitle>
                      <CardText>
                        With supporting text below as a natural lead-in to
                        additional content.
                      </CardText>
                      <Button>Go somewhere</Button>
                    </Card>
                  </Col>
                  <Col sm="6">
                    <Card body>
                      <CardTitle>Special Title Treatment</CardTitle>
                      <CardText>
                        With supporting text below as a natural lead-in to
                        additional content.
                      </CardText>
                      <Button>Go somewhere</Button>
                    </Card>
                  </Col>
                </Row>
              </TabPane>
            </TabContent>
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

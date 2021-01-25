import React from 'react';
import {
  Nav,
  NavItem,
  NavLink,
  Card,
  CardBody,
  CardTitle,
  Dropdown,
  DropdownItem,
  DropdownToggle,
  UncontrolledDropdown,
  DropdownMenu
} from 'reactstrap';

class NavsComponent extends React.Component {
  constructor(props) {
    super(props);

    this.toggle = this.toggle.bind(this);
    this.state = {
      'dropdownOpen': false
    };
  }

  toggle() {
    this.setState({
      'dropdownOpen': !this.state.dropdownOpen
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
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-panorama-wide-angle mr-2"> </i>
            Nav
          </CardTitle>

          <CardBody className="">
            <p>List Based</p>
            <Nav>
              <NavItem>
                <NavLink href="#">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="#">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="#">Another Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink disabled href="#">
                  Disabled Link
                </NavLink>
              </NavItem>
            </Nav>
            <hr />
            <p>Link Based</p>
            <Nav>
              <NavLink href="#">Link</NavLink> <NavLink href="#">Link</NavLink>{' '}
              <NavLink href="#">Another Link</NavLink>{' '}
              <NavLink disabled href="#">
                Disabled Link
              </NavLink>
            </Nav>
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
            <i className="mdi mdi-panorama-wide-angle mr-2"> </i>
            Vertical
          </CardTitle>

          <CardBody className="">
            <p>List Based</p>
            <Nav vertical>
              <NavItem>
                <NavLink href="#">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="#">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="#">Another Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink disabled href="#">
                  Disabled Link
                </NavLink>
              </NavItem>
            </Nav>
            <hr />
            <p>Link based</p>
            <Nav vertical>
              <NavLink href="#">Link</NavLink> <NavLink href="#">Link</NavLink>{' '}
              <NavLink href="#">Another Link</NavLink>{' '}
              <NavLink disabled href="#">
                Disabled Link
              </NavLink>
            </Nav>
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
            <i className="mdi mdi-panorama-wide-angle mr-2"> </i>
            Tabs
          </CardTitle>

          <CardBody className="">
            <Nav tabs>
              <NavItem>
                <NavLink href="" active>
                  Link
                </NavLink>
              </NavItem>
              <Dropdown
                nav
                isOpen={this.state.dropdownOpen}
                toggle={this.toggle}
              >
                <DropdownToggle nav caret>
                  Dropdown
                </DropdownToggle>
                <DropdownMenu>
                  <DropdownItem header>Header</DropdownItem>
                  <DropdownItem disabled>Action</DropdownItem>
                  <DropdownItem>Another Action</DropdownItem>
                  <DropdownItem divider />
                  <DropdownItem>Another Action</DropdownItem>
                </DropdownMenu>
              </Dropdown>
              <NavItem>
                <NavLink href="">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="">Another Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink disabled href="">
                  Disabled Link
                </NavLink>
              </NavItem>
            </Nav>
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
            <i className="mdi mdi-panorama-wide-angle mr-2"> </i>
            Pills
          </CardTitle>

          <CardBody className="">
            <Nav pills>
              <NavItem>
                <NavLink href="#" active>
                  Link
                </NavLink>
              </NavItem>
              <UncontrolledDropdown>
                <DropdownToggle nav caret>
                  Dropdown
                </DropdownToggle>
                <DropdownMenu>
                  <DropdownItem header>Header</DropdownItem>
                  <DropdownItem disabled>Action</DropdownItem>
                  <DropdownItem>Another Action</DropdownItem>
                  <DropdownItem divider />
                  <DropdownItem>Another Action</DropdownItem>
                </DropdownMenu>
              </UncontrolledDropdown>
              <NavItem>
                <NavLink href="#">Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink href="#">Another Link</NavLink>
              </NavItem>
              <NavItem>
                <NavLink disabled href="#">
                  Disabled Link
                </NavLink>
              </NavItem>
            </Nav>
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

export default NavsComponent;

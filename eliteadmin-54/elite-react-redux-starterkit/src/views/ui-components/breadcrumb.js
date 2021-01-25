import React from 'react';
import {
  Breadcrumb,
  BreadcrumbItem,
  Card,
  CardBody,
  CardTitle
} from 'reactstrap';

class Breadcrumbs extends React.Component {
  render() {
    return (
      <div>
        {/* --------------------------------------------------------------------------------*/}
        {/* Card-1*/}
        {/* --------------------------------------------------------------------------------*/}
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-equal mr-2"> </i>
            Breadcrumbs
          </CardTitle>
          <CardBody className="">
            <Breadcrumb>
              <BreadcrumbItem active>Home</BreadcrumbItem>
            </Breadcrumb>
            <Breadcrumb>
              <BreadcrumbItem>
                <a href="/">Home</a>
              </BreadcrumbItem>
              <BreadcrumbItem active>Library</BreadcrumbItem>
            </Breadcrumb>
            <Breadcrumb>
              <BreadcrumbItem>
                <a href="/">Home</a>
              </BreadcrumbItem>
              <BreadcrumbItem>
                <a href="/">Library</a>
              </BreadcrumbItem>
              <BreadcrumbItem active>Data</BreadcrumbItem>
            </Breadcrumb>
          </CardBody>
        </Card>
        {/* --------------------------------------------------------------------------------*/}
        {/* Card-2*/}
        {/* --------------------------------------------------------------------------------*/}
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-equal mr-2"> </i>
            No List
          </CardTitle>
          <CardBody className="">
            <Breadcrumb tag="nav">
              <BreadcrumbItem tag="a" href="">
                Home
              </BreadcrumbItem>
              <BreadcrumbItem tag="a" href="">
                Library
              </BreadcrumbItem>
              <BreadcrumbItem tag="a" href="">
                Data
              </BreadcrumbItem>
              <BreadcrumbItem active tag="span">
                Bootstrap
              </BreadcrumbItem>
            </Breadcrumb>
          </CardBody>
        </Card>

        {/* --------------------------------------------------------------------------------*/}
        {/* End Inner Div*/}
        {/* --------------------------------------------------------------------------------*/}
      </div>
    );
  }
}

export default Breadcrumbs;

import React from 'react';
import { Card, CardBody, CardTitle, Media } from 'reactstrap';

import img1 from '../../assets/images/users/1.jpg';
import img2 from '../../assets/images/users/2.jpg';
import img3 from '../../assets/images/users/3.jpg';

class MediaComponent extends React.Component {
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
            <i className="mdi mdi-folder-multiple-image mr-2"> </i>
            Media object
          </CardTitle>

          <CardBody className="">
            <Media>
              <Media left href="">
                <Media
                  object
                  src={img1}
                  alt="Generic placeholder image"
                  className="img-fluid mr-2"
                  width="60"
                />
              </Media>
              <Media body>
                <Media heading>Media heading</Media>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin commodo. Cras purus odio,
                vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                congue felis in faucibus.
              </Media>
            </Media>
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
            <i className="mdi mdi-folder-multiple-image mr-2"> </i>
            Nesting
          </CardTitle>

          <CardBody className="">
            <Media>
              <Media left href="#">
                <Media
                  object
                  src={img1}
                  className="img-fluid mr-2"
                  width="60"
                  alt="Generic placeholder image"
                />
              </Media>
              <Media body>
                <Media heading>Media heading</Media>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin commodo. Cras purus odio,
                vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                congue felis in faucibus.
                <Media className="mt-4">
                  <Media left href="#">
                    <Media
                      object
                      src={img2}
                      className="img-fluid mr-2"
                      width="60"
                      alt="Generic placeholder image"
                    />
                  </Media>
                  <Media body>
                    <Media heading>Nested media heading</Media>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin commodo. Cras purus odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce
                    condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                    congue felis in faucibus.
                  </Media>
                </Media>
              </Media>
            </Media>
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
            <i className="mdi mdi-folder-multiple-image mr-2"> </i>
            Alignment
          </CardTitle>

          <CardBody className="">
            <Media>
              <Media left top href="#">
                <Media
                  object
                  src={img1}
                  className="img-fluid mr-2"
                  width="60"
                  alt="Generic placeholder image"
                />
              </Media>
              <Media body>
                <Media heading>Top aligned media</Media>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin commodo. Cras purus odio,
                vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                congue felis in faucibus.
              </Media>
            </Media>
            <Media className="mt-4">
              <Media left middle href="#">
                <Media
                  object
                  src={img2}
                  className="img-fluid mr-2"
                  width="60"
                  alt="Generic placeholder image"
                />
              </Media>
              <Media body>
                <Media heading>Middle aligned media</Media>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin commodo. Cras purus odio,
                vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                congue felis in faucibus.
              </Media>
            </Media>
            <Media className="mt-4">
              <Media left bottom href="#">
                <Media
                  object
                  src={img3}
                  className="img-fluid mr-2"
                  width="60"
                  alt="Generic placeholder image"
                />
              </Media>
              <Media body>
                <Media heading>Bottom aligned media</Media>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin commodo. Cras purus odio,
                vestibulum in vulputate at, tempus viverra turpis. Fusce
                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                congue felis in faucibus.
              </Media>
            </Media>
          </CardBody>
        </Card>
        {/* --------------------------------------------------------------------------------*/}
        {/* Row*/}
        {/* --------------------------------------------------------------------------------*/}
        <Card>
          <CardTitle className="bg-light border-bottom p-3 mb-0">
            <i className="mdi mdi-folder-multiple-image mr-2"> </i>
            Media list
          </CardTitle>

          <CardBody className="">
            <Media list>
              <Media tag="li">
                <Media left href="#">
                  <Media
                    object
                    src={img1}
                    alt="Generic placeholder image"
                    className="img-fluid mr-2"
                    width="60"
                  />
                </Media>
                <Media body>
                  <Media heading>Media heading</Media>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin commodo. Cras purus odio,
                  vestibulum in vulputate at, tempus viverra turpis. Fusce
                  condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                  congue felis in faucibus.
                  <Media className="mt-4">
                    <Media left href="#">
                      <Media
                        object
                        src={img2}
                        alt="Generic placeholder image"
                        className="img-fluid mr-2"
                        width="60"
                      />
                    </Media>
                    <Media body>
                      <Media heading>Nested media heading</Media>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel
                      metus scelerisque ante sollicitudin commodo. Cras purus
                      odio, vestibulum in vulputate at, tempus viverra turpis.
                      Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                      lacinia congue felis in faucibus.
                      <Media className="mt-4">
                        <Media left href="#">
                          <Media
                            object
                            src={img3}
                            alt="Generic placeholder image"
                            className="img-fluid mr-2"
                            width="60"
                          />
                        </Media>
                        <Media body>
                          <Media heading>Nested media heading</Media>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel
                          metus scelerisque ante sollicitudin commodo. Cras
                          purus odio, vestibulum in vulputate at, tempus viverra
                          turpis. Fusce condimentum nunc ac nisi vulputate
                          fringilla. Donec lacinia congue felis in faucibus.
                        </Media>
                      </Media>
                    </Media>
                  </Media>
                  <Media className="mt-4">
                    <Media left href="#">
                      <Media
                        object
                        src={img1}
                        alt="Generic placeholder image"
                        className="img-fluid mr-2"
                        width="60"
                      />
                    </Media>
                    <Media body>
                      <Media heading>Nested media heading</Media>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel
                      metus scelerisque ante sollicitudin commodo. Cras purus
                      odio, vestibulum in vulputate at, tempus viverra turpis.
                      Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                      lacinia congue felis in faucibus.
                    </Media>
                  </Media>
                </Media>
              </Media>
              <Media tag="li" className="mt-4">
                <Media body>
                  <Media heading>Media heading</Media>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin commodo. Cras purus odio,
                  vestibulum in vulputate at, tempus viverra turpis. Fusce
                  condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                  congue felis in faucibus.
                </Media>
                <Media right href="#" className="mt-4">
                  <Media
                    object
                    src={img1}
                    alt="Generic placeholder image"
                    className="img-fluid mr-2"
                    width="60"
                  />
                </Media>
              </Media>
            </Media>
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

export default MediaComponent;

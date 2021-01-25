import React from 'react';
import { Progress, Card, CardBody, CardTitle } from 'reactstrap';

class ProgressComponent extends React.Component {
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
            <i className="mdi mdi-poll mr-2"> </i>
            Progress
          </CardTitle>

          <CardBody className="">
            <div className="text-center mb-3">0%</div>
            <Progress />
            <div className="text-center mb-3">25%</div>
            <Progress value="25" />
            <div className="text-center mb-3">50%</div>
            <Progress value={50} />
            <div className="text-center mb-3">75%</div>
            <Progress value={75} />
            <div className="text-center mb-3">100%</div>
            <Progress value="100" />
            <div className="text-center mb-3">Multiple bars</div>
            <Progress multi>
              <Progress bar value="15" />
              <Progress bar color="success" value="30" />
              <Progress bar color="info" value="25" />
              <Progress bar color="warning" value="20" />
              <Progress bar color="danger" value="5" />
            </Progress>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Color Variants
          </CardTitle>

          <CardBody className="">
            <div>
              <Progress className="mb-2" value={2 * 5} />
              <Progress className="mb-2" color="success" value="25" />
              <Progress className="mb-2" color="info" value={50} />
              <Progress className="mb-2" color="warning" value={75} />
              <Progress className="mb-2" color="danger" value="100" />
            </div>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Labels
          </CardTitle>

          <CardBody className="">
            <div>
              <Progress className="mb-3" value="25">
                25%
              </Progress>
              <Progress className="mb-3" value={50}>
                1/2
              </Progress>
              <Progress className="mb-3" value={75}>
                You are almost there!
              </Progress>
              <Progress className="mb-3" color="success" value="100">
                You did it!
              </Progress>
              <Progress className="mb-3" multi>
                <Progress bar value="15">
                  Meh
                </Progress>
                <Progress bar color="success" value="30">
                  Wow!
                </Progress>
                <Progress bar color="info" value="25">
                  Cool
                </Progress>
                <Progress bar color="warning" value="20">
                  20%
                </Progress>
                <Progress bar color="danger" value="5">
                  !!
                </Progress>
              </Progress>
            </div>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Striped
          </CardTitle>

          <CardBody className="">
            <div>
              <Progress className="mb-3" striped value={2 * 5} />
              <Progress className="mb-3" striped color="success" value="25" />
              <Progress className="mb-3" striped color="info" value={50} />
              <Progress className="mb-3" striped color="warning" value={75} />
              <Progress className="mb-3" striped color="danger" value="100" />
              <Progress className="mb-3" multi>
                <Progress striped bar value="10" />
                <Progress striped bar color="success" value="30" />
                <Progress striped bar color="warning" value="20" />
                <Progress striped bar color="danger" value="20" />
              </Progress>
            </div>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Animated
          </CardTitle>

          <CardBody className="">
            <div>
              <Progress className="mb-3" animated value={2 * 5} />
              <Progress className="mb-3" animated color="success" value="25" />
              <Progress className="mb-3" animated color="info" value={50} />
              <Progress className="mb-3" animated color="warning" value={75} />
              <Progress className="mb-3" animated color="danger" value="100" />
              <Progress className="mb-3" multi>
                <Progress animated bar value="10" />
                <Progress animated bar color="success" value="30" />
                <Progress animated bar color="warning" value="20" />
                <Progress animated bar color="danger" value="20" />
              </Progress>
            </div>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Multiple bars / Stacked
          </CardTitle>

          <CardBody className="">
            <div>
              <div className="text-center">Plain</div>
              <Progress className="mt-3" multi>
                <Progress bar value="15" />
                <Progress bar color="success" value="20" />
                <Progress bar color="info" value="25" />
                <Progress bar color="warning" value="20" />
                <Progress bar color="danger" value="15" />
              </Progress>
              <div className="text-center">With Labels</div>
              <Progress className="mt-3" multi>
                <Progress bar value="15">
                  Meh
                </Progress>
                <Progress bar color="success" value="35">
                  Wow!
                </Progress>
                <Progress bar color="warning" value="25">
                  25%
                </Progress>
                <Progress bar color="danger" value="25">
                  LOOK OUT!!
                </Progress>
              </Progress>
              <div className="text-center">Stripes and Animations</div>
              <Progress className="mt-3" multi>
                <Progress bar striped value="15">
                  Stripes
                </Progress>
                <Progress bar animated color="success" value="30">
                  Animated Stripes
                </Progress>
                <Progress bar color="info" value="25">
                  Plain
                </Progress>
              </Progress>
            </div>
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
            <i className="mdi mdi-poll mr-2"> </i>
            Max value
          </CardTitle>

          <CardBody className="">
            <div>
              <div className="text-center mb-3">1 of 5</div>
              <Progress value="1" max="5" />
              <div className="text-center mb-3">50 of 135</div>
              <Progress value={50} max="135" />
              <div className="text-center mb-3">75 of 111</div>
              <Progress value={75} max={111} />
              <div className="text-center mb-3">463 of 500</div>
              <Progress value="463" max={500} />

              <div className="text-center mb-3">Various (40) of 55</div>
              <Progress multi>
                <Progress bar value="5" max={55}>
                  5
                </Progress>
                <Progress bar color="success" value="15" max={55}>
                  15
                </Progress>
                <Progress bar color="warning" value="10" max={55}>
                  10
                </Progress>
                <Progress bar color="danger" value="10" max={55}>
                  10
                </Progress>
              </Progress>
            </div>
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

export default ProgressComponent;

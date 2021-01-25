import React from 'react';
import {
  Carousel,
  CarouselItem,
  CarouselControl,
  CarouselIndicators,
  CarouselCaption,
  UncontrolledCarousel,
  Card,
  CardBody,
  CardTitle,
  Row,
  Col
} from 'reactstrap';

import img1 from '../../assets/images/big/img1.jpg';
import img2 from '../../assets/images/big/img2.jpg';
import img3 from '../../assets/images/big/img3.jpg';

const items = [
  {
    'altText': 'Slide 1',
    'caption': 'Slide 1',
    'src': img1
  },
  {
    'altText': 'Slide 2',
    'caption': 'Slide 2',
    'src': img2
  },
  {
    'altText': 'Slide 3',
    'caption': 'Slide 3',
    'src': img3
  }
];
class CarouselComponent extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      'activeIndex': 0,
      'activeIndex2': 0
    };
    this.next = this.next.bind(this);
    this.previous = this.previous.bind(this);
    this.goToIndex = this.goToIndex.bind(this);
    this.onExiting = this.onExiting.bind(this);
    this.onExited = this.onExited.bind(this);
  }

  onExiting() {
    this.animating = true;
  }

  onExited() {
    this.animating = false;
  }

  next() {
    if (this.animating) {
      return;
    }
    const nextIndex = this.state.activeIndex === items.length - 1 ? 0 : this.state.activeIndex + 1;
    this.setState({ 'activeIndex': nextIndex });
  }

  previous() {
    if (this.animating) {
      return;
    }
    const nextIndex = this.state.activeIndex === 0 ? items.length - 1 : this.state.activeIndex - 1;
    this.setState({ 'activeIndex': nextIndex });
  }

  goToIndex(newIndex) {
    if (this.animating) {
      return;
    }
    this.setState({ 'activeIndex': newIndex });
  }

  render() {

    const activeIndex = this.state.activeIndex,

      slides = items.map(item => (
        <CarouselItem
          className="custom-tag"
          onExiting={this.onExiting}
          onExited={this.onExited}
          key={item.src}
        >
          <img className="w-100" src={item.src} alt={item.altText} />
          <CarouselCaption captionText={item.caption} captionHeader={item.caption} />
        </CarouselItem>
      ));

    return <div>
      <style>
        {
          `.custom-tag {
                max-width: 100%;
                height: 400px;
              }`
        }
      </style>
      {/* --------------------------------------------------------------------------------*/}
      {/* Start Inner Div*/}
      {/* --------------------------------------------------------------------------------*/}
      <Row>
        <Col xs="12" md="12">
          {/* --------------------------------------------------------------------------------*/}
          {/* Cariusel-1*/}
          {/* --------------------------------------------------------------------------------*/}
          <Card>
            <CardBody>
              <CardTitle className="mb-3">Carousel</CardTitle>
              <Carousel
                activeIndex={activeIndex}
                next={this.next}
                previous={this.previous}
              >
                <CarouselIndicators items={items} activeIndex={activeIndex} onClickHandler={this.goToIndex} />
                {slides}
                <CarouselControl direction="prev" directionText="Previous" onClickHandler={this.previous} />
                <CarouselControl direction="next" directionText="Next" onClickHandler={this.next} />
              </Carousel>
            </CardBody>
          </Card>
        </Col>
        <Col xs="12" md="12">
          {/* --------------------------------------------------------------------------------*/}
          {/* Cariusel-2*/}
          {/* --------------------------------------------------------------------------------*/}
          <Card>
            <CardBody>
              <CardTitle className="mb-3">Uncontrolled Carousel</CardTitle>
              <UncontrolledCarousel items={items} />
            </CardBody>
          </Card>
        </Col>
      </Row>
      {/* --------------------------------------------------------------------------------*/}
      {/* End Inner Div*/}
      {/* --------------------------------------------------------------------------------*/}
    </div>;
  }
}

export default CarouselComponent;



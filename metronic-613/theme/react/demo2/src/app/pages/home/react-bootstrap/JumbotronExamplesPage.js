import React from "react";
import Notice from "../../../partials/content/Notice";
import CodeExample from "../../../partials/content/CodeExample";
import { Jumbotron, Container, Button } from "react-bootstrap";

export default class JumbotronExamplesPage extends React.Component {
  render() {
    return (
      <>
        <Notice icon="flaticon-warning kt-font-primary">
          <p>
            A lightweight, flexible component that can optionally extend the
            entire viewport to showcase key content on your site.
          </p>
          <p>
            For more info please check the components's official{" "}
            <a
              target="_blank"
              className="kt-link"
              rel="noopener noreferrer"
              href="https://react-bootstrap.github.io/components/jumbotron/"
            >
              demos & documentation
            </a>
          </p>
        </Notice>

        <CodeExample jsCode={jsCode1} beforeCodeTitle="Basic Example">
          <div className="kt-section">
            <span className="kt-section__sub"></span>
            <Jumbotron>
              <h1>Hello, world!</h1>
              <p>
                This is a simple hero unit, a simple jumbotron-style component
                for calling extra attention to featured content or information.
              </p>
              <p>
                <Button variant="primary">Learn more</Button>
              </p>
            </Jumbotron>
          </div>
        </CodeExample>

        <CodeExample jsCode={jsCode2} beforeCodeTitle="Fluid">
          <div className="kt-section">
            <span className="kt-section__sub"></span>
            <Jumbotron fluid>
              <Container>
                <h1>Fluid jumbotron</h1>
                <p>
                  This is a modified jumbotron that occupies the entire
                  horizontal space of its parent.
                </p>
              </Container>
            </Jumbotron>
          </div>
        </CodeExample>
      </>
    );
  }
}

const jsCode1 = `
<Jumbotron>
  <h1>Hello, world!</h1>
  <p>
    This is a simple hero unit, a simple jumbotron-style component for calling
    extra attention to featured content or information.
  </p>
  <p>
    <Button variant="primary">Learn more</Button>
  </p>
</Jumbotron>
`;
const jsCode2 = `
<Jumbotron fluid>
  <Container>
    <h1>Fluid jumbotron</h1>
    <p>
      This is a modified jumbotron that occupies the entire horizontal space of
      its parent.
    </p>
  </Container>
</Jumbotron>
`;

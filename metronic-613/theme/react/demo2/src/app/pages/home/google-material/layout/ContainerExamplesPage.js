import React from "react";
import Notice from "../../../../partials/content/Notice";
import { Container, Typography } from "@material-ui/core";
import CodeExample from "../../../../partials/content/CodeExample";

const jsCode1 = `
import React from 'react';
import CssBaseline from '@material-ui/core/CssBaseline';
import Typography from '@material-ui/core/Typography';
import Container from '@material-ui/core/Container';

export default function SimpleContainer() {
  return (
    <React.Fragment>
      <CssBaseline />
      <Container maxWidth="sm">
        <Typography component="div" style={{ backgroundColor: '#cfe8fc', height: '100vh' }} />
      </Container>
    </React.Fragment>
  );
}
`;
const jsCode2 = `
import React from 'react';
import CssBaseline from '@material-ui/core/CssBaseline';
import Typography from '@material-ui/core/Typography';
import Container from '@material-ui/core/Container';

export default function FixedContainer() {
  return (
    <React.Fragment>
      <CssBaseline />
      <Container fixed>
        <Typography component="div" style={{ backgroundColor: '#cfe8fc', height: '100vh' }} />
      </Container>
    </React.Fragment>
  );
}
`;

export default function ContainerExamplesPage() {
  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          The container centers your content horizontally. It's the most basic
          layout element.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/container/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Fluid">
        <div className="kt-section">
          <span className="kt-section__sub">
            A fluid container width is bounded by that maxWidth property value.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Container maxWidth="sm">
              <Typography
                component="div"
                style={{ backgroundColor: "#cfe8fc", height: "100vh" }}
              />
            </Container>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode2} beforeCodeTitle="Fixed">
        <div className="kt-section">
          <span className="kt-section__sub">
            If you prefer to design for a fixed set of sizes instead of trying
            to accommodate a fully fluid viewport, you can set the fixed
            property. The max-width matches the min-width of the current
            breakpoint.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Container fixed>
              <Typography
                component="div"
                style={{ backgroundColor: "#cfe8fc", height: "100vh" }}
              />
            </Container>
          </div>
        </div>
      </CodeExample>
    </>
  );
}

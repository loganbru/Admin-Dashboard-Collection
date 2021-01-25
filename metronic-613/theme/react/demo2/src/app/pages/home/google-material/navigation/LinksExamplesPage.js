/* eslint-disable no-script-url */
/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles } from "@material-ui/core/styles";
import { Link, Typography } from "@material-ui/core";
import { MemoryRouter as Router } from "react-router";
import { Link as RouterLink } from "react-router-dom";

// Example 1
const useStyles1 = makeStyles(theme => ({
  link: {
    margin: theme.spacing(1)
  }
}));

const dudUrl = "#";

// Example 2
// The usage of React.forwardRef will no longer be required for react-router-dom v6.
// see https://github.com/ReactTraining/react-router/issues/6056
const AdapterLink = React.forwardRef((props, ref) => (
  <RouterLink innerRef={ref} {...props} />
));

const CollisionLink = React.forwardRef((props, ref) => (
  <RouterLink innerRef={ref} to="/getting-started/installation/" {...props} />
));

export default function LinksExamplesPage() {
  const classes1 = useStyles1();

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          The Link component allows you to easily customize anchor elements with
          your theme colors and typography styles.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/links/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Simple links">
        <div className="kt-section">
          <span className="kt-section__sub">
            The Link component is built on top of the <code>Typography</code>{" "}
            component. You can leverage its properties.
          </span>
          <div className="kt-separator kt-separator--dashed" />
          <div className="kt-section__content">
            <Typography>
              <Link href={dudUrl} className={classes1.link}>
                Link
              </Link>
              <Link href={dudUrl} color="inherit" className={classes1.link}>
                {'color="inherit"'}
              </Link>
              <Link href={dudUrl} variant="body2" className={classes1.link}>
                {'variant="body2"'}
              </Link>
            </Typography>
          </div>
        </div>
      </CodeExample>

      <CodeExample
        jsCode={jsCode2}
        beforeCodeTitle="Third-party routing library"
      >
        <div className="kt-section">
          <span className="kt-section__sub">
            One common use case is to perform the navigation on the client only,
            without doing a .html round-trip with the server. The{" "}
            <code>Link</code> component provides a property to handle this use
            case: <code>component</code>.
          </span>
          <div className="kt-separator kt-separator--dashed" />
          <div className="kt-section__content">
            <Router>
              <div>
                <Link component={RouterLink} to="/">
                  Simple case
                </Link>
                <br />
                <Link component={AdapterLink} to="/">
                  Ref forwarding
                </Link>
                <br />
                <Link component={CollisionLink}>Avoids props collision</Link>
              </div>
            </Router>
          </div>
        </div>
      </CodeExample>
    </>
  );
}

const jsCode1 = `
/* eslint-disable no-script-url */
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Link from '@material-ui/core/Link';
import Typography from '@material-ui/core/Typography';

const useStyles = makeStyles(theme => ({
  link: {
    margin: theme.spacing(1),
  },
}));

// This resolves to nothing and doesn't affect browser history
const dudUrl = '#';

export default function Links() {
  const classes = useStyles();

  return (
    <Typography>
      <Link href={dudUrl} className={classes.link}>
        Link
      </Link>
      <Link href={dudUrl} color="inherit" className={classes.link}>
        {'color="inherit"'}
      </Link>
      <Link href={dudUrl} variant="body2" className={classes.link}>
        {'variant="body2"'}
      </Link>
    </Typography>
  );
}
`;
const jsCode2 = `
/* eslint-disable jsx-a11y/anchor-is-valid */
import React from 'react';
import { MemoryRouter as Router } from 'react-router';
import { Link as RouterLink } from 'react-router-dom';
import Link from '@material-ui/core/Link';

// The usage of React.forwardRef will no longer be required for react-router-dom v6.
// see https://github.com/ReactTraining/react-router/issues/6056
const AdapterLink = React.forwardRef((props, ref) => <RouterLink innerRef={ref} {...props} />);

const CollisionLink = React.forwardRef((props, ref) => (
  <RouterLink innerRef={ref} to="/getting-started/installation/" {...props} />
));

export default function LinkRouter() {
  return (
    <Router>
      <div>
        <Link component={RouterLink} to="/">
          Simple case
        </Link>
        <br />
        <Link component={AdapterLink} to="/">
          Ref forwarding
        </Link>
        <br />
        <Link component={CollisionLink}>Avoids props collision</Link>
      </div>
    </Router>
  );
}
`;

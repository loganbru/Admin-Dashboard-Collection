/* eslint-disable no-restricted-imports */
import React from "react";
import PropTypes from "prop-types";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles, withStyles } from "@material-ui/core/styles";
import { NoSsr, Button } from "@material-ui/core";

// Example 1
const styles = theme => ({
  button: {
    display: "block",
    margin: theme.spacing(2)
  }
});

// Example 2
const useStyles = makeStyles({
  container: {
    maxWidth: 300,
    wordBreak: "break-all"
  }
});

function LargeTree() {
  return Array.from(new Array(3000)).map((_, index) => (
    <span key={index}>.</span>
  ));
}

function NoSSRExamplesPage(props) {
  // Example 1
  const { classes } = props;

  // Example 2
  const classes2 = useStyles();
  const [state, setState] = React.useState({ open: false, defer: false });

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          NoSsr purposely removes components from the subject of Server Side
          Rendering (SSR).
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/no-ssr/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Client side deferring">
        <div className="kt-section">
          <span className="kt-section__sub">
            In it's core, the NoSsr component purpose is to defer rendering. You
            can use it to defer the rendering from the server to the client.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <div>
              <Button
                className={classes.button}
                variant="contained"
                color="primary"
              >
                Server & Client
              </Button>
              <NoSsr>
                <Button
                  className={classes.button}
                  variant="contained"
                  color="secondary"
                >
                  Client only
                </Button>
              </NoSsr>
            </div>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode2} beforeCodeTitle="Frame deferring">
        <div className="kt-section">
          <span className="kt-section__sub">
            You can also use it to defer the rendering within the client itself.
            You can wait a screen frame with the <code>defer</code> property to
            render the children. React does 2 commits instead of 1.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <div>
              <button
                type="button"
                onClick={() =>
                  setState({
                    open: !state.open,
                    defer: false
                  })
                }
              >
                {'Render NoSsr defer="false"'}
              </button>
              <button
                type="button"
                onClick={() =>
                  setState({
                    open: !state.open,
                    defer: true
                  })
                }
              >
                {'Render NoSsr defer="true"'}
              </button>
              {state.open ? (
                <div className={classes2.container}>
                  <span>Outside NoSsr</span>
                  <NoSsr defer={state.defer}>
                    ....Inside NoSsr
                    <LargeTree />
                  </NoSsr>
                </div>
              ) : null}
            </div>
          </div>
        </div>
      </CodeExample>
    </>
  );
}

NoSSRExamplesPage.propTypes = {
  classes: PropTypes.object.isRequired
};

export default withStyles(styles)(NoSSRExamplesPage);

const jsCode1 = `
import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import NoSsr from '@material-ui/core/NoSsr';
import Button from '@material-ui/core/Button';

const styles = theme => ({
  button: {
    display: 'block',
    margin: theme.spacing(2),
  },
});

function SimpleNoSsr(props) {
  const { classes } = props;

  return (
    <div>
      <Button className={classes.button} variant="contained" color="primary">
        Server & Client
      </Button>
      <NoSsr>
        <Button className={classes.button} variant="contained" color="secondary">
          Client only
        </Button>
      </NoSsr>
    </div>
  );
}

SimpleNoSsr.propTypes = {
  classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(SimpleNoSsr);
`;
const jsCode2 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import NoSsr from '@material-ui/core/NoSsr';

const useStyles = makeStyles({
  container: {
    maxWidth: 300,
    wordBreak: 'break-all',
  },
});

function LargeTree() {
  return Array.from(new Array(3000)).map((_, index) => <span key={index}>.</span>);
}

function FrameDeferring() {
  const classes = useStyles();
  const [state, setState] = React.useState({ open: false, defer: false });

  return (
    <div>
      <button
        type="button"
        onClick={() =>
          setState({
            open: !state.open,
            defer: false,
          })
        }
      >
        {'Render NoSsr defer="false"'}
      </button>
      <button
        type="button"
        onClick={() =>
          setState({
            open: !state.open,
            defer: true,
          })
        }
      >
        {'Render NoSsr defer="true"'}
      </button>
      {state.open ? (
        <div className={classes.container}>
          <span>Outside NoSsr</span>
          <NoSsr defer={state.defer}>
            ....Inside NoSsr
            <LargeTree />
          </NoSsr>
        </div>
      ) : null}
    </div>
  );
}

export default FrameDeferring;
`;

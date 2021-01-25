/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles } from "@material-ui/core/styles";
import { ClickAwayListener, Button, Paper } from "@material-ui/core";
import { grey } from "@material-ui/core/colors";

// Example 1
const useStyles = makeStyles(theme => ({
  root: {
    position: "relative"
  },
  paper: {
    position: "absolute",
    top: 36,
    right: 0,
    left: 0
  },
  fake: {
    backgroundColor: grey[200],
    height: theme.spacing(1),
    margin: theme.spacing(2),
    // Selects every two elements among any group of siblings.
    "&:nth-child(2n)": {
      marginRight: theme.spacing(3)
    }
  }
}));

export default function ClickAwayListenerExamplesPage() {
  // Example 1
  const [open, setOpen] = React.useState(false);
  const classes = useStyles();

  const handleClick = () => {
    setOpen(prev => !prev);
  };

  const handleClickAway = () => {
    setOpen(false);
  };

  const fake = <div className={classes.fake} />;

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          Detect if a click event happened outside of an element. It listens for
          clicks that occur somewhere in the document
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/click-away-listener/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Simple menu dropdown">
        <div className="kt-section">
          <span className="kt-section__sub">
            For instance, if you need to hide a menu dropdown when people click
            anywhere else on your page:
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <div className={classes.root}>
              <ClickAwayListener onClickAway={handleClickAway}>
                <div>
                  <Button onClick={handleClick}>Open menu</Button>
                  {open ? (
                    <Paper className={classes.paper}>
                      {fake}
                      {fake}
                      {fake}
                      {fake}
                      {fake}
                    </Paper>
                  ) : null}
                </div>
              </ClickAwayListener>
            </div>
          </div>
        </div>
      </CodeExample>
    </>
  );
}

const jsCode1 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import ClickAwayListener from '@material-ui/core/ClickAwayListener';
import Button from '@material-ui/core/Button';
import Paper from '@material-ui/core/Paper';
import { grey } from '@material-ui/core/colors';

const useStyles = makeStyles(theme => ({
  root: {
    position: 'relative',
  },
  paper: {
    position: 'absolute',
    top: 36,
    right: 0,
    left: 0,
  },
  fake: {
    backgroundColor: grey[200],
    height: theme.spacing(1),
    margin: theme.spacing(2),
    // Selects every two elements among any group of siblings.
    '&:nth-child(2n)': {
      marginRight: theme.spacing(3),
    },
  },
}));

export default function ClickAway() {
  const [open, setOpen] = React.useState(false);
  const classes = useStyles();

  const handleClick = () => {
    setOpen(prev => !prev);
  };

  const handleClickAway = () => {
    setOpen(false);
  };

  const fake = <div className={classes.fake} />;

  return (
    <div className={classes.root}>
      <ClickAwayListener onClickAway={handleClickAway}>
        <div>
          <Button onClick={handleClick}>Open menu</Button>
          {open ? (
            <Paper className={classes.paper}>
              {fake}
              {fake}
              {fake}
              {fake}
              {fake}
            </Paper>
          ) : null}
        </div>
      </ClickAwayListener>
    </div>
  );
}
`;

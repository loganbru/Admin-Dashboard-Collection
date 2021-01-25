/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles } from "@material-ui/core/styles";
import { Paper, Typography } from "@material-ui/core";

const useStyles = makeStyles(theme => ({
  root: {
    padding: theme.spacing(3, 2)
  }
}));

export default function PaperExamplesPage() {
  const classes = useStyles();

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          In Material Design, the physical properties of paper are translated to
          the screen.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/paper/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Paper">
        <div className="kt-section">
          <span className="kt-section__sub">
            The background of an application resembles the flat, opaque texture
            of a sheet of paper, and an application’s behavior mimics paper’s
            ability to be re-sized, shuffled, and bound together in multiple
            sheets.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <div>
              <Paper className={classes.root}>
                <Typography variant="h5" component="h3">
                  This is a sheet of paper.
                </Typography>
                <Typography component="p">
                  Paper can be used to build surface or other elements for your
                  application.
                </Typography>
              </Paper>
            </div>
          </div>
        </div>
        <div className="kt-section"></div>
      </CodeExample>
    </>
  );
}

const jsCode1 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';

const useStyles = makeStyles(theme => ({
  root: {
    padding: theme.spacing(3, 2),
  },
}));

export default function PaperSheet() {
  const classes = useStyles();

  return (
    <div>
      <Paper className={classes.root}>
        <Typography variant="h5" component="h3">
          This is a sheet of paper.
        </Typography>
        <Typography component="p">
          Paper can be used to build surface or other elements for your application.
        </Typography>
      </Paper>
    </div>
  );
}
`;

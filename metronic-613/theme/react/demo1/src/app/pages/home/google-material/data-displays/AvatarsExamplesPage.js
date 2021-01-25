/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles } from "@material-ui/core/styles";
import { Grid, Avatar } from "@material-ui/core";
import { deepOrange, deepPurple, green, pink } from "@material-ui/core/colors";
import FolderIcon from "@material-ui/icons/Folder";
import PageviewIcon from "@material-ui/icons/Pageview";
import AssignmentIcon from "@material-ui/icons/Assignment";

// Example 1
const useStyles1 = makeStyles({
  avatar: {
    margin: 10
  },
  bigAvatar: {
    margin: 10,
    width: 60,
    height: 60
  }
});

// Example 2
const useStyles2 = makeStyles({
  avatar: {
    margin: 10
  },
  orangeAvatar: {
    margin: 10,
    color: "#fff",
    backgroundColor: deepOrange[500]
  },
  purpleAvatar: {
    margin: 10,
    color: "#fff",
    backgroundColor: deepPurple[500]
  }
});

// Example 3
const useStyles3 = makeStyles({
  avatar: {
    margin: 10
  },
  pinkAvatar: {
    margin: 10,
    color: "#fff",
    backgroundColor: pink[500]
  },
  greenAvatar: {
    margin: 10,
    color: "#fff",
    backgroundColor: green[500]
  }
});

export default function AvatarsExamplesPage() {
  // Example 1
  const classes1 = useStyles1();

  // Example 2
  const classes2 = useStyles2();

  // Example 3
  const classes3 = useStyles3();

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          Avatars are found throughout material design with uses in everything
          from tables to dialog menus.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/avatars/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Image avatars">
        <div className="kt-section">
          <span className="kt-section__sub">
            Image avatars can be created by passing standard <code>img</code>{" "}
            props <code>src</code> or <code>srcSet</code> into the component.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Grid container justify="center" alignItems="center">
              <Avatar
                alt="Remy Sharp"
                src="https://material-ui.com/static/images/avatar/1.jpg"
                className={classes1.avatar}
              />
              <Avatar
                alt="Remy Sharp"
                src="https://material-ui.com/static/images/avatar/1.jpg"
                className={classes1.bigAvatar}
              />
            </Grid>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode2} beforeCodeTitle="Letter avatars">
        <div className="kt-section">
          <span className="kt-section__sub">
            Avatars containing simple characters can be created by passing your
            string as <code>children</code>.
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Grid container justify="center" alignItems="center">
              <Avatar className={classes2.avatar}>H</Avatar>
              <Avatar className={classes2.orangeAvatar}>N</Avatar>
              <Avatar className={classes2.purpleAvatar}>OP</Avatar>
            </Grid>
          </div>
        </div>
      </CodeExample>

      <CodeExample jsCode={jsCode3} beforeCodeTitle="Icon avatars">
        <div className="kt-section">
          <span className="kt-section__sub">
            Icon avatars are created by passing an icon as <code>children</code>
            .
          </span>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <Grid container justify="center" alignItems="center">
              <Avatar className={classes3.avatar}>
                <FolderIcon />
              </Avatar>
              <Avatar className={classes3.pinkAvatar}>
                <PageviewIcon />
              </Avatar>
              <Avatar className={classes3.greenAvatar}>
                <AssignmentIcon />
              </Avatar>
            </Grid>
          </div>
        </div>
      </CodeExample>
    </>
  );
}

const jsCode1 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Avatar from '@material-ui/core/Avatar';
import Grid from '@material-ui/core/Grid';

const useStyles = makeStyles({
  avatar: {
    margin: 10,
  },
  bigAvatar: {
    margin: 10,
    width: 60,
    height: 60,
  },
});

export default function ImageAvatars() {
  const classes = useStyles();

  return (
    <Grid container justify="center" alignItems="center">
      <Avatar alt="Remy Sharp" src="/static/images/avatar/1.jpg" className={classes.avatar} />
      <Avatar alt="Remy Sharp" src="/static/images/avatar/1.jpg" className={classes.bigAvatar} />
    </Grid>
  );
}
`;
const jsCode2 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Avatar from '@material-ui/core/Avatar';
import { deepOrange, deepPurple } from '@material-ui/core/colors';
import Grid from '@material-ui/core/Grid';

const useStyles = makeStyles({
  avatar: {
    margin: 10,
  },
  orangeAvatar: {
    margin: 10,
    color: '#fff',
    backgroundColor: deepOrange[500],
  },
  purpleAvatar: {
    margin: 10,
    color: '#fff',
    backgroundColor: deepPurple[500],
  },
});

export default function LetterAvatars() {
  const classes = useStyles();

  return (
    <Grid container justify="center" alignItems="center">
      <Avatar className={classes.avatar}>H</Avatar>
      <Avatar className={classes.orangeAvatar}>N</Avatar>
      <Avatar className={classes.purpleAvatar}>OP</Avatar>
    </Grid>
  );
}
`;
const jsCode3 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import { green, pink } from '@material-ui/core/colors';
import Avatar from '@material-ui/core/Avatar';
import FolderIcon from '@material-ui/icons/Folder';
import PageviewIcon from '@material-ui/icons/Pageview';
import AssignmentIcon from '@material-ui/icons/Assignment';
import Grid from '@material-ui/core/Grid';

const useStyles = makeStyles({
  avatar: {
    margin: 10,
  },
  pinkAvatar: {
    margin: 10,
    color: '#fff',
    backgroundColor: pink[500],
  },
  greenAvatar: {
    margin: 10,
    color: '#fff',
    backgroundColor: green[500],
  },
});

export default function IconAvatars() {
  const classes = useStyles();

  return (
    <Grid container justify="center" alignItems="center">
      <Avatar className={classes.avatar}>
        <FolderIcon />
      </Avatar>
      <Avatar className={classes.pinkAvatar}>
        <PageviewIcon />
      </Avatar>
      <Avatar className={classes.greenAvatar}>
        <AssignmentIcon />
      </Avatar>
    </Grid>
  );
}
`;

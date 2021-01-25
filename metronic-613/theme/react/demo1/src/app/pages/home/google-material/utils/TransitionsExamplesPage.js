/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { makeStyles } from "@material-ui/core/styles";
import {
  FormControlLabel,
  Switch,
  Collapse,
  Paper,
  Fade,
  Grow,
  Slide,
  Zoom
} from "@material-ui/core";

// Example 1
const useStyles1 = makeStyles(theme => ({
  root: {
    height: 180
  },
  container: {
    display: "flex"
  },
  paper: {
    margin: theme.spacing(1)
  },
  svg: {
    width: 100,
    height: 100
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1
  }
}));

// Example 2
const useStyles2 = makeStyles(theme => ({
  root: {
    height: 180
  },
  container: {
    display: "flex"
  },
  paper: {
    margin: theme.spacing(1)
  },
  svg: {
    width: 100,
    height: 100
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1
  }
}));

// Example 3
const useStyles3 = makeStyles(theme => ({
  root: {
    height: 180
  },
  container: {
    display: "flex"
  },
  paper: {
    margin: theme.spacing(1)
  },
  svg: {
    width: 100,
    height: 100
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1
  }
}));

// Example 4
const useStyles4 = makeStyles(theme => ({
  root: {
    height: 180
  },
  wrapper: {
    width: 100 + theme.spacing(2)
  },
  paper: {
    zIndex: 1,
    position: "relative",
    margin: theme.spacing(1)
  },
  svg: {
    width: 100,
    height: 100
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1
  }
}));

// Example 5
const useStyles5 = makeStyles(theme => ({
  root: {
    height: 180
  },
  container: {
    display: "flex"
  },
  paper: {
    margin: theme.spacing(1)
  },
  svg: {
    width: 100,
    height: 100
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1
  }
}));

export default function TranstitionsExamplesPage() {
  // Example 1
  const classes1 = useStyles1();
  const [checked1, setChecked1] = React.useState(false);

  function handleChange1() {
    setChecked1(prev => !prev);
  }

  // Example 2
  const classes2 = useStyles2();
  const [checked2, setChecked2] = React.useState(false);

  function handleChange2() {
    setChecked2(prev => !prev);
  }

  // Example 3
  const classes3 = useStyles3();
  const [checked3, setChecked3] = React.useState(false);

  function handleChange3() {
    setChecked3(prev => !prev);
  }

  // Example 4
  const classes4 = useStyles4();
  const [checked4, setChecked4] = React.useState(false);

  function handleChange4() {
    setChecked4(prev => !prev);
  }

  // Example 5
  const classes5 = useStyles5();
  const [checked5, setChecked5] = React.useState(false);

  function handleChange5() {
    setChecked5(prev => !prev);
  }

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>Transition helps make a UI expressive and easy to use.</p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/transitions/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode1} beforeCodeTitle="Collapse">
            <div className="kt-section">
              <span className="kt-section__sub">
                Expand vertically from the top of the child element. The{" "}
                <code>collapsedHeight</code> property can be used to set the
                minimum height when not expanded.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <div className={classes1.root}>
                  <FormControlLabel
                    control={
                      <Switch checked={checked1} onChange={handleChange1} />
                    }
                    label="Show"
                  />
                  <div className={classes1.container}>
                    <Collapse in={checked1}>
                      <Paper elevation={4} className={classes1.paper}>
                        <svg className={classes1.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes1.polygon}
                          />
                        </svg>
                      </Paper>
                    </Collapse>
                    <Collapse in={checked1} collapsedHeight="40px">
                      <Paper elevation={4} className={classes1.paper}>
                        <svg className={classes1.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes1.polygon}
                          />
                        </svg>
                      </Paper>
                    </Collapse>
                  </div>
                </div>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode2} beforeCodeTitle="Fade">
            <div className="kt-section">
              <span className="kt-section__sub">
                Fade in from transparent to opaque.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <div className={classes2.root}>
                  <FormControlLabel
                    control={
                      <Switch checked={checked2} onChange={handleChange2} />
                    }
                    label="Show"
                  />
                  <div className={classes2.container}>
                    <Fade in={checked2}>
                      <Paper elevation={4} className={classes2.paper}>
                        <svg className={classes2.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes2.polygon}
                          />
                        </svg>
                      </Paper>
                    </Fade>
                  </div>
                </div>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode3} beforeCodeTitle="Grow">
            <div className="kt-section">
              <span className="kt-section__sub">
                Expand outwards from the center of the child element, while also
                fading in from transparent to opaque.
              </span>
              <p className="kt-section__sub">
                The second example demonstrates how to change the{" "}
                <code>transform-origin</code>, and conditionally applies the{" "}
                <code>timeout</code> property to change the entry speed.
              </p>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <div className={classes3.root}>
                  <FormControlLabel
                    control={
                      <Switch checked={checked3} onChange={handleChange3} />
                    }
                    label="Show"
                  />
                  <div className={classes3.container}>
                    <Grow in={checked3}>
                      <Paper elevation={4} className={classes3.paper}>
                        <svg className={classes3.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes3.polygon}
                          />
                        </svg>
                      </Paper>
                    </Grow>
                    {/* Conditionally applies the timeout property to change the entry speed. */}
                    <Grow
                      in={checked3}
                      style={{ transformOrigin: "0 0 0" }}
                      {...(checked3 ? { timeout: 1000 } : {})}
                    >
                      <Paper elevation={4} className={classes3.paper}>
                        <svg className={classes3.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes3.polygon}
                          />
                        </svg>
                      </Paper>
                    </Grow>
                  </div>
                </div>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode4} beforeCodeTitle="Slide">
            <div className="kt-section">
              <span className="kt-section__sub">
                Slide in from the edge of the screen. The <code>direction</code>{" "}
                property controls which edge of the screen the transition starts
                from.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <div className={classes4.root}>
                  <div className={classes4.wrapper}>
                    <FormControlLabel
                      control={
                        <Switch checked={checked4} onChange={handleChange4} />
                      }
                      label="Show"
                    />
                    <Slide
                      direction="up"
                      in={checked4}
                      mountOnEnter
                      unmountOnExit
                    >
                      <Paper elevation={4} className={classes4.paper}>
                        <svg className={classes4.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes4.polygon}
                          />
                        </svg>
                      </Paper>
                    </Slide>
                  </div>
                </div>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode5} beforeCodeTitle="Zoom">
            <div className="kt-section">
              <span className="kt-section__sub">
                Expand outwards from the center of the child element.
              </span>
              <p className="kt-section__sub">
                This example also demonstrates how to delay the enter
                transition.
              </p>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <div className={classes5.root}>
                  <FormControlLabel
                    control={
                      <Switch checked={checked5} onChange={handleChange5} />
                    }
                    label="Show"
                  />
                  <div className={classes5.container}>
                    <Zoom in={checked5}>
                      <Paper elevation={4} className={classes5.paper}>
                        <svg className={classes5.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes5.polygon}
                          />
                        </svg>
                      </Paper>
                    </Zoom>
                    <Zoom
                      in={checked5}
                      style={{ transitionDelay: checked5 ? "500ms" : "0ms" }}
                    >
                      <Paper elevation={4} className={classes5.paper}>
                        <svg className={classes5.svg}>
                          <polygon
                            points="0,100 50,00, 100,100"
                            className={classes5.polygon}
                          />
                        </svg>
                      </Paper>
                    </Zoom>
                  </div>
                </div>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>
    </>
  );
}

const jsCode1 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Switch from '@material-ui/core/Switch';
import Paper from '@material-ui/core/Paper';
import Collapse from '@material-ui/core/Collapse';
import FormControlLabel from '@material-ui/core/FormControlLabel';

const useStyles = makeStyles(theme => ({
  root: {
    height: 180,
  },
  container: {
    display: 'flex',
  },
  paper: {
    margin: theme.spacing(1),
  },
  svg: {
    width: 100,
    height: 100,
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1,
  },
}));

export default function SimpleCollapse() {
  const classes = useStyles();
  const [checked, setChecked] = React.useState(false);

  function handleChange() {
    setChecked(prev => !prev);
  }

  return (
    <div className={classes.root}>
      <FormControlLabel
        control={<Switch checked={checked} onChange={handleChange} />}
        label="Show"
      />
      <div className={classes.container}>
        <Collapse in={checked}>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Collapse>
        <Collapse in={checked} collapsedHeight="40px">
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Collapse>
      </div>
    </div>
  );
}
`;
const jsCode2 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Switch from '@material-ui/core/Switch';
import Paper from '@material-ui/core/Paper';
import Fade from '@material-ui/core/Fade';
import FormControlLabel from '@material-ui/core/FormControlLabel';

const useStyles = makeStyles(theme => ({
  root: {
    height: 180,
  },
  container: {
    display: 'flex',
  },
  paper: {
    margin: theme.spacing(1),
  },
  svg: {
    width: 100,
    height: 100,
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1,
  },
}));

export default function SimpleFade() {
  const classes = useStyles();
  const [checked, setChecked] = React.useState(false);

  function handleChange() {
    setChecked(prev => !prev);
  }

  return (
    <div className={classes.root}>
      <FormControlLabel
        control={<Switch checked={checked} onChange={handleChange} />}
        label="Show"
      />
      <div className={classes.container}>
        <Fade in={checked}>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Fade>
      </div>
    </div>
  );
}
`;
const jsCode3 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Switch from '@material-ui/core/Switch';
import Paper from '@material-ui/core/Paper';
import Grow from '@material-ui/core/Grow';
import FormControlLabel from '@material-ui/core/FormControlLabel';

const useStyles = makeStyles(theme => ({
  root: {
    height: 180,
  },
  container: {
    display: 'flex',
  },
  paper: {
    margin: theme.spacing(1),
  },
  svg: {
    width: 100,
    height: 100,
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1,
  },
}));

export default function SimpleGrow() {
  const classes = useStyles();
  const [checked, setChecked] = React.useState(false);

  function handleChange() {
    setChecked(prev => !prev);
  }

  return (
    <div className={classes.root}>
      <FormControlLabel
        control={<Switch checked={checked} onChange={handleChange} />}
        label="Show"
      />
      <div className={classes.container}>
        <Grow in={checked}>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Grow>
        {/* Conditionally applies the timeout property to change the entry speed. */}
        <Grow
          in={checked}
          style={{ transformOrigin: '0 0 0' }}
          {...(checked ? { timeout: 1000 } : {})}
        >
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Grow>
      </div>
    </div>
  );
}
`;
const jsCode4 = `
import React from 'react';
import Switch from '@material-ui/core/Switch';
import Paper from '@material-ui/core/Paper';
import Slide from '@material-ui/core/Slide';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import { makeStyles } from '@material-ui/core/styles';

const useStyles = makeStyles(theme => ({
  root: {
    height: 180,
  },
  wrapper: {
    width: 100 + theme.spacing(2),
  },
  paper: {
    zIndex: 1,
    position: 'relative',
    margin: theme.spacing(1),
  },
  svg: {
    width: 100,
    height: 100,
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1,
  },
}));

export default function SimpleSlide() {
  const classes = useStyles();
  const [checked, setChecked] = React.useState(false);

  function handleChange() {
    setChecked(prev => !prev);
  }

  return (
    <div className={classes.root}>
      <div className={classes.wrapper}>
        <FormControlLabel
          control={<Switch checked={checked} onChange={handleChange} />}
          label="Show"
        />
        <Slide direction="up" in={checked} mountOnEnter unmountOnExit>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Slide>
      </div>
    </div>
  );
}
`;
const jsCode5 = `
import React from 'react';
import Switch from '@material-ui/core/Switch';
import Paper from '@material-ui/core/Paper';
import Zoom from '@material-ui/core/Zoom';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import { makeStyles } from '@material-ui/core/styles';

const useStyles = makeStyles(theme => ({
  root: {
    height: 180,
  },
  container: {
    display: 'flex',
  },
  paper: {
    margin: theme.spacing(1),
  },
  svg: {
    width: 100,
    height: 100,
  },
  polygon: {
    fill: theme.palette.common.white,
    stroke: theme.palette.divider,
    strokeWidth: 1,
  },
}));

export default function SimpleZoom() {
  const classes = useStyles();
  const [checked, setChecked] = React.useState(false);

  function handleChange() {
    setChecked(prev => !prev);
  }

  return (
    <div className={classes.root}>
      <FormControlLabel
        control={<Switch checked={checked} onChange={handleChange} />}
        label="Show"
      />
      <div className={classes.container}>
        <Zoom in={checked}>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Zoom>
        <Zoom in={checked} style={{ transitionDelay: checked ? '500ms' : '0ms' }}>
          <Paper elevation={4} className={classes.paper}>
            <svg className={classes.svg}>
              <polygon points="0,100 50,00, 100,100" className={classes.polygon} />
            </svg>
          </Paper>
        </Zoom>
      </div>
    </div>
  );
}
`;

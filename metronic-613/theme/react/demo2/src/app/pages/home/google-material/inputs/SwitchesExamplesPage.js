/* eslint-disable no-unused-vars */
/* eslint-disable no-restricted-imports */
import React from "react";
import {
  Switch,
  FormGroup,
  FormControl,
  FormControlLabel,
  FormLabel,
  FormHelperText,
  Grid,
  Typography
} from "@material-ui/core";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import { withStyles } from '@material-ui/core/styles';
import { purple } from '@material-ui/core/colors';

// Example 4
const PurpleSwitch = withStyles({
  switchBase: {
    color: purple[300],
    '&$checked': {
      color: purple[500],
    },
    '&$checked + $track': {
      backgroundColor: purple[500],
    },
  },
  checked: {},
  track: {},
})(Switch);

const IOSSwitch = withStyles(theme => ({
  root: {
    width: 42,
    height: 26,
    padding: 0,
    margin: theme.spacing(1),
  },
  switchBase: {
    padding: 1,
    '&$checked': {
      transform: 'translateX(16px)',
      color: theme.palette.common.white,
      '& + $track': {
        backgroundColor: '#52d869',
        opacity: 1,
        border: 'none',
      },
    },
    '&$focusVisible $thumb': {
      color: '#52d869',
      border: '6px solid #fff',
    },
  },
  thumb: {
    width: 24,
    height: 24,
  },
  track: {
    borderRadius: 26 / 2,
    border: `1px solid ${theme.palette.grey[400]}`,
    backgroundColor: theme.palette.grey[50],
    opacity: 1,
    transition: theme.transitions.create(['background-color', 'border']),
  },
  checked: {},
  focusVisible: {},
}))(({ classes, ...props }) => {
  return (
    <Switch
      focusVisibleClassName={classes.focusVisible}
      disableRipple
      classes={{
        root: classes.root,
        switchBase: classes.switchBase,
        thumb: classes.thumb,
        track: classes.track,
        checked: classes.checked,
      }}
      {...props}
    />
  );
});

const AntSwitch = withStyles(theme => ({
  root: {
    width: 28,
    height: 16,
    padding: 0,
    display: 'flex',
  },
  switchBase: {
    padding: 2,
    color: theme.palette.grey[500],
    '&$checked': {
      transform: 'translateX(12px)',
      color: theme.palette.common.white,
      '& + $track': {
        opacity: 1,
        backgroundColor: theme.palette.primary.main,
        borderColor: theme.palette.primary.main,
      },
    },
  },
  thumb: {
    width: 12,
    height: 12,
    boxShadow: 'none',
  },
  track: {
    border: `1px solid ${theme.palette.grey[500]}`,
    borderRadius: 16 / 2,
    opacity: 1,
    backgroundColor: theme.palette.common.white,
  },
  checked: {},
}))(Switch);

export default function SwitchesExamplesPage() {
  // Example 1
  const [state, setState] = React.useState({
    checkedA: true,
    checkedB: true
  });

  const handleChange = name => event => {
    setState({ ...state, [name]: event.target.checked });
  };

  // Example 2
  const [state2, setState2] = React.useState({
    checkedA: true,
    checkedB: true
  });

  const handleChange2 = name => event => {
    setState2({ ...state2, [name]: event.target.checked });
  };

  // Example 3
  const [state3, setState3] = React.useState({
    gilad: true,
    jason: false,
    antoine: true
  });

  const handleChange3 = name => event => {
    setState3({ ...state3, [name]: event.target.checked });
  };

  // Example 4
  const [state4, setState4] = React.useState({
    checkedA: true,
    checkedB: true,
    checkedC: true,
  });

  const handleChange4 = name => event => {
    setState4({ ...state4, [name]: event.target.checked });
  };

  // Example 5
  const [value, setValue] = React.useState('female');

  function handleChange5(event) {
    setValue(event.target.value);
  }

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>Switches toggle the state of a single setting on or off.</p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/switches/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <CodeExample jsCode={jsCode1} beforeCodeTitle="Swithces">
        <div className="kt-section">
          <span className="kt-section__sub">
            <code>Switches</code> toggle the state of a single setting on or
            off.
          </span>
          <p className="kt-section__sub">
            Switches are the preferred way to adjust settings on mobile. The
            option that the switch controls, as well as the state it’s in,
            should be made clear from the corresponding inline label.
          </p>
          <div className="kt-separator kt-separator--dashed"></div>
          <div className="kt-section__content">
            <div>
              <Switch
                checked={state.checkedA}
                onChange={handleChange("checkedA")}
                value="checkedA"
                inputProps={{ "aria-label": "secondary checkbox" }}
              />
              <Switch
                checked={state.checkedB}
                onChange={handleChange("checkedB")}
                value="checkedB"
                color="primary"
                inputProps={{ "aria-label": "primary checkbox" }}
              />
              <Switch
                value="checkedC"
                inputProps={{ "aria-label": "primary checkbox" }}
              />
              <Switch
                disabled
                value="checkedD"
                inputProps={{ "aria-label": "disabled checkbox" }}
              />
              <Switch
                disabled
                checked
                value="checkedE"
                inputProps={{ "aria-label": "primary checkbox" }}
              />
              <Switch
                defaultChecked
                value="checkedF"
                color="default"
                inputProps={{ "aria-label": "checkbox with default color" }}
              />
            </div>
          </div>
        </div>
      </CodeExample>

      <div className="row">
        <div className="col-md-6">
          <CodeExample
            jsCode={jsCode2}
            beforeCodeTitle="Switches with FormControlLabel"
          >
            <div className="kt-section">
              <span className="kt-section__sub">
                <code>Switch</code> can also be used with a label description
                thanks to the <code>FormControlLabel</code> component.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <FormGroup row>
                  <FormControlLabel
                    control={
                      <Switch
                        checked={state2.checkedA}
                        onChange={handleChange2("checkedA")}
                        value="checkedA"
                      />
                    }
                    label="Secondary"
                  />
                  <FormControlLabel
                    control={
                      <Switch
                        checked={state2.checkedB}
                        onChange={handleChange2("checkedB")}
                        value="checkedB"
                        color="primary"
                      />
                    }
                    label="Primary"
                  />
                  <FormControlLabel
                    control={<Switch value="checkedC" />}
                    label="Uncontrolled"
                  />
                  <FormControlLabel
                    disabled
                    control={<Switch value="checkedD" />}
                    label="Disabled"
                  />
                  <FormControlLabel
                    disabled
                    control={<Switch checked value="checkedE" />}
                    label="Disabled"
                  />
                </FormGroup>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample
            jsCode={jsCode3}
            beforeCodeTitle="Switches with FormGroup"
          >
            <div className="kt-section">
              <span className="kt-section__sub">
                <code>FormGroup</code> is a helpful wrapper used to group
                selection controls components that provides an easier API.
                However, we encourage you to use a <code>checkbox</code>{" "}
                instead.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <FormControl component="fieldset">
                  <FormLabel component="legend">
                    Assign responsibility
                  </FormLabel>
                  <FormGroup>
                    <FormControlLabel
                      control={
                        <Switch
                          checked={state3.gilad}
                          onChange={handleChange3("gilad")}
                          value="gilad"
                        />
                      }
                      label="Gilad Gray"
                    />
                    <FormControlLabel
                      control={
                        <Switch
                          checked={state3.jason}
                          onChange={handleChange3("jason")}
                          value="jason"
                        />
                      }
                      label="Jason Killian"
                    />
                    <FormControlLabel
                      control={
                        <Switch
                          checked={state3.antoine}
                          onChange={handleChange3("antoine")}
                          value="antoine"
                        />
                      }
                      label="Antoine Llorca"
                    />
                  </FormGroup>
                  <FormHelperText>Be careful</FormHelperText>
                </FormControl>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode4} beforeCodeTitle="Customized switches">
            <div className="kt-section">
              <span className="kt-section__sub">
                Here are some examples of customizing the component. You can
                learn more about this in the overrides documentation page.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <FormGroup>
                  <FormControlLabel
                    control={
                      <PurpleSwitch
                        checked={state4.checkedA}
                        onChange={handleChange4("checkedA")}
                        value="checkedA"
                      />
                    }
                    label="Custom color"
                  />
                  <FormControlLabel
                    control={
                      <IOSSwitch
                        checked={state4.checkedB}
                        onChange={handleChange4("checkedB")}
                        value="checkedB"
                      />
                    }
                    label="iOS style"
                  />
                  <Typography component="div">
                    <Grid
                      component="label"
                      container
                      alignItems="center"
                      spacing={1}
                    >
                      <Grid item>Off</Grid>
                      <Grid item>
                        <AntSwitch
                          checked={state4.checkedC}
                          onChange={handleChange4("checkedC")}
                          value="checkedC"
                        />
                      </Grid>
                      <Grid item>On</Grid>
                    </Grid>
                  </Typography>
                </FormGroup>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode5} beforeCodeTitle="Label placement">
            <div className="kt-section">
              <span className="kt-section__sub">
                You can change the placement of the label:
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <FormControl component="fieldset">
                  <FormLabel component="legend">labelPlacement</FormLabel>
                  <FormGroup
                    aria-label="position"
                    name="position"
                    value={value}
                    onChange={handleChange5}
                    row
                  >
                    <FormControlLabel
                      value="top"
                      control={<Switch color="primary" />}
                      label="Top"
                      labelPlacement="top"
                    />
                    <FormControlLabel
                      value="start"
                      control={<Switch color="primary" />}
                      label="Start"
                      labelPlacement="start"
                    />
                    <FormControlLabel
                      value="bottom"
                      control={<Switch color="primary" />}
                      label="Bottom"
                      labelPlacement="bottom"
                    />
                    <FormControlLabel
                      value="end"
                      control={<Switch color="primary" />}
                      label="End"
                      labelPlacement="end"
                    />
                  </FormGroup>
                </FormControl>
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
import Switch from '@material-ui/core/Switch';

export default function Switches() {
  const [state, setState] = React.useState({
    checkedA: true,
    checkedB: true,
  });

  const handleChange = name => event => {
    setState({ ...state, [name]: event.target.checked });
  };

  return (
    <div>
      <Switch
        checked={state.checkedA}
        onChange={handleChange('checkedA')}
        value="checkedA"
        inputProps={{ 'aria-label': 'secondary checkbox' }}
      />
      <Switch
        checked={state.checkedB}
        onChange={handleChange('checkedB')}
        value="checkedB"
        color="primary"
        inputProps={{ 'aria-label': 'primary checkbox' }}
      />
      <Switch value="checkedC" inputProps={{ 'aria-label': 'primary checkbox' }} />
      <Switch disabled value="checkedD" inputProps={{ 'aria-label': 'disabled checkbox' }} />
      <Switch disabled checked value="checkedE" inputProps={{ 'aria-label': 'primary checkbox' }} />
      <Switch
        defaultChecked
        value="checkedF"
        color="default"
        inputProps={{ 'aria-label': 'checkbox with default color' }}
      />
    </div>
  );
}
`;
const jsCode2 = `
import React from 'react';
import FormGroup from '@material-ui/core/FormGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Switch from '@material-ui/core/Switch';

export default function SwitchLabels() {
  const [state, setState] = React.useState({
    checkedA: true,
    checkedB: true,
  });

  const handleChange = name => event => {
    setState({ ...state, [name]: event.target.checked });
  };

  return (
    <FormGroup row>
      <FormControlLabel
        control={
          <Switch checked={state.checkedA} onChange={handleChange('checkedA')} value="checkedA" />
        }
        label="Secondary"
      />
      <FormControlLabel
        control={
          <Switch
            checked={state.checkedB}
            onChange={handleChange('checkedB')}
            value="checkedB"
            color="primary"
          />
        }
        label="Primary"
      />
      <FormControlLabel control={<Switch value="checkedC" />} label="Uncontrolled" />
      <FormControlLabel disabled control={<Switch value="checkedD" />} label="Disabled" />
      <FormControlLabel disabled control={<Switch checked value="checkedE" />} label="Disabled" />
    </FormGroup>
  );
}
`;
const jsCode3 = `
import React from 'react';
import FormLabel from '@material-ui/core/FormLabel';
import FormControl from '@material-ui/core/FormControl';
import FormGroup from '@material-ui/core/FormGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import FormHelperText from '@material-ui/core/FormHelperText';
import Switch from '@material-ui/core/Switch';

export default function SwitchesGroup() {
  const [state, setState] = React.useState({
    gilad: true,
    jason: false,
    antoine: true,
  });

  const handleChange = name => event => {
    setState({ ...state, [name]: event.target.checked });
  };

  return (
    <FormControl component="fieldset">
      <FormLabel component="legend">Assign responsibility</FormLabel>
      <FormGroup>
        <FormControlLabel
          control={<Switch checked={state.gilad} onChange={handleChange('gilad')} value="gilad" />}
          label="Gilad Gray"
        />
        <FormControlLabel
          control={<Switch checked={state.jason} onChange={handleChange('jason')} value="jason" />}
          label="Jason Killian"
        />
        <FormControlLabel
          control={
            <Switch checked={state.antoine} onChange={handleChange('antoine')} value="antoine" />
          }
          label="Antoine Llorca"
        />
      </FormGroup>
      <FormHelperText>Be careful</FormHelperText>
    </FormControl>
  );
}
`;
const jsCode4 = `
import React from 'react';
import { withStyles } from '@material-ui/core/styles';
import { purple } from '@material-ui/core/colors';
import FormGroup from '@material-ui/core/FormGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Switch from '@material-ui/core/Switch';
import Grid from '@material-ui/core/Grid';
import Typography from '@material-ui/core/Typography';

const PurpleSwitch = withStyles({
  switchBase: {
    color: purple[300],
    '&$checked': {
      color: purple[500],
    },
    '&$checked + $track': {
      backgroundColor: purple[500],
    },
  },
  checked: {},
  track: {},
})(Switch);

const IOSSwitch = withStyles(theme => ({
  root: {
    width: 42,
    height: 26,
    padding: 0,
    margin: theme.spacing(1),
  },
  switchBase: {
    padding: 1,
    '&$checked': {
      transform: 'translateX(16px)',
      color: theme.palette.common.white,
      '& + $track': {
        backgroundColor: '#52d869',
        opacity: 1,
        border: 'none',
      },
    },
    '&$focusVisible $thumb': {
      color: '#52d869',
      border: '6px solid #fff',
    },
  },
  thumb: {
    width: 24,
    height: 24,
  },
  track: {
    borderRadius: 26 / 2,
    border: \`1px solid \${theme.palette.grey[400]}\`,
    backgroundColor: theme.palette.grey[50],
    opacity: 1,
    transition: theme.transitions.create(['background-color', 'border']),
  },
  checked: {},
  focusVisible: {},
}))(({ classes, ...props }) => {
  return (
    <Switch
      focusVisibleClassName={classes.focusVisible}
      disableRipple
      classes={{
        root: classes.root,
        switchBase: classes.switchBase,
        thumb: classes.thumb,
        track: classes.track,
        checked: classes.checked,
      }}
      {...props}
    />
  );
});

const AntSwitch = withStyles(theme => ({
  root: {
    width: 28,
    height: 16,
    padding: 0,
    display: 'flex',
  },
  switchBase: {
    padding: 2,
    color: theme.palette.grey[500],
    '&$checked': {
      transform: 'translateX(12px)',
      color: theme.palette.common.white,
      '& + $track': {
        opacity: 1,
        backgroundColor: theme.palette.primary.main,
        borderColor: theme.palette.primary.main,
      },
    },
  },
  thumb: {
    width: 12,
    height: 12,
    boxShadow: 'none',
  },
  track: {
    border: \`1px solid \${theme.palette.grey[500]}\`,
    borderRadius: 16 / 2,
    opacity: 1,
    backgroundColor: theme.palette.common.white,
  },
  checked: {},
}))(Switch);

export default function CustomizedSwitches() {
  const [state, setState] = React.useState({
    checkedA: true,
    checkedB: true,
    checkedC: true,
  });

  const handleChange = name => event => {
    setState({ ...state, [name]: event.target.checked });
  };

  return (
    <FormGroup>
      <FormControlLabel
        control={
          <PurpleSwitch
            checked={state.checkedA}
            onChange={handleChange('checkedA')}
            value="checkedA"
          />
        }
        label="Custom color"
      />
      <FormControlLabel
        control={
          <IOSSwitch
            checked={state.checkedB}
            onChange={handleChange('checkedB')}
            value="checkedB"
          />
        }
        label="iOS style"
      />
      <Typography component="div">
        <Grid component="label" container alignItems="center" spacing={1}>
          <Grid item>Off</Grid>
          <Grid item>
            <AntSwitch
              checked={state.checkedC}
              onChange={handleChange('checkedC')}
              value="checkedC"
            />
          </Grid>
          <Grid item>On</Grid>
        </Grid>
      </Typography>
    </FormGroup>
  );
}
`;
const jsCode5 = `
import React from 'react';
import Switch from '@material-ui/core/Switch';
import FormGroup from '@material-ui/core/FormGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import FormControl from '@material-ui/core/FormControl';
import FormLabel from '@material-ui/core/FormLabel';

function FormControlLabelPosition() {
  const [value, setValue] = React.useState('female');

  function handleChange(event) {
    setValue(event.target.value);
  }

  return (
    <FormControl component="fieldset">
      <FormLabel component="legend">labelPlacement</FormLabel>
      <FormGroup aria-label="position" name="position" value={value} onChange={handleChange} row>
        <FormControlLabel
          value="top"
          control={<Switch color="primary" />}
          label="Top"
          labelPlacement="top"
        />
        <FormControlLabel
          value="start"
          control={<Switch color="primary" />}
          label="Start"
          labelPlacement="start"
        />
        <FormControlLabel
          value="bottom"
          control={<Switch color="primary" />}
          label="Bottom"
          labelPlacement="bottom"
        />
        <FormControlLabel
          value="end"
          control={<Switch color="primary" />}
          label="End"
          labelPlacement="end"
        />
      </FormGroup>
    </FormControl>
  );
}

export default FormControlLabelPosition;
`;

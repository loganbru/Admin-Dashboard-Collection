/* eslint-disable no-unused-vars */
/* eslint-disable no-restricted-imports */
import React from "react";
import { makeStyles } from "@material-ui/core/styles";
import TextField from "@material-ui/core/TextField";
import "date-fns";
import Grid from "@material-ui/core/Grid";
import DateFnsUtils from "@date-io/date-fns";
import {
  MuiPickersUtilsProvider,
  KeyboardTimePicker,
  KeyboardDatePicker
} from "@material-ui/pickers";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";

// Example 1
const useStyles = makeStyles(theme => ({
  container: {
    display: "flex",
    flexWrap: "wrap"
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200
  }
}));

// Example 2
const useStyles2 = makeStyles(theme => ({
  container: {
    display: "flex",
    flexWrap: "wrap"
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200
  }
}));

// Example 3
const useStyles3 = makeStyles(theme => ({
  container: {
    display: "flex",
    flexWrap: "wrap"
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200
  }
}));

// Example 4
const useStyles4 = makeStyles({
  grid: {
    width: "60%"
  }
});

export default function PickersExamplesPage() {
  const classes = useStyles();
  const classes2 = useStyles2();
  const classes3 = useStyles3();
  // The first commit of Material-UI
  const [selectedDate, setSelectedDate] = React.useState(
    new Date("2014-08-18T21:11:54")
  );

  const classes4 = useStyles4();

  function handleDateChange(date) {
    setSelectedDate(date);
  }

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          Pickers provide a simple way to select a single value from a
          pre-determined set.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/pickers/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <Notice>
        <ul>
          <li>
            On mobile, pickers are best suited for display in confirmation
            dialog.
          </li>
          <li>
            For inline display, such as on a form, consider using compact
            controls such as segmented dropdown buttons.
          </li>
        </ul>
      </Notice>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode1} beforeCodeTitle="Date pickers">
            <div className="kt-section">
              <span className="kt-section__sub">
                A native date picker example with <code>type="date"</code>.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <form className={classes.container} noValidate>
                  <TextField
                    id="date"
                    label="Birthday"
                    type="date"
                    defaultValue="2017-05-24"
                    className={classes.textField}
                    InputLabelProps={{
                      shrink: true
                    }}
                  />
                </form>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode2} beforeCodeTitle="Date & Time pickers">
            <div className="kt-section">
              <span className="kt-section__sub">
                A native date & time picker example with{" "}
                <code>type="datetime-local"</code>.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <form className={classes2.container} noValidate>
                  <TextField
                    id="datetime-local"
                    label="Next appointment"
                    type="datetime-local"
                    defaultValue="2017-05-24T10:30"
                    className={classes2.textField}
                    InputLabelProps={{
                      shrink: true
                    }}
                  />
                </form>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode3} beforeCodeTitle="Time pickers">
            <div className="kt-section">
              <span className="kt-section__sub">
                A native time picker example with <code>type="time"</code>.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <form className={classes3.container} noValidate>
                  <TextField
                    id="time"
                    label="Alarm clock"
                    type="time"
                    defaultValue="07:30"
                    className={classes3.textField}
                    InputLabelProps={{
                      shrink: true
                    }}
                    inputProps={{
                      step: 300 // 5 min
                    }}
                  />
                </form>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode4} beforeCodeTitle="@material-ui/pickers">
            <div className="kt-section">
              <span className="kt-section__sub">
                <a href="https://material-ui-pickers.dev/">
                  <code>@material-ui/pickers</code>
                </a>{" "}
                provides date and time controls that follow the Material Design
                spec.
              </span>
            </div>
            <div className="kt-separator kt-separator--dashed"></div>

            <div className="kt-section__content">
              <MuiPickersUtilsProvider utils={DateFnsUtils}>
                <Grid container className={classes.grid} justify="space-around">
                  <KeyboardDatePicker
                    margin="normal"
                    id="mui-pickers-date"
                    label="Date picker"
                    value={selectedDate}
                    onChange={handleDateChange}
                    KeyboardButtonProps={{
                      "aria-label": "change date"
                    }}
                  />
                  <KeyboardTimePicker
                    margin="normal"
                    id="mui-pickers-time"
                    label="Time picker"
                    value={selectedDate}
                    onChange={handleDateChange}
                    KeyboardButtonProps={{
                      "aria-label": "change time"
                    }}
                  />
                </Grid>
              </MuiPickersUtilsProvider>
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
import TextField from '@material-ui/core/TextField';

const useStyles = makeStyles(theme => ({
  container: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200,
  },
}));

export default function DatePickers() {
  const classes = useStyles();

  return (
    <form className={classes.container} noValidate>
      <TextField
        id="date"
        label="Birthday"
        type="date"
        defaultValue="2017-05-24"
        className={classes.textField}
        InputLabelProps={{
          shrink: true,
        }}
      />
    </form>
  );
}
`;
const jsCode2 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';

const useStyles = makeStyles(theme => ({
  container: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200,
  },
}));

export default function DateAndTimePickers() {
  const classes = useStyles();

  return (
    <form className={classes.container} noValidate>
      <TextField
        id="datetime-local"
        label="Next appointment"
        type="datetime-local"
        defaultValue="2017-05-24T10:30"
        className={classes.textField}
        InputLabelProps={{
          shrink: true,
        }}
      />
    </form>
  );
}
`;
const jsCode3 = `
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';

const useStyles = makeStyles(theme => ({
  container: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  textField: {
    marginLeft: theme.spacing(1),
    marginRight: theme.spacing(1),
    width: 200,
  },
}));

export default function TimePickers() {
  const classes = useStyles();

  return (
    <form className={classes.container} noValidate>
      <TextField
        id="time"
        label="Alarm clock"
        type="time"
        defaultValue="07:30"
        className={classes.textField}
        InputLabelProps={{
          shrink: true,
        }}
        inputProps={{
          step: 300, // 5 min
        }}
      />
    </form>
  );
}
`;
const jsCode4 = `
import 'date-fns';
import React from 'react';
import Grid from '@material-ui/core/Grid';
import { makeStyles } from '@material-ui/core/styles';
import DateFnsUtils from '@date-io/date-fns';
import {
  MuiPickersUtilsProvider,
  KeyboardTimePicker,
  KeyboardDatePicker,
} from '@material-ui/pickers';

const useStyles = makeStyles({
  grid: {
    width: '60%',
  },
});

export default function MaterialUIPickers() {
  // The first commit of Material-UI
  const [selectedDate, setSelectedDate] = React.useState(new Date('2014-08-18T21:11:54'));

  const classes = useStyles();

  function handleDateChange(date) {
    setSelectedDate(date);
  }

  return (
    <MuiPickersUtilsProvider utils={DateFnsUtils}>
      <Grid container className={classes.grid} justify="space-around">
        <KeyboardDatePicker
          margin="normal"
          id="mui-pickers-date"
          label="Date picker"
          value={selectedDate}
          onChange={handleDateChange}
          KeyboardButtonProps={{
            'aria-label': 'change date',
          }}
        />
        <KeyboardTimePicker
          margin="normal"
          id="mui-pickers-time"
          label="Time picker"
          value={selectedDate}
          onChange={handleDateChange}
          KeyboardButtonProps={{
            'aria-label': 'change time',
          }}
        />
      </Grid>
    </MuiPickersUtilsProvider>
  );
}
`;

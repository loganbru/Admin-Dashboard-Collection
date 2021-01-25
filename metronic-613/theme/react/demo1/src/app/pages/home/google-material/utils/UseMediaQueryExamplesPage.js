/* eslint-disable no-restricted-imports */
import React from "react";
import Notice from "../../../../partials/content/Notice";
import CodeExample from "../../../../partials/content/CodeExample";
import useMediaQuery from "@material-ui/core/useMediaQuery";
import { useTheme } from "@material-ui/core/styles";
import json2mq from "json2mq";
import useMediaQueryTheme from "@material-ui/core/useMediaQuery";
import mediaQuery from "css-mediaquery";
import { ThemeProvider } from "@material-ui/styles";
import { createMuiTheme } from "@material-ui/core/styles";

// Example 4
function MyComponent4() {
  const matches = useMediaQueryTheme("@media (min-width:600px)");

  return <span>{`@media (min-width:600px) matches: ${matches}`}</span>;
}

// Example 5
function useWidth5() {
  const theme5 = useTheme();
  const keys5 = [...theme5.breakpoints.keys].reverse();
  return (
    keys5.reduce((output, key) => {
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const matches = useMediaQuery(theme5.breakpoints.only(key));
      return !output && matches ? key : output;
    }, null) || "xs"
  );
}

function MyComponent5() {
  const width5 = useWidth5();
  return <span>{`width: ${width5}`}</span>;
}

const theme5 = createMuiTheme();

export default function UseMediaQueryExamplesPage() {
  // Example 1
  const matches1 = useMediaQuery("(min-width:600px)");

  // Example 2
  const theme2 = useTheme();
  const matches2 = useMediaQuery(theme2.breakpoints.up("sm"));

  // Example 3
  const matches3 = useMediaQuery(
    json2mq({
      minWidth: 600
    })
  );

  // Example 4
  const ssrMatchMedia4 = query => ({
    matches4: mediaQuery.match(query, {
      // The estimated CSS width of the browser.
      // For the sake of this demo, we are using a fixed value.
      // In production, you can look into client-hint https://caniuse.com/#search=client%20hint
      // or user-agent resolution.
      width: 800
    })
  });

  return (
    <>
      <Notice icon="flaticon-warning kt-font-primary">
        <p>
          This is a CSS media query hook for React. It listens for matches to a
          CSS media query. It allows the rendering of components based on
          whether the query matches or not.
        </p>
        <p>
          For more info please check the components's official{" "}
          <a
            target="_blank"
            className="kt-link"
            rel="noopener noreferrer"
            href="https://material-ui.com/components/use-media-query/"
          >
            demos & documentation
          </a>
        </p>
      </Notice>

      <div className="row">
        <div className="col-md-6">
          <CodeExample jsCode={jsCode1} beforeCodeTitle="Simple media query">
            <div className="kt-section">
              <span className="kt-section__sub">
                You should provide a media query to the first argument of the
                hook. The media query string can by any valid CSS media query,
                e.g. <code>'print'</code>.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <span>{`(min-width:600px) matches: ${matches1}`}</span>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample
            jsCode={jsCode2}
            beforeCodeTitle="Using Material-UI's breakpoint helpers"
          >
            <div className="kt-section">
              <span className="kt-section__sub">
                You can use Material-UI's <code>breakpoint helpers</code> as
                follows:
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <span>{`theme.breakpoints.up('sm') matches: ${matches2}`}</span>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample
            jsCode={jsCode3}
            beforeCodeTitle="Using JavaScript syntax"
          >
            <div className="kt-section">
              <span className="kt-section__sub">
                <code>json2mq</code> is used to generate media query string from
                a JavaScript object.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <span>{`{ minWidth: 600 } matches: ${matches3}`}</span>
              </div>
            </div>
          </CodeExample>
        </div>
        <div className="col-md-6">
          <CodeExample jsCode={jsCode4} beforeCodeTitle="Server-side rendering">
            <div className="kt-section">
              <span className="kt-section__sub">
                An implementation of matchMedia is required on the server, we
                recommend using css-mediaquery. We also encourage the usage of
                the <code>useMediaQueryTheme</code> version of the hook that
                fetches properties from the theme. This way, you can provide a{" "}
                <code>ssrMatchMedia</code> option once for all your React tree.
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <ThemeProvider
                  theme={{ props: { MuiUseMediaQuery: { ssrMatchMedia4 } } }}
                >
                  <MyComponent4 />
                </ThemeProvider>
              </div>
            </div>
          </CodeExample>
        </div>
      </div>

      <div className="row">
        <div className="col-md-6">
          <CodeExample
            jsCode={jsCode5}
            beforeCodeTitle="Migrating from withWidth()"
          >
            <div className="kt-section">
              <span className="kt-section__sub">
                The <code>withWidth()</code> higher-order component injects the
                screen width of the page. You can reproduce the same behavior
                with a <code>useWidth</code> hook:
              </span>
              <div className="kt-separator kt-separator--dashed"></div>
              <div className="kt-section__content">
                <ThemeProvider theme={theme5}>
                  <MyComponent5 />
                </ThemeProvider>
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
import useMediaQuery from '@material-ui/core/useMediaQuery';

export default function SimpleMediaQuery() {
  const matches = useMediaQuery('(min-width:600px)');

  return <span>{\`(min-width:600px) matches: \${matches}\`}</span>;
}
`;
const jsCode2 = `
import React from 'react';
import { createMuiTheme, useTheme } from '@material-ui/core/styles';
import { ThemeProvider } from '@material-ui/styles';
import useMediaQuery from '@material-ui/core/useMediaQuery';

function MyComponent() {
  const theme = useTheme();
  const matches = useMediaQuery(theme.breakpoints.up('sm'));

  return <span>{\`theme.breakpoints.up('sm') matches: \${matches}\`}</span>;
}

const theme = createMuiTheme();

export default function ThemeHelper() {
  return (
    <ThemeProvider theme={theme}>
      <MyComponent />
    </ThemeProvider>
  );
}
`;
const jsCode3 = `
import React from 'react';
import json2mq from 'json2mq';
import useMediaQuery from '@material-ui/core/useMediaQuery';

export default function JavaScriptMedia() {
  const matches = useMediaQuery(
    json2mq({
      minWidth: 600,
    }),
  );

  return <span>{\`{ minWidth: 600 } matches: \${matches}\`}</span>;
}
`;
const jsCode4 = `
import React from 'react';
import mediaQuery from 'css-mediaquery';
import { ThemeProvider } from '@material-ui/styles';
import useMediaQueryTheme from '@material-ui/core/useMediaQuery';

function MyComponent() {
  const matches = useMediaQueryTheme('@media (min-width:600px)');

  return <span>{\`@media (min-width:600px) matches: \${matches}\`}</span>;
}

export default function ServerSide() {
  // Use https://github.com/ericf/css-mediaquery as ponyfill.
  const ssrMatchMedia = query => ({
    matches: mediaQuery.match(query, {
      // The estimated CSS width of the browser.
      // For the sake of this demo, we are using a fixed value.
      // In production, you can look into client-hint https://caniuse.com/#search=client%20hint
      // or user-agent resolution.
      width: 800,
    }),
  });

  return (
    <ThemeProvider theme={{ props: { MuiUseMediaQuery: { ssrMatchMedia } } }}>
      <MyComponent />
    </ThemeProvider>
  );
}
`;
const jsCode5 = `
/**
 * Be careful using this hook. It only works because the number of
 * breakpoints in theme is static. It will break once you change the number of
 * breakpoints. See https://reactjs.org/docs/hooks-rules.html#only-call-hooks-at-the-top-level
 */
function useWidth() {
  const theme = useTheme();
  const keys = [...theme.breakpoints.keys].reverse();
  return (
    keys.reduce((output, key) => {
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const matches = useMediaQuery(theme.breakpoints.only(key));
      return !output && matches ? key : output;
    }, null) || 'xs'
  );
}
`;

import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import { CodeBlock } from "../../../partials/content/CodeExample";

export default function UseADemo() {
  return (
    <Portlet>
      <PortletHeader title="How to use a demo" />
      <PortletBody>
        <p>
          Theme comes with multi-demo app and single app components. For demo
          purpose, all demos layout are enabled by default. Here is the guide on
          how to set only one demo for production use and to remove the demo
          name from the URL router.
        </p>

        <p>
          All demos are modular and easy to switch. Multi-demo app is located in
          the <code>src/DemoApp.js</code>
        </p>

        <p>
          Go to the entry file <code>src/index.js</code>. The example code below
          shows how to use <code>demo2</code> as a default. You can change the
          module path to use different demo module.
        </p>

        <CodeBlock
          language="diff"
          code={`            
            import axios from "axios";
            import React from "react";
            import ReactDOM from "react-dom";
            -import DemoApp from "./DemoApp";
            +import App from "./App";
            import store, { persistor } from "./app/store/store";
            import { mockAxios, setupAxios } from "./_metronic";
            
            import "./index.css";
            
            /**
             * Website public url.
             *
             * @see https://facebook.github.io/create-react-app/docs/using-the-public-folder
             */
            const { PUBLIC_URL } = process.env;
            
            /**
             * Mock API, use return \`mock\` variable to add new mocks.
             *
             * @see https://github.com/ctimmerm/axios-mock-adapter
             */
            /* const mock = */ mockAxios(axios);
            
            /**
             * Inject metronic interceptors for axios.
             *
             * @see https://github.com/axios/axios#interceptors
             */
            setupAxios(axios, store);
            
            -// Uncomment to enable single App mode.
            -/*
            const Layout = React.lazy(() =>
            -  import("./_metronic/layouts/demo1/Layout.js")
            +  import("./_metronic/layouts/demo2/Layout.js")
            );
            
            ReactDOM.render(
              <App
                store={store}
                Layout={Layout}
                persistor={persistor}
                basename={PUBLIC_URL}
              />,
              document.getElementById("root")
            );
            -*/
            -
            -// Multi-demo app mode.
            -ReactDOM.render(
            -  <DemoApp store={store} persistor={persistor} basename={PUBLIC_URL} />,
            -  document.getElementById("root")
            -);
          `}
        />
      </PortletBody>
    </Portlet>
  );
}

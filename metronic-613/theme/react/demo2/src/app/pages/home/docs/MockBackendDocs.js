import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import { CodeBlock } from "../../../partials/content/CodeExample";

export default function MockBackendDocs() {
  return (
    <Portlet>
      <PortletHeader title="Mock Back-end" />
      <PortletBody>
        <h3 id="overview">Overview</h3>
        <p>
          We use <code>axios-mock-adapter</code> for demo purpose, it intercepts{" "}
          <code>axios</code> requests and redirects to mocked handlers.
        </p>
        <p>
          For more info on the library:{" "}
          <a href="https://github.com/ctimmerm/axios-mock-adapter">
            https://github.com/ctimmerm/axios-mock-adapter
          </a>
          .
        </p>
        <h3 id="how-switching-to-the-real-rest-api">
          How switching to the Real REST API
        </h3>
        <p>
          Remove mock initialization in <code>src/index.js</code>:
        </p>

        <CodeBlock
          language="diff"
          code={`
            -import { mockAxios, setupAxios } from "./_metronic";
            +import { setupAxios } from "./_metronic";
            
            import "./index.css";
            
            /**
             * Website public url.
             *
             * @see https://facebook.github.io/create-react-app/docs/using-the-public-folder
             */
            const { PUBLIC_URL } = process.env;
            
            -/**
            - * Mock API, use return \`mock\` variable to add new mocks.
            - *
            - * @see https://github.com/ctimmerm/axios-mock-adapter
            - */
            -/* const mock = */ mockAxios(axios);
            -
            /**
             * Inject metronic interceptors for axios.    
        `}
        />
      </PortletBody>
    </Portlet>
  );
}

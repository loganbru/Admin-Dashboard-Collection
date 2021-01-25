import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import { CodeBlock } from "../../../partials/content/CodeExample";
import SyntaxHighlighter from 'react-syntax-highlighter';
import { monoBlue } from 'react-syntax-highlighter/dist/esm/styles/hljs';

export default function DeploymentDocs() {
  return (
    <Portlet>
      <PortletHeader title="Deployment" />
      <PortletBody>
        <ol>
          <li>
            <p>
              Setup base url via <code>hompage</code> entry in{" "}
              <code>package.json</code>.
            </p>

            <CodeBlock
              language="diff"
              code={`
                {
                  "name": "default",
                  "version": "0.1.0",
                  "private": true,
                - "homepage": "https://keenthemes.com/metronic/preview/react",
                + "homepage": "https://example.com/my/app",
                  "scripts": {
              `}
            />
          </li>
          <li>
            <p>Run build.</p>
            <SyntaxHighlighter language="bash" style={monoBlue}>yarn build</SyntaxHighlighter>
          </li>
        </ol>
        <p>
          For more detailed information to deploy the Create React App, visit
          this official Create React App{" "}
          <a href="https://facebook.github.io/create-react-app/docs/deployment">
            documentation website
          </a>
          .
        </p>
      </PortletBody>
    </Portlet>
  );
}

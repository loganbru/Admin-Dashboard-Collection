import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import SyntaxHighlighter from 'react-syntax-highlighter';
import { monoBlue } from 'react-syntax-highlighter/dist/esm/styles/hljs';

export default function QuickStartDocs() {
  return (
    <Portlet>
      <PortletHeader title="Quick Start" />
      <PortletBody>
        <ol>
          <li>
            <p>Install dependencies:</p>
            <SyntaxHighlighter language="bash" style={monoBlue}>yarn install</SyntaxHighlighter>            
          </li>
          <li>
            <p>Run dev server:</p>
            <pre>
            <SyntaxHighlighter language="bash" style={monoBlue}>yarn start</SyntaxHighlighter>
            </pre>
          </li>
          <li>
            <p>To check production build:</p>
            <pre>
            <SyntaxHighlighter language="bash" style={monoBlue}>yarn build &amp;&amp; yarn serve</SyntaxHighlighter>
            </pre>
          </li>
        </ol>
        <p>
          For more detailed information to install the Create React App, visit
          this official Create React App{" "}
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://facebook.github.io/create-react-app/docs/getting-started"
          >
            documentation website
          </a>
          .
        </p>
      </PortletBody>
    </Portlet>
  );
}

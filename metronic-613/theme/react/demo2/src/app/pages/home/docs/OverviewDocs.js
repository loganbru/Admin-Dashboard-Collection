import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";

export default function OverviewDocs() {
  return (
    <Portlet>
      <PortletHeader title="Overview" />
      <PortletBody>
        <p>
          React makes it painless to create interactive UIs. Design simple views
          for each state in your application, and React will efficiently update
          and render just the right components when your data changes.
          Declarative views make your code more predictable and easier to debug.
        </p>
        <p>
          Build encapsulated components that manage their own state, then
          compose them to make complex UIs. Since component logic is written in
          JavaScript instead of templates, you can easily pass rich data through
          your app and keep state out of the DOM.
        </p>

        <h5 id="files-structure">Files Structure</h5>

        <table className="table">
          <thead>
            <tr>
              <th>Path</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                /<strong>build</strong>
              </td>
              <td>
                The built output. Run command <code>yarn build</code> to build
                it.
              </td>
            </tr>
            <tr>
              <td>
                /<strong>_site</strong>
              </td>
              <td>
                The build output copied to serve on local machine. Created by{" "}
                <code>yarn serve</code> command.
              </td>
            </tr>
            <tr>
              <td>
                /<strong>node_modules</strong>
              </td>
              <td>
                The <code>package.json</code> file in the app root defines what
                libraries will be installed into <code>node_modules/</code> when
                you run <code>yarn install</code>.
              </td>
            </tr>
            <tr>
              <td>
                /<strong>public</strong>
              </td>
              <td>
                Сontains the HTML file so you can tweak it, Change{" "}
                <code>&lt;title&gt;</code>, insert additional{" "}
                <code>&lt;link&gt;</code> and <code>&lt;script&gt;</code> tags.
                For more details check{" "}
                <a href="https://facebook.github.io/create-react-app/docs/using-the-public-folder#docsNav">
                  official documentation
                </a>
                .
              </td>
            </tr>
            <tr>
              <td>
                /<strong>src</strong>
              </td>
              <td>
                Your app lives in the src folder. All React components, styles,
                images, and anything else your app needs go here.
              </td>
            </tr>
            <tr>
              <td>
                /src/<strong>_metronic</strong>
              </td>
              <td>
                Contains the Metronic core elements: layout, themes, redux
                ducks, context providers.
              </td>
            </tr>
            <tr>
              <td>
                /src/<strong>app</strong>
              </td>
              <td>Main app folder</td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>crud</strong>
              </td>
              <td>CRUD methods</td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>i18n</strong>
              </td>
              <td>
                Used by <code>I18nProvider</code> to override{" "}
                <code>react-intl</code> messages.
              </td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>pages</strong>
              </td>
              <td>Containes web pages.</td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>partials</strong>
              </td>
              <td>Contains reusable UI components.</td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>store</strong>
              </td>
              <td>
                Contains <code>redux</code> store configurations and it's{" "}
                <code>ducks</code>.
              </td>
            </tr>
            <tr>
              <td>
                /src/app/<strong>widgets</strong>
              </td>
              <td>Containes reusable widget components.</td>
            </tr>
            <tr>
              <td>.gitignore</td>
              <td>
                Git uses it to determine which files and directories to ignore,
                before you make a commit.
              </td>
            </tr>
            <tr>
              <td>serve.json</td>
              <td>
                Used by <code>serve-handler</code> runned by command{" "}
                <code>yarn serve</code>.
              </td>
            </tr>
            <tr>
              <td>package.json</td>
              <td>
                A package.json file contains meta data about app or module. Most
                importantly, it includes the list of dependencies to install
                from npm when running npm install.
              </td>
            </tr>
          </tbody>
        </table>
      </PortletBody>
    </Portlet>
  );
}

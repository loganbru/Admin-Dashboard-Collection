import React from "react";
import {
  Portlet,
  PortletBody,
  PortletHeader
} from "../../../partials/content/Portlet";
import { CodeBlock } from "../../../partials/content/CodeExample";

export default function CreateAPageDocs() {
  return (
    <Portlet>
      <PortletHeader title="How to create a custom page" />
      <PortletBody>
        <div>
          <h2 id="how-to-create-a-custom-page">How to create a custom page</h2>
          <p>
            Here is the example on how to create your own page and add it to the
            left side menu and breadcrumbs.
          </p>
          <ol>
            <li>
              <p>
                Create page component <code>src/app/pages/home/MyPage.js</code>
              </p>

              <CodeBlock
                language="jsx"
                code={`
                  import React from "react";
                  
                  export default function MyPage() {
                    return <h1>Hello!</h1>
                  }              
              `}
              />
            </li>

            <li>
              <p>
                Update <code>src/app/pages/home/HomePage.js</code>
              </p>
              <CodeBlock
                language="diff"
                code={`
                  import React from "react";
                  import { Redirect, Route, Switch } from "react-router-dom";
                  
                  import Builder from "./Builder";
                  import Dashboard from "./Dashboard";
                  import GoogleMaterialPage from "./google-material/GoogleMaterialPage";
                  + import MyPage from "./MyPage";
                  
                  export default function HomePage() {
                   return (
                     <Switch>
                       {
                         /* Redirect from root url to /dashboard. */
                         <Redirect exact={true} from="/" to="/dashboard" />
                       }
                  
                       <Route path="/builder" component={Builder} />
                       <Route path="/dashboard" component={Dashboard} />
                       <Route path="/google-material" component={GoogleMaterialPage} />
                  +    <Route path="/my-page" component={MyPage} />
                     </Switch>
                   );
                  }            
              `}
              />
            </li>

            <li>
              <p>
                Register page in{" "}
                <code>src/_metronic/layouts/demo1/MenuConfig.js</code>
              </p>

              <CodeBlock
                language="diff"
                code={`
                  aside: {
                   self: {},
                   items: [
                     {
                       title: "Dashboard",
                       root: true,
                       icon: "flaticon2-architecture-and-city",
                       page: "dashboard",
                       translate: "MENU.DASHBOARD",
                       bullet: "dot"
                     },
                  +  {
                  +    title: 'My Page', // <= Title of the page
                  +    desc: 'Some my description goes here', // <= Description of the page
                  +    root: true,
                  +    page: 'my-page', // <= URL
                  +    icon: 'flaticon-line-graph' // <= Choose the icon
                  +  },         
              `}
              />
            </li>
          </ol>

          <p>The result of the 3 steps is:</p>

          {/*<img*/}
          {/*  alt="Result"*/}
          {/*  src="/media/docs/06-create-custom-page-1.gif"*/}
          {/*/>*/}
        </div>
      </PortletBody>
    </Portlet>
  );
}

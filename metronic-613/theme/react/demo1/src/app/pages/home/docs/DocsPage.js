import React from "react";
import { Route, Switch } from "react-router-dom";
import QuickStartDocs from "./QuickStartDocs";
import DeploymentDocs from "./DeploymentDocs";
import OverviewDocs from "./OverviewDocs";
import I18nDocs from "./I18nDocs";
import MockBackendDocs from "./MockBackendDocs";
import CreateAPageDocs from "./CreateAPageDocs";
import UseADemo from "./UseADemo";

export default function DocsPage() {
  return (
    <Switch>
      <Route path="/docs/quick-start" component={QuickStartDocs} />
      <Route path="/docs/overview" component={OverviewDocs} />
      <Route path="/docs/deployment" component={DeploymentDocs} />
      <Route path="/docs/i18n" component={I18nDocs} />
      <Route path="/docs/mock-backend" component={MockBackendDocs} />
      <Route path="/docs/create-a-page" component={CreateAPageDocs} />
      <Route path="/docs/use-a-demo" component={UseADemo} />
    </Switch>
  );
}

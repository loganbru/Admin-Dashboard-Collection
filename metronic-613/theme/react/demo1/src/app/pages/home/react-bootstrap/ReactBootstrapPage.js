import React from "react";
import { Redirect, Route, Switch } from "react-router-dom";
import AccordionExamplesPage from "./AccordionExamplesPage";
import AlertExamplesPage from "./AlertExamplesPage";
import BadgeExamplesPage from "./BadgeExamplesPage";
import BreadcrumbExamplesPage from "./BreadcrumbExamplesPage";
import ButtonsExamplesPage from "./ButtonsExamplesPage";
import ButtonGroupExamplesPage from "./ButtonGroupExamplesPage";
import CardsExamplesPage from "./CardsExamplesPage";
import CarouselExamplesPage from "./CarouselExamplesPage";
import DropdownsExamplesPage from "./DropdownsExamplesPage";
import FormsExamplesPage from "./FormsExamplesPage";
import InputGroupExamplesPage from "./InputGroupExamplesPage";
import ImagesExamplesPage from "./ImagesExamplesPage";
import FiguresExamplesPage from "./FiguresExamplesPage";
import JumbotronExamplesPage from "./JumbotronExamplesPage";
import ListGroupExamplesPage from "./ListGroupExamplesPage";
import ModalExamplesPage from "./ModalExamplesPage";
import NavsExamplesPage from "./NavsExamplesPage";
import NavbarExamplesPage from "./NavbarExamplesPage";
import OverlaysExamplesPage from "./OverlaysExamplesPage";
import PaginationExamplesPage from "./PaginationExamplesPage";
import PopoversExamplesPage from "./PopoversExamplesPage";
import ProgressExamplesPage from "./ProgressExamplesPage";
import SpinnersExamplesPage from "./SpinnersExamplesPage";
import TableExamplesPage from "./TableExamplesPage";
import TabsExamplesPage from "./TabsExamplesPage";
import TooltipsExamplesPage from "./TooltipsExamplesPage";
import ToastsExamplesPage from "./ToastsExamplesPage";


export default function ReactBootstrapPage() {
  return (
    <Switch>
      <Redirect
        exact={true}
        from="/react-bootstrap"
        to="/react-bootstrap/accordion"
      />

      <Route 
        path="/react-bootstrap/accordion" 
        component={AccordionExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/alert" 
        component={AlertExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/badge" 
        component={BadgeExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/breadcrumb" 
        component={BreadcrumbExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/buttons" 
        component={ButtonsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/button-group" 
        component={ButtonGroupExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/cards" 
        component={CardsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/carousel" 
        component={CarouselExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/dropdowns" 
        component={DropdownsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/forms" 
        component={FormsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/input-group" 
        component={InputGroupExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/images" 
        component={ImagesExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/figures" 
        component={FiguresExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/jumbotron" 
        component={JumbotronExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/list-group" 
        component={ListGroupExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/modal" 
        component={ModalExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/navs" 
        component={NavsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/navbar" 
        component={NavbarExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/overlays" 
        component={OverlaysExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/pagination" 
        component={PaginationExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/popovers" 
        component={PopoversExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/progress" 
        component={ProgressExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/spinners" 
        component={SpinnersExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/table" 
        component={TableExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/tabs" 
        component={TabsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/tooltips" 
        component={TooltipsExamplesPage} 
      />
      <Route 
        path="/react-bootstrap/toasts" 
        component={ToastsExamplesPage} 
      />

    </Switch>
  );
}

import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { RootbuilderComponent } from '../rootbuilder/rootbuilder.component';
declare var pg: any;
@Component({
  selector: 'app-simplywhite-builder',
  templateUrl: './simplywhite-builder.component.html',
  styleUrls: ['../builder.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class SimplywhiteBuilderComponent extends RootbuilderComponent implements OnInit {
  layoutType = "menuPined";

  ngOnInit() {
  }

  menuPined(){
    pg.removeClass(document.body,"menu-behind");
    this.toggler.setHeaderClass("");
    this.layoutType = "menuPined"
  }

  headerTop(){
    pg.addClass(document.body,"menu-behind");
    this.toggler.setHeaderClass("bg-white light");
    this.layoutType = "headerTop"
  }

}

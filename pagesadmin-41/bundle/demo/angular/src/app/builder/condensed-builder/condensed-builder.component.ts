import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { RootbuilderComponent } from '../rootbuilder/rootbuilder.component';
declare var pg: any;
@Component({
  selector: 'app-condensed-builder',
  templateUrl: './condensed-builder.component.html',
  styleUrls: ['../builder.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class CondensedBuilderComponent extends RootbuilderComponent implements OnInit {
  layoutType = "headerBelow";
  ngOnInit() {
  }

  headerBelow(){
    pg.removeClass(document.body,"menu-behind");
    this.layoutType = "headerBelow"
  }
  headerTop(){
    pg.addClass(document.body,"menu-behind");
    this.layoutType = "headerTop"
  }
}

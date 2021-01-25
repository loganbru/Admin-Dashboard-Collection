import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { RootbuilderComponent } from '../rootbuilder/rootbuilder.component';
declare var pg: any;
@Component({
  selector: 'app-corporate-builder',
  templateUrl: './corporate-builder.component.html',
  styleUrls: ['../builder.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class CorporateBuilderComponent extends RootbuilderComponent implements OnInit {

  layoutType = "headerTop";
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

import { Component, OnInit } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
declare var pg: any;
@Component({
  selector: 'app-boxed-alt',
  templateUrl: './boxed-alt.component.html',
  styleUrls: ['./boxed-alt.component.scss']
})
export class BoxedAltComponent implements OnInit {

  constructor(private toggler:pagesToggleService) { }

  ngOnInit() {
    this.toggler.setBodyLayoutClass("box-layout");
    this.toggler.setBodyLayoutClass("menu-pin");
  }

  ngOnDestroy(){
    //@TODO : USE service
    pg.removeClass(document.body,"box-layout");
  }
}

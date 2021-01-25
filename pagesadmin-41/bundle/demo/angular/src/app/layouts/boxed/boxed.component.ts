import { Component, OnInit } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
declare var pg: any;
@Component({
  selector: 'app-boxed',
  templateUrl: './boxed.component.html',
  styleUrls: ['./boxed.component.scss']
})
export class BoxedComponent implements OnInit {

  constructor(private toggler:pagesToggleService) { }

  ngOnInit() {
    this.toggler.setBodyLayoutClass("box-layout");
    this.toggler.setBodyLayoutClass("menu-pin");
  }

  ngOnDestroy(){
    //@TODO : USE service
    pg.removeClass(document.body,"box-layout");
    pg.removeClass(document.body,"menu-pin");
  }
}

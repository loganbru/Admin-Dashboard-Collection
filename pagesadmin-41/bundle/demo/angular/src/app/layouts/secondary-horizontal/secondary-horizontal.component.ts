import { Component, OnInit } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
@Component({
  selector: 'app-secondary-horizontal',
  templateUrl: './secondary-horizontal.component.html',
  styleUrls: ['./secondary-horizontal.component.scss']
})
export class SecondaryHorizontalComponent implements OnInit {
  _secondarySideBar = false;
  constructor(private toggler:pagesToggleService) { }
  menuItems =[
    {
      label:"Collection",
      routerLink:"../../layouts/with-sidebar",
      iconType:"fi",
      iconName:"layers",
      badgeCount:"5"
    },
    {
      label:"Playlist",
      routerLink:"../../layouts/with-sidebar",
      iconType:"fi",
      iconName:"award",
    },
    {
      label:"Case Study",
      routerLink:"/",
      iconType:"fi",
      iconName:"inbox",
      toggle:"open",
      submenu:[
        {
          label:"Bootstrap 4",
          routerLink:"../../layouts/with-sidebar",
          iconType:"letter",
          iconName:"B4",
        },
        {
          label:"Made with Pages",
          routerLink:"../../layouts/with-sidebar",
          iconType:"letter",
          iconName:"MP",
        }
      ]
    }
  ]
  ngOnInit() {
    setTimeout(()=>{   
    this.toggler.toggleFooter(false);
    this.toggler.setPageContainer("full-height");
    this.toggler.setContent("full-height");
    });
  }

  toggleSecondarySideBar(event){
    this._secondarySideBar = (this._secondarySideBar == true ? false : true);
    //Pass event object to position it to the toggle button
    let subData = {
        $event:event,
        open:this._secondarySideBar 
    }
    this.toggler.toggleSecondarySideBar(subData);
  }
}

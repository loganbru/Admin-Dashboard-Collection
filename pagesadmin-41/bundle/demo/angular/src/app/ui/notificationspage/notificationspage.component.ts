import { Component, OnInit, ViewChild,ViewEncapsulation } from '@angular/core';
import { TabsetComponent } from 'ngx-bootstrap';
import {
  FormBuilder,
  FormGroup,
  FormControl,
  Validators,
  ReactiveFormsModule
} from '@angular/forms';
import { MessageService } from '../../@pages/components/message/message.service';

@Component({
  selector: 'app-notificationspage',
  templateUrl: './notificationspage.component.html',
  styleUrls: ['./notificationspage.component.scss'],
  encapsulation: ViewEncapsulation.None,
})
export class NotificationspageComponent implements OnInit {
  @ViewChild('staticTabs') staticTabs: TabsetComponent;
  heading:string;
  description:string;
  currentTab:number = 0;
  notificationModel:any ={
    type:"bar",
    message:"This notification looks so perfect!",
    color:"info",
    position:"top",
    current:0
  };
  colors = [
    { value: 'info', label: 'Info' },
    { value: 'warning', label: 'Warning' },
    { value: 'success', label: 'Success' },
    { value: 'danger', label: 'Danger' },
    { value: 'default', label: 'Default' },
  ];
  selectedColor;
  nofitcationStrings:any = [
    {
      heading:"Notification Bar",
      desc:"Awesome Loading Circle Animation",
      position:"top",
      type:"bar"
    },
    {
      heading:"Flip Bar",
      desc:"Awesome Loading Circle Animation",
      position:"top-right",
      type:"flip"
    },
    {
      heading:"Circle Notification",
      desc:"Awesome Loading Circle Animation",
      position:"top-right",
      type:"circle",
      title:"John Doe",
      imgURL:"assets/img/profiles/avatar.jpg"
    },
    {
      heading:"Simple Alert",
      desc:"Awesome Loading Circle Animation",
      position:"top-right",
      type:"simple"
    }
  ];
  
  constructor(private fb: FormBuilder,private _notification: MessageService) { 
    this.selectedColor = this.colors[0]["value"];
    this.heading = this.nofitcationStrings[0].heading;
    this.description = this.nofitcationStrings[0].desc;
  }

  createBasicNotification() {
    
    if(this.notificationModel.current != this.currentTab){
      this.notificationModel.current = this.currentTab;
      this._notification.remove();
    }
    this.notificationModel.position = this.nofitcationStrings[this.currentTab]["position"];
    this.notificationModel.type = this.nofitcationStrings[this.currentTab]["type"];
    this.notificationModel.color = this.selectedColor;
    //Create Notification

    if(this.notificationModel.type != "circle"){
      this._notification.create(
        this.notificationModel.color,
        this.notificationModel.message,
        {
        Position:this.nofitcationStrings[this.currentTab]["position"],
        Style:this.notificationModel.type,
        Duration:0
      });
    }
    else{
      this._notification.create(
        this.notificationModel.color,
        this.notificationModel.message,
        {
        Title:this.nofitcationStrings[this.currentTab]["title"],
        imgURL:this.nofitcationStrings[this.currentTab]["imgURL"],
        Position:this.nofitcationStrings[this.currentTab]["position"],
        Style:this.notificationModel.type,
        Duration:0
      });
    }

  }

  ngOnInit() {
  }
	ngAfterViewChecked(){
		//TODO - Cheat fix waiting ngx-bootstrap customClass
		var el = window.document.querySelector(".nav.nav-tabs");
		el.classList.add("no-border");
		el.classList.add("notification-tabs");
  }

  selectTab(tab_id: number) {
    this.staticTabs.tabs[tab_id].active = true;
    this.heading = this.nofitcationStrings[tab_id].heading;
    this.description = this.nofitcationStrings[tab_id].desc;
    this.currentTab = tab_id;
    this._notification.remove();
  }

}

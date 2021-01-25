import { Component, OnInit,ViewChild } from '@angular/core';
import {DatatableComponent} from '@swimlane/ngx-datatable';
import { ModalDirective } from 'ngx-bootstrap/modal';

@Component({
  selector: 'app-advance',
  templateUrl: './advance.component.html',
  styleUrls: ['./advance.component.scss']
})
export class AdvanceComponent implements OnInit {
  @ViewChild('addNewAppModal') addNewAppModal: ModalDirective;

  
  appName = null;
  appDescription = null;
  appPrice = null;
  appNotes = null;
  

  basicRows = [];
  basicSort = [];
  columns = [
    { name: 'Title' },
    { name: 'Places' },
    { name: 'Activities' },
    { name: 'Status' },
    { name: 'Last Update' },
  ];
  @ViewChild(DatatableComponent) table: DatatableComponent;

  columnsDynamic = [
    { name: 'App Name' },
    { name: 'Description' },
    { name: 'Price' },
    { name: 'Notes' },
  ];
  dynamicRows = [];
  @ViewChild(DatatableComponent) tableDynamic: DatatableComponent;


  advanceColumns = [
    { name: 'Rendering engine' },
    { name: 'Browser' },
    { name: 'Platform' },
    { name: 'Engine version' },
    { name: 'CSS grade' },
  ];
  advanceRows = [];
  @ViewChild(DatatableComponent) tableAdvance: DatatableComponent;

  //No Option YET
  //https://github.com/swimlane/ngx-datatable/issues/423
  scrollBarHorizontal = (window.innerWidth < 960);
  columnModeSetting = (window.innerWidth < 960) ? 'standard':'force';
  
  constructor() {
    console.log(this.columnModeSetting)
    this.fetch((data) => {
      // cache our list
      this.basicSort = [...data];

      // push our inital complete list
      this.basicRows = data;
    });

    this.fetchSampleDynamic((data) => {
      // push our inital complete list
      this.dynamicRows = data;
    });

    this.fetchSampleAdvance((data) => {
      // push our inital complete list
      this.advanceRows = data;
    });

    window.onresize = () => {
      this.scrollBarHorizontal = (window.innerWidth < 960);
      this.columnModeSetting = (window.innerWidth < 960) ? 'standard':'force';
    };
  }

  fetch(cb) {
    const req = new XMLHttpRequest();
    req.open('GET', `assets/data/table.json`);

    req.onload = () => {
      cb(JSON.parse(req.response));
    };

    req.send();
  }

  fetchSampleDynamic(cb) {
    const req = new XMLHttpRequest();
    req.open('GET', `assets/data/table_sample.json`);

    req.onload = () => {
      cb(JSON.parse(req.response));
    };

    req.send();
  }


  fetchSampleAdvance(cb) {
    const req = new XMLHttpRequest();
    req.open('GET', `assets/data/table_browser.json`);

    req.onload = () => {
      cb(JSON.parse(req.response));
    };

    req.send();
  }


  ngOnInit() {
  }
  
  updateFilter(event) {
    const val = event.target.value.toLowerCase();

    // filter our data
    const temp = this.basicSort.filter(function(d) {
      // Change the column name here
      // example d.places
      return d.title.toLowerCase().indexOf(val) !== -1 || !val;
    });

    // update the rows
    this.basicRows = temp;
    // Whenever the filter changes, always go back to the first page
    this.table.offset = 0;
  }

  showModal(){
    this.addNewAppModal.show();
  }
  addRow(){
    let temp = {
      "appName" : this.appName,
      "description" :  this.appDescription,
      "notes" : this.appPrice,
      "price":  this.appNotes
    }
    //https://github.com/swimlane/ngx-datatable/issues/701
    this.dynamicRows = [...this.dynamicRows, temp];
    this.addNewAppModal.hide();
  }
}

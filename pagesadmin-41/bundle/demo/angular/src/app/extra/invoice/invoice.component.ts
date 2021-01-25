import { Component, OnInit, HostListener } from '@angular/core';
declare var pg: any;
@Component({
  selector: 'app-invoice',
  templateUrl: './invoice.component.html',
  styleUrls: ['./invoice.component.scss']
})
export class InvoiceComponent implements OnInit {
  isCollapsed = false;
  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    this.toggleNavbar();
  }
  setFullScreen(){
    pg.setFullScreen(document.querySelector('html'))
  }

  @HostListener("window:resize", [])
	onResize() {
    this.toggleNavbar();
  }
  
  toggleNavbar(){
    this.isCollapsed = window.innerWidth < 1025
  }
}

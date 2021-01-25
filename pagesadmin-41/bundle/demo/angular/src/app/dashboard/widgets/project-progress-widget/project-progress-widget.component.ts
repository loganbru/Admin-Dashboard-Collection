import { Component, OnInit, ViewEncapsulation } from '@angular/core';
declare var pg: any;

@Component({
  selector: 'project-progress-widget',
  templateUrl: './project-progress-widget.component.html',
  styleUrls: ['./project-progress-widget.component.scss'],
  encapsulation:ViewEncapsulation.None
})

export class ProjectProgressWidgetComponent implements OnInit {

  ngOnInit() {
    
  }

}
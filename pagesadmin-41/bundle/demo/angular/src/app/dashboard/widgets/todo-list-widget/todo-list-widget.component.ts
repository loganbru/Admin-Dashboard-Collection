import { Component, OnInit, ViewEncapsulation } from '@angular/core';

@Component({
  selector: 'todo-list-widget',
  templateUrl: './todo-list-widget.component.html',
  styleUrls: ['./todo-list-widget.component.scss'],
  encapsulation: ViewEncapsulation.None,
})
export class TodoListWidgetComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}

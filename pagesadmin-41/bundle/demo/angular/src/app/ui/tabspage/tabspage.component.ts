import { Component, OnInit } from '@angular/core';
import { pgCollapseComponent } from '../../@pages/components/collapse';

@Component({
  selector: 'app-tabspage',
  templateUrl: './tabspage.component.html',
  styleUrls: ['./tabspage.component.scss']
})
export class TabspageComponent implements OnInit {
  panels = [
    {
      active: true,
      name: 'This is panel header 1',
      disabled: false,
      childPanel: [
        {
          active: false,
          name: 'This is panel header 1-1'
        }
      ]
    },
    {
      active: false,
      disabled: true,
      name: 'This is panel header 2'
    },
    {
      active: true,
      disabled: false,
      name: 'This is panel header 3'
    }
  ];
  tabs = [
    {
      name   : 'Tab 1',
      content: 'Content of Tab Pane 1'
    },
    {
      name   : 'Tab 2',
      content: 'Content of Tab Pane 2'
    },
    {
      name   : 'Tab 3',
      content: 'Content of Tab Pane 3'
    }
  ];
  constructor() { }

  ngOnInit() {
  }

}

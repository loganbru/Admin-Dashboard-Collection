import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { RootbuilderComponent } from '../rootbuilder/rootbuilder.component';

@Component({
  selector: 'app-executive-builder',
  templateUrl: './executive-builder.component.html',
  styleUrls: ['../builder.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class ExecutiveBuilderComponent extends RootbuilderComponent implements OnInit {

  ngOnInit() {
  }

}

import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { RootbuilderComponent } from '../rootbuilder/rootbuilder.component';
@Component({
  selector: 'app-casual-builder',
  templateUrl: './casual-builder.component.html',
  styleUrls: ['../builder.component.scss'],
  encapsulation: ViewEncapsulation.None
})
export class CasualBuilderComponent extends RootbuilderComponent implements OnInit {

  ngOnInit() {
  }

}

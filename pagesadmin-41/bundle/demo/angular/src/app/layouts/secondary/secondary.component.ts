import { Component, OnInit } from '@angular/core';
import { pagesToggleService } from '../../@pages/services/toggler.service'
@Component({
  selector: 'app-secondary',
  templateUrl: './secondary.component.html',
  styleUrls: ['./secondary.component.scss']
})
export class SecondaryComponent implements OnInit {

  constructor(private toggler:pagesToggleService) {}

  ngOnInit() {
    //Async Update -
    //https://blog.angularindepth.com/everything-you-need-to-know-about-the-expressionchangedafterithasbeencheckederror-error-e3fd9ce7dbb4
    setTimeout(() => {
      this.toggler.toggleFooter(false);
    });
  }

}

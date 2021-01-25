import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cards',
  templateUrl: './cards.component.html',
  styleUrls: ['./cards.component.scss']
})
export class CardsComponentPage implements OnInit {

  constructor() { }

  ngOnInit() {
  }
  isLoading:boolean=false;
  errorMessage:boolean=false;
  message:string = "Something went terribly wrong. Just keep calm and carry on!";

  errorCard_isLoading:boolean=false;
  errorCard_errorMessage:boolean=false;
  errorCard_message:string = "Something went terribly wrong.";

  errorCardSampleRefresh(){
    this.errorCard_isLoading = true;
    this.errorCard_errorMessage = false;
    setTimeout(()=>{
          this.errorCard_isLoading = false;
          this.errorCard_errorMessage = true;
    },3000);
  }

  sampleRefresh(){
    this.isLoading = true;
    this.errorMessage = false;
    setTimeout(()=>{
          this.isLoading = false;
          this.errorMessage = true;
    },3000);
  }
}

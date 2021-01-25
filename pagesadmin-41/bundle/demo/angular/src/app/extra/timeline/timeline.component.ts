import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import {NgsRevealConfig} from 'ng-scrollreveal';
declare var pg: any;
@Component({
  selector: 'app-timeline',
  templateUrl: './timeline.component.html',
  styleUrls: ['./timeline.component.scss']
})
export class TimelineComponent implements OnInit {
  //Config Docs
  //https://tinesoft.github.io/ng-scrollreveal/doc/injectables/NgsRevealConfig.html
  
  constructor(private config: NgsRevealConfig,private route: ActivatedRoute) {
    //Only for demo - Casual and Executive layout
    this.route.params.subscribe(params => {
      if(params['type'] == "container"){
        config.container = document.querySelector(".page-container");
      }
      config.distance = "0";
    });

  }

  ngOnInit() {
  }

}

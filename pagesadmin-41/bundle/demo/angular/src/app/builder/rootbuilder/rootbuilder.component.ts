import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { pagesToggleService} from '../../@pages/services/toggler.service';

@Component({
  selector: 'app-builder',
  templateUrl: './rootbuilder.component.html',
  styleUrls: ['./rootbuilder.component.scss'],
  encapsulation:ViewEncapsulation.None
})
export class RootbuilderComponent implements OnInit {

  contentType = "plainContent";
  layoutType = "floating";
  viewOpen = true;
  
  contentTypes = [
    {
      type:"plainContent",
      contentClass:"",
      pageWrapper:"",
      footer:true
    },
    {
      type:"parallaxCoverpage",
      contentClass:"",
      pageWrapper:"",
      footer:false
    },
    {
      type:"fullheightParallax",
      contentClass:"full-height",
      pageWrapper:"full-height",
      footer:false
    },
    {
      type:"titleParallax",
      contentClass:"",
      pageWrapper:"full-height",
      footer:false
    },
    {
      type:"columns-3-9",
      contentClass:"full-height",
      pageWrapper:"full-height",
      footer:true
    },
    {
      type:"columns-9-3",
      contentClass:"full-height",
      pageWrapper:"full-height",
      footer:true
    },
    {
      type:"columns-6-6",
      contentClass:"full-height",
      pageWrapper:"full-height",
      footer:true
    }
  ]
  constructor(public toggler:pagesToggleService) {

   }

  ngOnInit() {
  }

  closeView(){
    this.viewOpen = false;
  }

  toggleView(){
    this.viewOpen = (this.viewOpen == true ? false : true);
  }

  selectContent(index:number){
    this.contentType = this.contentTypes[index].type;
    this.toggler.setContent(this.contentTypes[index].contentClass);
    this.toggler.setPageContainer(this.contentTypes[index].pageWrapper);
    this.toggler.toggleFooter(this.contentTypes[index].footer);
  }
}

import { Component, OnInit, ViewChild,ViewChildren, QueryList } from '@angular/core';
import {
  animate,
  state,
  style,
  transition,
  trigger,
} from '@angular/animations';
import { IsotopeOptions } from 'ngx-isotope';
import {GalleryService} from './gallery.service';
import { SwiperDirective, SwiperComponent
} from 'ngx-swiper-wrapper';

@Component({
  selector: 'app-gallery',
  templateUrl: './gallery.component.html',
  styleUrls: ['./gallery.component.scss'],
  animations: [
    trigger('enterAnimation', [
      state('loading', style({
        opacity: '0',
        transform: 'translateY(8%)'
      })),
      state('ready', style({
        opacity: '1',
        transform: 'translateY(0)'
      })),
      transition('loading => ready', animate('300ms cubic-bezier(0.1, 0.0, 0.2, 1)'))
    ])
  ],
})
export class GalleryComponent implements OnInit {

  @ViewChildren(SwiperDirective) swiperViewes: QueryList<SwiperDirective>
  
  @ViewChild('slider') public _slider: any;
  @ViewChild('fadInModal') _modal: any;

  feed = []
  config
  configModal;
  index = 0
  index2 = 0
  _isLoading:boolean = true 
  rangeValue

  constructor(private _service: GalleryService) {
  }

  ngOnInit() {
    this._service.getFeed().subscribe(feed => {
      this.feed = feed;
      setTimeout(()=>{
        this._isLoading = false
      }, 2000)
    });

    this.config = {
      init: false,
      observer: true,
      direction: 'vertical',
      autoplay: {
        delay: 5000,
      }
    }

    this.configModal = {
      init: false,
      observer: true,
      direction: 'horizontal',
      pagination: true
    }

   
  }

  ngAfterViewInit(): void {
    setTimeout(()=>{
      this.swiperViewes.forEach(dir =>  {
        dir.init()
      })
      this.swiperViewes.first.startAutoplay()
    },1)
  }
  nextSlide() {
    this.swiperViewes.last.nextSlide();
  }
  prevSlide() {
    this.swiperViewes.last.prevSlide();
  }
  toggleModal() {
    this._modal.show()
    setTimeout(()=>{
      this.swiperViewes.last.update()
    },500)
  }
  public galleryOptions: IsotopeOptions = {
    itemSelector: '.gallery-item',
    masonry: {
        columnWidth: 280,
        gutter: 10,
        fitWidth: true
    }
  };
}
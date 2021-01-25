import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { pagesToggleService } from '../../@pages/services/toggler.service'
import { Subscriber } from 'rxjs/Subscriber'

@Component({
  selector: 'google-map-page',
  templateUrl: './google.component.html',
  styleUrls: ['./google.component.scss'],
  host      : {
    '[class.relative]': 'true',
  }
})
export class GoogleMapPage implements OnInit {
  zoomLevel = 11;
  center  = {lat: 40.6700, lng: -73.9400};
  disableDefaultUI = true;
  styles = [{
    featureType: 'water',
    elementType: 'all',
        stylers: [{
            hue: '#e9ebed'
        }, {
            saturation: -78
        }, {
            lightness: 67
        }, {
            visibility: 'simplified'
        }]
    }, {
        featureType: 'landscape',
        elementType: 'all',
        stylers: [{
            hue: '#ffffff'
        }, {
            saturation: -100
        }, {
            lightness: 100
        }, {
            visibility: 'simplified'
        }]
    }, {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{
            hue: '#bbc0c4'
        }, {
            saturation: -93
        }, {
            lightness: 31
        }, {
            visibility: 'simplified'
        }]
    }, {
        featureType: 'poi',
        elementType: 'all',
        stylers: [{
            hue: '#ffffff'
        }, {
            saturation: -100
        }, {
            lightness: 100
        }, {
            visibility: 'off'
        }]
    }, {
        featureType: 'road.local',
        elementType: 'geometry',
        stylers: [{
            hue: '#e9ebed'
        }, {
            saturation: -90
        }, {
            lightness: -8
        }, {
            visibility: 'simplified'
        }]
    }, {
        featureType: 'transit',
        elementType: 'all',
        stylers: [{
            hue: '#e9ebed'
        }, {
            saturation: 10
        }, {
            lightness: 69
        }, {
            visibility: 'on'
        }]
    }, {
        featureType: 'administrative.locality',
        elementType: 'all',
        stylers: [{
            hue: '#2c2e33'
        }, {
            saturation: 7
        }, {
            lightness: 19
        }, {
            visibility: 'on'
        }]
    }, {
        featureType: 'road',
        elementType: 'labels',
        stylers: [{
            hue: '#bbc0c4'
        }, {
            saturation: -93
        }, {
            lightness: 31
        }, {
            visibility: 'on'
        }]
    }, {
        featureType: 'road.arterial',
        elementType: 'labels',
        stylers: [{
            hue: '#bbc0c4'
        }, {
            saturation: -93
        }, {
            lightness: -2
        }, {
            visibility: 'simplified'
        }]
    }];
  
    constructor(private route: ActivatedRoute,private toggler:pagesToggleService) {}
    parameter:string;
    private sub: any;
    ngOnInit() {
        this.sub = this.route.params.subscribe(params => {
            this.parameter = params['type'];
            //Show header for casual/executive and coporate
            if(this.parameter != "with-header"){
                this.toggler.setHeaderClass("transparent");
            }
         });
        this.toggler.setBodyLayoutClass("no-header");
        this.toggler.setPageContainer("full-height");
        this.toggler.setContent("full-width full-height overlay-footer relative");
        setTimeout(()=>{ 
            this.toggler.toggleFooter(false);
        });
    }

    zoomIn(){
        this.zoomLevel++;
    }

    zoomOut(){
        this.zoomLevel--;
    }

}

/*! contact.js | Bulkit | CSS Ninja */

/* ==========================================================================
Google maps init JS file 
========================================================================== */

$(document).ready(function($){
    
    "use strict";
    
    //Startup contact page map
    if ($('#google-map').length) {
        $('#google-map').gMap({
            latitude: 40.7143528,
            longitude: -74.0059731,
            maptype: 'ROADMAP',
            zoom: 13,
            markers: [
                {
                    latitude: 40.71771,
                    longitude:  -74.003245,
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;"></h4><div style="align-items:center!important;" class="content content-flex"><div><img style="height:60px;border-radius:100px;" src="assets/images/logos/cssninja.svg"></div><div style="margin-left:20px;"> Iam very happy if you like this template. If you need any support, please feel free to contact us at <strong>hello@cssninja.io</strong></div></div></div>',
                    icon: {
                        image: "assets/images/markers/marker-purple.png",
                        iconsize: [56, 82],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: true,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });
    }
    //Agency contact page map    
    if ($('#half-map').length) {
        $('#half-map').gMap({
            latitude: 40.7143528,
            longitude: -74.0059731,
            maptype: 'ROADMAP',
            zoom: 13,
            markers: [
                {
                    latitude: 40.71771,
                    longitude:  -74.003245,
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;"></h4><div style="align-items:center!important;" class="content content-flex"><div><img style="height:60px;border-radius:100px;" src="assets/images/logos/cssninja.svg"></div><div style="margin-left:20px;"> Iam very happy if you like this template. If you need any support, please feel free to contact us at <strong>hello@cssninja.io</strong></div></div></div>',
                    icon: {
                        image: "assets/images/markers/marker-purple.png",
                        iconsize: [56, 82],
                        iconanchor: [32,39]
                    }
                }
            ],
            doubleclickzoom: true,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });
    }
})
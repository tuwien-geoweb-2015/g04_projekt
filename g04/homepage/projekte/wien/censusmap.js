// Base map
var osmLayer = new ol.layer.Tile({source: new ol.source.OSM()});


// Census map layer
var wmsLayer = new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:wien_normalized'}
  }),
    
  opacity: 0.6,
});


// Layer
var ubahn = new ol.layer.Image({
    zIndex: 5,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:UBAHN_linien,g04_2015:UBAHN_haltestellen'}
  }),
});

var fahrradabstellanlagen = new ol.layer.Image({
    zIndex: 6,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:fahrradabstellanlagen'}
  }),
});

var CITYBIKE_stationen = new ol.layer.Image({
  zIndex: 8,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:CITYBIKE_stationen'}
  }),
});

var haltestellen_bus_strassenbahn = new ol.layer.Image({
    zIndex: 7,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:haltestellen_bus_strassenbahn'}
  }),
});

var SBAHN = new ol.layer.Image({
    zIndex: 5,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:SBAHN_linien,g04_2015:SBAHN_haltestellen'}
  }),
});

var einzugsber_sbahn_1000m = new ol.layer.Image({
    zIndex: 3,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:einzugsber_sbahn_1000m,g04_2015:SBAHN_haltestellen'}
  }),
});

var einzugsber_ubahn = new ol.layer.Image({
    zIndex: 3,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:einzugsber_ubahn,g04_2015:UBAHN_haltestellen'}
  }),
});

var bezirksgrenzen = new ol.layer.Image({
     zIndex: 1,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:bezirksgrenzen_wien'}
  }),
});

var fussgeherzonen = new ol.layer.Image({
    zIndex: 2,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:fusgeherzonen'}
  }),
});

var verkehrsnutzung = new ol.layer.Image({
    zIndex: 1,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:flaechen_verkehrsnutzung'}
  }),
});

var comment = new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:feedback'}
  }),
});

var radwege = new ol.layer.Image({
    zIndex: 4,
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g04_2015:radwege'}
  }),
});

var marker = new ol.Feature();
// Map object
var olMap = new ol.Map({
  target: 'map',
  //renderer: 'canvas',
  layers: [osmLayer, 
          new ol.layer.Vector({
          zIndex: 9,
	      source: new ol.source.Vector({
		  features: [marker]
	}),

    style: new ol.style.Style ({
    image: new ol.style.Icon(({
        anchor: [0.5, 46],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        opacity: 0.75,
        /**scale: 0,5,**/
        src: 'http://student.ifip.tuwien.ac.at/geoweb/2015/g04/homepage/ue3_hoc/marker_rot_sized.png'
              }))
        })
})
          ],
  view: new ol.View({
    center: ol.proj.transform([16.4, 48.2], 'EPSG:4326', 'EPSG:3857'),
    zoom: 10.6,
    maxZoom: 18
  })
});


//geolocation
function geolocate() {
  var geolocation = new ol.Geolocation({projection: 'EPSG:3857'});
  geolocation.setTracking(true); // here the browser may ask for confirmation
  geolocation.once('change:accuracyGeometry', function(evt) {
    geolocation.setTracking(false);
    olMap.getView().fit(geolocation.getAccuracyGeometry(), olMap.getSize(), { nearest: true, maxZoom: 16 });
    marker.setGeometry(new ol.geom.Point(olMap.getView().getCenter()));
    console.log("Accuracy of Geometry: " + geolocation.getAccuracy() + " meters"); 

  });
}


// Load variables into dropdown
$.get(function(response) {
  // We start at line 3 - line 1 is column names, line 2 is not a variable
  $(response.split('\n').splice(2)).each(function(index, line) {
    $('#topics').append($('<option>')
      .val(line.substr(0, 20).trim())
      .html(line.substr(20, 105).trim()));
  });
});
// Add behaviour to dropdown
$('#topics').change(function() {
  wmsLayer.getSource().updateParams({
    'viewparams': 'column:' + $('#topics>option:selected').val()
  });
});

$('#topics').change(function() {
       var selected_index = document.getElementById('topics').selectedIndex;
       console.log(selected_index);
       if(selected_index== -1 || selected_index == 0){
       	olMap.removeLayer(wmsLayer);
       } else {
       	olMap.removeLayer(wmsLayer);
       	olMap.addLayer(wmsLayer);
       }
       });



// Create an ol.Overlay with a popup anchored to the map
var popup = new ol.Overlay({
  element: $('#popup')
});
olMap.addOverlay(popup);

// Handle map clicks to send a GetFeatureInfo request and open the popup
olMap.on('singleclick', function(evt) {
  var view = olMap.getView();
  var url = wmsLayer.getSource().getGetFeatureInfoUrl(evt.coordinate,
      view.getResolution(), view.getProjection(), {'INFO_FORMAT': 'text/html'});
  popup.setPosition(evt.coordinate);
  $('#popup-content iframe').attr('src', url);
  $('#popup')
    .popover({content: function() { return $('#popup-content').html(); }})
    .popover('show');
  // Close popup when user clicks on the 'x'
  $('.popover-title').click(function() {
    $('#popup').popover('hide');
  });
  $('.popover form')[0].onsubmit = function(e) {
  var feature = new ol.Feature();
  feature.setGeometryName('geom');
  feature.setGeometry(new ol.geom.Point(evt.coordinate));
  feature.set('comment', this.comment.value);
  var xml = new ol.format.WFS().writeTransaction([feature], null, null, {
    featureType: 'feedback', featureNS: 'http://g04/2015',
    gmlOptions: {srsName: 'EPSG:3857'}
  });
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'http://student.ifip.tuwien.ac.at/geoserver/wfs', true);
  xhr.onload = function() {
    alert('Thanks for your comment.');
    wmsLayer.getSource().updateParams({'_time':Date.now()});
    $('#popup').popover('hide');

  };
  xhr.send(new XMLSerializer().serializeToString(xml));
  e.preventDefault();
};
});

// Submit query to Nominatim and zoom map to the result's extent
var form = document.getElementById('navform');
form.onsubmit = function(evt) {
  var url = 'http://nominatim.openstreetmap.org/search?format=json&q=';
  url += form.query.value;
  var xhr = new XMLHttpRequest();
  xhr.open("GET", url, true);
  xhr.onload = function() {
    var result = JSON.parse(xhr.responseText);
    if (result.length > 0) {
      var bbox = result[0].boundingbox;
      olMap.getView().fit(ol.proj.transformExtent([parseFloat(bbox[2]),
          parseFloat(bbox[0]), parseFloat(bbox[3]), parseFloat(bbox[1])],
          'EPSG:4326', 'EPSG:3857'), olMap.getSize());
          marker.setGeometry(new ol.geom.Point(olMap.getView().getCenter()));
    }
  };
  xhr.send();
  evt.preventDefault();
};


// Integration der Checkbox-Funktionalitäten



document.getElementById('ubahn').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(ubahn);
    console.log("Added ubahn");
  }
  else
  {
    olMap.removeLayer(ubahn);
    console.log("Removed ubahn");
  }
};

document.getElementById('fahrradabstellanlagen').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(fahrradabstellanlagen);
    console.log("Added fahrradabstellanlagen");
  }
  else
  {
    olMap.removeLayer(fahrradabstellanlagen);
    console.log("Removed fahrradabstellanlagen");
  }
};

document.getElementById('CITYBIKE_stationen').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(CITYBIKE_stationen);
    console.log("Added CITYBIKE_stationen");
  }
  else
  {
    olMap.removeLayer(CITYBIKE_stationen);
    console.log("Removed CITYBIKE_stationen");
  }
};

document.getElementById('haltestellen_bus_strassenbahn').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(haltestellen_bus_strassenbahn);
    console.log("Added haltestellen_bus_strassenbahn");
  }
  else
  {
    olMap.removeLayer(haltestellen_bus_strassenbahn);
    console.log("Removed haltestellen_bus_strassenbahn");
  }
};

document.getElementById('SBAHN').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(SBAHN);
    console.log("Added SBAHN");
  }
  else
  {
    olMap.removeLayer(SBAHN);
    console.log("Removed SBAHN");
  }
};

document.getElementById('einzugsber_sbahn_1000m').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(einzugsber_sbahn_1000m);
    console.log("Added einzugsber_sbahn_1000m");
  }
  else
  {
    olMap.removeLayer(einzugsber_sbahn_1000m);
    console.log("Removed einzugsber_sbahn_1000m");
  }
};

document.getElementById('einzugsber_ubahn').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(einzugsber_ubahn);
    console.log("Added einzugsber_ubahn");
  }
  else
  {
    olMap.removeLayer(einzugsber_ubahn);
    console.log("Removed einzugsber_ubahn");
  }
};

document.getElementById('bezirksgrenzen').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(bezirksgrenzen);
    console.log("Added bezirksgrenzen_wien");
  }
  else
  {
    olMap.removeLayer(bezirksgrenzen);
    console.log("Removed bezirksgrenzen_wien");
  }
};

document.getElementById('fussgeherzone').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(fussgeherzonen);
    console.log("Added fussgeherzone");
  }
  else
  {
    olMap.removeLayer(fussgeherzonen);
    console.log("Removed fussgeherzone");
  }
};

document.getElementById('verkehrsflaeche').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(verkehrsnutzung);
    console.log("Added verkehrsflache");
  }
  else
  {
    olMap.removeLayer(verkehrsnutzung);
    console.log("Removed verkehrsflache");
  }
};

document.getElementById('kommentar').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(comment);
    console.log("Added Kommentare");
  }
  else
  {
    olMap.removeLayer(comment);
    console.log("Removed Kommentare");
  }
};

document.getElementById('radwege').onclick = function(e){
  if(this.checked == true)
  {
    olMap.addLayer(radwege);
    console.log("Added radwege");
  }
  else
  {
    olMap.removeLayer(radwege);
    console.log("Removed radwege");
  }
};




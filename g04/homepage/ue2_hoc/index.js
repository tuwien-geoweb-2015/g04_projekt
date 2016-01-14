var send = function(form, feature, url, config) {
  form.addEventListener('submit', function(evt) {
    evt.preventDefault();

    var name = form.name.value;
    var email = form.email.value;
    var message = form.message.value;

    var anrede = form.geschlecht.value || ' ';

    var teamflag;
    if (form.team.checked) {
      // Geoweb-Mitglied
      teamflag = 1;
    } else {
      // Geoweb-extern
      teamflag = 0;
    }

    feature.set('f_name', name);
    feature.set('f_mail', email);
    feature.set('f_anrede', anrede);
    feature.set('f_msg', message);
    feature.set('f_geoweb', teamflag);
    feature.set('f_datum', new Date().toISOString().substr(0, 10));

    var data = new ol.format.WFS().writeTransaction([feature], null, null, {
      featureType: config.featureType,
      featureNS: config.featureNS,
      featurePrefix: config.featurePrefix,
      gmlOptions: {srsName: config.srsName}
    });

    var xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function() {
      alert('Danke für das Feedback');
      window.location.reload();
    }
    xhr.send(new XMLSerializer().serializeToString(data));
  });
};


var url = 'http://student.ifip.tuwien.ac.at/geoserver/wfs';
var layer = 'feedback';
var prefix = 'g04_2015';
var featureNS = 'http://g04/2015';
var form = document.getElementById('feedback');

var feedbackPoints = new ol.source.Vector({
  features: new ol.Collection(),
});

var map = new ol.Map({
  controls: ol.control.defaults({attributionOptions: {collapsible: false}}),
  target: 'map',
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    }),
    new ol.layer.Tile({
      source: new ol.source.TileWMS({
        url: url,
        params: {LAYERS: prefix + ':' + layer}
      })
    }),
    new ol.layer.Vector({
      source: feedbackPoints
    })
  ],
  view: new ol.View({
    center: ol.proj.fromLonLat([16.373064, 48.20833]),
    zoom: 13
  })
});

var feature = new ol.Feature();
feature.setGeometryName('geom');
feature.setGeometry(new ol.geom.Point(map.getView().getCenter()));
feedbackPoints.addFeature(feature);
var modify = new ol.interaction.Modify({
  features: feedbackPoints.getFeaturesCollection()
});
map.addInteraction(modify);

var geolocation = new ol.Geolocation({
  projection: map.getView().getProjection(),
  tracking: true
});
geolocation.once('change:position', function(evt) {
  feature.getGeometry().setCoordinates(geolocation.getPosition());
  map.getView().setCenter(geolocation.getPosition());
});

send(form, feature, url, {
  featureType: layer,
  featurePrefix: prefix,
  featureNS: featureNS,
  srsName: map.getView().getProjection().getCode()
});

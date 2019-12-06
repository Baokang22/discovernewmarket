<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtFBp_QIl_Jt2veLfSFZTRJ979VWXnbkA"></script>
<script type="text/javascript">
(function($) {
	function new_map( $el ) {
	// var
	var $markers = $el.find('.marker');
	// vars
	var args = {
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		mapTypeId: 'terrain',
		scrollwheel: false,
		scaleControl:true,
		zoomControl:true
	};
	// create map
	var map = new google.maps.Map( $el[0], args);
	// add a markers reference
	map.markers = [];
	// add markers
	$markers.each(function(){
		add_marker( $(this), map );
	});
	// center map
	center_map( map );
	// return
	return map;
}
function add_marker( $marker, map ) {

	infoBubble = new InfoBubble({
		map: map,
		backgroundColor: 'rgb(8,70,142)',
		hideCloseButton: false,
		minWidth: 200,
		minHeight:200,
		borderRadius: 0,


	});

	for(var i=0;i<$marker.length;i++)
	{
	    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	    var image = '/wp-content/themes/discover-newmarket/inc/map/map-pin-large.png';
	    var marker = new google.maps.Marker({
			position	: latlng,
			map		    : map,
			icon		: image,
			filter: {
				type: $marker.data('type')
			}
		});
	    map.markers.push( marker );
	    
	    marker.html = $marker.html();
	    
	    google.maps.event.addListener(marker, 'click', function(){
	        infoBubble.setContent(this.html);
	        infoBubble.open(map, this);
	    });
	}

}

function center_map( map ) {
	// vars
	var bounds = new google.maps.LatLngBounds();
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
		map.setCenter( bounds.getCenter() );
		map.setZoom( 15 );
	}
	else
	{
		// fit to bounds
		
		map.fitBounds( bounds );
	}
}
var map = null;
$(document).ready(function(){
	$('.acf-map').each(function(){
		// create map
		map = new_map( $(this) );
	});
});
// Filtering links click handler, it uses the filtering values (data-filterby and data-filtervalue)
// to filter the markers based on the filter (custom) property set when the marker is created.
$(document).on('click', '.filter-wrap a', function (event) {
	event.preventDefault();
	var $target = $(event.target);
	var type = $target.data('filterby');
	var value = $target.data('filtervalue');
	$.each(map.markers, function () {
		if (value == '*') {
			this.setMap(map);
		}	else {
			if (this.filter[type] == value) {
				if (this.map == null) {
					this.setMap(map);
				}
			} else {
				this.setMap(null);
			}
		}
	});
});
})(jQuery);
</script>
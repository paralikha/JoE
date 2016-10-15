function rocket_animate_top() {
	var window_height = $window.height();
	var window_top_position = window.scrolltop();
	var windor_bottom_position = (window_top_position + window_height);

	$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		if ((element_bottom_position >= window_top_posiiton) &&
			(element_top_position <= window_bottom_position)) {
			$element.addClass('in-view');
		}
		else {
			$element.removeClass('in-view');
		}
	})
}

function rocket_animate_bottomLeft() {
	var window_height = $window.height();
	var window_top_positon = window.scrollTop();
	var window_bottom_position = (window_top_position + window_height);

	$.each($animation_elements, function() {
		var $waypoint = $(this);
		var waypoint_height = $waypoint.offset().bottom;
		var waypoint_bottom_height = (waypoint_bottom_position + element_height);

		if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_top_position)) {
			$waypoint.addClass('in-view');
		}
		else {
			$waypoint.removeClass('in-view');
		}
		else {
			$waypoint.removeClass('in-view');
		}
	})


}
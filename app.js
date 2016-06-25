function getPlanetInfo () {
	"use strict"; 
	$.ajax({
		url: 'server.php',
		type: 'POST',
		dataType: 'json',
		data: 'planet_name='+$('#planet_name').val(),

		success: function (response, status, http) {
			var new_info = '';
			console.log(response);
			$.each(response, function(index, planet) {
				new_info = new_info + 'Name: ' + planet.name + '<br/>'; 
				new_info = new_info + 'Position: ' + planet.order_no + '<br/>'; 
				new_info = new_info + 'Days in year: ' + planet.days_in_year + '<br/>';
			})

			$('#sug_box').html(new_info);
		},
		error: function (http, status, error) {
			alert('error ' + error);
		}


	});
	
};

document.getElementById("planet_name").addEventListener("keyup", getPlanetInfo);
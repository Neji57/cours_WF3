var url = "http://www.zippopotam.us/fr/";
var $cpInput = $('#codePostal');
var $villeInput = $('#ville');

$cpInput.keyup(function () {

	if ($cpInput.val().length != 5) {
		$villeInput.prop("disabled", true);
		return;
	}

	// var xhr = $.ajax({
	// 	method: "GET",
	// 	url: url + $cpInput.val(),
	// 	// on indique qu'il y aura du json en retour :
	// 	dataType: "json"
	// });

	// xhr.done(function(data) {
	// 	console.log(data);
	// 	$villeInput.prop("disabled", false);
	// 	$villeInput.html('');
	// 	$.each(data.places, function(index, value) {
	// 		$villeInput.append('<option value="' + value['place name'] +'">' + value['place name'] + '</option>');
	// 	});
	// });

	// xhr.fail(function() {
	// 	console.log('Erreur Ajax');
	// });

	$.getJSON(url + $cpInput.val(), function (data) {
		if ($cpInput.val().length != 5) {
			$villeInput.prop('disabled', true);
			return;
		}
		$villeInput.prop('disabled', false);
		$villeInput.html('');
		$.each(data.places, function (index, value) {
			$villeInput.append('<option value="' + value['place name'] + '">' + value['place name'] + '</option>');
		});
	}).fail(function () {
		console.log('Erreur Ajax');
	});

});
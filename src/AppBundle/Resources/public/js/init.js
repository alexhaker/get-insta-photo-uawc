$(document).ready(function(){
	$("#wizard").steps({
	    headerTag: "h3",
	    bodyTag: "section",
	    transitionEffect: "slideLeft",
	    autoFocus: true
	});

	$("#image-picker").imagepicker();

	function formatUser(user) {
		if (user.loading) return user.text;

		return '<div class="clearfix">'
					+'<div class="usr-img"><img src="'+user.profile_picture+'" /></div>' 
					+'<div class="usr-name"><b>'+user.username+'</b>&nbsp ('+user.full_name+')</div>' 
				+'</div>';
	}

	function formatUserSelection(user) {
		return user.username;
	}

	$("#insta-user").select2({
		placeholder: {
			id: "-1",
			placeholder: "Search instagram user",		
		},
		ajax: {
			url: "/app_dev.php/search-user",
			delay: 250,
			dataType: 'json',
			data: function(params){
				return {
					q: params.term
				};
			},
			processResults: function (data){
				return {
					results: data.data
				};
			},
			cache: true,
		},
		escapeMarkup: function (markup) { return markup; },
		templateResult: formatUser,
		templateSelection: formatUserSelection,
		minimumInputLength: 3,
	});

	$("#photo-source").select2();

	function loadPhotos(isClear)
	{
		var userSelected = $('#insta-user').find("option:selected");
		var userId = userSelected.val();		

		var modeSelected = $('#photo-source').find("option:selected");
		var mode = modeSelected.val();

		var apiUrl = "";
		switch (mode) {
			case '1':
				apiUrl = "/app_dev.php/get-user-photo";				
				break
			case '2': 
				apiUrl = "/app_dev.php/get-feed-photo";				
				break
		}

		console.log(userId);

		$.ajax({
			url: apiUrl,
			method: "POST",
			data: {id: userId}
		}).done(function(data){
			console.log(data.data);
			//$("#photos").html("");
			$("#image-picker").append();
			for (i in data.data) {
				var photo = data.data[i];
				//$("#photos").append('<img class="thumb" src="'+photo.images.thumbnail.url+'" />');
				//$("#image-picker").html('<option data-img-src="'+photo.images.thumbnail.url+'" value="'+photo.images.standart_resolution+'">'+photo.id+'</option>');
				var option = new Option(photo.id, photo.images.standard_resolution.url);
				$(option).attr('data-img-src', photo.images.thumbnail.url);
				$("#image-picker").append($(option));
				$("#image-picker").imagepicker();
			}
		});
	}

	$("#insta-user").change(function(obj){
		loadPhotos(true);
	});

	$('#photo-source').change(function(obj) {
		loadPhotos(true);
	});
});
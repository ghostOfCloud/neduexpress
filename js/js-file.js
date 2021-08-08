(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);


// change of tabs

// function openTabs(e, tabId) {
// 	var i, mycontainhide;

// 	mycontainhide = document.getElementsByClassName('mycontainhide');
// 	for (i = 0; i < mycontainhide.length; i++) {
// 		mycontainhide[i].style.display = "none";
// 	}

// 	document.getElementById(tabId).style.display = "block";
// }

// window.onload = function() {
// 	openTabs(event, 'dashboard');
// }

// IMAGE PREVIEW =======================

function filePreview(input){
	if (input.files && input.files[0]) {
		var reader = new fileReader();
		reader.onload = function(e){
			$('#uploadForm + img').remove();
			$('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="100"/>');
		};
		reader.readAsDataURL(input.files[0]);
	}
}

$("#file").change(function(){
	filePreview(this);
})


// =========== page redirect
function redirectPage(){
	window.location.href = 'vendor-dash/add-items.html';
}
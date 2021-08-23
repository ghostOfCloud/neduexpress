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

// ================== IMAGE PREVIEW =======================

var images = [];
		function image_select(){
			var image = document.getElementById('image').files;
			for(i= 0; i < image.length; i++){
				if (check_duplicate(image[i].name)){
					images.push({
						"name" : image[i].name,
						"url" : URL.createObjectURL(image[i]),
						"file" : image[i],
					})
				}else{
					alert(image[i].name + "is already added to the list");
				}
			}
			document.getElementById('form').reset();
			document.getElementById('container').innerHTML = image_show();
		}

		function image_show(){
			var image = "";
			images.forEach((i) => {
				image += `<div class="col-lg-6 col mt-4">
							<div class="product-order-body-img">
								<div class="position-relative">
									<img src="`+ i.url +`" class="edit-img">
									<span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
								</div>
							</div>
						</div>`;
			})
			return image;
		}

		function delete_image(e){
			images.splice(e, 1);
			document.getElementById('container').innerHTML = image_show();
		}

		function check_duplicate(name){
			var image = true;
			if(images.length > 0){
				for (e = 0; e < images.length; e++){
					if(images[e].name == name){
						image = false;
						break;
					}
				}
			}

			return image;
		}



// =========== page redirect
function redirectPage(){
	window.location.href = 'vendor-dash/add-items.html';
}
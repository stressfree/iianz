var brochureImageVisible = 1;
var totalBrochureImages = 0;

function showBrochureImage(imageNo) {
	if (imageNo > 0 && imageNo != brochureImageVisible && imageNo <= totalBrochureImages) {
		var showDiv = '#brochureImage' + imageNo;
		var hideDiv = '#brochureImage' + brochureImageVisible;
		var pagerSelected = '#brochurePager' + imageNo;
		var pagerNotSelected = '#brochurePager' + brochureImageVisible;
	
		$(hideDiv).fadeOut(800);
		$(showDiv).fadeIn(800);
		
        	$(pagerSelected).removeClass('notselected'); 
        	$(pagerSelected).addClass('selected');
        	$(pagerNotSelected).removeClass('selected'); 
        	$(pagerNotSelected).addClass('notselected'); 
	
		brochureImageVisible = imageNo;
	}
}

function nextBrochureImage() {
	var nextImage = 1;
	if (brochureImageVisible < totalBrochureImages) {
		nextImage = brochureImageVisible + 1;
	}
	showBrochureImage(nextImage);
	window.setTimeout(function() { nextBrochureImage(); }, 20000);
}

$(document).ready(function() {
	if (totalBrochureImages > 1) {
		window.setTimeout(function() { nextBrochureImage(); }, 20000);
	}
});


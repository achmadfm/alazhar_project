$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '8154458926',
		accessToken: '8154458926.1677ed0.eeb4005b29ac44c1bf00c9c66afef69b',
        target: 'instafeed',
        sortBy: 'most-recent',
		resolution: 'low_resolution',
		template: '<li class="col-md-3 col-sm-6 col-xs-12 isotope-item instagram"><strong>From API Instagram</strong><div class="image-gallery-item"><div class="image-gallery-item"><a href="{{link}}" target="_new" ><span class="thumb-info thumb-info-centered-info"><span class="thumb-info-wrapper"><img src="{{image}}" class="img-responsive" alt="" /><span class="thumb-info-title"><span class="thumb-info-type">Click For Details</span></span></span></span></a></div></div></li>'
	});
	feed.run();
});
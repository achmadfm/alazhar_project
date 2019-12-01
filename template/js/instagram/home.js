$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '8154458926',
		accessToken: '8154458926.1677ed0.eeb4005b29ac44c1bf00c9c66afef69b',
        target: 'instafeedhome',
        limit: 9,
        sortBy: 'most-recent',
		resolution: 'thumbnail',
		template: '<li><a href="{{link}}" target="_new"><span class="img-thumbnail d-block"><img class="img-fluid" width="70" height="70" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>'
	});
	feed.run();
});
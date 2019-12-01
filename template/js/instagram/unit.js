$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '8154458926',
		accessToken: '8154458926.1677ed0.eeb4005b29ac44c1bf00c9c66afef69b',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});
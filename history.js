;(function($){
	$.fn.history = function(options){
		var settings = {
			'url' : null,
			'this' : this,
			'event' : 'click',
			'onLoad' : 'Loading...',
			'grapContent' : '.grapme',
			'releaseContent': '#content'
		};
		if(options){$.extend(settings, options)};
		var firstLoad = 0;
		var Viewer = {
			init: function(){
				settings.this.on(settings.event, function(e){
					Viewer.loadContent(this.href);
					Viewer.updateHistory(this);
					Viewer.handleState();
					e.preventDefault();
				});
			},

			loadContent: function(data){
				$(settings.releaseContent).html(settings.onLoad);
				$.get(data, function(data){
					//get content that are not in the root div
					var content = $(settings.grapContent, data).html();
					if(content==undefined){
						//Get root div content
						var content = $(data).filter(settings.grapContent).html();
					}
					$(settings.releaseContent).html(content);
				});	
			},

			updateHistory: function(data){
					if(firstLoad==0){
						firstLoad = 1;
						history.replaceState(window.location.pathname, '', '');
						history.pushState({}, 'testing', data.href);
					}else{
						history.pushState(data.href, 'testing', data.href);
					}
					document.title = window.location;
			},

			handleState: function(){
				$(window).on('popstate', function(e){
					if(e.originalEvent.state && e.originalEvent){
						Viewer.loadContent(window.location);
					}
				});
			}
		}

		Viewer.init();
	};
})(jQuery);
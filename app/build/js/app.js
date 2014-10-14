
function Snippet(options, cm, elSyntax, elTheme, elInfo) {
	this.url      = options.url || '';
	this.cm       = cm;
	this.elSyntax = elSyntax;
	this.elTheme  = elTheme;
	this.elInfo   = elInfo;
	this.path     = window.location.pathname.split('/').pop();
	this.delay    = options.delay || 2000;
	this.syntax   = options.syntax || 'javascript';
	this.theme    = options.theme || 'monokai';
	this.timer;
	this.init();
};

Snippet.prototype.init = function() {
	var self = this;
	self.elInfo.timeago();
	self.getSnippet(function(){
		self.afterInit();
	});
};

Snippet.prototype.afterInit = function() {
	var self = this;

	self.cm.on("change", function(cm, obj){
  		self.updateSnippet();
  	})

  	self.elSyntax.change(function(e){
  		self.syntax = self.elSyntax.val();
  		self.cm.setOption('mode', self.syntax);
  		self.updateSnippet();
  	})

  	self.elTheme.change(function(e){
  		self.theme = self.elTheme.val();
  		self.cm.setOption('theme', self.theme);
  		self.updateSnippet();
  	})
};

Snippet.prototype.getSnippet = function(cb) {
	var self = this;
	$.get('snippets/api/service/v1/snippet/' + self.path, function(data){
		if (data.error === false) {
			console.log(data.message);
		} else {
			if (data.snippet !== null) {
				self.syntax = data.snippet.syntax;
				self.theme = data.snippet.theme;
				self.cm.setOption('mode', self.syntax);
				self.cm.setOption('theme', self.theme);
				self.cm.setValue(data.snippet.body);
			}
			if (typeof cb === 'function')
				cb();
		}
	})
}

Snippet.prototype.updateSnippet = function() {
	var self = this;

  	clearTimeout(self.timer);
  	self.timer = setTimeout(function(){
		var body = self.cm.getValue();
		var data = {
				body  : body,
				syntax: self.syntax,
				theme : self.theme
			}
		$.ajax({
				url   : 'snippets/api/service/v1/snippet/' + self.path,
				method: 'put',
				data  : data,
			}).done(function(data){
				if(data.error === true)
					console.log(data.message);
				else {
					self.elInfo.removeData('timeago')
						// .data('timeago', data.updated_at)
						.attr('title', data.updated_at)
						.timeago();
					$('.info small').html(data.updated_at_date);
				}
			});
	}, self.delay);
}



$(function(){

	var myCodeMirror = CodeMirror.fromTextArea(document.getElementById("code"), {
							lineNumbers: true,
							theme      : "monokai"
						});
	var gnmenu   = new gnMenu( document.getElementById( 'gn-menu' ) );
	var nlform   = new NLForm( document.getElementById( 'nl-form' ) );
	var elSyntax = $('#syntax');
	var elTheme  = $('#theme');
	var elInfo   = $('#info');
	snippet      = new Snippet({}, myCodeMirror, elSyntax, elTheme, elInfo);
});

(function() {	
	var support = { animations : Modernizr.cssanimations },
		container = document.getElementById( 'ip-container' ),
		header = container.querySelector( 'header.ip-header' ),
		loader = new PathLoader( document.getElementById( 'ip-loader-circle' ) ),
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

	function init() {
		var onEndInitialAnimation = function() {
			if( support.animations ) {
				this.removeEventListener( animEndEventName, onEndInitialAnimation );
			}

			startLoading();
		};

		// disable scrolling
		window.addEventListener( 'scroll', noscroll );

		// initial animation
		classie.add( container, 'loading' );

		if( support.animations ) {
			container.addEventListener( animEndEventName, onEndInitialAnimation );
		}
		else {
			onEndInitialAnimation();
		}
	}

	function startLoading() {
		// simulate loading something..
		var simulationFn = function(instance) {
			var progress = 0,
				interval = setInterval( function() {
					progress = Math.min( progress + Math.random() * 0.05, 1 );

					instance.setProgress( progress );

					// reached the end
					if( progress === 1 ) {
						classie.remove( container, 'loading' );
						classie.add( container, 'loaded' );
						clearInterval( interval );

						var onEndHeaderAnimation = function(ev) {
							if( support.animations ) {
								if( ev.target !== header ) return;
								this.removeEventListener( animEndEventName, onEndHeaderAnimation );
							}

							classie.add( document.body, 'layout-switch' );
							window.removeEventListener( 'scroll', noscroll );
						};

						if( support.animations ) {
							header.addEventListener( animEndEventName, onEndHeaderAnimation );
						}
						else {
							onEndHeaderAnimation();
						}
					}
				}, 80 );
		};

		loader.setProgressFn( simulationFn );
	}
	
	function noscroll() {
		window.scrollTo( 0, 0 );
	}

	init();

})();



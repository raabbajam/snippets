
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


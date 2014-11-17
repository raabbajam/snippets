
		<ul id="gn-menu" class="gn-menu-main">
			<!-- <li><a href="{{url('/')}}">snippets.dev</a></li>
			<li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
			<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li> -->
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<form action="java" id="nl-form" class="nl-form">
								<li>
									<a class="gn-icon fa-icon fa-code" title="choose your syntax">Syntax</a>
									{{Form::select('syntax', $syntaxes, $snippet->syntax, ['id' => 'syntax'])}}
								</li>
								<li>
									<a class="gn-icon fa-icon fa-tint" title="choose your theme">Theme</a>
									{{Form::select('theme', $themes, $snippet->theme, ['id' => 'theme'])}}
								</li>
								<li><a class="gn-icon fa-icon fa-plus-square" href="{{url('/')}}">New Snippet</a></li>
								<li><a class="gn-icon fa-icon fa-github" href="https://github.com/raabbajam/snippets">Fork</a></li>
								<li><a class="gn-icon fa-icon fa-external-link-square">Pondok Programmer</a></li>
								<div class="nl-overlay"></div>
							</form>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
		</ul>
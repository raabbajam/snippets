<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::model('snippet', 'Snippet');

Route::group([ 'prefix' => 'snippets/api/service/v1', 'before' => 'Apiauth' ], function()
{
  Route::resource('snippet', 'SnippetsController');
});

View::composer('snippets.index', function($view)
{
	$syntaxes = Syntax::get(['name', 'alias']);
	$optionSyntaxes = [];
	foreach ($syntaxes as $syntax) {
		$optionSyntaxes[$syntax['name']] = $syntax['alias'];
	}

	$themes = Theme::get(['name', 'alias']);
	$optionThemes = [];
	foreach ($themes as $theme) {
		$optionThemes[$theme['name']] = $theme['alias'];
	}

    $view
    ->with('syntaxes', $optionSyntaxes)
    ->with('themes', $optionThemes);
});

Route::get('/', function()
{
	$snippet = New Snippet;
	$snippet->getNewPath();

	return Redirect::to($snippet->path);
});

Route::get('{any}', function($any)
{
	$snippet = Snippet::where('path', '=', $any)->first();
	if (!$snippet) {
		$snippet = new Snippet;
		$snippet->syntax = 'javascript';
	}
	return View::make('snippets.index')
		->with('snippet', $snippet);
});
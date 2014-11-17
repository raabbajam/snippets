<?php

class SnippetsController extends \BaseController {

	/**
	 * Display a listing of snippets
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json([
			'error' => true,
			'message' => 'Path needed'
			], 200)->setCallback(Input::get('callback'));
	}

	/**
	 * Show the form for creating a new snippet
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('snippets.create');
	}

	/**
	 * Store a newly created snippet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Snippet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Snippet::create($data);

		return Redirect::route('snippets.index');
	}

	/**
	 * Display the specified snippet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($path)
	{
		$snippet = Snippet::wherePath($path)->first();

		return Response::json([
			'error' => 'false',
			'snippet' => $snippet
			], 200)->setCallback(Input::get('callback'));
	}

	/**
	 * Show the form for editing the specified snippet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$snippet = Snippet::find($id);

		return View::make('snippets.edit', compact('snippet'));
	}

	/**
	 * Update the specified snippet in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($path)
	{
		$snippet = Snippet::wherePath($path)->first();
		if(!$snippet) {
			$snippet = new Snippet;
			$snippet->path = $path;
			$snippet->save();
		}
		$validator = Validator::make($data = Input::all(), Snippet::$rules);

		if ($validator->fails())
		{
			return Response::json([
				'error' => true,
				'message' => $validator->messages()->toArray()
				], 200)->setCallback(Input::get('callback'));
		}
		dd($data);

		$snippet->update($data);
		return Response::json([
			'error' => false,
			'updated_at' => $snippet->updated_at->toISO8601String(),
			'updated_at_date' => $snippet->updated_at->toDayDateTimeString()
			], 200)->setCallback(Input::get('callback'));
	}

	/**
	 * Remove the specified snippet from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Snippet::destroy($id);

		return Redirect::route('snippets.index');
	}

}

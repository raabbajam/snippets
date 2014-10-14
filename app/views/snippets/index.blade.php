@extends('layouts.master')

@section('content')
<textarea name="code" id="code" cols="30" rows="10">
</textarea>
<div class="info">
	Last Update: 
	<span id="info" 
		@if(isset($snippet->updated_at)) {{'title="' . $snippet->updated_at->toISO8601String() . '"'}} @else {{'Never'}} @endif
	>	
		@if(isset($snippet->updated_at)) {{$snippet->updated_at->diffForHumans()}} @else {{'Never'}} @endif
	</span>
	<br>
	<small>@if(isset($snippet->updated_at)) {{$snippet->updated_at->toDayDateTimeString()}} @else {{'Never'}} @endif</small>
</div>
@stop
@extends('layouts.main')

@section('content')

	@section('search-keyword')
		<section id="search-keyword">
			<h3>Search Result  for <span>{!! $keyword !!}</span></h3>
		</section>
	@stop


	<div id="search-results" style="margin-top: 30px; font-size: 18px; margin-left: 25px;">
		@foreach($datapros as $datapro)
		<div class="datapro">
			<h3><a href="view/{{ $datapro->id }}">{!! $datapro->title !!}</a></h3>
			<p>{!! $datapro->description !!}</p>
		</div>
		@endforeach
	</div>

@stop
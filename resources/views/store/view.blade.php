@extends('layouts.main')



@section('content')
	<div id="datapro-details" style=" font-size: 18px; margin-left: 25px; ">
		<h1>{!! $datapro->title !!}</h1>
		<p>{!! $datapro->description !!}</p>
		<p>Proof :<span>{!! $datapro->id !!}</span></p>
	</div>
@stop

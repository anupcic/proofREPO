@extends('layouts.main')

@section('content')

<style type="text/css">
		h1 {
	font-family: Raleway;
	font-size: 30px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
h2 {
	font-family: Raleway;
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	line-height: 15.4px;
	font-weight: bold;
}
</style>


<header class="jumbotron hero-spacer" style="margin-top: 10px">

	<h1 style="font-weight: bold; text-align: center;margin-bottom: 20px; font-size: 30px;">WELCOME TO PROOFREPO</h1><hr>
	<p style="font-size: 18px;text-align: center;">ProofRepo is an online collection of mathematical theorems and proofs. The proofRepo is designed to give mathematics students and researchers a deep insight into the mathematical theorems. ProofRepo gives a number of different proofs for every theorem in the repository.</p>
	<p style="font-size: 18px; text-align: center;">ProofRepo is designed to be an open and collaborative platform. The registered users of the proofRepo can login and modify and add the content to the repository.</p>
	</header>
	<nav style="padding-top: 5px;">
	     <h2>FEATURED PROOFS</h2><hr>
	</nav>
	<div id="datapros" style=" font-size: 18px; margin-left: 25px;">
		@foreach($datapros as $datapro)
		<div class="datapro">

			<h3 style="margin-bottom: 15px;"><a href="store/view/{{ $datapro->id }}">{!! $datapro->title !!}</a></h3>
			
			<p style="margin-left: 10px;padding-left: 15px;">
				{!! $datapro->description !!} 
			</p>
		</div>
		@endforeach
	</div>

@stop

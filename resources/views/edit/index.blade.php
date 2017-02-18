@extends('layouts.main')

@section('content')

<script src="js/ckeditor/ckeditor.js"></script>
<!-- <script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/plugins/fmath_formula/editor_plugin_src.js"></script>
 -->
<!--  <script src="//tinymce.cachefly.net/4.3/tinymce.min.js"></script>
<script type="text/javascript" async
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
<script type='text/javascript' src='http://mathdox.org/formulaeditor/main.js'></script>
  <script src="//cdn.ckeditor.com/4.5.8/full/ckeditor.js"></script> -->
<div id="admin">
		<div class ="form-group">
				<h1>Proofs Admin Panel</h1>
				<p>Here you Can view and add Proofs</p>
				<h2>Proofs</h2>
						<ul>
							@foreach($datapros as $datapro)
								<li>
									{!! $datapro->title !!}
									{!! Form::open(array('url'=>'edit/destroy','class'=>'form-inline')) !!}
									{!! Form::hidden('id',$datapro->id) !!}
									{!! Form::submit('delete') !!}
									{!! Form::close() !!}
								</li>
							@endforeach
						</ul>
		 </div>
		
		 </div>
		 @stop
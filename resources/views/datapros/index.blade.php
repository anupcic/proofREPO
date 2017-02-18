@extends('layouts.main')

@section('content')

<script src="js/ckeditor/ckeditor.js"></script>

<div id="admin">

		 <h1 style="text-align: center;font-weight: bold;">CREATE NEW PROOFS</h1>
		<div class ="form-group"><hr/>
			 <h2>Proofs</h2>
				@if ($errors->any())
					<ul class="alert alert-danger">
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				@endif
        </div>



		{!! Form::open(array('url'=>'datapros/create')) !!}

		<div class="form-group">
				<p>
					{!! Form::label('category_id','Category:') !!}
					{!! Form::select('category_id',$categories,['class'=>'form-control']) !!}
				</p>	
				<p>
					{!! Form::label('title','Title:') !!}
					{!! Form::text('title',null,['class'=>'form-control']) !!}
				</p>
				<p>
					{!! Form::label('description','Data:') !!}
					{!! Form::textarea('description',null,['class'=>'form-control']) !!}
				</p>
		</div>
		<div class="form-group">
			{!! Form::submit('Create Proofs', ['class'=>'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
	<script type="text/javascript">
// tinymce.init({ 
// 		selector:'textarea'
//  });

	CKEDITOR.replace('description');
	</script>
</div>

@stop
@section('footer')
@stop
@extends('layouts.main')

@section('content')
<style type="text/css">
.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 450px;
    padding: 50px 40px;

}
</style>

	<div class="main-login main-center">

		
			<h1>Create New Account</h1>

						@if($errors->has())
							<div id="form-errors">
								<p>The following errors have occured :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						{!! Form::open(array('url'=>'users/create')) !!}
							<div class="form-group">
								<p>
									{!! Form::label('firstname','First Name:') !!}
									{!! Form::text('firstname',null,['class'=>'form-control']) !!}
								</p>
								<p>
									{!! Form::label('lastname','Last Name:') !!}
									{!! Form::text('lastname',null,['class'=>'form-control']) !!}
								</p>
								<p>
									{!! Form::label('email','Email:') !!}
									{!! Form::text('email',null,['class'=>'form-control']) !!}
								</p>
								<p>
									{!! Form::label('password','Password:') !!}
									{!! Form::password('password',['class'=>'form-control']) !!}
								</p>
								<p>
									{!! Form::label('password_confirmation','Password Confirmation:') !!}
									{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
								</p>
								<p>
									{!! Form::label('telephone','Telephone:') !!}
									{!! Form::text('telephone',null,['class'=>'form-control']) !!}
								</p>
							</div>
							<div class="form-group">
								{!! Form::submit('CREATE NEW ACCOUNT', ['class'=>'btn btn-primary form-control']) !!}
							</div>
						{!! Form::close() !!}

		
	</div>
@stop

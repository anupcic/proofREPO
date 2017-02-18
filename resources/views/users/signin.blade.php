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
    padding: 50px 50px;

}

</style>
<div id="admin">
<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               
	            </div> 
			          <div class="main-login main-center">


								<div class="form-group">

									<h1 style="text-align: center;margin-bottom: 20px;">I have a account</h1>
									{{ Form::open(array('url'=>'users/signin')) }}
									<p>
										{!! Form::label('email','Email Address:') !!}
										{!! Form::text('email',null,['class'=>'form-control']) !!}
									</p>
									<p>
										{!! Form::label('password','Password:') !!}
										{!! Form::password('password',['class'=>'form-control']) !!}
									</p>
									</div>
											<div class="form-group">
												{!! Form::button('Sign In', array('type'=>'submit','class'=>'btn btn-primary'))!!}
											</div>
										{!! Form::close() !!}


								<section id="signup">
									<h2> I am a new user</h2>
									<p>You can create an account in just few steps<br>
									Click below</p>

									{{ Html::link('users/newaccount','CREATE NEW ACCOUNT',array('class'=>'default-btn')) }}
								</section>
                       </div>
                </div>
          </div>
        </div>  

@stop
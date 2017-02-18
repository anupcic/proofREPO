<style type="text/css">

 .navbar-form {
    overflow: auto;
}
.navbar-form .form-control {
    display: inline-block;
    width: 350px; 
    vertical-align: middle;
}
.navbar-form .form-group {
    display: inline;
}
</style>
<meta>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation" style="height: 80px;padding:15px 10px;font-size: 15px">
  <div class="container-fluid" style="margin-left: 80px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" rel="home" href="https://dudic.io/" title="Design Innovation Centre">
        <img style="max-width:140px; margin-top: -28px;"
             src="{{asset('images/dicm.png')}}">
        </a>

      <a class="navbar-brand" {{ Html::linkAction('StoreController@getIndex', 'ProofREPO') }}></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
            <div class="navbar-form navbar-left" role="search" > 
                <div class="form-group">
              {{ Form::open(array('url'=>'store/search', 'method'=>'get')) }}
               {{ Form::text('keyword',null,array('placeholder'=>'search by keyword','class'=>'form-control')) }}
               
              {{ Form::submit('Search',array('class'=>'btn btn-default')) }}
              {{ Form::close() }}
              </div>
            </div>
            <li><a href=" https://facebook.com/dudiclab" class="fa fa-facebook aria-hidden="true" " style="font-size: 18px;"></a></li>
            <li><a href=" https://twitter.com/dudiclab" class="fa fa-twitter aria-hidden="true" " style="font-size: 18px;"></a></li>
        </ul>

       <ul class="nav navbar-nav navbar-right" style="margin-right: 80px">
    

            <li>{!! Html::linkAction('AboutController@getIndex', 'About Us') !!}</li>
            <li>{!! Html::linkAction('DataprosController@getIndex', 'Enter Proofs') !!}</li>
    
                
                    @if(Auth::check())
              
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {!! Auth::user()->firstname !!}<span class="caret"></span></a>

                                  <ul class="dropdown-menu">
                                      <li>
                                            <a href="#">{{ Auth::user()->firstname }}</a>
                                      
                                            <ul>
                                                  @if(Auth::user()->admin==1)
                                                   <li>
                                                     {!! Html::link('admin/categories','Manage Category') !!}
                                                   </li>
                                                   <li>
                                                     {!! Html::link('edit','Manage Proofs') !!}
                                                   </li>
                                                  @endif
                                                  <li>
                                                    {!! Html::link('users/signout','Signout') !!}
                                                  </li>
                                            </ul>
                                      </li>
                                  </ul>
                            </li>
                      @else
                        <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span>
                                  </a>

                              <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Sign In</a>
                                    <ul>
                                        <li>{!! Html::link('users/signin','Sign In') !!}</li>
                                        <li>{!! Html::link('users/newaccount','Sign Up') !!}</li>
                                    </ul>
                                </li>
                              </ul>
                        </li>
                   @endif
              
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

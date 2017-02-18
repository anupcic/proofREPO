@extends('layouts.main')

@section('content')

<div id="admin">
      <div class ="form-group">
          <h1>Proofs Admin Panel</h1>
          <p>Here you Can view and add Proofs</p>
          <h2>Proofs</h2>
              <ul>
                  @foreach($categories as $category)
                    <li>
                      {!! $category->name !!}
                      {!! Form::open(array('url'=>'admin/categories/destroy','class'=>'form-inline')) !!}
                      {!! Form::hidden('id',$category->id) !!}
                      {!! Form::submit('delete') !!}
                      {!! Form::close() !!}
                    </li>
                  @endforeach
              </ul>
        </div>

             
        <h2>Create New Category</h2>
                  @if($errors->has())
                  <div id="form-errors">
                          <ul>
                                @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                          </ul>
                  </div>
                  @endif
                    

          {!! Form::open(array('url'=>'admin/categories/create')) !!}
                <div class="form-group">
                    <p>
                      {!! Form::label('name','Name:') !!}
                      {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </p>  
                    
                </div>
                <div class="form-group">
                          {!! Form::submit('Create Proofs', ['class'=>'btn btn-primary form-control']) !!}
                </div>
          {!! Form::close() !!}
</div>

@stop
  
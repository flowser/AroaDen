@extends('layouts.login')

@section('content')


<div class="col-xs-8 col-xs-offset-4"> 	<div class="row">

<div class="center-block">
<div class="col-xs-6 bgtra boradius border2px boxsha padlefrig">

<br>

<div class="col-xs-9">  
  <h1 class="pad10 mar10 textshadow textcent"><i class="fa fa-child"></i> Aroa<small>Den</small></h1> </div>

 <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
  {!! csrf_field() !!}

<div class="form-group">
 <label class="control-label col-xs-4 fonbla text-left mar10 pad10 col-xs-offset-1"> Usuario:</label>
      <div class="col-xs-offset-1 col-xs-10 text-left mar10">  <div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
  <input type="text" class="form-control" name="username" value="{{ old('username') }}" required >  </div> 
  </div> </div>
 
<div class="form-group">
  <label class="control-label col-xs-4 fonbla text-left mar10 pad10 col-xs-offset-1">Contrase&ntilde;a:</label>
  <div class="col-xs-offset-1 col-xs-10 text-left mar10">  <div class="input-group"> 
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input type="password" class="form-control" name="password" required > </div>
 </div> </div>

	  @if ($errors->has('username'))
	      <span class="help-block">
	          <strong>{{ $errors->first('username') }}</strong>
	      </span>
	  @endif  
 
     @if ($errors->has('password'))
         <span class="help-block">
             <strong>{{ $errors->first('password') }}</strong>
         </span>
     @endif 

<div class="form-group"> <div class="col-xs-offset-1 col-xs-8">
  <div class="checkbox fonbla"> <label>  <input type="checkbox" name="remember"> Recordarme </label> </div> </div> </div>

 <div class="form-group">   <div class="col-xs-offset-5 col-xs-5">
   <button type="submit" class="btn btn-default btnbig">Acceder <i class="fa fa-chevron-circle-right"></i> </button> 
   
</div> </div>  </form> 

<br>

</div> </div> </div> </div>
 
@endsection
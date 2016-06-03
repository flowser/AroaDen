@extends('layouts.main')

@include('includes.other')

@section('content')

@include('includes.pernav')

@include('includes.messages')
@include('includes.errors')

   
<div class="row pad10">
  <form role="form" action="{{url('/Personal/upload')}}" method="post" enctype="multipart/form-data">
  	  {!! csrf_field() !!}

       <input type="hidden" name="idper" value="{{$idper}}">
  
  	  <div class="input-group">
  	    <span class="input-group-btn pad4"> 
  	      <p>&nbsp;&nbsp;&nbsp; Archivos: &nbsp;&nbsp;&nbsp;</p> 
  	    </span> 
  	    <span class="input-group-btn"> 
  	      <input type="file" class="btn btn-default" name="files[]" multiple/>
  	    </span> 
  	    &nbsp;&nbsp;&nbsp;
  	    <span class="pad10"> 
  	      <button type="submit" class="btn btn-info">&nbsp;<i class="fa fa-upload"></i>&nbsp;</button>
  	    </span>
  	  </div>
  </form>
</div>

<div class="row visfile mar10 pad20">
  <div class="col-lg-12">
  
    @foreach ($files as $file)
  
        @continue($file == '.*')

          	<div class="col-sm-2 pad4 text-center">
          	  <i class="fa fa-file fa-2x text-center"></i> 
          	    <div class="filena text-center">

                  {{basename($file)}} 

          	    </div>
          	    <button type="button" class="btn btn-info btn-md dropdown-toggle" data-toggle="dropdown">
          	      <i class="fa fa-list"></i> &nbsp;
          	      <span class="caret"></span> 
          	    </button> 
          	    <ul class="dropdown-menu" role="menu">
                   
                    <li>
                        <a href="{{$url.'/'.basename($file)}}"> 
                            <i class="fa fa-download" aria-hidden="true"></i> Descargar
                        </a>
                    </li>

                    <br>
                    <hr>
                  	      
                    <li>
                        <form action="{{url('/Personal/filerem')}}" method="post"> 
                            {!! csrf_field() !!}

                            <input type="hidden" name="filerem" value="{{basename($file)}}" />
                            <input type="hidden" name="idper" value="{{$idper}}" />          

              	    	      <button type="submit" class="btn btn-sm btn-danger"> 
                              <i class="fa fa-trash" aria-hidden="true"></i>  Eliminar
                            </button>
                        </form> 
            	      </li>
            	    
          	    </ul>
          	 </div>  
    	
    @endforeach

  </div>
</div>
	 
@endsection
@extends('layouts.main')

@section('content')

@include('includes.patients_nav')

@include('includes.messages')
@include('includes.errors')


<div class="row"> 
 <div class="col-sm-12">
 
	<div class="col-sm-12 pad10">
	    @include('form_fields.show.name')
	</div>

	<div class="input-group"> 
	<span class="input-group-btn pad10">  <p>{!! @trans('aroaden.record') !!}</p> </span>
	<div class="btn-toolbar pad4" role="toolbar">
	 <div class="btn-group">
	    <a href="{!! url("/$main_route/$id/$form_route") !!}" role="button" class="btn btn-sm btn-success onEdit">
	       <i class="fa fa-edit"></i> {!! @trans('aroaden.edit') !!}
	    </a>
	 </div>	
</div> </div> </div> </div>

<div class="row">
  <div class="col-sm-12 fonsi15">

  	 <div class="col-sm-12">
		<i class="fa fa-minus-square"></i> {!! @trans('aroaden.medical_record') !!}
		<br>
	 	<div class="box200">{!! nl2br(e($record->medical_record)) !!}</div>
   	 </div>

   	
	<div class="col-sm-12">

		<br> <br>
		<i class="fa fa-minus-square"></i> {!! @trans('aroaden.diseases') !!}
		<br> 
		<div class="box200">{!! nl2br(e($record->diseases)) !!}</div>
   	</div>


	<div class="col-sm-12">
		<br> <br>

		<i class="fa fa-minus-square"></i> {!! @trans('aroaden.medicines') !!}
		<br> 
		<div class="box200">{!! nl2br(e($record->medicines)) !!}</div>
	</div>


	<div class="col-sm-12">

		<br> <br>
		<i class="fa fa-minus-square"></i> {!! @trans('aroaden.allergies') !!}
		<br> 
		<div class="box200">{!! nl2br(e($record->allergies)) !!}</div>
    </div>
  	

    <div class="col-sm-12">

    	<br> <br>
		<i class="fa fa-minus-square"></i> {!! @trans('aroaden.notes') !!}
		<br> 
		<div class="box200">{!! nl2br(e($record->notes)) !!}</div>
    </div> 	 

 </div>
</div> 

<script type="text/javascript">
  $(document).ready(function() {
    $('a.onEdit').on('click', function(evt) {
      evt.preventDefault();
      evt.stopPropagation();

      var _this = $(this);

      return onEdit(_this);
    });

    function onEdit(_this) {
      util.checkPermissions('patients.editRecord').done(function(response) {
        if (!response.permission)
          return util.showPopup("{{ Lang::get('aroaden.deny_access') }}", false, 2500);
      });
    }	    
  });
</script>

@endsection
<!DOCTYPE html>
<html lang="es">
<head>
  @section('head')
    <meta charset="UTF-8"/>
    <title> {{ $page_title }} </title>
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" >
    <link href="{!! asset('assets/css/Start.css') !!}" rel="stylesheet" type="text/css" >
    <link href="{!! asset('assets/font-awe/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" >
    <link href="{!! asset('assets/img/favicon.ico') !!}" rel="shortcut icon" >
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sweetalert2.min.css') !!}">
  @show
  
  @section('js')
    <script type="text/javascript" src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/sweetalert2.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/confirm.js') !!}"></script>
  @show

</head>

<body> <br>

<div class="jumbotron container bgwi pad20">
  <div class="row">  

    <div class="col-sm-1 wid180">
      <div class="affix">

        <h3 class="pad10">
          <i class="fa fa-child"></i> Aroa<small>Den</small>
        </h3>
        <nav class="navbar navbar-default" role="navigation">   
          <ul class="nav nav-pills nav-stacked bgtra"> 
            <li><a href="{!!url("/Empresa")!!}"><i class="fa fa-home"></i> Empresa</a></li>  
            <li><a href="{!!url("/Citas")!!}"><i class="fa fa-calendar"></i> Citas</a></li> 
            <li><a href="{!!url("/Pacientes")!!}"><i class="fa fa-users"></i> Pacientes </a></li>
            <li><a href="{!!url("/Personal")!!}"><i class="fa fa-user-md"></i> Personal</a></li> 
            <li><a href="{!!url("/Servicios")!!}"><i class="fa fa-tasks"> </i> Servicios</a></li> 
            <li><a href="{!!url("/Contable")!!}"><i class="fa fa-pie-chart"></i> Contable</a></li> 
          </ul>
        </nav>

      </div>  
    </div>
    
    <div class="col-sm-10">
      <div class="row">
          <div class="col-sm-10 fonsi15 pad4">

              <?php
                $Carbon = new Carbon\Carbon;
                $date = $Carbon::now()->formatLocalized('%A');
              ?>

              {!! ucfirst ($date) !!},&nbsp;
              {!! $Carbon::now()->format('d-m-Y') !!}  &nbsp;| &nbsp;

              Usuario:  <span class="label label-primary fonsi15"> {!! Auth::user()->username !!} </span>

          </div>
   	
          <div class="col-sm-2 text-right">
            <a class="btn btn-default btn-sm" role="button" href="{!! url('/Settings') !!}" title="Ajustes">
              <i class="fa fa-cogs"></i>
            </a>
        
            <a href="https://www.youtube.com/channel/UCegtqSZJWwyppeSVovo6RxQ" target="_blank" role="button" class="btn btn-sm btn-info" title="Manuales">
              <i class="fa fa-question" aria-hidden="true"></i>
            </a>

            <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span> &nbsp; <i class="fa fa-close"></i>
            </button> 
            <ul class="dropdown-menu" role="menu">
    		      <li><a href="{!!url("/logout")!!}" class="btn btn-default btn-md" role="button"> Cerrar </a></li>
            </ul>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <hr> 
            </div> 
          </div> 

      </div>

	
      @yield('content')
	

 </div> </div> </div>
  
  @yield('footer_script')
     
</body>
</html>
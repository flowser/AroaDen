<!DOCTYPE html>
<html lang="es">
<head>
  @section('head')

    <meta charset="UTF-8"/>
    <title>{{ $page_title }}</title>
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/main.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/font-awe/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/img/favicon.ico') !!}" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sweetalert2.min.css') !!}">
    
  @show
  
  @section('js')

    <script type="text/javascript" src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/js/sweetalert2.min.js') !!}"></script>

    @include('includes.util')

  @show

</head>

<body> 

<br>

<div class="jumbotron container bgwi pad10">
  <div class="row">  

    <div class="col-sm-1 widCol1 textcent fonsi14">
      <div class="affix">

        <h5 class="pad10 login_text bgtra textshadow">
          <i class="fa fa-child"></i>
          <br>
          {!! $app_name !!}
        </h3>
        <nav class="navbar navbar-default" role="navigation">   
          <ul class="nav nav-pills nav-stacked bgtra"> 
            <li>
              <a href="{!! url("/$company_route")!!}" title="{!! @trans("aroaden.company") !!}"><i class="fa fa-home fa-2x"></i></a>
            </li>  
            <li>
              <a href="{!! url("/$appointments_route")!!}" title="{!! @trans("aroaden.appointments") !!}"><i class="fa fa-calendar fa-2x"></i></a>
            </li>
            <li>
              <a href="{!! url("/$patients_route")!!}" title="{!! @trans("aroaden.patients") !!}"><i class="fa fa-users fa-2x"></i></a>
            </li>
            <li>
              <a href="{!! url("/$staff_route")!!}" title="{!! @trans("aroaden.staff") !!}"><i class="fa fa-user-md fa-2x"></i></a>
            </li>
            <li>
              <a href="{!! url("/$services_route")!!}" title="{!! @trans("aroaden.services") !!}"><i class="fa fa-tasks fa-2x"></i></a>
            </li>
            <li>
              <a href="{!! url("/$accounting_route")!!}" title="{!! @trans("aroaden.accounting") !!}"><i class="fa fa-pie-chart fa-2x"></i></a>
            </li>
          </ul>
        </nav>

      </div>  
    </div>
    
    <div class="col-sm-11 minHeight widCol2">
      <div class="row">
        <div class="col-sm-10 fonsi15 pad4">
            &nbsp; &nbsp; {!! @trans("aroaden.user") !!} &nbsp;
            <span class="label label-primary fonsi15"> {!! Auth::user()->username !!} </span>
        </div>
 	
        <div class="col-sm-2 text-right">
          <a class="btn btn-default btn-sm" role="button" href="{!! url("/$settings_route") !!}" title="Ajustes">
            <i class="fa fa-cogs"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCegtqSZJWwyppeSVovo6RxQ" target="_blank" role="button" class="btn btn-sm btn-info" title="{!! @trans("aroaden.manuals") !!}">
            <i class="fa fa-question"></i>
          </a>
          <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" title="{!! @trans("aroaden.logout") !!}">
            <span class="caret"></span> &nbsp; <i class="fa fa-close"></i>
          </button> 
          <ul class="dropdown-menu" role="menu">
             <form action="{!! url("/logout") !!}" method="post">
              {!! csrf_field() !!}
              <li>
                 <input type="submit" class="btn btn-danger btn-md" value="{!! @trans("aroaden.logout") !!}">
              </li>
            </form>
          </ul>
        </div>
      </div>

      <hr>
      
      <div id="main_content">
      
        @yield('content')

      </div>

    </div>
  </div> 
 </div>
  
  @yield('footer_script')
     
</body>
</html>
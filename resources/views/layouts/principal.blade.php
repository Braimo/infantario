<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

   <head>
      <title>@yield('title')</title>
      @include('partials._head')
      @extends('layouts.title')

   </head>
   <body class="container">
      @include('partials._nav')
      <div class="container nav row  ">
         @include('partials._sidemenu')
         <div class="col-md-8 well" style="padding-left: 0px;">
            <center>@yield('content')</center>
            <br/>
         </div>
      </div>
      @include('partials._copyrights')
      @include('partials._javascript')
   </body>
</html>
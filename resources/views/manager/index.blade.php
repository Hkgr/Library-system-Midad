<!DOCTYPE html>
<html>
  <head> 
    @include('manager.css')
  </head>
  <body>
   @include('manager.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('manager.sidebar')
      <!-- Sidebar Navigation end-->
      @include('manager.body')
      @include('manager.footer')
</html>
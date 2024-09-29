<!DOCTYPE html>
<html>

  <head>
@include('home.css')
  </head>

<body>
<div>
   <!--   Current Locale: {{ session('locale') }}
      Current Locale: {{ session('locale') }}
      {{ __('translate.welcome') }}
    Current Session Locale: {{ session('locale') }}
    Current App Locale: {{ app()->getLocale() }}-->


</div>
  <!-- ***** Preloader Start ***** -->
 @include('home.header')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
@include('home.main_banner')
  <!-- ***** Main Banner Area End ***** -->
  

  

@include('home.books')


@include('home.footer')


  </body>
</html>
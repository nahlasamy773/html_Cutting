
<!DOCTYPE html>
<html>



@include('includes.head')


<body>
  <div class="hero_area">
  @include('includes.header')

  @yield('content')




  @include('includes.footer')


  
  <!-- footer section -->

  @include('includes.footerjs')


</body>

</html>
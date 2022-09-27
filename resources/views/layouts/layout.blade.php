<!DOCTYPE html>
<html lang="en">

@include('fixed.head')


<body>


<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

@include('fixed.header')

@yield('content')

@include('fixed.footer')


@include('fixed.scripts')


</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
    @include('includes.meta')
</head>
<body>

@include('includes.navbar')

@yield('content')

@include('includes.scripts')

<script>
  $('#menuTopo').find('a.active').removeClass('active')
  $('#menuTopo').find('a[href="/"]').addClass('active')
</script>
</body>
</html>
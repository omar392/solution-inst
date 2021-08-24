<!DOCTYPE html>
<html lang="en">


@include('admin.layouts.head')


<body>

    <div id="wrapper">

@include('admin.layouts.header')
@include('admin.layouts.sidebar')

@yield('content')

    </div>


@include('admin.layouts.footer')

</body>


</html>
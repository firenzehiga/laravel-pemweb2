<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

<body>

    @include('admin.partials._header')

    @include('admin.partials._sidebar')


    <main id="main" class="main">

    @yield('content')

    </main><!-- End #main -->

    @include('admin.partials._footer')

    @include('admin.partials._script')


</html>

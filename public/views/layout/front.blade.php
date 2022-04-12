@include('includes.head')
<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        @include('includes.menu')
        @yield('content')
        <!-- Wrapper End -->
        @include('includes.footer')
</body>

</html>

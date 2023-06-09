@include('layouts.header')

<body class="ltr error-page1 bg-primary">

    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="page">
        <!-- Main-error-wrapper -->
        <div class="main-error-wrapper page page-h">
            <h1 class="text-white">404<span class="tx-20">error</span></h1>
            <h2 class="text-white">Oopps. The page you were looking for doesn't exist.</h2>
            <h6 class="tx-white-6">You may have mistyped the address or the page may have moved.</h6><a
                class="btn btn-light" href="{{ url('/home') }}">Back to Home</a>
        </div>
        <!-- /Main-error-wrapper -->
    </div>

    @include('layouts.script')

</body>

</html>

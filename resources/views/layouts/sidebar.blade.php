<!doctype html>
<html>
<head>
    <title>Product Delivery - @yield('title')</title>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header>
        @include('includes.header')
    </header>
     @yield('content')
<!--   
    <div id="main" class="row">

         sidebar content 
        <div id="sidebar" class="col-md-4">
           include('includes.sidebar')
        </div>

         main content 
        <div id="content" class="col-md-8">
            yield('content')
        </div>

    </div>-->

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>

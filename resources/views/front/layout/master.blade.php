<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('front.layout.top')
    </head>

    <body>
    <!-- ======= Header ======= -->
        @include ('front.layout.header')

        <!-- End Header -->

        <!-- ======= Main Content ======= -->

        @yield ('content')

        <!-- End Content -->

        <!-- ======= Footer ======= -->
        @include ('front.layout.footer')
        <!-- End Footer -->
        
        <!-- Vendor JS Files -->
        @include ('front.layout.bottom')
    </body>
</html>

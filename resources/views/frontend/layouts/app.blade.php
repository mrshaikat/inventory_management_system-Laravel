<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />
        <!-- title -->
        <title>Jaunt - Travel & Tour Booking HTML Template</title>
        @include('frontend.layouts.partials.styles')
        @include('frontend.layouts.partials.favicons')
    </head>
    <body>
      
        
		<!-- start header area -->
        <header class="header-area">
            <!-- start top header area -->
            @include('frontend.layouts.top-header')
            <!-- end top header area -->

            <!-- start navbar area -->
           @include('frontend.layouts.nav-menu')
            <!-- end navbar area -->
        </header>
        <!-- end header area -->


        @section('main-content')
            
        @show



        <!-- start footer area -->
        @include('frontend.layouts.footer')
        <!-- end footer area -->


       @include('frontend.layouts.partials.scripts')
	</body>


</html>
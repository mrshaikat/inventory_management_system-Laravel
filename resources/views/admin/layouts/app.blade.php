<!DOCTYPE html>
<html lang="en">
    

<head>
       
    @include('admin.layouts.head')
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('admin.layouts.header')

			
			


        @include('admin.layouts.side-menu')
			
		@section('main-content')
            
        @show
		
        </div>
		<!-- /Main Wrapper -->
		
		@include('admin.layouts.partials.scripts')
		
    </body>


</html>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
@csrf
</form>
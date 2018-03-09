@include('librarian.layout.header')
@include('librarian.layout.navbar_dashboard')
<div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">		
                       
				@yield('content')
				
				
			</div>		
			</div>
		</div>
    </div>
@include('librarian.layout.footer')
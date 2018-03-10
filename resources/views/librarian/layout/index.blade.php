@include('librarian.layout.header')
@include('librarian.layout.navbar_dashboard')
<div class="container">
		<div class="margin-top">
			<div class="row">				
                       
				@yield('content')
						
			</div>
		</div>
    </div>
@include('librarian.layout.footer')

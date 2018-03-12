@include('librarian.layout.header')
@include('librarian.layout.navbar')
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="LMS/E.B.Magalona.png" class="img-rounded">
					</div>
				<div class="login">
					<div class="log_txt">
						<p><strong>Please Enter the Details Below..</strong></p>
					</div>

					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))

							{{session('thongbao')}}

					@endif

					<form class="form-horizontal" action="librarian/login" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
						<div class="control-group">
							<label class="control-label" for="inputEmail">Username</label>
							<div class="controls">
							<input type="text" name="username" id="username" placeholder="Username" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
							<input type="password" name="password" id="password" placeholder="Password" required>
						</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Đăng nhập</button>
						</div>
						</div>
					</form>				
				</div>
			</div>		
			</div>
		</div>
    </div>
@include('librarian.layout.footer')
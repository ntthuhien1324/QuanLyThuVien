@extends('librarian.layout.index')
@section('content')

<div class="span12">	
	<div class="alert alert-info">Add Member</div>
	
	<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	
	<div class="addstudent">
		<div class="details">Please Enter Details Below</div>		
		
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{$err}}<br>
				@endforeach
			</div>
		@endif

		@if(session('thongbao'))
			<div class="alert alert-sucess">
				{{session('thongbao')}}
			</div>
		@endif
		<form class="form-horizontal" method="POST" action="librarian/member/addmember" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{
				csrf_token()}}" />
			<div class="control-group">
				<label class="control-label">Tên:</label>
				<div class="controls">
					<input type="text" name="ten"  placeholder="Tên" required>
			</div>
			</div>

			<div class="control-group">
				<label class="control-label">Họ:</label>
				<div class="controls">
					<input type="text" name="ho"  placeholder="Họ" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Giới tính:</label>
				<div class="controls">
					<select name="gioitinh" required>
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Địa chỉ:</label>
				<div class="controls">
					<input type="text" name="diachi"  placeholder="Địa chỉ" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Số điện thoại:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{11,11}" class="search" name="sdt"  placeholder="Số điện thoại"  autocomplete="off"  maxlength="11" >
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Người dùng:</label>
				<div class="controls">
					<select name="nguoidung" required>												
						<option></option>
						<option>Sinh Viên</option>
						<option>Giảng Viên</option>
						<option></option>										
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Trạng Thái:</label>
				<div class="controls">
					<select name="trangthai" required>
						<option></option>
						<option>Active</option>
						<option>UnActive</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    	</form>
    </div>
</div>			

@endsection
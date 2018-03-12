@extends('librarian.layout.index')
@section('content')

<div class="span12">			
    <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Member
		<small>{{$member->ten}}</small></div>
	
	<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	
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

		<form class="form-horizontal" method="POST" action="librarian/member/editmember/{{$member->id}}" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{
				csrf_token()}}" />
			<div class="control-group">
				<label class="control-label">Tên:</label>
				<div class="controls">
					<input type="text" name="ten" value={{$member->ten}}  placeholder="Tên" required>
			</div>
			</div>

			<div class="control-group">
				<label class="control-label">Họ:</label>
				<div class="controls">
					<input type="text" name="ho" value={{$member->ho}}  placeholder="Họ" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Giới tính:</label>
				<div class="controls">
					<select name="gioitinh" required>
						<option 
						@if($member->gioitinh=="Nam") {{"selected"}}
						@endif
						>Nam</option>
						<option
						@if($member->gioitinh=="Nữ") {{"selected"}}
						@endif
						>Nữ</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Địa chỉ:</label>
				<div class="controls">
					<input type="text" name="diachi" value={{$member->diachi}}  placeholder="Địa chỉ" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Số điện thoại:</label>
				<div class="controls">
					<input type='tel' value={{$member->sdt}} pattern="[0-9]{11,11}" class="search" name="sdt"  placeholder="Số điện thoại"  autocomplete="off"  maxlength="11" >
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Người dùng:</label>
				<div class="controls">
					<select name="nguoidung" required>												
						<option
						@if($member->nguoidung=="Sinh Viên") {{"selected"}}
						@endif
						>Sinh Viên</option>
						<option
						@if($member->nguoidung=="Giảng Viên") {{"selected"}}
						@endif
						>Giảng Viên</option>
						<option></option>										
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Trạng Thái:</label>
				<div class="controls">
					<select name="trangthai" required>
						<option
						@if($member->trangthai=="Hoạt Động") {{"selected"}}
						@endif
						>Hoạt Động</option>
						<option
						@if($member->trangthai=="Bị Chặn") {{"selected"}}
						@endif
						>Bị Chặn</option>
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
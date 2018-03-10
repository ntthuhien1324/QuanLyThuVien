@extends('librarian.layout.index')
@section('content')

<div class="span12">	
	<div class="alert alert-info">Sửa sách</div>
	
	<p><a href="librarian/book/list" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	
	<div class="addstudent">
		<div class="details">Vui lòng nhập chi tiết sau</div>		
		
		@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{$err}}<br>
				@endforeach
			</div>
		@endif

		@if(session('thongbao'))
			<div class="alert alert-success">
				{{session('thongbao')}}
			</div>
		@endif

		<form class="form-horizontal" method="POST" action="librarian/book/editbook/{{$sach->id}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-group">
				<label class="control-label" >Tên sách:</label>
				<div class="controls">
					<input type="text" class="span4"  name="tensach"  placeholder="Tên sách"  value="{{$sach->tensach}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Thể loại:</label>
				<div class="controls">
					<select name="theloai">
						<option></option>
						@foreach($theloai as $tl)			
							<option 
							@if($sach->maloai==$tl->id)
								{{"selected"}}
							@endif
							value="{{$tl->id}}">{{$tl->tenloai}}</option>
						@endforeach			
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Tác giả:</label>
				<div class="controls">
					<input type="text"  class="span4" name="tacgia"  placeholder="Tác giả" value="{{$sach->tacgia}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Nhà xuất bản:</label>
				<div class="controls">
					<input type="text"  class="span4" name="nhaxuatban" placeholder="Nhà xuất bản" value="{{$sach->nhaxuatban}}" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Năm tái bản:</label>
				<div class="controls">
					<input type="text"  class="span4" name="namtaiban" placeholder="Năm tái bản" value="{{$sach->namtaiban}}" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Tình trạng:</label>
				<div class="controls">
					<select name="tinhtrang" required>
						<option 
						@if($sach->tinhtrang=="Mới")
							{{"selected"}}
						@endif
							>Mới</option>

						<option
						@if($sach->tinhtrang=="Cũ")
							{{"selected"}}
						@endif
							>Cũ</option>

						<option
						@if($sach->tinhtrang=="Mất")
							{{"selected"}}
						@endif
							>Mất</option>

						<option
						@if($sach->tinhtrang=="Hư")
							{{"selected"}}
						@endif
							>Hư</option>
							
					</select>
				</div>
			</div>
				
			<div class="control-group">
				<div class="controls">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Cập nhật</button>
				</div>
			</div>
    	</form>	
    </div>
</div>				

@endsection
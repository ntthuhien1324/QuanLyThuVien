@extends('librarian.layout.index')
@section('content')

<div class="span12">	
	<div class="alert alert-info">Thêm sách</div>
	
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

		<form class="form-horizontal" method="POST" action="librarian/book/addbook" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-group">
				<label class="control-label">Tên sách:</label>
				<div class="controls">
					<input type="text" class="span4" name="tensach" placeholder="Tên sách" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Thể loại:</label>
				<div class="controls">
					<select name="theloai">
						<option></option>
						@foreach($theloai as $tl)			
						<option value="{{$tl->id}}">{{$tl->tenloai}}</option>
						@endforeach			
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Tác giả:</label>
				<div class="controls">
					<input type="text" class="span4" name="tacgia" placeholder="Tác giả" required>
				</div>
			</div>
		
			<div class="control-group">
				<label class="control-label" >Nhà xuất bản:</label>
				<div class="controls">
					<input type="text"  class="span4" name="nhaxuatban" placeholder="Nhà xuất bản" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" >Năm tái bản:</label>
				<div class="controls">
					<input type="text"  class="span4" name="namtaiban" placeholder="Năm tái bản" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Tình trạng:</label>
				<div class="controls">
					<select name="tinhtrang" required>
						<option></option>
						<option>Mới</option>
						<option>Cũ</option>
						<option>Mất</option>
						<option>Hư</option>
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
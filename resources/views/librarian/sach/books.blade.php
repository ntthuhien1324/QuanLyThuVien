@extends('librarian.layout.index')
@section('content')

<div class="span12">	
   	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
    </div>
			
    <ul class="nav nav-pills">
		<li><a href="librarian/book/list">All</a></li>
		<li><a href="librarian/book/newbooks">Sách mới</a></li>
		<li><a href="librarian/book/oldbooks">Sách cũ</a></li>
		<li><a href="librarian/book/lostbooks">Sách bị mất</a></li>
		<li><a href="librarian/book/damagebooks">Sách bị hư</a></li>
	</ul>
			
	<center class="title">

		@yield('title')
		
	</center>
                
    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
		<div class="pull-right">
			<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
		</div>
		
		<p><a href="librarian/book/addbook" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Thêm sách</a></p>
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
        <thead>
            <tr>
			    <th>ID Sách</th>                                 
                <th>Tiêu đề</th>                                 
                <th>Thể loại</th>
				<th>Tác giả</th>
				<th>Nhà xuất bản</th>
				<th>Năm tái bản</th>
				<th>Ngày thêm</th>
				<th>Tình trạng</th>
				<th class="action">Sửa/Xóa</th>		
            </tr>
        </thead>
        
        <tbody>
        	@yield('tbody')          
						   
        </tbody>
    </table>
</div>

@endsection
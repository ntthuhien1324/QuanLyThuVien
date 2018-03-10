@extends('librarian.layout.index')
@section('content')

<div class="span12">	
   	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
    </div>
			
    <ul class="nav nav-pills">
		<li><a href="books.php">All</a></li>
		<li><a href="new_books.php">Sách mới</a></li>
		<li><a href="old_books.php">Sách cũ</a></li>
		<li><a href="lost.php">Sách bị mất</a></li>
		<li><a href="damage.php">Sách bị hư</a></li>
	</ul>
			
	<center class="title">

		@yield('title')
		
	</center>
                
    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
		<div class="pull-right">
			<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
		</div>
		
		<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Books</a></p>
	
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
@extends('librarian.sach.books')
@section('title')

<h1>Lost Books</h1>

@endsection

@section('tbody')

<tr class="11">
    <td>11</td>
    <td>Đắc Nhân Tâm</td>
	<td>Khoa Học</td>
    <td>Dale Carnegie</td> 
	<td>Nhà báo Tuổi Trẻ</td>
	<td>2016</td>		
	<td>1948-03-01 00:00:00</td>
	<td>Cũ</td>
	
	@include('librarian.tooltip_edit_delete')

    <td class="action">
        <a rel="tooltip"  title="Delete" id="11" href="#delete_book11" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
        @include('librarian.sach.modal_delete_book')
		<a rel="tooltip"  title="Edit" id="e11" href="edit_book.php" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		
    </td>

</tr>

@endsection
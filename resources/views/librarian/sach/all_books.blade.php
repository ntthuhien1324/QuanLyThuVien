@extends('librarian.sach.books')
@section('title')

<h1>Books List</h1>

@endsection

@section('tbody')

<tr class="8">
    <td>8</td>
    <td>Đánh nhau với cối xay gió</td>
	<td>Văn học</td>
    <td>Trịnh Thị Thu</td> 
	<td>Nhà báo Tuổi Trẻ</td>
	<td>2002</td>		
	<td>2018-03-01 00:00:00</td>
	<td>Mới</td>
	
	@include('librarian.tooltip_edit_delete')

    <td class="action">
        <a rel="tooltip"  title="Delete" id="8" href="#delete_book8" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
        @include('librarian.sach.modal_delete_book')
		<a rel="tooltip"  title="Edit" id="e8" href="edit_book.php" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		
    </td>

</tr>

@endsection
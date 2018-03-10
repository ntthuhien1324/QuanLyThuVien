@extends('librarian.sach.books')
@section('title')

<h1>Old Books</h1>

@endsection

@section('tbody')

<tr class="12">
    <td>12</td>
    <td>Quẳng gánh lo đi vui sống</td>
	<td>Khoa Học</td>
    <td>Dale Carnegie</td> 
	<td>Nhà báo Tuổi Trẻ</td>
	<td>2016</td>		
	<td>1948-03-01 00:00:00</td>
	<td>Cũ</td>
	
	@include('librarian.tooltip_edit_delete')

    <td class="action">
        <a rel="tooltip"  title="Delete" id="12" href="#delete_book12" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
        @include('librarian.sach.modal_delete_book')
		<a rel="tooltip"  title="Edit" id="e12" href="edit_book.php" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		
    </td>

</tr>

@endsection
@extends('librarian.sach.books')
@section('title')

<h1>Sách mới</h1>

@endsection

@section('tbody')

@foreach($sach as $sach)

<tr class="{{$sach->id}}">
    <td>{{$sach->id}}</td>
    <td>{{$sach->tensach}}</td>
	<td>{{$sach->theloai->tenloai}}</td>
    <td>{{$sach->tacgia}}</td> 
	<td>{{$sach->nhaxuatban}}</td>
	<td>{{$sach->namtaiban}}</td>		
	<td>{{$sach->ngaythem}}</td>
	<td>{{$sach->tinhtrang}}</td>
	
	@include('librarian.tooltip_edit_delete')

    <td class="action">
        <a rel="tooltip"  title="Delete" id="{{$sach->id}}" href="#delete_book{{$sach->id}}" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
        @include('librarian.sach.modal_delete_book')
		<a rel="tooltip"  title="Edit" id="e{{$sach->id}}" href="librarian/book/editbook/{{$sach->id}}" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
		
    </td>

</tr>

@endforeach
@endsection
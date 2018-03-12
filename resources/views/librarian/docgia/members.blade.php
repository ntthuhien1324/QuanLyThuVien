@extends('librarian.layout.index')
@section('content')

<div class="span12">	
   	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
    </div>
    
    @if(session('thongbao'))
			<div class="alert alert-sucess">
				{{session('thongbao')}}
			</div>
	@endif
	<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
        <p><a href="librarian/member/addmember" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Member</a></p>
		
		<thead>
            <tr>
                <th>Tên</th>                                 
                <th>Họ</th>
				<th>Giới Tính</th>
				<th>Địa chỉ</th>
				<th>Số điên thoại</th>
				<th>Người dùng</th>
				<th>Trạng Thái</th>
                <th></th>
            </tr>
        </thead>

        <tbody>	
            @foreach($member as $mb)				                       
			<tr class="del">											                              
                <td>{{$mb->ten}}</td> 
                <td>{{$mb->ho}}</td>
                <td>{{$mb->gioitinh}}</td>
				<td>{{$mb->diachi}}</td>  
				<td>{{$mb->sdt}}</td> 
                <td>{{$mb->nguoidung}}</td> 
                <td>{{$mb->trangthai}}</td> 

				@include('librarian.tooltip_edit_delete')

                <td width="100">
                    <a rel="tooltip"  title="Delete" id="{{$mb->id}}" href="#delete_member{{$mb->id}}" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                    
                    @include('librarian.docgia.modal_delete_member')
					
					<a rel="tooltip" title="Edit" id="e{{$mb->id}}" href="librarian/member/editmember/{{$mb->id}}" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>					
                </td>				
            </tr>
            @endforeach					               
        </tbody>
    </table>
</div>
z
@endsection
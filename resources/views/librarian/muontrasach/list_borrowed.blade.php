@extends('librarian.layout.index')
@section('content')

<div class="span12">		
	
	<div class="alert alert-info"><strong>Danh sách Đang mượn sách</strong></div>
    
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <thead>

            <tr>
                <th>Tiêu đề</th>                                 
                <th>Đọc giả</th>                   
                <th>Ngày mượn</th>                                 
                <th>Ngày đáo hạn</th>                                
                <th>Ngày trả</th>
				<th>Trạng thái mượn</th>
            </tr>
        </thead>
        
        <tbody>
        	@foreach($chitietphieumuon as $ctpm)
			<tr class="del{{$ctpm->id}}">                   
                <td>{{$ctpm->sach->tensach}}</td>
                <td>{{$ctpm->phieumuon->docgia->ten}} {{$ctpm->phieumuon->docgia->ho}}</td>
				<td>{{$ctpm->phieumuon->ngaymuon}}</td> 
                <td>{{$ctpm->phieumuon->ngaydaohan}}</td>
				<td>{{$ctpm->ngaytra}}</td>
				<td>{{$ctpm->tinhtrang}}</td>
				<td> <a rel="tooltip"  title="Return" id="{{$ctpm->id}}" href="#delete_book{{$ctpm->id}}" data-toggle="modal" class="btn btn-success"><i class="icon-check icon-large"></i>Return</a></td>
				@include('librarian.muontrasach.modal_return')
                <td></td> 				 
            </tr>
            @endforeach					
        </tbody>
    </table>
</div>

<script>		
	$(".uniform_on").change(function(){
	    var max= 3;
	    if( $(".uniform_on:checked").length == max ){
		
	        $(".uniform_on").attr('disabled', 'disabled');
			         alert('3 Books are allowed per borrow');
	        $(".uniform_on:checked").removeAttr('disabled');
			
	    }else{

	         $(".uniform_on").removeAttr('disabled');
	    }
	})
</script>

@endsection
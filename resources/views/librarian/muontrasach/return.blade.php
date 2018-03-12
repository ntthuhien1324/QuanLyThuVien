@extends('librarian.layout.index')
@section('content')

<div class="span12">		
	<div class="alert alert-info"><strong>Danh sách Mượn sách</strong></div>
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
			<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
		</div>
        
        <thead>
            <tr>
                <th>Tiêu đề</th>                                 
                <th>Đọc giả</th>
                <th>Ngày mượn</th>                                 
                <th>Ngày đáo hạn</th>                                
                <th>Ngày trả</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($chitietphieumuon as $ctpm)								         
			<tr class="{{$ctpm->id}}">							                              
                <td>{{$ctpm->sach->tensach}}</td>
                <td>{{$ctpm->phieumuon->docgia->ten}} {{$ctpm->phieumuon->docgia->ho}}</td>
				<td>{{$ctpm->phieumuon->ngaymuon}}</td> 
                <td>{{$ctpm->phieumuon->ngaydaohan}}</td>
				<td>{{$ctpm->ngaytra}}</td>
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
@extends('librarian.layout.index')
@section('content')

<div class="span12">		
	
	<div class="alert alert-info"><strong>Borrowed Books</strong></div>
    
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
			<tr class="del1">											                   
                <td>Khoa học Xã Hội</td>
                <td>Thư Võ</td>
				<td>02/02/2018</td> 
                <td>25/02/2018</td>
				<td></td>
				<td>đang mượn</td>
				<td> <a rel="tooltip"  title="Return" id="1" href="#delete_book1" data-toggle="modal"    class="btn btn-success"><i class="icon-check icon-large"></i>Return</a></td>
				@include('librarian.muontrasach.modal_return')
                <td></td> 				 
            </tr>				
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
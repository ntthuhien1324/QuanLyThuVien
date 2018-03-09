@extends('librarian.layout.index')
@section('content')

<div class="span12">		
	<div class="alert alert-info"><strong>Borrowed Books</strong></div>
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
			<tr class="del17">							                              
                <td>Cuộc chiến của những vì sao</td>
                <td>Nguyễn Nguyễn</td>
				<td>02/02/2018</td> 
                <td>25/02/2018</td>
				<td>08/02/2018</td>
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
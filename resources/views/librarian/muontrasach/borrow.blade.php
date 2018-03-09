@extends('librarian.layout.index')
@section('content')

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><i class="icon-user icon-large"></i>&nbsp;Borrow Table</strong>
</div>

<div class="span12">		
	<form method="post" action="borrow_save.php">
		<div class="span3">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Borrower Name</label>			
				<div class="controls">
					<select name="member_id" class="chzn-select"required/>
						<option></option>
				</div>
			</div>

			<div class="control-group"> 
				<label class="control-label" for="inputEmail">Due Date</label>
				<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
				</div>
			</div>

			<div class="control-group"> 
				<div class="controls">
					<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Borrow</button>
				</div>
			</div>
		</div>

		<div class="span8">
			<div class="alert alert-success"><strong>Select Book</strong></div>
            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
				<thead>
                    <tr>                       
                        <th>Mã sách</th>                                 
                        <th>Tiêu đề</th>                                 
                        <th>Thể loại</th>
						<th>Tác giả</th>
						<th>Nhà xuất bản</th>
						<th>Trạng thái</th>
						<th>Thêm</th>
										
                    </tr>
                </thead>
                
                <tbody>
					<tr class="del8">
						<td>8</td>
                        <td>Đánh nhau với cối xay gió</td>
						<td>Văn học</td> 
                        <td>Trịnh Thị Thu</td> 
						<td>Nhà báo Tuổi Trẻ</td>
						<td width="">Mới</td> 
						
						@include('librarian.tooltip_edit_delete')

                        <td width="20">
							<input id="" class="uniform_on" name="selector[]" type="checkbox" value="8" >			
                        </td>
						
                    </tr>
									
                </tbody>
            </table>
		</div>					
	</form>				
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
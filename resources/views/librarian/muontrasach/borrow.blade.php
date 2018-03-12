@extends('librarian.layout.index')
@section('content')

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><i class="icon-user icon-large"></i>&nbsp;Bảng mượn sách</strong>
</div>

<div class="span12">
	@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
		</div>
	@endif

	@if(session('thongbao'))
		<div class="alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif		
	<form method="post" action="librarian/transaction/borrow">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="span3">
			<div class="control-group">
				<label class="control-label" >Tên độc giả</label>			
				<div class="controls">
					<select name="id" class="chzn-select" id="member_id" required/>
						<option></option>
						@foreach($docgia as $dg)
							<option value="{{$dg->id}}">{{$dg->ten}} {{$dg->ho}}</option>
						@endforeach
				</div>
			</div>

			<div class="control-group"> 
				<label class="control-label" >Ngày đáo hạn</label>
				<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="ngaydaohan" id="due_date" maxlength="10" style="border: 3px double #CCCCCC;" required />
				</div>
			</div>

			<div class="control-group"> 
				<div class="controls">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Mượn</button>
				</div>
			</div>
		</div>

		<div class="span8">
			<div class="alert alert-success"><strong>Chọn sách</strong></div>
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
                	@foreach($sach as $sach)
					<tr class="del{{$sach->id}}}">
						<td>{{$sach->id}}</td>
                        <td>{{$sach->tensach}}</td>
						<td>{{$sach->theloai->tenloai}}</td> 
                        <td>{{$sach->tacgia}}</td> 
						<td>{{$sach->nhaxuatban}}</td>
						<td>{{$sach->tinhtrang}}</td> 
						
						@include('librarian.tooltip_edit_delete')

                        <td width="20">
							<input id="" class="uniform_on" name="selector[]" type="checkbox" value="{{$sach->id}}" >			
                        </td>
						
                    </tr>
					@endforeach				
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
		         alert('Chỉ được mượn 3 sách');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>

@endsection
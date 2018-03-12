@extends('librarian.layout.index')
@section('content')
<div class="span2">
	<ul class="nav nav-tabs nav-stacked">
		<li>
			<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
		</li>
	</ul>
</div>											
											 
<!-- Modal add user -->
@include('librarian.user.modal_add_user')
										
<div class="span10">
	<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
        </div>
		@if(session('thongbao'))
			<div class="alert alert-sucess">
				{{session('thongbao')}}
			</div>
		@endif
        <thead>
            <tr>
				<th>ID</th>
                <th>Username</th>
                <th>Password</th>                                 
                <th>Tên</th>                                 
                <th>Họ</th>                                 
            </tr>
        </thead>
        
        <tbody>
		@foreach($user as $us)
			<tr class="del{{$us->id}}">
            <td>{{$us->id}}</td> 
            <td>{{$us->username}}</td> 
            <td>{{$us->password}}</td> 
            <td>{{$us->ten}}</td> 
			<td>{{$us->ho}}</td> 
            <td width="100">
                <a rel="tooltip"  title="Delete" id="{{$us->id}}" href="#delete_user{{$us->id}}" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                @include('librarian.user.modal_delete_user')
				<a rel="tooltip"  title="Edit" id="e{{$us->id}}" href="#edit{{$us->id}}" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
            	@include('librarian.user.modal_edit_user')
			</td>
			@endforeach

			@include('librarian.tooltip_edit_delete')
			     
		
            </tr>
			
   
        </tbody>
    </table>
							
	<script type="text/javascript">
	/*         $(document).ready( function() {
	            $('.btn-danger').click( function() {
	                var id = $(this).attr("id");
	                if(confirm("Are you sure you want to delete this Data?")){
	                    $.ajax({
	                        type: "POST",
	                        url: "delete_user.php",
	                        data: ({id: id}),
	                        cache: false,
	                        success: function(html){
	                        $(".del"+id).fadeOut('slow'); 
	                        } 
	                    }); 
	                }else{
	                    return false;}
	            });				
	        }); */
	</script>
</div>
@endsection
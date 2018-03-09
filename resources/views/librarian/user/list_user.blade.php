@extends('librarian.layout.index')
@section('content')

<ul class="nav nav-tabs nav-stacked">
	<li>
		<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
	</li>
</ul>
										
										 
<!-- Modal add user -->
@include('librarian.user.modal_add_user')
										
<div class="span10">
	<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
        </div>
        
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>                                 
                <th>Firstname</th>                                 
                <th>Lastname</th>                                 
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
		 
          
			 <tr class="del1">
            <td>admin</td> 
            <td>admin</td> 
            <td>Hien</td> 
            <td>Nguyen</td> 
            <td width="100">
                <a rel="tooltip"  title="Delete" id="1"  href="#delete_user1" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                @include('librarian.user.modal_delete_user')
				<a rel="tooltip"  title="Edit" id="e1" href="#edit1" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
            	@include('librarian.user.modal_edit_user')
			</td>

			<!-- tooltip_edit_delete -->
			<!-- script -->
			<script type="text/javascript">
			    $(document).ready(function(){
			        $('#e1').tooltip('show')
			        $('#e1').tooltip('hide')
			    });
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
			    $(document).ready(function(){
			        
			        $('#1').tooltip('show')
			        $('#1').tooltip('hide')
			    });
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
			    $(document).ready(function(){
			        
			        $('#v1').tooltip('show')
			        $('#v1').tooltip('hide')
			    });
			</script>
			<!-- end script -->
			     
		
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

@endsection
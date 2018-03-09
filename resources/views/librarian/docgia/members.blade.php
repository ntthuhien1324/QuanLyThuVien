@extends('librarian.layout.index')
@section('content')

<div class="span12">	
   	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
    </div>

	<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
        <p><a href="add_member.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Member</a></p>
		
		<thead>
            <tr>
                <th>Name</th>                                 
                <th>Gender</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Type</th>
				<th>Status</th>
				<th>Action</th>
            </tr>
        </thead>

        <tbody>					                       
			<tr class="del1">											                              
                <td>Thư Võ</td>
                <td>nữ</td> 
                <td>123 abc</td>
                <td>01234561111</td>
				<td>Sinh Viên</td>  
				<td>Hoạt Động</td> 
				@include('librarian.tooltip_edit_delete')
                <td width="100">
                    <a rel="tooltip" title="Delete" id="1" href="#delete_student1" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                    
                    @include('librarian.docgia.modal_delete_member')
					
					<a rel="tooltip" title="Edit" id="e1" href="edit_member.php?id=1" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>					
                </td>				
            </tr>					               
        </tbody>
    </table>
</div>

@endsection
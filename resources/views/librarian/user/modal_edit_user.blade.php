<div id="edit{{$us->id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info"><strong>Edit User</strong></div>
		
		<form class="form-horizontal" action="librarian/user/edituser/{{$us->id}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
					<input type="hidden" name="id" value="{{$us->id}}" required>
					<input type="text"  name="username" value="{{$us->username}}" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" >Password</label>
				<div class="controls">
					<input type="text" name="password" id="inputPassword" value="" required>
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" for="inputEmail">Tên</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="firstname" value="{{$us->ten}}" required>
				</div>
			</div>
				
			<div class="control-group">
				<label class="control-label" for="inputEmail">Họ</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="lastname" value="{{$us->ho}}" required>
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
		</form>
	</div>
	
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
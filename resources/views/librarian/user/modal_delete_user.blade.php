<div id="delete_user{{$us->id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-danger">Bạn có chắc là muốn xóa dữ liệu này không?</div>

	</div>
	<div class="modal-footer">
		<a class="btn btn-danger" href="librarian/user/delmember/{{$us->id}}"><i class="icon-check"></i>&nbsp;Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
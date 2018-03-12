<div id="delete_member{{$mb->id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-danger">Bạn có chắc là muốn xóa dữ liệu này không?</div>

	</div>
	<div class="modal-footer">
		<a class="btn btn-danger" href="librarian/member/delmember/{{$mb->id}}">Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
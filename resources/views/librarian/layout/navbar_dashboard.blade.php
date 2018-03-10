<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
				<ul class="nav">
					<li class="active"><a href="dashboard"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li><a href="librarian/user/list"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
					
					<li><a href="borrow.php"  data-toggle="dropdown" ><i class="icon-file icon-large"></i> Mượn - Trả</a>
						<ul class="dropdown-menu">
							<li><a href="borrow.php"><i class="icon-pencil icon-large"></i>&nbsp;Mượn</a></li>
							<li><a href="return.php"><i class="icon-cog icon-large"></i>&nbsp;Danh sách trả</a></li>
							<li><a href="view_borrow.php"><i class="icon-reorder icon-large"></i>&nbsp;Danh sách mượn</a></li>
						</ul>
					</li>
					
					<li><a href="librarian/book/list"><i class="icon-book icon-large"></i>&nbsp;Sách</a></li>
					<li><a href="librarian/member/list"><i class="icon-group icon-large"></i>&nbsp;Đọc giả</a></li>
					<li><a href="archive.php"><i class="icon-list-alt icon-large"></i>&nbsp;Archive</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Tìm kiếm</a></li>
				

					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
				</ul>
			
				<div class="pull-right">
					<div class="admin">Xin chào: Thủ thư</div>
	            </div>
            </div>
        </div>
    </div>
</div>
		
@include('librarian.layout.search_form')
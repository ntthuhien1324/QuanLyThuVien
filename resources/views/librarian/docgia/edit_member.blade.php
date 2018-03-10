@extends('librarian.layout.index')
@section('content')

<div class="span12">			
    <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Member</div>
	
	<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	
	<div class="addstudent">
		<div class="details">Please Enter Details Below</div>	
		
		<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Firstname:</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="firstname" value="a" placeholder="Firstname" required>
					<input type="hidden" id="inputEmail" name="id" value="a" placeholder="Firstname" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Lastname:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="lastname" value="a" placeholder="Lastname" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Gender:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="gender" value="a" placeholder="Gender" required>
				</div>
			</div>	
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Adddress:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="address" value="a" placeholder="Address" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contact:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Type:</label>
				<div class="controls">
					<select name="type" required>
						<option>Student</option>
						<option>Teacher</option>								
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Status:</label>
				<div class="controls">
					<select name="status" required>
						<option>Active</option>
						<option>Banned</option>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>

    	</form>
	</div>
</div>				

@endsection
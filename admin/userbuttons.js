function edit_user(){
	document.user.action = "editusers.php";
	document.user.submit();
}

function delete_user(){
	document.user.action = "deleteusers.php";
	document.user.submit();
}

function view_user(){
	document.user.action = "viewusers.php";
	document.user.submit();
}
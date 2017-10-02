
function edit_todo(){
	document.db_todo.action = "edit.php";
	document.db_todo.submit();
}

function delete_todo(){
	document.db_todo.action = "../deletetodo.php";
	document.db_todo.submit();
}

function view_todo(){
	document.db_todo.action = "./view/view.php";
	document.db_todo.submit();
}
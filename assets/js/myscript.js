function selectDataTable(){
	var table = document.getElementsByTagName("tr");
	var table_row = table[1].getElementsByTagName("td");
	var table_cell = table_row.getElementById("post_id");
	var cell_content = table_cell.innerHTML;
	alert(cell_content);
}
function selectByTagName(){
	var row = document.getElementsByClassName("row");
	var cell = row[0].innerHTML;
	alert(cell);
}
 if (cell === deletion) {
  alert("Match");
}else{
  alert("No Match");
}
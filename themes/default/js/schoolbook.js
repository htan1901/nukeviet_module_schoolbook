
element = document.getElementById("row_1");
if (element !== null)
	element.addEventListener("click", hello());

function hello() {
	window.alert("hello");
}

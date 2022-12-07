
var editButtons = document.getElementsByClassName('button_edit');
var cancelButtons = document.getElementsByClassName('button-cancel');
var textAreaBaiHoc = document.getElementsByClassName('textarea_baihoc');
var textAreaNhanXet = document.getElementsByClassName('textarea_nhanxet');
var numberDiem = document.getElementsByClassName('number_point');

function edit(index) {
	textAreaBaiHoc[index].readOnly = false;
	textAreaNhanXet[index].readOnly = false;
	numberDiem[index].readOnly = false;

	textAreaBaiHoc[index].focus();
}

function cancel() {
	window.alert("cancel");
}
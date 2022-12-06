
var editButtons = document.getElementsByClassName('edit-btn');
if (editButtons != null) {
	for (let i = 0; i < editButtons.length; i++) {
		const editButton = editButtons[i];
		editButton.addEventListener("click", edit(editButton.id));
	}
}

var cancelButtons = document.getElementsByClassName('cancel-btn');
if (cancelButtons != null) {
	for (let i = 0; i < cancelButtons.length; i++) {
		const cancelButton = cancelButtons[i];
		cancelButton.addEventListener("click", cancel);
	}
}

function edit(button_id) {
	const lastIndex = button_id.lastIndexOf('_');
	const rowNumber = button_id.substr(lastIndex);
	const textArea = document.getElementById('subject_unit_'.concat(rowNumber));
	window.alert(textArea.innerText);
}

function cancel() {
	window.alert("cancel");
}
$(document).ready(function () {
	$(".dropdown-trigger").dropdown({
		coverTrigger: false,
		hover: true,
		constrainWidth: false
	});
	$('.sidenav').sidenav();
	$('.modal').modal();

})

function addElement(parentId, elementTag, elementId, html) {
	// Adds an element to the document
	var p = document.getElementById(parentId);
	var newElement = document.createElement(elementTag);
	newElement.setAttribute('id', elementId);
	newElement.innerHTML = html;
	p.appendChild(newElement);
}
function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
}

var field = 0;

function addMenuField() {
	field++;
	var inputHTML = "<div class='col s6 m6 l6'>" +
		"<div class='input-field' id='itemInput'>" +
		"<input type='text'  id='food-name'>'" +
		"<label for='food-name'>" +
		"Item Name" +
		"</label>" +
		"</div>" +
		"</div>" +
		"<div class='col s4 m4 l4'>" +
		"<div class='input-field' id='food-price'>" +
		"<input type='text' id='food-price'>'" +
		"<label for='food-price'>" +
		"Item Price" +
		"</label>" +
		"</div>" +
		"<div>";
	addElement('dynamicRows','div','input'+field, inputHTML);

}
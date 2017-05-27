window.onscroll = function() {stickToTop()};
window.onload = function() {makeWhite()};

function stickToTop() {
	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
		document.getElementById("uniqueID").className = "goToTop";
		document.getElementById("uniqueHeader").className = "disappear";
	} else {
		document.getElementById("uniqueID").className = "";
		document.getElementById("uniqueHeader").className = "";
	}
}

function getOffset(el) {
	el = el.getBoundingClientRect();
	return {
		left: el.left + window.scrollX,
		top: el.top + window.scrollY
	}
}

function goToSection(sectionNumber) {
	positionX = getOffset(sectionNumber).left;
	positionY = getOffset(sectionNumber).top;
	window.scroll(positionX,positionY)
}

function makeWhite () {
	document.getElementById('myScreen').style.backgroundColor = "white";
}

function screenToggle (screenID) {
	if (document.getElementById(screenID).style.backgroundColor == "white") {
	document.getElementById(screenID).style.backgroundColor = "black";
	} else if (document.getElementById(screenID).style.backgroundColor == "black") {
	document.getElementById(screenID).style.backgroundColor = "white";
	} 
}
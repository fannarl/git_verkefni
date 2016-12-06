//Það sem ég reyndi gera til að ná að búa til accordion
/*
function getTarget (e) {
	if (!e) {
		e = window.event;
	};
	return e.target || e.srcElement;
}

function itemDone(e) {
	var target, elChild;
	target = getTarget(e);
	elChild = target.childNode;
}

function curserChange(e) {
	
}

var el = document.getElementById('accordion');

if (el.addEventListener) {
	el.addEventListener('mouseover', function(e) {
		curserChange(e);
	}, false);
}

if (el.addEventListener) {
	el.addEventListener('click', function(e) {
		itemDone(e);
	} false);
}
*/

//Fann þennan kóða á netinu og skoðaði hann vel og ákvað svo að nota hann
var accordionItems = new Array();										//Býr til nýjan array

function init() {														//Býr til nýtt function sem heitir init
	var divs = document.getElementsByTagName('div');					//Fynnur öll div tög í skjalinu
	for (var i = 0; i < divs.length; i++) {								//Býr til for lykju sem er jafn löng og fjöldi div tagga
		if (divs[i].className == 'accordionItem')						//Býr til if setningu sem spyr hvort div tag er með class="accordionItem"
			accordionItems.push(divs[i]);								//Setur staðsetningu div tagsing í DOMinu inn í arrayinn
	}																	//Lokar for lykjunni
	for (var i = 0; i < accordionItems.length; i++) {					//Býr til for lykju sem er jöfn lengd arraysins (þrír í þessu tilfelli)
		var h2 = getFirstChildWithTagName(accordionItems[i], 'H2');		//Býr til array sem notar functionið getFirstChildWithTagName á h2 tög sem eru undir div tagi með class="accordionItem"
		h2.onclick = toggleItem;										//Þegar klikkað er á h2 tag í arraynum 'h2' keyrir það toggleItem functionið
	}																	//Lokar for lyjkunni
	for (var i = 1; i < accordionItems.length; i++) {					//Býr til for lykju sem byrjar á hólfi nr. 2 eg er jöfn lengd arraysins
		accordionItems[i].className = 'accordionItem hide';				//Breytir classa hja öllum dov tögum með class="accordionItem" nema firsta í class="accordionItem hide"
	}																	//Lokar for lyjkunni
}																		//Lokar functioninnu

function toggleItem() {													//Býr til nýtt function sem heitir toggleItem
	var itemClass = this.parentNode.className;							//Býr til breytu sem nær í classan á foreldranum sínum
	if (itemClass == 'accordionItem hide') {							//Býr til if setningu sem spyr hvort classin hjá foreldra sínum er jafn og "accordionItem hide"
		for (var i = 0; i < accordionItems.length; i++) {				//Býr til for lykju sem er jafn fjölda staka í accordionItems arraynum
			accordionItems[i].className = 'accordionItem hide';			//Breytir classanum á öllum div tögum með class="accordionItem" í class="accordionItem hide"
		}																//Lokar for lyjkunni
		this.parentNode.className = 'accordionItem';					//Breytir foreldra tagsins sem klikkað var á í class="accordionItem"
	}																	//Lokar if setningunni
}																		//Lokar functioninnu

function getFirstChildWithTagName(element, tagName) {					//Býr til nýtt function sem heitir getFirstChildWithTagName sem tekur in tvær breytur (element og tagName)
	for (var i = 0; i < element.childNodes.length; i++) {				//Býr til for lykju sem keyrir jafn oft og fjöldi "barna"
		if (element.childNodes[i].nodeName == tagName)					//Býr til if setningu sem spyr hvort classin á "barninu" er jafn breytunni sem heitir tagName
			return element.childNodes[i];								//Skilar staðsetningu staksins
	}																	//Lokar for lyjkunni
}																		//Lokar functioninnu
init();

//Ég að reyna að gera seinasta liðinn
/*
function newAnswer(clicked_id) {
	var id_clicked = clicked_id;
	if (id_clicked == 'submit1') {
		var txtarea = document.getElementById('Spurning1').value;
		if (txtarea == '') { alert('Textaboxið er tómt.') };
		else {
			document.write("<p>" + txtarea + "</p>");
		}
	}
	else if (id_clicked == 'submit2') {
		var txtarea = document.getElementById('Spurning2').value;
		if (txtarea == '') { alert('Textaboxið er tómt.') };
		else {
			document.write("<p>" + txtarea + "</p>");
		}
	}
	else if (id_clicked == 'submit3') {
		var txtarea = document.getElementById('Spurning3').value;
		if (txtarea == '') { alert('Textaboxið er tómt.') };
		else {
			document.write("<p>" + txtarea + "</p>");
		}
	}
}
*/

//Enþá að reyna
/*
function getText1() {
	var p = document.createElement("P");
	var txtarea = document.getElementById('Spurning1').value;
	var t = document.createTextNode(txtarea);
	p.appendChild(t);
}

function getText2() {
	var p = document.createElement("P");
	var txtarea = document.getElementById('Spurning2').value;
	var t = document.createTextNode(txtarea);
	p.appendChild(t);
}

function getText3() {
	var p = document.createElement("P");
	var txtarea = document.getElementById('Spurning3').value;
	var t = document.createTextNode(txtarea);
	p.appendChild(t);
}

function Parent() {
	var parent = this.parentNode();
	var grandparent = parent.parentNode();
	var lasstchild = grandparent.lastChild();
}

function insert() {
	this.parentNode.parentNode.insertBefore(p, this.parentNode.parentNode.lastChild);
}
*/

//Ég er enþá að reyna við seinasta liðinn
/*
function newAnswer() {
	if (this.id === "submit1") {
		var p = document.createElement("P");
		var txtarea = document.getElementById('Spurning1').value;
		var t = document.createTextNode(txtarea);
		p.appendChild(t);
		this.parentNode.insertBefore(p, this.parentNode.lastChild.previousSibling);
	};
	if (this.id === "submit2") {
		var p = document.createElement("P");
		var txtarea = document.getElementById('Spurning2').value;
		var t = document.createTextNode(txtarea);
		p.appendChild(t);
		this.parentNode.insertBefore(p, this.parentNode.lastChild.previousSibling);
	};
	if (this.id === "submit3") {
		var p = document.createElement("P");
		var txtarea = document.getElementById('Spurning3').value;
		var t = document.createTextNode(txtarea);
		p.appendChild(t);
		this.parentNode.insertBefore(p, this.parentNode.lastChild.previousSibling);
	};
}
*/

//Ég hef gefist upp á seinasta liðnum
/*
function newAnswer() {
	var p = document.createElement("p");
	var text = prompt("Sláðu inn nýtt svar.");
	p.appendChild(text);
	var position = this.parentNode.lastChild.previousSibling;
	position.appendChild(p);
}
*/
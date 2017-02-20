//Function for DOM Lab 1 ********************************************
function domlab1()
			{
				var x = document.getElementById("main");
				var y = document.getElementsByTagName("P");
				var z = document.getElementsByClassName("ex");
				document.getElementById("demo").innerHTML ='TEST: '
				+ x.innerHTML
				+ ' '
				+ y[0].innerHTML
				+ ' '
				+ y[1].innerHTML
				+ ' '
				+ y[2].innerHTML
				+ ' '
				+ z[0].innerHTML;
			};
//********************************************************************
//Function for DOM lab 2.1************************************************88
function domLab2_1()
{
alert(
'FirstChild of id Header: ' + document.getElementById('header').firstElementChild.nodeName
+ ' => ' + document.getElementById('header').firstElementChild.firstChild.nodeValue
+ '\nLastChild of id header: ' + document.getElementById('header').lastChild.nodeName
+ ' => ' + document.getElementById('header').lastChild.innerHTML
+ '\nNextSibling of firstChild in id content: ' + document.getElementById('content').firstChild.nextSibling.nodeName
+ ' => ' + document.getElementById('content').firstChild.nextSibling.innerHTML
+ '\nPreviousSibling of last in id content: ' + document.getElementById("content").lastChild.previousSibling.nodeName
+ ' => ' + document.getElementById("content").lastChild.previousSibling.innerHTML
+ '\nPreviousSibling of 3rd in id content: ' + document.getElementById("content").childNodes[3].previousSibling.nodeName
+ ' => ' + document.getElementById("content").childNodes[3].previousSibling.innerHTML
+ '\nPreviousSibling of 4rd in id content: ' + document.getElementById("content").childNodes[4].previousSibling.nodeName
+ ' => ' + document.getElementById("content").childNodes[4].previousSibling.innerHTML
+ '\nParentNode of id title ' + document.getElementById("title").parentNode.nodeName
);
};
//***************************************************************************
//function for DOM lab 2.2*****************************************************
function domLab2_2()
{
alert(
'Retrieve the value of a node using nodeValue. =>>>> '
+ document.getElementById('header').firstElementChild.firstChild.nodeValue
);
//Change the value of a node using nodeValue.
document.getElementById("title").firstChild.nodeValue="New page Title";
alert(
'Display new nodeValue  =>>>>  '
+ document.getElementById('title').firstChild.nodeValue
+ '\nRetrieve the value of a node attribute. =>>>> ' + document.getElementById("title").getAttribute("class")
);
//Change the value of a node attribute.
document.getElementById("title").setAttribute("class", "newdemo");
alert ("Display new attr value =>>>>" + document.getElementById("title").getAttribute("class")
);

};
//******************************************************************************************
// function for DOM lab 2.3*******************************************************************
function domLab2_3()
{
//appendChild
var node=document.createElement("p");
var textnode=document.createTextNode("new node");
    node.appendChild(textnode);
//insertBefore
var para1 = document.getElementById("page");
    para1.insertBefore(node, para1.firstChild);
//removeChild
var x=document.getElementById("title");
x.removeChild(x.firstChild);
//replaceChild
var child=document.getElementById("child")
child.replaceChild(textnode, child.firstChild );
}
//*********************************************************************************************************8
// function to popluate the target div with the selected DOM lab via the function call on the button*********
 function funcDom(file) {
 	var xhr = new XMLHttpRequest();
	xhr.open('GET','labsHTML/'+file+'.html',true);
	xhr.send(null);

	xhr.onload = function() {
		var el = document.getElementById("labSem1Content");
		el.innerHTML = xhr.responseText;
	}

 };




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
// function to popluate the target div with the selected HTML lab via the function call on the button*********
 function funcDom(file) {
 	var xhr = new XMLHttpRequest();
	xhr.open('GET','labsHTML/'+file+'.html',true);
	xhr.send(null);

	xhr.onload = function() {
		var el = document.getElementById("labSem1Content");
		el.innerHTML = xhr.responseText;
	}

 };
 //*********************************************************************************************************8
// function to popluate the target div with the selected PHP lab via the function call on the button*********
 function funcPHP(file) {
 	var xhr = new XMLHttpRequest();
	xhr.open('GET','labsHTML/'+file+'.php',true);
	xhr.send(null);

	xhr.onload = function() {
		var el = document.getElementById("labSem1Content");
		el.innerHTML = xhr.responseText;
	}

 };
//*********************************************************************************************************8
// function for JSLab 2 (Forms) ***************************************************
function check()
	{
		//Variable with users inputs for first/last name:
		var a=document.form1.fname.value + " " + document.form1.lname.value;
		var name=("User is: "+ a +". ");
		//Variable with users gender
		var b=0;
		var gender=("Gender of the user is: ");
		if(document.getElementById("m").checked)
			{gender+=("Male. "); b++;}
		else if(document.getElementById("f").checked)
			{gender+=("Female. "); b++;}
		//Variable with users vehicles:
		var transport=("User has the following vehicles: ");
		var check=document.getElementsByName("checkbox1");
		var checked=false;
		for(var i=0; i<check.length; i++)
			{
				if(check[i].checked)
				{
					if(checked)
					{transport+=" and "}
					transport+=check[i].value;
					checked=true;
				}
			}
		transport+=". "
		//Variable with username:
		if(document.form1.user.value)
		{var username=("Username is: "+ document.form1.user.value+". ");}
		//Validate the PW before runing the function:
		var password="pie"
		if(password==document.form1.pw.value)
		{
		//To create a P Element and append it to the end of the HTML with all variables as text, but if created already it adds to existing P:
		if(!document.getElementById("new_para"))
		{
		var p = document.createElement('p');
		p.id = "new_para";
		var t = document.createTextNode("");
		p.appendChild(t);
		document.body.appendChild(p);
		}
		else 
			{
				var p=document.getElementById("new_para");
				p.innerHTML="";
			}
		//Checks for input before adding to text node.
		if(a.length>1)
		{p.innerHTML += name;}

		if(b>0)
		{p.innerHTML += gender;}

		if (checked)
		{p.innerHTML += transport;}

		if(document.form1.user.value)
		{p.innerHTML += username;}

		//Have a empty P element in the HTML with id=new_para
		//document.getElementById("new_para").innerHTML= document.form1.fname.value + " " + document.form1.lname.value;
		}
		else{alert("Invalid Password!");}
	};
//******************************************************************************
// function for JavaScript lab 3 (Calc) *************************************************************
var count=1;
	function calc()
	{
		//Variable with users inputs for 1st & 2nd Numbers:
		var one=document.cal.num1.value;
		var two=document.cal.num2.value;
		var sum=document.getElementById("sum")
		if(count<8)
		{
		switch (count)
		{
		case 1: //addition
			var add=(parseInt(one)+parseInt(two));
			sum.innerHTML ="Sum =>"+add+"\n</br>";
			count++
			break;
		case 2: //subtraction
			var sub=(parseInt(one)-parseInt(two));
			sum.innerHTML += "Sub =>"+sub+"\n</br>";
			count++
			break;
		case 3: //multiplication
			var mul=(parseInt(one)*parseInt(two));
			sum.innerHTML += "Mul =>"+mul+"\n</br>";
			count++
			break;
		case 4: //division
			var div=(parseInt(one)/parseInt(two));
			sum.innerHTML += "Div =>"+div+"\n</br>";
			count++
			break;
		case 5: //modulus
			var mod=(parseInt(one)%parseInt(two));
			sum.innerHTML += "Mod =>"+mod+"\n</br>";
			count++
			break;
		case 6: //increment
			var inc1=++one;
			var inc2=++two;
			sum.innerHTML += "Increment of each is =>"+ inc1 +" & " + inc2 + "\n</br>";
			count++
			break;
		case 7: //decrement
			var dec1=--one;
			var dec2=--two;
			sum.innerHTML += "Decrement of each is =>"+ dec1 +" & " + dec2 + "\n</br>";
			count++
			break;
		default:
			break;
		}
		}
		else 
			{
			var end=document.getElementById("end")
			end.innerHTML = "No more calculations available Thank you!!";
			}
		
	};
//**************************************************************************************************
// function for JavaScript Lab4 Guessing game *****************************************************************
function guess()
	{
		var ans = document.getElementById("ans");
		var rnum = Math.ceil(Math.random() * 100);
		var unum = parseInt(prompt("Pick a num between 1 & 10"));
		var img = document.getElementById('img');
		var count = 0;
		
		while(unum!=rnum & count<6)
		{
			if(isNaN(unum))
				{
					count++;
					console.log(rnum);
					unum = parseInt(prompt("You did not enter a valid number. Try again! - Pick a num between 1 & 100 - You have "+(6-count)+" lives left!!"));
				}
			else
				{
					count++;
					console.log(rnum);
					if (unum<rnum)
					{
						unum = parseInt(prompt("Too low :) Try again! - Pick a num between 1 & 100 - You have "+(6-count)+" lives left!!"));
					}
					else 
					{
						unum = parseInt(prompt("Too big ;) Try again! - Pick a num between 1 & 100 - You have "+(6-count)+" lives left!!"));
					}
				}
		}
		if(unum==rnum)
			{
				img.src = "/Git-Repository-Proj/labSem1/img/happy.gif";
				img.width = "100";
				console.log(img);
				img.height = "100";
				ans.innerHTML="Good Guess!! The number was "+rnum;
			}
			else {
				ans.innerHTML="Your six goes are up!! The num was "+rnum;
			}
	};
//**************************************************************************************************
//Web Application Development - Sem 2 - Local and session storage. Note the function names have been altered slightly to seperate local and session functions.
//********************************** local ******************************************
function book (name) {
	this.name = name;
};

function addLocal() {
	var key = "key"+localStorage.length;
	var x = new book(document.book_formLocal.bookName.value);
	localStorage.setItem(key,JSON.stringify(x));
	document.book_formLocal.bookName.value = "";
};

function clear_storageLocal() {
	localStorage.clear();
};

function fromStorageLocal() {
	for (i=0;i<localStorage.length;i++) {
		var y = localStorage.getItem("key"+i);
		alert(JSON.parse(y).name);
	}
	return false; // to stop the page refreshing when the form submits
};


//*********************** Session  **************************************************
function book (name) {
	this.name = name;
};

function addSession() {
	var key = "key"+sessionStorage.length;
	var x = new book(document.book_formSession.bookName.value);
	sessionStorage.setItem(key,JSON.stringify(x));
	document.book_formSession.bookName.value = "";
};

function clear_storageSession() {
	sessionStorage.clear();
};

function fromStorageSession() {
	for (i=0;i<sessionStorage.length;i++) {
		var y = sessionStorage.getItem("key"+i);
		alert(JSON.parse(y).name);
	}
	return false;
};
//********************************************************************************************
//
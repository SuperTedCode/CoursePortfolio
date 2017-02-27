//Using jQuery, print out the text of the first h2 element.
var a = $("#h1").text();
console.log(a);

//Using jQuery, print out the text of the first li element.
var b = $("li:first").text();
console.log(b);

//Using jQuery, print out the value of the div attribute class.
var c = $("div").attr("class");
console.log(c);

//Using jQuery, print out the value of all li elements on separate lines.
var d = $("li").each(function() {
  console.log($(this).text());
});

//Using jQuery, print out the value of every 2nd li element in the ul on separate lines
var e = $("li:nth-child(2)").each(function(){
  console.log($(this).text());
});

//7. Using jQuery, add the following html after the last a element var x =
$(document).ready(function(){
  var f = $('a').last();
  f.after("<p>Var x = </p>");
})

//Question 8, 9, 10, 11, 12, 13 see comments below for questions
$(document).ready(function(){
  $("a").last().after("<br><button id='button1' onClick='myFunction()'>Click ME</button>"); //8
  $('#button1').click(function(){
    alert ("Hello"); //9
    var img = $("img").each(function() {
      $(this).fadeOut("slow"); //10
    });
    var text = prompt("Enter New List Item", "colour"); //11
    if (text === "colour"){
      $("h1, h2").each(function(){
        $(this).css("color", "red"); //13
      });
    } else {
   $('li').each(function(x) {
      x=x+1
      $(this).text(text + "(" + x + ")");//12
    });
    }
  });
});

/*8. Using jQuery, add a button with id=”button1”, onclick=”myfunction()” and caption = “Click Me” just before the last element.
9. Using jQuery, and the code in the previous question as a base, whenever the user clicks the button “Hello” should appear in an alert box.
10. Using jQuery, and expanding on the previous question, when the button is clicked all images on the page should disappear.
11. Using jQuery, and expanding on the previous question, when the button is clicked a box should be presented to user to enter some text.
When he or she enters the text it should replace each li item on the page.
12. Using jQuery, and expanding on the previous question, the text should also include a  number as shown:
13. Using jQuery, and expanding on the previous question, if the user enters “colour” then the colour of all h1 and h2 tags to red.*/


function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++) {
this[i] = initArray.arguments[i];
   }
}
var ctext = "Mon premier CV en ligne";
var x = 20;
var color = new initArray(
"red",
"blue",
"green",
"black"
);

{
document.write('<div id="c" align="center">'+ctext+'</div>');
}
function chcolor(){
{
document.all.c.style.color = color[x];
}
(x < color.length-1) ? x++ : x = 0;
}
setInterval("chcolor()",1000);

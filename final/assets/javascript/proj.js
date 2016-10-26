/* Validates blog form */
function validateForm() {
    var x = document.forms["blog"]["name"].value;
    var y = document.forms["blog"]["comment"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }else if (y == null || y == ""){
      alert("You must type a comment");
      return false;
    }
}

/* Function to convert money on the money.php page */
function moneyConversion1(){
  var x = (document.getElementById("usd1").value);
  document.getElementById("brl1").innerHTML = (x * 3.51170451).toFixed(2);
}

/* Function to convert money on the money.php page */
function moneyConversion2(){
  var x = (document.getElementById("brl2").value);
  document.getElementById("usd2").innerHTML = (x / 3.51170451).toFixed(2);
}

/* Function for carousel gallery on the home page */
var index = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("images-carousel");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    index++;
    if (index > x.length) {
      index = 1
    }    
    x[index-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}

/* Function created to display a google map of Natal */
var map;

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-5.7910257,-35.2055175), //coordinates of Natal
    zoom:11,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, "resize", function(){
	google.maps.event.trigger(map, "resize"); //Resize for small screens
});
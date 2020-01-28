  <!--search bar-->

jQuery(document).ready(function() {
  jQuery('.search-form-tigger').click(function(e){
    e.preventDefault();
 jQuery('.search-form-wrapper').toggle('fast');
  });
});
  <!--search-bar-end-->
 <!--tabs-->

function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
jQuery('#toggle-search').on('click', function() {
  jQuery('#searchBar').toggle('display: inline-block');
});

function getRandomSize(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

var allImages = "";

for (var i = 0; i < 25; i++) {
  var width = getRandomSize(200, 400);
  var height =  getRandomSize(200, 400);
  allImages += '<img src="https://placekitten.com/'+width+'/'+height+'" alt="pretty kitty">';
}

$('#photos').append(allImages);
 <!--tabs-end-->

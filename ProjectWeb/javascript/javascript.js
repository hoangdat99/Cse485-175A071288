// *****js for slide show 1 ****
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("imageSlideShow");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {
    myIndex = 1;
  }
  x[myIndex - 1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
// *********************

$(document).ready(function(){
  $('.slideshows-event').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots:true
  });
});

// **********************
$(document).ready(function () {
  $('#dtVerticalScrollExample').DataTable({
  "scrollY": "200px",
  "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
  });
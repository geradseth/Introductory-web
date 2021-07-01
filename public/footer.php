<!-- Footer -->
<footer class="mt_center mt_black mt_padding-64">
  <a href="#home" class="mt_button mt_light-grey"><i class="fa fa-arrow-up mt_margin-right"></i>To the top</a>
  <div class="mt_xlarge mt_section">
    <a href="https://facebook.com/mteuletech"><i class="fa fa-facebook-official mt_hover-opacity"></i></a>
    <a href="https://instagram.com/mteuletech"><i class="fa fa-instagram mt_hover-opacity"></i></a>
    <a href="https://twitter.com/mteuletech"><i class="fa fa-twitter mt_hover-opacity"></i></a>
    <a href="https://linkedin.com/mteuletech"><i class="fa fa-linkedin mt_hover-opacity"></i></a>
    <a href="https://www.youtube.com/channel/UCbjiCpJEU2tP48HlbRQahqA?sub_confirmation=1"><i class="fa fa-youtube mt_hover-opacity"></i></a>
  </div>
  <p>My Github Repo <a href="https://www.github.com/geradseth" title="Github Account" target="_blank" class="mt_hover-text-green">Github</a></p>
</footer>
<script type="text/javascript" src="public/js/jquery.js"></script>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("menubar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

//var id = "";
var valid = true;
var tid;
function getTutorial(sid){
  $.ajax({
 type: "POST",
 url: 'fetch-article.php',
 data: {id: sid},
 success: function(data){
  let obj = JSON.parse(data);
  document.getElementById("THeading").innerHTML = obj.title;
  document.getElementById("TContent").innerHTML = obj.html;
  window.location = '/#Tutorial';
 },
 error: function(xhr, status, error){
 console.error(xhr);
 }
});
}
</script>
</body>
</html>

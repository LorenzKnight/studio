<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  //event.preventDefault()
  event.stopPropagation()
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
        <ul>
        <h5>ADMIN</h5>
        <li><a href="#home">Start</a></li>
        <li><a href="students.php">Students</a></li>
        <li><a href="periods.php">Periods</a></li>
        <li><a href="users.php">Users</a></li>
        
        <hr>
        <h5>SITE</h5>
        <li><a href="publications.php">Publications</a></li>
        <li><a href="#about">Plugins</a>
          <div class="dropdown2-content">
            <ul>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Q & A</a></li>
              <li><a href="#">menu 2.3</a></li>
            </ul>
          </div>
        <li>
        <li><a href="#contact">Page info</a>
        </ul>
    </div>
</div>
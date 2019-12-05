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
        <li><a href="dashboard.php">Start</a></li>
        <li><a href="students.php">Students</a></li>
        <li><a href="periods.php">Periods</a></li>
        <li><a href="#">Tickets</a>
          <div class="dropdown2-content">
            <ul>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="#">Events</a></li>
            </ul>
          </div>
        </li>
        <li><a href="events.php">Events</a></li>
        <hr>
        <h5>SITE</h5>
        <li><a href="publications.php">Publications/News/Vlog</a></li>
        <li><a href="#about">Plugins</a>
          <div class="dropdown2-content">
            <ul>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="#">Q & A</a></li>
            </ul>
          </div>
        <li>
        <li><a href="users.php">Users</a></li>
        <li><a href="page_settings.php">Page setting</a>
        </ul>
    </div>
</div>
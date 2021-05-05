<div class="dropdown">
    <!-- <button class="dropbtn" onclick="myFunction()"> -->
      <label class="hamburger" onclick="myFunction()"></label>
      <input type="checkbox" id="input-hamburger" hidden/>
    <!-- </button> -->

    <div id="myDropdown" class="dropdown-content">
        <ul>
        <h5>ADMIN</h5>
        <li><a href="dashboard.php">Start</a></li>
        <li><a href="students.php">Students</a></li>
        <li><a href="periods.php">Periods</a></li>
        <li><a href="courses.php">Courses 
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0008") || $_SESSION['std_Nivel'] < 3) : ?>
        <div class="flecha_derecha" style="float:right;"></div>
        <?php endif ?>
        </a>
          <div class="dropdown2-content">
            <ul>
              <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0008") || $_SESSION['std_Nivel'] < 3) : ?>
              <li><a href="discountcodes.php">Discount codes</a></li>
              <?php endif ?>
              <?php if($_SESSION['std_Nivel'] < 2) : ?>
              <li><a href="p_discount.php">Package discount</a></li>
              <?php endif ?>
              <?php if($_SESSION['std_Nivel'] < 2) : ?>
              <li><a href="inactive_courses.php">Inactive Courses</a></li>
              <?php endif ?>
            </ul>
          </div>
        </li>
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0011") || showPermissions($_SESSION['std_UserId'], "TSYS-P0015") || showPermissions($_SESSION['std_UserId'], "TSYS-P0016") || $_SESSION['std_Nivel'] < 2) : ?>
        <!-- <hr> -->
        <div style="width:87%; margin:0 auto; border-top:1px solid #FFF;"></div>
        <h5>SITE</h5>
        <?php endif ?>
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0011") || $_SESSION['std_Nivel'] < 2) : ?>
        <li><a href="#">Posts <div class="flecha_derecha" style="float:right;"></div></a>
          <div class="dropdown2-content">
            <ul>
              <li><a href="events.php">Events</a></li>
              <li><a href="publications.php">Publications</a></li>
              <li><a href="collaborators_admin.php">Collaborators</a></li>
            </ul>
          </div>
        </li>
        <?php endif ?>
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0015") || $_SESSION['std_Nivel'] < 2) : ?>
        <li><a href="schedule.php">Schedule</a><li>
        <?php endif ?>
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0016") || $_SESSION['std_Nivel'] < 2) : ?>
        <li><a href="page_settings.php">Page setting</a></li>
        <?php endif ?>
        </ul>
    </div>
</div>

<script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    //event.preventDefault()
    event.stopPropagation()
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  // window.onclick = function(event) {
  //   if (!event.target.matches('.dropbtn')) {
  //     var dropdowns = document.getElementsByClassName("dropdown-content");
  //     var i;
  //     for (i = 0; i < dropdowns.length; i++) {
  //       var openDropdown = dropdowns[i];
  //       if (openDropdown.classList.contains('show')) {
  //         openDropdown.classList.remove('show');
  //       }
  //     }
  //   }
  // }
</script>

<script>
  /* Close animation del menu hamburger */
  const hamburger = document.querySelector(".hamburger");
  hamburger.addEventListener("click", function () {
    this.classList.toggle("close");
  });
</script>
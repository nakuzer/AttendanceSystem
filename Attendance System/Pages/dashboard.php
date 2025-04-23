<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>checkLY - Dashboard</title>
  <link rel="stylesheet" href="../style/nav-bar.css">
  <link rel="stylesheet" href="../style/dashboard.css">

</head>

<body>
  <nav class="nav-bar">
    <div class="checkLY">
      check<span>LY</span>
      <div>

        <div class="profile">
          <div>
            <h3>Danny Dinglasa</h3>
            <h4>Teacher</h4>
          </div>
          <img src="../images/DannyJunior.jpg" alt="" height="35" style="border-radius: 20px;">
        </div>
  </nav>
  <aside class="sidebar-menu">
    <ul class="main-btns">
      <li>
        <a href="dashboard.php"><img src="../images/dashboardIcon.png" alt="" height="20"> Dashboard</a>
      </li>
    </ul>
    <div class="work-btns">
      <h3>
        Work
      </h3>
      <ul>
        <li>
          <a href="classes.php"><img src="../images/classesIcon.png" alt="" height="25">
            <div>Classes</div>
          </a>
        </li>
        <li>
          <a href="schedule.php"><img src="../images/scheduleIcon.png" alt="" height="25">
            <div>Schedule</div>
          </a>
        </li>
      </ul>
    </div>
    <ul class="util-btns">
      <li>
        <a href=""><img src="../images/settings.png" alt="" height="18">
          Settings
        </a>
      </li>
      <li>
        <a href="login.php"><img src="../images/Logout.png" alt="" height="18">
          Log Out
        </a>
      </li>
    </ul>
  </aside>


  <div class="main-content">
    <div class="header">
      <h1>Welcome, Danny!</h1>
    </div>

    <div class="dashboard-content">
      <div class="schedule-section">
        <h2>Monday</h2>
        <div class="schedule-grid">
          <div class="schedule-grid-item">Mon</div>
          <div class="schedule-grid-item">Tue</div>
          <div class="schedule-grid-item">Wed</div>
          <div class="schedule-grid-item">Thu</div>
          <div class="schedule-grid-item">Fri</div>
          <div class="schedule-grid-item">Sat</div>
          <div class="schedule-grid-item">Sun</div>
        </div>

        <table class="classes-table">
          <thead>
            <tr>
              <th>Subject Code</th>
              <th>Subject Name</th>
              <th>Section</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>IT 221</td>
              <td>Integrative Programming</td>
              <td>BSIT-2A</td>
              <td>8:00 - 10:00 AM</td>
            </tr>
            <tr>
              <td>IT 225</td>
              <td>Application Development and Emerging Technologies</td>
              <td>BSIT-2A</td>
              <td>1:00 - 6:00 PM</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="calendar-section">
        <div class="calendar">
          <div class="calendar-header">
            <h3>June 2021</h3>
            <div>
              <button>&lt;</button>
              <button>&gt;</button>
            </div>
          </div>
          <!-- Calendar grid would be dynamically generated -->
          <div>Calendar Grid Here</div>
        </div>

        <div class="tardy-titans">
          <h3>Tardy Titans</h3>
          <ul class="tardy-titans-list">
            <li style="width: 100%;">
              <img src="../images/DannyJunior.jpg" alt="Profile" style="border-radius: 50%;">
              Peter Magnus <h5 style="text-align: end; width: 20px;">5</h5>
            </li>
            <li>
              <img src="../images/DannyJunior.jpg" alt="Profile" style="border-radius: 50%;"> Matt Axel Beltran <h5 style="text-align: end; width: 50%;">5</h5>
            </li>
            <li>
              <img src="../images/DannyJunior.jpg" alt="Profile" style="border-radius: 50%;"> John Lore Maticolous <h5 style="text-align: end; width: 50%;">5</h5>
            </li>
            <li>
              <img src="../images/DannyJunior.jpg" alt="Profile" style="border-radius: 50%;"> Danny Pogi <h5 style="text-align: end; width: 50%;">5</h5>
            </li>
            <li>
              <img src="../images/DannyJunior.jpg" alt="Profile" style="border-radius: 50%;"> Pheinz Magnus <h5 style="text-align: end; width: 50%;">5</h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed active" href="/admin/dashboard">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Attendance-nav" data-bs-toggle="collapse"> <i class="bi bi-menu-button-wide"></i><span>Attendance</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Attendance-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/admin/attendance"> <i class="bi bi-circle"></i><span>Attendance(Admin)</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Leaves(Admin)</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Employee leave</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Task-nav" data-bs-toggle="collapse" href="#"> <i class="bi-list-task"></i><span>Tasks</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Task-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/admin/tasks"> <i class="bi bi-circle"></i><span> All Task</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Task Details</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Employees-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-people"></i><span>Employees</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Employees-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/admin/employees"> <i class="bi bi-circle"></i><span>All Employee</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Add Employee</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Projects-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Projects</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Projects-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="/admin/projects"> <i class="bi bi-circle"></i><span>All Projects</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Project Details</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Users-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href=""> <i class="bi bi-circle"></i><span>Add Users</span> </a>
        </li>
        <li>
          <a href=""> <i class="bi bi-circle"></i><span>Profile</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-gear"></i>
        <span>Settings</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Sign In</span>
      </a>
    </li>
  </ul>
</aside>
<?php
// echo "<pre>";
// if (strpos($_SERVER["PATH_INFO"], "attendance")) {
//   echo "yes url have attendance";
// }
// echo "</pre>";
?>
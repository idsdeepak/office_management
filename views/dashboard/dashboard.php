<?php include_once __DIR__ . "/../nav/nav.php"; ?>
<?php include_once __DIR__ . "/../aside/aside.php"; ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-4 mb-2 mb-lg-0">
        <div class="Attendance-sheet bg-white py-4 border border-dark-subtle">
          <div class="Dashboard-Attendance-title ps-2">
            <h5>
              Timesheet
              <small class="text-muted"></small>
            </h5>
          </div>
          <div class="punch-info">
            <div class="punch-hours">
              <span>00:00:00 am</span>
            </div>
          </div>
          <div class="punch-btn-section">
            <form action="" method="post">
              <?php if ($isPunched) { ?>
                <button type="submit" class="punch-btn">Punch Out</button>
              <?php } else { ?>
                <button type="submit" class="punch-btn">Punch In</button>
              <?php } ?>
            </form>
          </div>
          <div class="Break-btn-section text-center">
            <p class="mb-1 text-dark">Break Time</p>
            <p class="mb-0">45 Min</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 cs-height p-0 bg-white">
        <div class="overflow-auto">
          <table class="table table-bordered border border-dark-subtle">
            <thead>
              <tr>
                <th colspan="2">
                  <h5 class="mb-0 fw-light">Today Activity</h5>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($attendanceRecords as $attendance) { ?>
                <tr>
                  <td>
                    <p class="mb-1">Punch In at</p>
                    <p class="text-muted mb-0">
                      <i class="bi bi-clock me-2"></i>
                      <?php echo date("h:i a", strtotime($attendance["punch_in"])); ?>
                    </p>
                  </td>
                  <td>
                    <p class="mb-1">Punch Out at</p>
                    <?php
                    if (!$attendance["punch_out"]) {
                      continue;
                    }
                    ?>
                    <p class="text-muted mb-0">
                      <i class="bi bi-clock me-2"></i>
                      <?php echo date("h:i a", strtotime($attendance["punch_out"])); ?>
                    </p>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <main>
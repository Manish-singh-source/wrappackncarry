<?php
$title = "Wrap Pack N Carry - Admin Panel";
$pageName = "Dashboard";
include("layouts/header.php");

require_once('db_config.php');
$stats = ['contacts' => 0, 'enquiries' => 0, 'total' => 0];

if (!$conn->connect_error) {
    $stats['contacts'] = $conn->query("SELECT COUNT(*) as cnt FROM contact_us")->fetch_assoc()['cnt'] ?? 0;
    $stats['enquiries'] = $conn->query("SELECT COUNT(*) as cnt FROM enquiries")->fetch_assoc()['cnt'] ?? 0;
    $stats['total'] = $stats['contacts'] + $stats['enquiries'];
    $conn->close();
}
?>

<!-- ============================================================== -->
<!-- Start Main Content -->
<!-- ============================================================== -->

<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-primary-subtle border-0 overflow-hidden">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="fw-bold text-primary mb-2">Welcome back, <span class="text-dark"><?php echo $_SESSION['admin_name'] ?? 'Admin'; ?>!</h2>
                        <p class="text-muted mb-0 fs-15">Here's what's happening with your business today.</p>
                        <div class="d-flex gap-4 mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-calendar text-primary fs-18"></i>
                                <div>
                                    <span class="text-muted fs-11 text-uppercase fw-semibold d-block">Today</span>
                                    <h4 class="mb-0 fw-bold" id="current-date"></h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="ti ti-clock text-info fs-18"></i>
                                <div>
                                    <span class="text-muted fs-11 text-uppercase fw-semibold d-block">Current Time</span>
                                    <h4 class="mb-0 fw-bold" id="current-time">--:--:--</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end d-none d-lg-block">
                        <img src="assets/images/svg/email-campaign.svg" width="140" alt="Dashboard illustration" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <!-- end col -->
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fs-13 text-uppercase fw-semibold">Total Contacts</span>
                        <h2 class="fw-bold mt-1 mb-0"><?php echo $stats['contacts']; ?></h2>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                            <i class="ti ti-users"></i>
                        </span>
                    </div>
                </div>
                <a href="contact-form.php" class="text-primary fw-semibold fs-13 mt-2 d-block">View all contacts <i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fs-13 text-uppercase fw-semibold">Total Enquiries</span>
                        <h2 class="fw-bold mt-1 mb-0"><?php echo $stats['enquiries']; ?></h2>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-info-subtle text-info rounded fs-3">
                            <i class="ti ti-message"></i>
                        </span>
                    </div>
                </div>
                <a href="enquire-form.php" class="text-info fw-semibold fs-13 mt-2 d-block">View all enquiries <i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fs-13 text-uppercase fw-semibold">Total Leads</span>
                        <h2 class="fw-bold mt-1 mb-0"><?php echo $stats['total']; ?></h2>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-success-subtle text-success rounded fs-3">
                            <i class="ti ti-chart-bar"></i>
                        </span>
                    </div>
                </div>
                <span class="text-muted fs-13 mt-2 d-block">Contacts + Enquiries combined</span>
            </div>
        </div>
    </div>
</div>

<!-- end row -->
</div>
<!-- container -->

<script>
    function updateDateTime() {
        const now = new Date();
        document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
        document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
    }
    updateDateTime();
    setInterval(updateDateTime, 1000);
</script>

<?php include('layouts/footer.php'); ?>
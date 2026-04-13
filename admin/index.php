<?php
$title = "Wrap Pack N carry - Admin Panel";
$pageName = "Dashboard";
include("layouts/header.php");

?>

<!-- ============================================================== -->
<!-- Start Main Content -->
<!-- ============================================================== -->




<div class="row">
    <div class="col-xxl-5">
        <div class="row h-100">
            <div class="col-lg-3 col-md-6 col-xxl-6">
                <div class="card card-h-100 overflow-hidden">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="overflow-hidden flex-shrink-0">
                                <h3 class="fw-normal text-reset fs-20 lh-base">
                                    <span class="text-muted fs-base text-uppercase h5">Good Day,</span> <br />
                                    <b>David Dev!</b>
                                </h3>
                            </div>
                            <div class="flex-grow-1 text-end">
                                <img class="d-none d-xxl-inline-block" src="assets/images/svg/email-campaign.svg" width="110" alt="Generic placeholder image" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-center p-2 bg-light bg-opacity-50">
                        <p class="d-flex align-items-center justify-content-between w-100 mb-0">
                            <span class="me-2"><i class="ti ti-calendar fs-15 align-middle"></i>
                                <span class="align-middle ms-1 fw-semibold">
                                    <script>
                                        document.write(new Date().toLocaleDateString("en-US", {
                                            day: "numeric",
                                            month: "short",
                                            year: "numeric"
                                        }))
                                    </script>
                                </span></span>
                            <span class="text-nowrap"><i class="ti ti-clock fs-15 align-middle"></i><span class="align-middle ms-1 fw-semibold" id="clock-widget"></span></span>
                        </p>
                    </div>
                    <!-- end card-body -->
                </div>
            </div>
            <!-- end col-->

            <!-- end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- end col -->

    <!-- end col -->
</div>
<!-- end row -->
</div>
<!-- container -->



<?php include('layouts/footer.php'); ?>
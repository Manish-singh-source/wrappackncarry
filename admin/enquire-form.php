<?php
$title = "Enquire Form";
$pageName = "Enquire Form";
include('layouts/header.php');

$conn = new mysqli("localhost", "root", "", "wrappackncarry");
$enquireData = [];
if (!$conn->connect_error) {
    $result = $conn->query("SELECT * FROM enquiries ORDER BY id DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $enquireData[] = $row;
        }
    }
    $conn->close();
}
?>




<!-- ============================================================== -->
<!-- Start Main Content -->
<!-- ============================================================== -->



<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-body">
                <table data-tables="export-data-dropdown" class="table table-striped align-middle mb-0">
                    <thead class="thead-sm text-uppercase fs-xxs">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Format</th>
                            <th>Quantity</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($enquireData as $enquire): ?>
                        <tr>
                            <td><?php echo $enquire['id']; ?></td>
                            <td><?php echo htmlspecialchars($enquire['name']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['email']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['phone']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['product']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['format']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($enquire['message']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end card-body-->
        </div>
        <!-- end card-->
    </div>
</div>
</div>
<!-- container -->

<?php include 'layouts/footer.php'; ?>
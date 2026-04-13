<?php
$title = "Contact Form";
$pageName = "Contact Form";
include('layouts/header.php');

$conn = new mysqli("localhost", "root", "", "wrappackncarry");
$contactData = [];
if (!$conn->connect_error) {
    $result = $conn->query("SELECT * FROM contact_us ORDER BY id DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $contactData[] = $row;
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
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Timing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contactData as $contact): ?>
                        <tr>
                            <td><?php echo $contact['id']; ?></td>
                            <td><?php echo htmlspecialchars($contact['name']); ?></td>
                            <td><?php echo htmlspecialchars($contact['email']); ?></td>
                            <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                            <td><?php echo htmlspecialchars($contact['subject']); ?></td>
                            <td><?php echo htmlspecialchars($contact['message']); ?></td>
                            <td><?php echo htmlspecialchars(date("d F Y, h:i A", strtotime($contact['created_at'])));?></td>
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
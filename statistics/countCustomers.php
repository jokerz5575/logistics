<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-users"></i> Total Customers</h5>
    </div>
    <div class="card-body">
            <strong>
        <?php
        try {
            $dbh = new PDO('mysql:host=185.51.188.58;dbname=pctvtata_logisticsdemo', 'pctvtata_logistics', 'Anditomi2');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Count the records in the 'Shipments' table
            $countSql = "SELECT COUNT(*) AS TotalCustomers FROM Customers";
            $stmt = $dbh->query($countSql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalCustomers = $result['TotalCustomers'];

            echo $totalCustomers;

            $dbh = null; // Closing the PDO connection
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $dbh = null; // Closing the PDO connection
        }
        ?>
        </strong>
        <a href="./customers/" alt="List them all">  List</a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-shipping-fast"></i> Total Shipments</h5>
    </div>
    <div class="card-body">
            <strong>
        <?php
        try {
            $dbh = new PDO('mysql:host=185.51.188.58;dbname=pctvtata_logisticsdemo', 'pctvtata_logistics', 'Anditomi2');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Count the records in the 'Shipments' table
            $countSql = "SELECT COUNT(*) AS TotalShipments FROM Shipments";
            $stmt = $dbh->query($countSql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalShipments = $result['TotalShipments'];

            echo $totalShipments;

            $dbh = null; // Closing the PDO connection
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $dbh = null; // Closing the PDO connection
        }
        ?>
        </strong>
        <a href="./shipments/" alt="List them all">List</a>
    </div>
</div>
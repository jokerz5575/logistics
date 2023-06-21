<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba Logisztika KFT.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Custom styling */
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #8a2b3e;
            color: #fff;
        }
        .navbar-brand{
            color:#fff;
        }
        .navbar .nav-link,
        .sidebar .nav-link {
            color: #fff;
        }
        .sidebar {
            background-color: #8a2b3e;
            color: #fff;
            min-height: calc(100vh - 50px);
        }
        .content {
            margin-top: 20px;
        }
        .profile-dropdown {
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="roptima.png" width="180" height="40" class="d-inline-block align-top" alt=""></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle profile-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profile
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Side Menu Bar -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./shipments"><i class="fas fa-truck"></i> Shipments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-users"></i> Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-building"></i> Carriers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-file-contract"></i> Contracts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-truck-moving"></i> Fleet Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Maintenance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-gas-pump"></i> Fuel Purchases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shield-alt"></i> Insurance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-road"></i> Trips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-box"></i> Packaging</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-map-marker-alt"></i> Tracking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Reporting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-code-branch"></i> Integration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-calendar-alt"></i> Scheduling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> CRM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-file-alt"></i> Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Analytics</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="content">
                        <?php

                        // try {
                        //     $dbh = new PDO('mysql:host=localhost:3306;dbname=pctvtata_logisticsdemo', 'pctvtata_logistics', 'Anditomi2');
                        //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        //     // Insert a sample record
                        //     $insertSql = "
                        //     INSERT INTO Shipments (ShipmentID, ContractID, CustomerID, CarrierID, StartLocation, EndLocation, ShipmentDate, DeliveryDate, ShipmentStatus, ShipmentValue, Notes)
                        //     VALUES (1, NULL, NULL, NULL, 'Start Location', 'End Location', '2023-06-19', '2023-06-20', 'In Transit', 100.50, 'Sample notes');
                        //     ";
                        //     $dbh->exec($insertSql);
                        //     echo "Sample record inserted successfully.";
                        //     $dbh = null; // Closing the PDO connection

                        // } catch (PDOException $e) {
                        //     echo "Error: " . $e->getMessage();
                        //     $dbh = null; // Closing the PDO connection

                        // }

                        ?>
                        <div class="table-responsive">
                            <?php

                            try {
                                $dbh = new PDO('mysql:host=185.51.188.58;dbname=pctvtata_logisticsdemo', 'pctvtata_logistics', 'Anditomi2');
                                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                // Select all records from the 'shipments' table
                                $selectSql = "SELECT * FROM Shipments";
                                $stmt = $dbh->query($selectSql);
                                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Display the results in an HTML table
                                echo '<table class="table table-striped">';
                                echo '<thead>';
                                echo '<tr>';
                                echo '<th>Contract</th>';
                                echo '<th>Customer</th>';
                                echo '<th>Carrier</th>';
                                echo '<th>Start Location</th>';
                                echo '<th>End Location</th>';
                                echo '<th>Shipment Date</th>';
                                echo '<th>Delivery Date</th>';
                                echo '<th>Shipment Status</th>';
                                echo '<th>Shipment Value</th>';
                                echo '<th>Notes</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';

                                foreach ($results as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['ContractID'] . '</td>';
                                    echo '<td>' . $row['CustomerID'] . '</td>';
                                    echo '<td>' . $row['CarrierID'] . '</td>';
                                    echo '<td>' . $row['StartLocation'] . '</td>';
                                    echo '<td>' . $row['EndLocation'] . '</td>';
                                    echo '<td>' . $row['ShipmentDate'] . '</td>';
                                    echo '<td>' . $row['DeliveryDate'] . '</td>';
                                    echo '<td>' . $row['ShipmentStatus'] . '</td>';
                                    echo '<td>' . $row['ShipmentValue'] . '</td>';
                                    echo '<td>' . $row['Notes'] . '</td>';
                                    echo '</tr>';
                                }

                                echo '</tbody>';
                                echo '</table>';
                                $dbh = null; // Closing the PDO connection

                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                                $dbh = null; // Closing the PDO connection

                            }

                            ?>
                        </div>
                    </div>
               
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

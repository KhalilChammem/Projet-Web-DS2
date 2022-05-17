<?php
    ob_start();
	session_start();

	$pageTitle = 'Clients';

		include 'connect.php';
  		include 'Includes/functions/functions.php'; 
		include 'Includes/templates/header.php';
		include 'Includes/templates/navbar.php';
            
        $do = 'Manage';

            if($do == "Manage")
            {
                $stmt = $con->prepare("SELECT * FROM clients");
                $stmt->execute();
                $clients = $stmt->fetchAll();

            ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $pageTitle; ?>
                    </div>
                    <div class="card-body">

                        <!-- CLIENTS TABLE -->

                        <table class="table table-bordered clients-table">
                            <thead>
                                <tr>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($clients as $client)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $client['client_name'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['client_phone'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $client['client_email'];
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            <?php
            }


        /* FOOTER BOTTOM */

        include 'Includes/templates/footer.php';

   
?>
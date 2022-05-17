<?php
    ob_start();
	session_start();

	$pageTitle = 'Users';

		include 'connect.php';
  		include 'Includes/functions/functions.php'; 
		include 'Includes/templates/header.php';
		include 'Includes/templates/navbar.php';


            
            $do = 'Manage';

            if($do == "Manage")
            {
                $stmt = $con->prepare("SELECT * FROM users");
                $stmt->execute();
                $users = $stmt->fetchAll();

            ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $pageTitle; ?>
                    </div>
                    <div class="card-body">

                        <!-- USERS TABLE -->

                        <table class="table table-bordered users-table">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Full Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($users as $user)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $user['username'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $user['email'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $user['full_name'];
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
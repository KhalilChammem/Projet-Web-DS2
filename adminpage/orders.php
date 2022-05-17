<?php

	$pageTitle = 'Orders';

	include 'connect.php';
  	include 'Includes/functions/functions.php'; 
	include 'Includes/templates/header.php';
	include 'Includes/templates/navbar.php';

        ?>


            <style type="text/css">

                .orders-table
                {
                    -webkit-box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
                    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
                }

                .thumbnail>img 
                {
                    width: 100%;
                    object-fit: cover;
                    height: 300px;
                }

                .thumbnail .caption 
                {
                    padding: 9px;
                    color: #333;
                }

                .order_form
                {
                    max-width: 750px;
                    margin:auto;
                }

                .panel-X
                {
                    border: 0;
                    -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
                    box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
                    border-radius: .25rem;
                    position: relative;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    min-width: 0;
                    word-wrap: break-word;
                    background-color: #fff;
                    background-clip: border-box;
                    margin: auto;
                    width: 600px;
                }

                .panel-header-X 
                {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    padding-left: 1.25rem;
                    padding-right: 1.25rem;
                    border-bottom: 1px solid rgb(226, 226, 226);
                }

                .save-header-X 
                {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                    min-height: 65px;
                    padding: 0 1.25rem;
                    background-color: #f1fafd;
                }

                .panel-header-X>.main-title 
                {
                    font-size: 18px;
                    font-weight: 600;
                    color: #313e54;
                    padding: 15px 0;
                }

                .panel-body-X
                {
                    padding: 1rem 1.25rem;
                }

                .save-header-X .icon
                {
                    width: 20px;
                    text-align: center;
                    font-size: 20px;
                    color: #5b6e84;
                    margin-right: 1.25rem;
                }
            </style>

        <?php

            $do = '';

            if(isset($_GET['do']) && in_array(htmlspecialchars($_GET['do']), array('Add','Edit')))
                $do = $_GET['do'];
            else
                $do = 'Manage';

            if($do == "Manage")
            {
                $stmt = $con->prepare("SELECT * FROM placed_orders");
                $stmt->execute();
                $orders = $stmt->fetchAll();

        ?>
                <div class="card">
                    <div class="card-header">
                        <?php echo $pageTitle; ?>
                    </div>
                    <div class="card-body">

                        <!-- ADD NEW order BUTTON -->

                        <div class="above-table" style="margin-bottom: 1rem!important;">
                            <a href="orders.php?do=Add" class="btn btn-success">
                                <i class="fa fa-plus"></i> 
                                <span>Add new order</span>
                            </a>
                        </div>

                        <!-- orderS TABLE -->

                        <table class="table table-bordered orders-table">
                            <thead>
                                <tr>
                                    <th scope="col">Order id</th>
                                    <th scope="col">Order time</th>
                                    <th scope="col">Client id</th>
                                    <th scope="col">Delivery address</th>
                                    <th scope="col">Delivered</th>
									<th scope="col">Canceled</th>
									<th scope="col">Cancellation reason</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($orders as $order)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $order['order_id'];
											echo "<td>";
                                                echo $order['order_time'];
                                            echo "</td>";
                                            echo "<td style = 'text-transform:capitalize'>";
                                                echo $order['client_id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $order['delivery_address'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $order['delivered'];
                                            echo "</td>";
                                            echo "<td>";
												echo $order['canceled'];
											echo "</td>";
                                            echo "<td>";
												echo $order['cancellation_reason'];
									}
			}
                                     ?>
			
							</tbody>
						</table>
					</div>
				</div>
			

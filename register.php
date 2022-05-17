<!-- PHP INCLUDES -->

<?php
    //Set page title
    $pageTitle = 'register';

    include "connect.php";
    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";


?>
    
    <style type="text/css">

        .text_header
        {
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.5;
            margin-top: 22px;
            text-transform: capitalize;
        }

        .register_section
        {
            max-width: 850px;
            margin: 50px auto;
            min-height: 500px;
        }
        
        .text_header
        {
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.5;
            margin-top: 22px;
            text-transform: capitalize;
        }
        .layer
        {
            height: 100%;
        background: -moz-linear-gradient(top, rgba(45,45,45,0.4) 0%, rgba(45,45,45,0.9) 100%);
    background: -webkit-linear-gradient(top, rgba(45,45,45,0.4) 0%, rgba(45,45,45,0.9) 100%);
    background: linear-gradient(to bottom, rgba(45,45,45,0.4) 0%, rgba(45,45,45,0.9) 100%);
        }

    </style>

    <!-- START ORDER FOOD SECTION -->

    <section style="
    background: url(Design/images/food_pic.jpg);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="layer">
            <div style="text-align: center;padding: 15px;">
                <h1 style="font-size: 120px; color: white;font-family: 'Kristi', cursive;
"></h1>
            </div>
        </div>
        
    </section>

	<div class="register">
			<form class="register-container validate-form" name="register-form" action="index.php" method="POST" onsubmit="return validateregisterForm()">
            <div class="text_header">
                <span>
                    Client Register
                </span>
            </div>
						
						<?php

							//Check if user click on the submit button

								if(isset($_POST['client_register']))
								{
										$username = test_input($_POST['username']);
										$password = test_input($_POST['password']);
										$hashedPass = sha1($password);

										//Check if User Exist In database

										$stmt = $con->prepare("Select client_id, username, client_email from users where username = ? and client_email = ?");
										$stmt->execute(array($username,$hashedPass));
										$row = $stmt->fetch();
										$count = $stmt->rowCount();

										// Check if count > 0 which mean that the database contain a record about this username

										if($count > 0)
										{
										?>
										<div class="alert alert-danger">
							            <button data-dismiss="alert" class="close close-sm" type="button">
											<span aria-hidden="true">×</span>
									    </button>
							            <div class="messages">
								        <div>Username or Email is already taken!</div>
						            	</div>
						                </div>
                                        <?php
										}
										else
										{
                                            $_SESSION['username_restaurant_qRewacvAqzA'] = $username;
                                            $_SESSION['password_restaurant_qRewacvAqzA'] = $password;
                                            $_SESSION['userid_restaurant_qRewacvAqzA'] = $row['user_id'];
                                            header('Location: index.php');
                                            die();
											
									}
					}
				?>

				    <!-- USERNAME INPUT -->

					<div class="form-input">
							<span class="txt1">Username</span>
								<input type="text" name="username" class = "form-control username" oninput="document.getElementById('username_required').style.display = 'none'" id="user" autocomplete="off">
							<div class="invalid-feedback" id="username_required">Username is required!</div>
					</div>

					<!-- PASSWORD INPUT -->
			
					<div class="form-input">
							<span class="txt1">Full name</span>
							<input type="fullname" name="fullname" class="form-control" oninput="document.getElementById('fullname_required').style.display = 'none'" id="fullname" autocomplete="new-fullname">
							<div class="invalid-feedback" id="fullname_required">fullname is required!</div>
					</div>

                    <div class="form-input">
							<span class="txt1">Email</span>
							<input type="email" name="email" class="form-control" oninput="document.getElementById('email_required').style.display = 'none'" id="email" autocomplete="new-email">
							<div class="invalid-feedback" id="email_required">email is required!</div>
					</div>

                    <div class="form-input">
							<span class="txt1">Password</span>
							<input type="password" name="password" class="form-control" oninput="document.getElementById('password_required').style.display = 'none'" id="password" autocomplete="new-password">
							<div class="invalid-feedback" id="password_required">Password is required!</div>
					</div>

                    <div class="form-input">
							<span class="txt1">Phone Number</span>
							<input type="nbr" name="nbr" class="form-control" oninput="document.getElementById('nbr_required').style.display = 'none'" id="nbr" autocomplete="new-nbr">
							<div class="invalid-feedback" id="nbr_required">nbr is required!</div>
					</div>

					<!-- REGISTER BUTTON -->
                    <br>
					<p>
							<button type="submit" class="form-control client_register" name="client_register" >Register</button>
					</p>

				</form>
		</div>

<?php include 'Includes/templates/footer.php'; ?>

    <style type="text/css">
        .client_register
        {
            background: #ffc851;
            color: white;
            border-color: #ffc851;
            font-family: work sans,sans-serif;
        }

        .register
        {
            max-width: 850px;
            margin: 50px auto;
            min-height: 500px;
        }
        .details_card
        {
            display: flex;
            align-items: center;
            margin: 150px 0px;
        }
        .details_card>span
        {
            float: left;
            font-size: 60px;
        }
        
        .details_card>div
        {
            float: left;
            font-size: 20px;
            margin-left: 20px;
            letter-spacing: 2px
        }
    </style>

    <section class="restaurant_details" style="background: url(Design/images/food_pic_2.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 50% 0%;
    background-size: cover;
    color:white !important;
    min-height: 300px;">
        <div class="layer">
            <div class="container">
            <div class="row">
            <div class="col-md-3 details_card">
                <span>30</span>
                <div>
                    Total 
                    <br>
                    Reservations
                </div>
            </div>
            <div class="col-md-3 details_card">
                <span>30</span>
                <div>
                    Total 
                    <br>
                    Menus
                </div>
            </div>
            <div class="col-md-3 details_card">
                <span>30</span>
                <div>
                    Years of 
                    <br>
                    Experience
                </div>
            </div>
            <div class="col-md-3 details_card">
                <span>30</span>
                <div>
                    Profesionnal 
                    <br>
                    Cook
                </div>
            </div>
        </div>
        </div>
         </div>
    </section>

    <!-- FOOTER BOTTOM  -->

    <?php include "Includes/templates/footer.php"; ?>

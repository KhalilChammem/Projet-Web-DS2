<!-- PHP INCLUDES -->

<?php
    //Set page title
    $pageTitle = 'Login';

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

        .login_section
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

	<div class="login">
			<form class="login-container validate-form" name="login-form" action="index.php" method="POST" onsubmit="return validateLoginForm()">
            <div class="text_header">
                <span>
                    Client Login
                </span>
            </div>
						
						<?php

							//Check if user click on the submit button

								if(isset($_POST['client_login']))
								{
										$username = test_input($_POST['username']);
										$password = test_input($_POST['password']);
										$hashedPass = sha1($password);

										//Check if User Exist In database

										$stmt = $con->prepare("Select client_id, username, password from users where username = ? and password = ?");
										$stmt->execute(array($username,$hashedPass));
										$row = $stmt->fetch();
										$count = $stmt->rowCount();

										// Check if count > 0 which mean that the database contain a record about this username

										if($count > 0)
										{

											$_SESSION['username_restaurant_qRewacvAqzA'] = $username;
												$_SESSION['password_restaurant_qRewacvAqzA'] = $password;
												$_SESSION['userid_restaurant_qRewacvAqzA'] = $row['user_id'];
												header('Location: dashboard.php');
												die();
										}
										else
										{
											?>
										<div class="alert alert-danger">
							<button data-dismiss="alert" class="close close-sm" type="button">
											<span aria-hidden="true">×</span>
									</button>
							<div class="messages">
								<div>Username and/or password are incorrect!</div>
							</div>
						</div>
										<?php 
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
							<span class="txt1">Password</span>
							<input type="password" name="password" class="form-control" oninput="document.getElementById('password_required').style.display = 'none'" id="password" autocomplete="new-password">
							<div class="invalid-feedback" id="password_required">Password is required!</div>
					</div>

					<!-- SIGNIN BUTTON -->
                    <br>
					<p>
							<button type="submit" class="form-control client_login" name="client_login" >Sign In</button>
					</p>

					<!-- FORGOT PASSWORD PART -->

					<span class="forgotPW">Forgot your password ? <a href="resetPassword.php">Reset it here.</a></span>

				</form>
		</div>

<?php include 'Includes/templates/footer.php'; ?>

    <style type="text/css">
        .client_login
        {
            background: #ffc851;
            color: white;
            border-color: #ffc851;
            font-family: work sans,sans-serif;
        }

        .login
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

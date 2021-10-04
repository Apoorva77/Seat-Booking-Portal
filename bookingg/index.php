<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Book Seats</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style >
        p.pos_left {
        position: relative;
        bottom:40px;
        left: 20px;
        }
    </style>    
</head>

<body>
    <div class="table-responsive">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-image: url('bg-01.jpg'); background-repeat: no-repeat; background-size: cover;">
        <p class=" pos_left" align="left">
            <a href="http://localhost/dashboard.php"><i style="font-size:40px" class="fa">&#xf060;</i></a>
        </p>
        <div class="wrapper wrapper--w790" >
            <div class="card card-5" style="width :50em">
                <div class="card-heading">
                    <h2 class="title"> Book Seats</h2>
                </div>
                <div class="card-body">
                    <form action="rootone.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc" >
                                            <input class="input--style-5" type="text" name="name">
                                            <label class="label--desc">Name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contact">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Father's Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="fname">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Amount Paid</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="amount">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Transaction ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="transaction">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="userselect">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Biotechnology">Biotechnology</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Computer Science">Computer Science</option>
                                             <option value="Electricals and Electronics">Electricals and Electronics</option>
                                              <option value="Electronics and communication">Electronics and communication</option>
                                               <option value="Information science">Information science</option>
                                                <option value= "Mechanical">Mechanical</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit_button">Submit</button>
                        </center>
                        </div>
                    </form>

                    <?php 


                    if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: black;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
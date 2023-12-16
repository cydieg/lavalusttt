<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify your Account</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F1F8FF;
            color: #ffffff;
        }

        .container {
            margin-top: 50px;
        }

        .box {
            background-color: #0F172B;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .form-control {
            background-color: #363636;
            color: #ffffff;
            border-color: #565656;
        }

        .form-control:focus {
            background-color: #464646;
            color: #ffffff;
            border-color: #787878;
        }

        .btn-primary {
            background-color: #FEA116;
            border-color: #FEA116;
        }

        .btn-primary:hover {
            background-color: #e55b00;
            border-color: #e55b00;
        }

        .submit {
            margin-top: 20px;
        }

        .text-center {
            color: #FEA116;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="box">
                    <h2 class="mb-4 text-center">Enter Email Verification Code</h2>
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>    
                    <?php if (isset($success_message)) { ?>
                        <div class="alert alert-success"><?php echo $success_message; ?></div>
                    <?php } ?>
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <form action="<?= site_url('index.php/check'); ?>" method="post">
                        <div class="form-group">
                            <label for="to">Verification code</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Enter verification code" required>
                            <input type="hidden" name="email" value="<?= $email ?>">
                        </div>
                        <div class="mt-3 d-flex justify-content-center submit">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

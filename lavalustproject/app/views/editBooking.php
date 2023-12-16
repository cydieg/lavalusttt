<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Appointment</title>

    <style>
        body {
            background-color:#c4ccdd; /* Change body background color */
        }

        .card-body {
            background-color:#6f42c1; /* Change form background color */
        }
    </style>
</head>
<body>
    <section class="vh-100 gradient-custom d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                        <a href="<?= site_url('/bookingDashboard') ?>" class="btn btn-primary mb-3">BACK</a>
                            <h3 class="mb-4">Appointment Update</h3>
                            <form action="<?php echo site_url('edit/');?><?=$data['sched_id'];?>" method="post">
                                <div class="mb-3">
                                    <label for="Checkin" class="form-label">Checkin</label>
                                    <input type="hidden" name="sched_id" value="<?=$data['sched_id']?>">
                                    <input type="text" name="checkin" id="Checkin" value="<?=$data['checkin']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Checkout" class="form-label">Checkout</label>
                                    <input type="text" name="checkout" id="Checkout" value="<?=$data['checkout']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Adult" class="form-label">Adult</label>
                                    <input type="text" name="adult" id="Adult" value="<?=$data['adult']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Child" class="form-label">Child</label>
                                    <input type="text" name="child" id="Child" value="<?=$data['child']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Child" class="form-label">Manifest</label>
                                    <input type="textarea" name="manifest" id="manifest" value="<?=$data['manifest']?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input class="btn btn-success btn-lg" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
require "functions/payment_function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid header bg-white pt-2 ">
        <div class="row g-0 align-items-center justify-content-center flex-column-reverse flex-md-row">
            <div class="col-md-8 p-2 mt-lg-2">
                <div class="card">
                    <div class="p-2 text-center h2 b" style="color:#00B98E">
                        Payment
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Student ID</label>
                                        <input type="text" name="std_id" id="form2Example1" class="form-control" value="<?php echo $std_id; ?>" placeholder="Enter Student ID" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Date of Order</label>
                                        <input type="date" name="dob" id="form2Example1" class="form-control <?php echo (!empty($dob_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dob; ?>" placeholder="Enter Date Of Birth" />
                                        <span class="invalid-feedback"><?php echo $dob_err; ?></span>
                                    </div>

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Meal Type</label>
                                        <select type="text" name="meal" class="form-control <?php echo (!empty($meal_err)) ? 'is-invalid' : ''; ?>" />
                                        <option disabled>----Select One-----</option>
                                        <option value="Lunch">Lunch</option>
                                        <option value="Dinner">Dinner</option>
                                        <option value="Lunch and Dinner">Lunch and Dinner</option>
                                        </select>
                                        <span class="invalid-feedback"><?php echo $meal_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Payment Amount</label>
                                        <input type="number" name="pay_amount" id="form2Example1" class="form-control" value="<?php echo $pay_amount; ?>" placeholder="Payment Amount" />
                                    </div>
                                </div>

                            </div>

                            <!-- Submit button -->
                            <div class="form-group text-center">
                                <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Pay Now">
                                <input type="reset" class="btn btn-secondary ml-3" value="Reset">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Register End -->
</body>

</html>
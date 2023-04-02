<?php
require "functions/register_functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
                        Register
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-outline mb-2">
                                        <label class="form-label" class="py-4">Name</label>
                                        <input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" placeholder="Enter Your Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Discipline Name</label>
                                        <input type="text" name="discipline" id="form2Example1" class="form-control" value="<?php echo $discipline; ?>" placeholder="Enter Discipline" />
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Student ID</label>
                                        <input type="text" name="std_id" id="form2Example1" class="form-control" value="<?php echo $std_id; ?>" placeholder="Enter Student ID" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Contact No</label>
                                        <input type="text" name="contact" id="form2Example1" class="form-control" value="<?php echo $contact; ?>" placeholder="Enter Contact No" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example1" class="py-4">Room no</label>
                                        <input type="number" name="room_no" id="form2Example1" class="form-control" value="<?php echo $room_no; ?>" placeholder="Enter room no" />
                                </div>
                                    
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="form-group text-center">
                                <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Register">
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
<?php
require_once "dbconfig.php";
// Define variables and initialize with empty values
$std_id = $meal = $transaction_id = $dob = $price = "";
$std_id_err = $meal_err = $dob_no_err = $price_err = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Validate student id
     if (empty(trim($_POST["std_id"]))) {
          $std_id_err = "Please Enter Your student id.";
     } else {
          $std_id = trim($_POST["std_id"]);
     }

     // Validate meal
     if (empty(trim($_POST["meal"]))) {
          $meal_err = "Select meal type";
     } else {
          $meal = trim($_POST["meal"]);
     }

     // Validate date of order
     if (empty(trim($_POST["dob"]))) {
          $dob_err = "Please Enter Date of Order.";
     } else {
          $dob = trim($_POST["dob"]);
     }
     // Validate payment amount
     if (empty(trim($_POST["pay_amount"]))) {
        $price_err = "Please Enter Date of Order.";
   } else {
        $price = trim($_POST["pay_amount"]);
   }


     // Check input errors before inserting in database
     if (empty($std_id_err) && empty($meal_err) && empty($dob_err)&& empty($price_err)) {
          $transaction_id = "T" . $dob .$std_id;
          // Prepare an insert statement
          $sql = "INSERT INTO payments (Transaction_ID,Student_ID,Date_of_transaction,Price,Meal_type) VALUES (?, ?, ?, ?, ?)";

          if ($stmt = mysqli_prepare($link, $sql)) {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "sisss", $transaction_id, $std_id, $dob, $price, $meal);
               // Attempt to execute the prepared statement
               mysqli_stmt_execute($stmt);
               // Close statement
               mysqli_stmt_close($stmt);
          }
     }

     // Close connection
     mysqli_close($link);
}

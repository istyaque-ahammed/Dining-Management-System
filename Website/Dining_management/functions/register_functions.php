<?php
require_once "dbconfig.php";
// Define variables and initialize with empty values
$name = $std_id = $contact = $discipline = $room_no = "";
$name_err = $std_id_err = $contact_err = $discipline_err = $room_no_err = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Validate Name
     if (empty(trim($_POST["name"]))) {
          $name_err = "Please Enter Your Name.";
     } else {
          $name = trim($_POST["name"]);
     }

     // Validate student id
     if (empty(trim($_POST["std_id"]))) {
          $std_id_err = "Please Enter Your student id.";
     } else {
          $std_id = trim($_POST["std_id"]);
     }

     // Validate contact
     if (empty(trim($_POST["contact"]))) {
          $contact_err = "Please Enter Your contact.";
     } else {
          $contact = trim($_POST["contact"]);
     }


     // Validate address
     if (empty(trim($_POST["room_no"]))) {
          $room_no_err = "Please Enter Your Room No.";
     } else {
          $room_no = trim($_POST["room_no"]);
     }

     // Validate discipline
     if (empty(trim($_POST["discipline"]))) {
          $discipline_err = "Please Enter Your discipline.";
     } else {
          $discipline = trim($_POST["discipline"]);
     }


     // Check input errors before inserting in database
     if (empty($name_err) && empty($std_id_err) && empty($contact_err) && empty($room_no_err) && empty($discipline_err)) {

          // Prepare an insert statement
          $sql = "INSERT INTO student (Student_name,Room_number,Discipline_name,Student_ID,Mobile_Number) VALUES (?, ?, ?, ?, ?)";

          if ($stmt = mysqli_prepare($link, $sql)) {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "sisss", $name, $room_no, $discipline, $std_id, $contact);
               // Attempt to execute the prepared statement
               mysqli_stmt_execute($stmt);
               // Close statement
               mysqli_stmt_close($stmt);
          }
     }

     // Close connection
     mysqli_close($link);
}

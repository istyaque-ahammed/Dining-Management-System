<!DOCTYPE html>
<html>
<head>
	<title>Database Query</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'query.php'; ?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-box">
				<input class='form-control' type="text" placeholder="Enter Discipline name" name="search" value="<?php echo $search; ?>">
				<input type="submit" class="btn-primary" value="Search">
			</div>
			
    </form>
	
</body>
</html>

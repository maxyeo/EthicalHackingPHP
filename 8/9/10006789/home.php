<?php

// this line matters
session_start();

if (!isset($_SESSION['admin_id'])) {
	header('location: index.php');
} else {?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Dream Machine | Inception</title>
    <meta name="description" content="">
    <meta name="author" content="Ethical Hacking | Group 3 - CN & Max">

    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon" href="">

    <meta name="theme-color" content="">

    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="bg-filter">

        <form action="upload.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Upload Image" name="submit">
		</form>

        <footer>
        </footer>

    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
</body>
</html>

<?php
}
?>
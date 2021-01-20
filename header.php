<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if ( strpos($url, 'index.php') !== false ) {
                echo('Zoom Meetings | Zoom Node');
            }
        ?>
    </title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=0" />
<link rel="icon" href="img/icon.png">
<meta name="description" content="">
<meta name="author" content="">

<!-- LINKS -->
<link href="public/styles.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/d70f8cdd06.js" crossorigin="anonymous"></script>

<!-- JS, Popper.js, and jQuery -->
<script>

</script>
</head>
<body class="bg-gray-800">
  <header class="bg-white shadow m-5 bg-gray-800">
    <img src="https://prof-de-net.online/img/logos/default-monochrome.svg" class="w-1/5 float-left">
    <button class="btn btn--primary bg-green-500 text-white float-right p-2 rounded-lg">Reture au site</button>
  </header>
  <h1 class="text-3xl font-bold leading-tight text-center text-white">
          Les Class Onlines
  </h1>         


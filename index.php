<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArezSite</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
    
</head>
<body class="container">
    <header >
        <!-- Navbar -->
         <?php include "includes/navbar.php" ?>

    </header>    
    
    <!-- Content -->
     <div class="container d-flex justify-content-center w-auto h-auto vh-100">
        <div class="m-5">
            <?php include "content.php" ?>
        </div>
     </div>

    <footer class="d-flex justify-content-center ">
        <div class="text-bg-dark 3 min-vw-100 text-center fs-6 fw-lighter p-2
         w-auto fixed-bottom">
            Pemograman Web 1 @<?= date("Y") ?>
        </div>
    </footer>

    <!-- script -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <script>
        new DataTable('#example');
    </script>
</body>
</html>
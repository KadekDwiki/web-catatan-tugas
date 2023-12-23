<?php
require "controller/Core.php";
$core = new Core;

// Untuk menghandle penambahan data tugas
if (isset($_POST["submit"])) {
   $result = $core->addTask($_POST["task"], $_POST["location"], $_POST["date"], $_POST["time"]);
   header("Location:http://localhost/kuliah/website_yourtask/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AdaTugas</title>
   <!-- bootstrap link -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <!-- fontawesome icon cdn link -->
   <script src="https://kit.fontawesome.com/d66a7a980c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-body-light">
   <!-- header section-->
   <nav class="navbar navbar-expand-lg bg-body-secondary">
      <div class="container">
         <a class="navbar-brand" href="./"><i class="fa-solid fa-list-check"></i> AdaTugas</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-end">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="kontak.php">Kontak</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- body section -->
   <div class="container mt-5 px-3">
      <div class="row">
         <div class="col d-flex flex-column align-items-center justify-content-center text-center">
            <h1>Simpan Tugas Anda Bersama Kami</h1>
            <p>Mari atur rencana, prosedur, dan evaluasi tugas anda dengan nyaman di sini, sehingga tidak ada tugas yang terlupakan!</p>
            <div class="line"></div>
         </div>
      </div>

      <!-- task table -->
      <div class="row mt-5">
         <div class="px-0">
            <form action="" method="POST">
               <div class="row">
                  <div class="col">
                     <div class=" mb-3">
                        <label for="task" class="form-label">Tuliskan tugas anda</label>
                        <input type="text" name="task" class="form-control" id="task" placeholder="Buat tugas UAS Tool Teknologi Informasi">
                     </div>
                     <div class="mb-3">
                        <label for="location" class="form-label">Dimana tempatnya? (opsional)</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Dirumah aja">
                     </div>
                  </div>
                  <div class="col">
                     <div class="mb-3">
                        <label for="deadline" class="form-label">Tanggal batas akhir (opsional)</label>
                        <input type="date" name="date" class="form-control" id="deadline">
                     </div>
                     <div class="mb-3">
                        <label for="time" class="form-label">Waktu batas akhir (opsional)</label>
                        <input type="time" name="time" class="form-control" id="time">
                     </div>
                  </div>
               </div>
               <button type="submit" name="submit" class="btn btn-primary">Tambahkan Tugas</button>
            </form>
         </div>
      </div>
   </div>
   <script src="js/bootstrap.js"></script>
</body>

</html>
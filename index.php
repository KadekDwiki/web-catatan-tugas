<?php
require "controller/Core.php";

$core = new Core;

$tasks = $core->getTasks();

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
         <a class="navbar-brand" href="#"><i class="fa-solid fa-list-check"></i> AdaTugas</a>
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
            <a href="tambahtask.php" class="btn btn-primary mb-4"><i class=" fa-solid fa-plus"></i> Tambah</a>
         </div>
         <div class="table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col" width="10">No.</th>
                     <th scope="col">Task</th>
                     <th scope="col">Location</th>
                     <th scope="col">Deadline</th>
                     <th scope="col">Time </th>
                     <th scope="col" width="200">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($tasks as $key => $task) { ?>
                     <tr>
                        <th scope="row"><?= ++$key ?></th>
                        <td><?= $task["task"] ?></td>
                        <td><?= $task["location"] ?></td>
                        <td><?= $task["date"] ?></td>
                        <td><?= $task["time"] ?></td>
                        <td>
                           <a href="edittask.php?id=<?= $task["id"] ?>" class="btn btn-warning btn-sm text-light mb-1"><i class="fa-solid fa-plus"></i> Edit</a>
                           <a href="deletetask.php?id=<?= $task["id"] ?>" class="btn btn-danger btn-sm text-light mb-1" onclick="return confirm('Yakin ingin menghapus tugas ini?');"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
            <?php if ($tasks == null) { ?>
               <p class="fs-5 mt-4 text-center">Tidak ada tugas yang harus diselesaikan, waktunya tidur 💤</i></p>
            <?php } ?>
         </div>
      </div>
   </div>
   <footer>
      <p class="text-center p-5"></p>
   </footer>
   <script src="js/bootstrap.js"></script>
</body>

</html>
<?php

require "Koneksi.php";

class Core extends Koneksi
{
   // fungsi untuk mengambil data tugas
   public function getTasks()
   {
      $query = "SELECT * FROM tb_tugas";
      $tasks = mysqli_query($this->conn, $query);

      $rows = [];
      while ($row = mysqli_fetch_assoc($tasks)) {
         $rows[] = $row;
      }
      return $rows;
   }

   //fungsi untuk mengambil data task berdasarkan Id nya
   public function getTask($id)
   {
      $idTask = $id;
      $query = "SELECT * FROM tb_tugas WHERE id = $idTask";
      $row = mysqli_query($this->conn, $query);
      $task = mysqli_fetch_assoc($row);
      return $task;
   }

   //fungsi untuk menambahkan data tugas
   public function addTask($task, $location, $date, $time)
   {
      $inTask = $task;
      $inLocation = $location;
      $inDate = $date;
      $inTime = $time;
      $query = "INSERT INTO tb_tugas (task, location, date, time) VALUES ('$inTask', '$inLocation', '$inDate', '$inTime')";
      mysqli_query($this->conn, $query);
   }

   //fungsi untuk update data tugas
   public function updateTask($id, $task, $location, $date, $time)
   {
      $taskId = $id;
      $inTask = $task;
      $inLocation = $location;
      $inDate = $date;
      $inTime = $time;
      $query = "UPDATE tb_tugas SET task = '$inTask', location = '$inLocation', date = '$inDate', time = '$inTime' WHERE id = '$taskId'";
      mysqli_query($this->conn, $query);
   }

   public function deleteTask($id)
   {
      $taskId = $id;
      $query = "DELETE FROM tb_tugas WHERE id = $taskId";
      mysqli_query($this->conn, $query);
   }
}

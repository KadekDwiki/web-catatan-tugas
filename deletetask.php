<?php

require "controller/Core.php";

$core = new Core;

if (isset($_GET["id"])) {
   $result = $core->deleteTask($_GET["id"]);
   header("Location:http://localhost/kuliah/website_yourtask/");
}

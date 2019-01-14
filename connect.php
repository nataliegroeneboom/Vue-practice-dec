<?php
echo 'backend'

if(!empty($_POST['range'])){

  if($_POST['range']=='all'){
  echo json_encode(['msg'=>'data recieved and validated'])
  }
}
?>

<?php
session_start();
$user_info = $_SESSION['user_info'];
$path = "public/pages/";
$main_path = $_SERVER['REQUEST_URI'];
if (isset($user_info['user_id'])) {
  if (isset($_GET['page']) && file_exists($_GET['page'].'.php')) {
    include_once($path.'__style__.php');
    include_once($path.'__header__.php');
    include_once($path.$_GET['page'].'.php');
    include_once($path.'__footer__.php');
  } else if ($_GET['page'] == "index.php") {
    include_once($path.'__style__.php');
    include_once($path.'__header__.php');
    include_once($path.'__dashboard__.php');
    include_once($path.'__footer__.php');
  } else if ($_GET['page'] == "index.php?page=__logout__") {
    include_once($path.'__style__.php');
    include_once($path.'__header__.php');
    include_once($path.'__logout__.php');
    include_once($path.'__dashboard__.php');
    include_once($path.'__footer__.php');
  } else if ($_GET['page'] == "index.php?page=__logout__") {
    include_once($path.'__style__.php');
    include_once($path.'__header__.php');
    include_once($path.'__logout__.php');
      include_once($path.'__login__.php');
    include_once($path.'__footer__.php');
  } else {
    include_once($path.'__style__.php');
    include_once($path.'__header__.php');
    include_once($path.'__dashboard__.php');
    //include($path.$_GET['page'].'.php');
    include($path.$_GET['page'].'.php');
    include_once($path.'__footer__.php');
  }
} else {
  include_once($path.'__style__.php');
  include_once($path.'__header__.php');
  include_once($path.'__login__.php');
  include_once($path.'__footer__.php');
}
?>
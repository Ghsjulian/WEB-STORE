<?php
$path = "public/pages/";

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
} else {
  include_once($path.'__style__.php');
  include_once($path.'__header__.php');
  include_once($path.'__dashboard__.php');
  //include($path.$_GET['page'].'.php');
  include($path.$_GET['page'].'.php');
  include_once($path.'__footer__.php');
}
?>
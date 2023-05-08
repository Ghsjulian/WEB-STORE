<?php
session_start();
$u_info = $_SESSION['user_info'];
include_once('__style__.php');
?>
<body>
  <div class="side-bar">
    <h3>Menu</h3>
    <div id="side-search">
      <input
      id="search-value"
      type="text"
      name="search"
      placeholder="Search..."
      />
    <button type="button" value="" id="srch_btn">🔍</button>
  </div>
  <li>
    <object
      data="public/svg/dashboard.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="index.php">Dashboard</a>
  </li>
  <li>
    <object
      data="public/svg/users.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="index.php?page=__category_list__">Category List</a>
  </li>
  <li>
    <object
      data="public/svg/content.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="#">Content</a>
  </li>
  <li>
    <object
      data="public/svg/comment.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <?php
    if ($u_info['user_role'] != "Admin") {
      ?>
      <a href="index.php?page=__ordered__">
        Your Orders</a>
      <?php
    } else {
      ?><a href="index.php?page=__ordered__">
        Orders</a>
      <?php
    }
    ?>
  </li>
  <li>
    <object
      data="public/svg/videos.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="#">Delivered</a>
  </li>
  <li>
    <object
      data="public/svg/profile-circle.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="#">Profile</a>
  </li>
  <li>
    <object
      data="public/svg/profile-circle.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="index.php?page=__update_product__">Upload Product</a>
  </li>
  <li>
    <object
      data="public/svg/notification.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="#">Notification</a>
  </li>
  <?php
  if ($u_info['user_role'] != "Admin") {
    ?>
    <li>
      <object
        data="public/svg/info.svg"
        width="30"
        height="30"
        type="image/svg+xml"
        ></object>
      <a href="#">About Us</a>
    </li>
    <li>
      <object
        data="public/svg/notification.svg"
        width="30"
        height="30"
        type="image/svg+xml"
        ></object>
      <a href="#">Contact Us</a>
    </li>
    <?php
  }
  ?>
  <li>
    <object
      data="public/svg/notification.svg"
      width="30"
      height="30"
      type="image/svg+xml"
      ></object>
    <a href="index.php?page=__logout__">Logout</a>
  </li>
</div>
<div class="top-bar">
  <h3 class="logo">
    <span style="color: #f00">Web</span>-<span
      style="color: rgb(220, 0, 200)"
      >Fashion</span
    >
  </h3>
  <div class="navbar">
    <a href="#"
      ><img src="public/icons/ghs_logo.png"
      /></a>
</div>
<img
id="menu"
src="public/svg/menu-bar.svg"
width="30"
height="30"
type="image/svg+xml"
/>
</div>
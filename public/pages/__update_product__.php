<section id="Dashboard" class="tab">
  <div class="product-area">
    <div id="login" class="login">
      <center>
        <h1>
          Update
          <span>Products</span>
        </h1>
        <br />
      <!--<img src="svg/profile-circle.svg" />--->
      <form id="myfrm" action="#" method="POST">
        <p style="display: none" class="_error"></p>
        <p style="display: none" class="_success"></p>
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input
        type="file"
        name="file"
        id="file"
        class="inputfile"
        accept="image/png, image/jpeg"
        />
      <label id="upload" for="file">Upload Image</label>
      <input
      type="text"
      name="action"
      placeholder="Enter Full Name "
      value="Login"
      id="action"
      autocomplete="on"
      hidden="true"
      />
    <input
    type="text"
    name="product_name"
    placeholder="Enter Product Name"
    id="product_name"
    autocomplete="on"
    onfocus="true"
    />
  <input
  type="text"
  name="product_size"
  placeholder="Enter Product Size"
  id="product_size"
  autocomplete="on"
  onfocus="true"
  />
<input
type="number"
name="product_price"
placeholder="Enter Price"
id="product_price"
autocomplete="on"
onfocus="true"
/>

<input
type="text"
name="product_dscrpt"
placeholder="Enter Descriptions"
id="product_dscrpt"
autocomplete="on"
onfocus="true"
/>
<button class="__upload_btn" type="submit" id="__btn">
Upload Now
</button>
</form>
</center>
</div>
</div>
</section>
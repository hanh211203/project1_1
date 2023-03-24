<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/style.css">
    <script src='ckeditor/ckeditor.js'></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" id="header">
    <img id="logo" src="./public/logo1.jpg">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
    </svg>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div id="sidebar-collapse" class="box1 col-md-6 col-lg-2">
    <div class="list-group" >
        <a href="index.php" class="list-group-item list-group-item-action" style="color:black">Dashboard</a>
        <a href="?controller=admin" class="list-group-item list-group-item-action"style="color:black">Admin Management</a>
        <a href="?controller=customer" class="list-group-item list-group-item-action" style="color:black">Customer Management</a>
        <a href="?controller=category" class="list-group-item list-group-item-action" style="color:black">Category Management</a>
        <a href="?controller=product" class="list-group-item list-group-item-action"  id="maincolor">Product Management</a>
        <a href="?controller=order" class="list-group-item list-group-item-action" style="color:black">Order Management</a>
        <a href="?controller=revenue_statistics" class="list-group-item list-group-item-action" style="color:black">Revenue Statistics</a>
    </div>
</div>
<div class="box1 col-md-6 col-lg-10 col-lg-offset-2 main">
  <div class="row" >
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                    </svg>
                </li>
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Admin management</li>
            </ol>
            </nav>
    </div>
    <div class="row">
      <div class="container">
        <form method="post" enctype="multipart/form-data" action="?controller=product&action=store">
          <?php 
              if(isset($error)) {
                  echo $error;
              }
          ?>
          <h1 style="text-align:center">ADD A NEW PRODUCT</h1>
        <div class="box1 col-lg-6">  
          <div class="mb-3">
            <label for="prd_name" class="form-label"><b>Product name</b></label>
            <input type="text" id="prd_name" name="prd_name" class="form-control" placeholder="Enter product name" required>
          </div>
          <div class="mb-3">
            <label for="cat_name" class="form-label"><b>Category name</b></label>
              <select name="cat_id" class="form-control">

                 <option>1</option>
                 <option>2</option>
                 
              </select>
          </div>
          
        
          <div class="mb-3">
            <label for="weight" class="form-label"><b>Weight</b></label>
            <input type="text" id="weight" name="weight" class="form-control" placeholder="Weight" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label"><b>Price</b></label>
            <input type="text" id="price" name="price" class="form-control" placeholder="Price" required>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label"><b>Image</b></label>
            <input  name="image" type="file" onchange="preview()">
            <br>
            <div>
                <img src="./public/no-img.jpg" id="prdImage" width="295px" height="390px">
            </div>
          </div>
        </div>
        <div class="box1 col-lg-6">
          <div class="mb-3">
            <label for="uses" class="form-label"><b>Uses</b></label>
            <textarea name="description" id="uses" cols="30" row="20"></textarea>
          </div>
          <div class="mb-3">
            <label for="recommended_use" class="form-label"><b>Recommended_use</b></label>;
            <textarea name="description" id="recommended_use" cols="30" row="20"></textarea>
          </div>
          <div class="mb-3">
            <label for="expiry" class="form-label"><b>Expiry</b></label>
            <input type="text" id="expiry" name="expiry" class="form-control" placeholder="Expiry" required>
          </div>
          <div class="mb-3">
            <label style="color:black"><b>Quantity</b></label>
            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity" required>
          </div>
        </div>
          <button type="submit" name="submit" class="btn btn-primary" id="button" style="color:black">Add</button>
          <button type="reset" name="reset" class="btn btn-warning" style="background-color:rgb(240, 222, 103)">Refresh</button>
        </form>
      </div>
    </div>
</div>
    <script>
        function preview(){
            prdImage.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
<script>CKEDITOR.replace('uses')</script>
<script>CKEDITOR.replace('recommended_use')</script>          
</html>
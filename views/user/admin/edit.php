<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/style.css">
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
        <a href="?controller=admin" class="list-group-item list-group-item-action" id="maincolor">Admin Management</a>
        <a href="?controller=customer" class="list-group-item list-group-item-action" style="color:black">Customer Management</a>
        <a href="?controller=category" class="list-group-item list-group-item-action" style="color:black">Category Management</a>
        <a href="?controller=product" class="list-group-item list-group-item-action" style="color:black">Product Management</a>
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
      <?php 
      foreach($record as $item){
      ?>
            <form method="post" action="?controller=admin&action=update">
              <?php 
                  if(isset($error)) {
                      echo $error;
                  }
              ?>
              <h1 style="text-align:center">EDIT MEMBER</h1>
              <input type="hidden" id="adm_id" name="adm_id" value="<?= $item['adm_id'] ?>">
                  <div class="box1 col-lg-4">
                  
                    <div class="mb-3">         
                      <label for="adm_first_name" class="form-label"><b>Firstname</b></label>
                      <input type="text" id="adm_first_name" name="adm_first_name"
                        class="form-control" value="<?= $item['adm_first_name']?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="adm_last_name" class="form-label"><b>Lastname</b></label>
                      <input type="text" id="adm_last_name" name="adm_last_name"
                        class="form-control" value="<?= $item['adm_last_name']?>" required>
                    </div>  
                    <div class="mb-3">
                      <label for="adm_phone" class="form-label"><b>Phone</b></label>
                      <input type="text" id="adm_phone" name="adm_phone"
                        class="form-control" value="<?= $item['adm_phone']?>" required>
                    </div>  
                    <div class="mb-3">
                      <label for="adm_email" class="form-label"><b>Email</b></label>
                      <input type="text" id="adm_email" name="adm_email"
                      class="form-control" value="<?= $item['adm_email']?>" required> 
                    </div>
                </div>
                <div class="box1 col-lg-4">  
                    <div class="mb-3">
                      <label for="adm_address" class="form-label"><b>Address</b></label>
                      <input type="text" id="adm_address" name="adm_address"
                      class="form-control" value="<?= $item['adm_address']?>" required> 
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label"><b>Username</b></label>
                      <input type="text" id="username" name="username"
                      class="form-control" value="<?= $item['username']?>" required> 
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label"><b>Password</b></label>
                      <input type="text" id="password" name="password"
                      class="form-control" value="<?= $item['password']?>" required> 
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <button type="reset" name="reset" class="btn btn-warning">Refresh</button>
                </div>
            </form>
      <?php } ?>
  </div>
    </div>
</div>
</body>
</html>
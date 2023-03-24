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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

//Goi danh muc
    <div id="sidebar-collapse" class="box1 col-md-6 col-lg-2">
        <div class="list-group" >
            <?php
                foreach($arr['category']as $item){ 
                    ?>

                    <a href="admin.php" class="list-group-item list-group-item-action" style="color:black">Dashboard</a>

                    <?php 
                    }
                    ?>
        </div>
    </div>


    <div class="box1 col-md-6 col-lg-10">	
        <div class="row">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                </svg>
                </li>
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
            </nav>
        </div>
//HIEN THI SAN PHAM LEN TRANG CHU
        
        <div class="products">
            <h3 style="bold">FEATURED PRODUCTS</h3>
            <div class="product-list row">
                <?php
                    foreach($arr['product'] as $item){

                ?>
                
                <div class="col-lg-3 col-md-6 col-sm-12 mx-product">
                    <div class="product-item card text-center">
                        <a href="product-detail.php?prd_id=<?php echo $prdFeatured['prd_id']; ?>"><img src="images/product/<?php echo $prdFeatured['image']; ?>"></a>
                        <h4><a href="product-detail.php?prd_id=<?php echo $prdFeatured['prd_id']; ?>"><?php echo $prdFeatured['prd_name']; ?></a></h4>
                        <p>Price: <span><?php echo number_format($prdFeatured['price'],0,'.',',');?> VND</span></p>
                    </div>
                </div>
                <?php        
                            }
                ?>
                
            </div>
        </div>
    
        
    
    </div>
    
</body>
</html>
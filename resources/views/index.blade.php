@extends('layouts.same')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
 
 
  
  <link rel="stylesheet" href="../bootstrap-5.1.1-dist/css/bootstrap.min.css">

 <link rel="stylesheet" href="../css/front.css"> 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

  
</head>  

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="box">
    
    @section('content')
      <header class="bg-warning p-2 text-dark bg-opacity-10 py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-dark mb-2">Enjoy Your<br>
                          <span>Food</span><br>
                          In Town</h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <button class="btn btn-warning btn-lg px-4 me-sm-3" onclick="window.location.href='{{route('menu')}}'"><ion-icon name="cart-outline"></ion-icon>Order now</button>
                            <a class="btn btn-outline-dark btn-lg " onclick="window.location.href='{{route('order.home')}}'">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="../img/burgers-gdcb77bed8_640.png" alt="..." /></div>
            </div>
        </div>
    </header>
 
   
<div class="container mt-5">
    <div class="row text-center">
      <div class="col-sm-12">
        <div class="sub-heading">
          <h3 class="sub" style="font-family: cursive">Fresh Quality</h3>
        </div>
        <div class="sub-heading">
          <h2>We Offer People Best Way<br>
            To Eat Best Food</h2>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid rounded-circle" src="../img/pizza (1).jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">somthing special for you</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5">
      <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2">
              <div class="p-5"><img class="img-fluid rounded-circle" src="../img/pizza (1).jpg" alt="..." /></div>
          </div>
          <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                  <h2 class="display-4">somthing special for you</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
              </div>
          </div>
      </div>
  </div>
      <div class="col-sm-6">
        <div class="card">
          <img src="../img/vegthali (2).jpg" alt="" class="src">
          <div class="card-body">

            <a href="#" class="btn btn-warning">Order Veg</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="card">
          <img src="../img/thali3.jpg" alt="" class="src">
          <div class="card-body">


            <a href="#" class="btn btn-warning">Order Nonveg</a>
          </div>
        </div>
      </div>
    </div>
    
      <div class="row mt-5 bg-warning p-2 text-dark bg-opacity-10">
        <div class="col s6">
          <img src="../img/delivery_bike.png" alt="" class="src">
        </div>
        <div class="col s6">
          <div class="site_heading">
          <h3 class="sub_title">Free Delivery</h3>
          <h2 class="section_title">Delivered On Right<br> Time &amp; Place</h2>
          <img src="../img/section_delimiter.png" alt="img" class="section_devider">
          <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
          
          <button type="button" class="btn btn-warning"><ion-icon name="call-outline"></ion-icon> Call now</button>
          
       </div>
      </div>
    </div>


  </div>
</div> 
</div>


@endsection








</body>

</html>
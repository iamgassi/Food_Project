@extends('../layouts.same')

@section('content')


<html lang="en">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        margin:0;
        padding:0;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
  <h1>
  This is Your Order page
</h1>

<div class="pt-3 mt-4 text-muted border-top"></div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Make Your Order Only</h2>
          <p>Here, we make your order done to save your time.</p>
          <button class="btn btn-outline-light" onclick="window.location.href='{{route('order.order_only')}}'" type="button">Order Only</button>
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Make Your Order And Delivery</h2>
          <p>Here, we will make your order and delivery it to under area of 3 KM .</p>
          <button class="btn btn-outline-secondary" onclick="window.location.href='{{route('order.order_and_delivery')}}'" type="button">Order and Delivery</button>
        </div>
      </div>
    </div>

    <div class="pt-3 mt-4 text-muted border-top">
    
    </div>
  </div>

  <h1>Items That are Loved Most</h1>

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



<main>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/thali3.jpg" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.6 Star</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/daal.webp" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.9 Star</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/pizza (1).jpg" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.1 Star</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/thali3.jpg" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.6 Star</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/daal.webp" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.9 Star</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/thali3.jpg" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               <button type="button" class="btn  btn-warning">Order Now</button>
                </div>
                <small class="text-muted">4.6 Star</small>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  
    </main>

   
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      



    
  </body>
</html>


@endsection


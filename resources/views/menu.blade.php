@extends('layouts.same')
<!DOCTYPE html>
  <html>
    <head>
      <!-- for font and icon-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="../bootstrap-5.1.1-dist/css/bootstrap.min.css">
      <script src="../bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>


      <!-- for icons bootstrap -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <link rel="stylesheet" href="css/style.css">
      <title>Menu</title>
    </head>



    <body>

    


    @section('content')
      <main class="flex-shrink-0">
       


    

      
       <!-- Button trigger modal -->
<button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>item1</li>
         <li>item1</li>
         <li>item1</li>
         <li>item1</li>
         <li>item1</li>
         <li>item1</li>
         <input type="checkbox" name="group1" id="1"> <span name="group1">hello</span>
        

       </ul>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close()">Close</button>
        <button onclick="save()" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<button class="btn1 Sbtn">NonVeg</button>
<button class="btn1 Sbtn">Veg</button>
<button class="btn1 Sbtn">Dosa</button>
<button class="btn1 Sbtn">Pizza</button>
<button class="btn1 Sbtn">Special</button>

       
      </div>
   
      <!-- <div id="save"> </div> -->

      <div class="fluid-container">
          <h1>Most Delicious Items, Must try!</h1>
          
          

          <!-- <div class="row">
            <div class="col ">
              <div class="card mb-3" >
                <div class="card-image">
                 <a href="{{route('order.home')}}"> <img src="../img/z-nveg.avif" ></a>
                  <span class="card-title">Non chnage Veg</span>
                </div>
                <div class="card-content">

                <p>Best Non Veg <button  onclick="window.location.href ='{{route('order.home')}}'" class="btn btn-warning"> Order Now</button></p>
                </div>
                
              </div>
            </div>

            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                <a href="#">
                  
                <img src="../img/z-chaap.avif"></a>
              
                <span class="card-title">Chaap</span>
                </div>
                <div class="card-content">
                  <p>Best Chaap <button class="btn btn-warning"> Order Now</button></p>
                </div>
                
              </div>
            </div>
            
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <a href="#"><img src="../img/z-pizza.avif"></a> 
                  <span class="card-title">Pizaa</span>
                </div>
                <div class="card-content">
                  <p>Best Pizza <button class="btn btn-warning"> Order Now</button></p>
                </div>
               
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                 <a href="#"> <img src="../img/paneer.webp"></a>
                  <span class="card-title">Non Veg</span>
                </div>
                <div class="card-content">
                  <p>Best Non Veg <button class="btn btn-warning"> Order Now</button></p>
                </div>
                
              </div>
            </div>

            <div class="col ">
              <div class="card">
                <div class="card-image">
                <a href="#">   <img src="../img/fried-chicken.jpg"></a>
                  <span class="card-title">Chaap</span>
                </div>
                <div class="card-content">
                  <p>Best Chaap <button class="btn btn-warning"> Order Now</button></p>
                </div>
                
              </div>
            </div>
            
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <a href="#"><img src="../img/daal.webp"></a> 
                  <span class="card-title">Pizaa</span>
                </div>
                <div class="card-content">
                  <p>Best Pizza <button class="btn btn-warning"> Order Now</button></p>
                </div>
              </div>
            </div>
          </div> -->

          <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
      
        <div class="col">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"src="../img/thali3.jpg" alt="..." />
           
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
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
                <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
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
                <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
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
               <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
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
                <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
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
               <button type="button" class="btn  btn-warning" onclick="window.location.href='{{route('order.home')}}'">Order Now</button>
                </div>
                <small class="text-muted">4.6 Star</small>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


      </div>
   

        <div class="menu">
          <h1 style="display: flex; justify-content: center;" >Menu</h1>
        <div class="coloumn"> 
          <ul type="Square"><h3>DAAL</h3>
            <li>Daal Makhani</li>
            <li>Yellow Daal Tadka</li>
            <li>Daal Fried</li>
            <li>Daal Haandi</li>
          </ul>  

          <ul type="Square"><h3>CHAAP</h3>
            <li>Chaap Masala</li>
            <li>Lemon Gravy Chaap</li>
            <li>Chaap Kali Mirch</li>
        
          </ul>

          <ul type="Square"><h3>SNACKS</h3>
            <li>Mushroom Chilly</li>
            <li>Cheese Chilly</li>
            <li>Egg Noodles</li>
            <li>Noodles</li>
            <li>Finger Chips</li>
            <li>Munchuriyan Gravy</li>
          </ul>

        </div>

        <div class="coloumn"> 
          <ul type="Square"><h3>SALADS & RAITA</h3>
         <li>Plain Dahi</li>
         <li>Boondi Raita</li>
         <li>MIx Raita</li>
         <li>Green Salad</li>
         <li>Fruit Salad</li>
         <li>Cream Kachumber Salad</li>
          </ul>  

          <ul type="Square"><h3>VEG. AND PANEER</h3>
            <li>Kadahi Paneer</li>
            <li> Shahi Paneer</li>
            <li>Paneer Malai Methi</li>
            <li>Matar Paneer</li>
            <li>Paneer Do Pyaja</li>
            <li>Paneer Bhuji</li>
            <li>Lemon Paneer</li>
            <li>Palak Paneer</li>
          </ul>

          <ul type="Square"><h3>PARANTHA</h3>
            <li>Laccha Parantha</li>
            <li>Aloo Parantha</li>
            <li>Gobhi Parantha</li>
            <li>Onion Parantha</li>
            <li>Paneer Parantha</li>
            <li>Stuff Parantha</li>
            <li>Mix Parantha</li>
            <li>Aloo And Onion Parantha</li>
            <li>Gobhi And Onion Parantha </li>
          </ul>
        </div>

        <div class="coloumn">
          <ul type="Square"><h3>RICE</h3>
          <li>Plain Rice</li>
          <li>Jeera Rice</li>
          <li>Veg Pulao</li>
          <li>Veg Fried Rice</li>
          <li>Chichen Biryani </li>
          <li>Veg Biryani</li>
        </ul>

        <ul type="Square"><h3>ROTI</h3>
        <li>Plain Roti</li>
        <li>Butter Roti</li>
        <li>Onion Roti</li>
        <li>Missi Roti</li>
        <li>Ajwain Roti</li>
      </ul>

      <ul type="Square"><h3>NAAN</h3>
      <li>Plain Naan</li>
      <li>Butter Naan</li>
      <li>Onion Naan</li>
      <li>Garlic Naan</li>
      <li>Ajwain Naan</li>
      </ul>
        </div>


         </div>
        <!-- slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../img/finger.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../img/bowl-g3f585f63c_640.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../img/french-fries-geba129606_640.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
       
      
    @endsection
     
      <!-- Footer from same.blade.php -->
     


      <script type="text/javascript" src="js/menu.js"> </script>
    

    </body>
  </html>
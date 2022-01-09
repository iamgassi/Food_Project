<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>

       <!-- for font and icon-->
       <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
     
      <!-- Bootstrap -->
      <link rel="stylesheet" href="../bootstrap-5.1.1-dist/css/bootstrap.min.css">
      <script src="../bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
      <!-- <link rel="stylesheet" href="../css/front.css">  -->
      <!-- <link rel="stylesheet" href="../css/style.css"> -->

      <!-- for icons bootstrap -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
</head>
<body>

<style>
  .nav-link{
    font-size: 20px;
    font-weight: bold;
    font-family: cursive;
    
}
.navbar-brand{
    font-size: 20px;
    font-family: cursive;
}
ion-icon {
  font-size: 40px;
}
body{
   min-height: 100vh;
}





</style>

    <header> <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="../img/pngegg.png" alt="Logo" height="55">
                <span>HR71</span> <br>
                food Junction
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link active" href="{{route('index')}}">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('menu')}}">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                  <li class="nav-item"><a class="nav-link " href="{{route('aboutus')}}">About Us</a></li>
                  
                  
                  
                 
              </ul>
                <form class="d-flex" >
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               
                  <button class="btn btn-warning" type="submit" >Search</button>
                </form>
              </div>
            </div>
          </nav>
              </div>
          </nav>   </header>

@section('content')
   no content here
@show


<footer class="page-footer bg-warning mt-5">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="black-text">Footer Content</h5>
              <p class="black-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="black-text">Social Media</h5>
              <!-- <ul>
                <li><a class="black-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="black-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="black-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="black-text text-lighten-3" href="#!">Link 4</a></li>
              </ul> -->
              <ion-icon name="logo-instagram"></ion-icon>
              <ion-icon name="logo-twitter"></ion-icon>
              <ion-icon name="logo-facebook"></ion-icon>
            </div>
          </div>
        </div>
        <div class="black-text footer-copyright">
          <div class="container">
          © 2014 Copyright Text
          <a class="black-text text-lighten-4 right" href="#!">More Links</a>

                  <p class="float-end mb-1">
                   <a href="#">Back to top</a>
                 </p>  
          </div>
          
       
 
  
        </div>

</footer>
     
      
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    @extends("layouts.same")
@section('content')



 <div class="row mx-5 g-3">
   <div class="col my-5">
    <div class="card text-center" style="width: 18rem;">
  <div class="card-body">
  <ion-icon name="location-outline"></ion-icon>
    <h2 class="card-text">loaction</h2>
   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illum error.</p>
  </div>
</div>
</div>
   

<div class="col my-5 g-3">
    <div class="card text-center" style="width: 18rem;">
  <div class="card-body">
  <ion-icon name="mail-outline"></ion-icon>
    <h2 class="card-text">Email</h2>
   <p>somthing@gmail.com</p>
   <p>somthing@yahoomail.com</p>
  </div>
</div>
</div>
   

<div class="col my-5 g-3">
    <div class="card text-center" style="width: 18rem;">
  <div class="card-body">
  <ion-icon name="phone-portrait-outline"></ion-icon>
    <h2 class="card-text">Call-no.</h2>
   <p> +91-1234567898</p>
   <p> +91-1234567898</p>
  
  </div>
</div>
</div>
</div>
<div class="row  mx-5">
    <div class="col s6 text-center">
    <h3 class="sub_title">Get in Touch</h3><h2 class="section_title">send Feedback</h2>
<img src="./img/section_delimiter.png" alt="img" class="img-fulied">
          
    </div>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  
 
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-warning" type="submit">send message</button>
  </div>
</form>
</div>
   
        



@endsection

    
</body>
</html>
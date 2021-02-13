<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>How to Add Captcha in PHP Registration Form</title>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header text-center">
Add Google Captcha in PHP Registration Form
</div>
<div class="card-body">
<form action="pdata.php" method="post">
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="varchar" name="first_name"  id="first_name" class="form-control"  required="">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Password</label>
<input type="varchar" name="last_name" id="last_name" class="form-control"  required="">
</div>                                  
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="varchar" name="email" id="email" class="form-control"  aria-describedby="emailHelp" required="">

</div>
                 
  
<!-- <div class="g-recaptcha" data-sitekey="Your Site Key"></div> -->
<input type="submit" name="password-reset-token" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>
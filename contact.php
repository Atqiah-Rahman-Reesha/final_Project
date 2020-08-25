<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">World View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<h2 class="text-center"><u>Contact Us</u></h2>
<div class="text-center py-5"  >
    <h3><b> Email:</b><a href="a.rahman.reesha@gmail.com">a.rahman.reesha@gmail.com</a></h3>
    <h3>Facebook:<a href="foodieUs.fb.com">foodieUs.facebook</a></h3>
  <h3>Mobile: 017xxxxxxxx</h3>
  <h3>Want to order? &#129331;</h3>
</div>
<section class="my-5">
  <div class="py-5">
<div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
      <lebel>Username</lebel>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <lebel>Email Id</lebel>
      <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <lebel>Mobile</lebel>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
     <div class="form-group">
      <lebel>Place Order</lebel>
      <textarea class="form-control" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@theFoodieUsProduction</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
	<title>FACULTY PAGE</title>
</head>
<body>
	     <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Time Table</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculty.php">Add Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addtimetable.php">Add Time Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View Time Table</a>
        </li>
      </ul>  
    </div>
  </div>
</nav>
	<div class="w-50 m-auto">
	<form  method="post">
	<div class="form-group">
		<label>ENTER DEPARTMENT NAME</label>
		<input type="text" name="dname" autocomplete="off" class="form-control">
		</div>
		
		<div class="form-group">
		<label>ENTER FACULTY NAME</label>
		<input type="text" name="name" autocomplete="off" class="form-control">
		</div>
		
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
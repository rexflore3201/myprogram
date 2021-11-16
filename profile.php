<?php
    include_once 'header.php';
?>

<section>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Greg Ian S. Florenosos">
    <meta name="generator" content="Greg 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>University of Banica</h2>
      <p class="lead">Fill up the form to continue your application.</p>
    </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Student Details</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Course</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>Associate in Computer Technology</option>
                <option>Bachelor of Science in Information Technology</option>
                <option>Bachelor of Science in Education</option>
                <option>Bachelor of Science in Accountancy</option>
                <option>Bachelor of Science in Business Administration</option>
                <option>Bachelor of Science in Computer Science</option>
              </select>
              <div class="invalid-feedback">
                Please select a Course.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Age</label>
              <input type="text" class="form-control" id="age" placeholder="" required>
              <div class="invalid-feedback">
                Age is required.
              </div>
            </div>

          <div class="col-md-3">
              <label for="zip" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="mobile" placeholder="" required>
              <div class="invalid-feedback">
                Mobile Number is required.
              </div>
            </div>
          </div>

          <div class="col-md-3">
              <label for="zip" class="form-label">Birtdate</label>
              <input type="text" class="form-control" id="birthdate" placeholder="" required>
              <div class="invalid-feedback">
                Birthdate is required.
              </div>
            </div>
          </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <hr class="my-4">

          <h4 class="mb-3">Student Type</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">New Student</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Transferee</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Returnee</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Click here to Enroll</button>
        </form>
      </div>
    </div>
  </main>
</div>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Course</th>
      <th scope="col">Mobile No.</th> 
      <th scope="col">Email</th> 
      <th scope="col">Address</th>
      <th scope="col">Student Type</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
  <button class="btn btn-outline-secondary" type="button">Button</button>
  <button class="btn btn-outline-secondary" type="button">Button</button>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>

        </section>
<?php
    include_once 'footer.php';
?>
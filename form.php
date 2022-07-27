<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  
</head>
<body>
<div class="container mt-5 mb-5">
   <form class="row g-3">
   	<h3 class="text-center">Blood Donation Application Form</h3>
  <div class="col-md-6">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>cameroon</option>
    </select>
  </div>

<div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        First Time Donor
      </label>
    </div>
  </div>

<div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Repeat Donor
      </label>
    </div>
  </div>
<p id="Repeat"><h4 class="text-center">For Repeat Donor</h4></p>
<p><h5 class="text-center">What did you donate the last time?:</h5></p>
  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Whole Blood
      </label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Single Donor Red Cell
      </label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Single Donor Platelets
      </label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Plasmapheresis
      </label>
    </div>
  </div>

  <p><h5 class="text-center">Did you encounter any problems in your last donation?:</h5></p>

  <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        No problems
      </label>
    </div>
  </div>

  <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Problems
      </label>
    </div>
  </div>

  <p>Problems:</p>
   
   <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Fainting
      </label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Difficulties in finding vein
      </label>
    </div>
  </div>

  <div class="col-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Bruise
      </label>
    </div>
  </div>

  <div class="col-3">
    <label for="validationDefault03" class="form-label">Others</label>
    <input type="text" class="form-control" id="validationDefault03" placeholder="Enter problems encountered" required>
  </div>
 

  <div class="col-md-6">
    <label for="validationDefault05" class="form-label">ID Card Number</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>

  <div class="col-md-6">
    <label for="validationDefault04" class="form-label">Blood Group</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>O+</option>
      <option>O-</option>
    </select>
  </div>

    <div class="col-3">
    <label for="validationDefault03" class="form-label">Date of birth(mm/dd/yy)</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>

      <div class="col-3">
    <label for="validationDefault03" class="form-label">Age</label>
    <input type="text" class="form-control" id="validationDefault03" placeholder="Enter problems encountered" required>
  </div>

  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Sex</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>

  <div class="col-3">
    <label for="validationDefault03" class="form-label">Weight(Kg)</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>

  <p><h5 class="text-center">(Age between 17-70)</h5></p>
  <p>if 17 years old, do you have parents or guardian signed consent form?</p>

   <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Yes
      </label>
    </div>
  </div>

   <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        No
      </label>
    </div>
  </div>

   <p>60-70years old and above, do you have a medical certificate?</p>

     <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Yes
      </label>
    </div>
  </div>

   <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        No
      </label>
    </div>
  </div>

    <div class="col-3">
    <label for="validationDefault03" class="form-label">Present Address</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>

  <div class="col-3">
    <label for="validationDefault03" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>

  <div class="col-3">
    <label for="validationDefault03" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="validationDefault03" placeholder="example@example.com" required>
  </div>

  <div class="col-3">
    <label for="validationDefault03" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="validationDefault03" placeholder="example@example.com" required>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>

  

   <div class="col-12">
   <button class="btn btn-primary" type="submit">Next</button>
  </div>

</form>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
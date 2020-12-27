<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Link Ur Code</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
<body>
    

<div class="container">

    <div class="row">

         <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

        </div>

       

        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

            <h2>Covid-19 Patient's Record</h2>

            <table class="table table-borderless">

                <tr>
                    <td>Patient Name</td>
                    <td><input id="patientname" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input id="address" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td>Phone No:</td>
                    <td><input id="phone" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input id="emailid" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td>Symptoms</td>
                    <td><input id="symptoms" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><Button onclick="buttononclick()" class="btn btn-info">Submit</Button></td>
                </tr>

            </table>

        </div>

        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

        </div>

    </div>
</div>

<script>

   function buttononclick(){

       var getPatientname=document.getElementById("patientname").value
       
       var getAddress=document.getElementById("address").value

       var getPhoneno=document.getElementById("phone").value

       var getEmail=document.getElementById("emailid").value

       var getSymptoms=document.getElementById("symptoms").value

       console.log(getPatientname)

       console.log(getAddress)

       console.log(getPhoneno)

       console.log(getEmail)

       console.log(getSymptoms)

   }

</script>




</body>
</html>
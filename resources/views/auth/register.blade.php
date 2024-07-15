
@section('title')
    Register
@endsection

@extends('layouts.app')

@section('content')

</head>
    <style type="text/css">
      #form{
              max-width: 500px;
              padding: 20px;
              margin: 50px auto;
              background-color: #fff;
              border: 1px solid rgba(0,0,0,0.1);
          }

       .box{}

       label{
        font-weight: normal;
        margin-bottom: 20px;
       }

    

  </style>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
  $(document).ready(function(){
      $("select").change(function(){
          $(this).find("option:selected").each(function(){
              var optionValue = $(this).attr("value");
              if(optionValue){
                  $(".box").not("." + optionValue).hide();
                  $("." + optionValue).show();
              } else{
                  $(".box").hide();
              }
          });
      }).change();
  });
  </script>

</head>


<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <div class="container-fluid">
    <div class="row" style="display: flex;" >
      
      <div class="col col-sm-8" id="form">
        <x-jet-validation-errors class="mb-4 alert alert-danger" role="alert"/>
        {{-- @error('email')
      <div class="alert alert-danger " role="alert">
          {{ $message }}
      </div>
      @enderror --}}
         <h2> Register With Us!
         </h2>

         <form method="POST" action="{{ route('register') }}">
          @csrf

            <div class="row mb-4">
              <label for="name" class="col-md-4 col-form-label">Name</label>
              <div class="col-md-8">
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
            </div>

            <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0">Gender</label>
                  <div class="col-sm-8">

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inline_Radio1" value="0" required="">
                        <label class="form-check-label" for="inlineRadio1" name="gender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inline_Radio2" value="1" required="">
                      <label class="form-check-label" for="inlineRadio2" name="gender">Female</label>
                    </div>
                  </div>
              </fieldset>

            <div class="row mb-4">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Age</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="age" id="age" required="true">
                </div>
              </div>

            <div class="row mb-4">
              <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" required="true">

              </div>
            </div>

            <div class="row mb-4">
              <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" required="true">
              </div>
            </div>

            <div class="row mb-4">
              <label for="phone" class="col-sm-4 col-form-label">Phone number</label>
              <div class="col-sm-8">
                <input type="tel" class="form-control" maxlength="11" required="true" name="phone" id="phone">
              </div>
            </div>

            <div class="row mb-4">
              <label for="address" class="col-sm-4 col-form-label">Address</label>
              <div class="col-sm-8">
                <textarea class="form-control" required="true" name="address" id="address"></textarea>
              </div>
            </div>

            <div class="row mb-4">
              <label for="mealplan" class="col-sm-4 col-form-label"> Geo Location <span>(To better improve our services)<span></label>
              <div class="col-sm-8" style="
              display: flex;
              height: fit-content;
          ">

                <!--START DISTANCE CALCULATION -->

                {{-- <p id="demo1"></p> --}}
  
                 {{-- <form id="myform" name="myform" action="GeoLocation.php" method="POST"> --}}
                  
                  <input type="text" name="geolocation" id="location"  />
	
                  <input type="button" value="GetLocation" onclick="getlocation()"/><br/>
                  
                  {{-- <input type="submit" name="submit"/> --}}
                  {{-- </form> --}}

                  <script>
                    var variable1 = document.getElementById("demo1");
                    function getlocation() {
                      navigator.geolocation.getCurrentPosition(showLoc);
                    }
                    function showLoc(pos) {
                  
                    var lat=pos.coords.latitude;
                    var log=pos.coords.longitude;
                  
                   document.getElementById("location").value = lat+","+log;
                  
                      variable1.innerHTML =
                        "Latitude: " +
                        pos.coords.latitude +
                        "<br>Longitude: " +
                        pos.coords.longitude;
                    }
                  </script>
                  
                  {{-- <hr/>
                  
                  <?php
                  
                  if(isset($_POST["submit"]))
                  {
                   $email = $_POST['email'];
                   $mobile = $_POST['mobile'];
                   $mylocation = $_POST['location'];
                   
                   echo "Your Email is ".$email."<br/>";
                   echo "Your Mobile is ".$mobile."<br/>";
                   echo "Your Location is ".$mylocation;
                   }
                   ?> --}}
              
    
            <!--END DISTANCE CALCULATION -->
           
              </div>
            </div>

            <div class="row mb-4">
                  <label for="role" class="col-sm-4 col-form-label">Interest</label>
                  <div class="col-sm-8">
                  <select class="form-select form-select-lg" name="role" required>
                      <option value="">Choose Your Interest</option>
                      <option value="member">Get Meal</option>
                      <option value="partner">Partner</option>
                      <option value="volunteer">Volunteer</option>
                      {{-- <option value="donor">Donor</option> --}}
                  </select>
              </div>
            </div>

            <!-- Member box -->
          <div class="member box">

              <div class="row mb-4">
                  <label for="caregivername" class="col-sm-4 col-form-label">Care Giver Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="member_caregiver_name" id="member_caregiver_name"  >
                    </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label">Care Giver Relationship</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="11" name="member_caregiver_relation" id="member_caregiver_relation"  >
                  </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label">Requestor Medical Condition</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="11" name="member_medical_condition" id="member_medical_condition" >
                  </div>
              </div>

              <div class="row mb-4">
                <label for="cgphone" class="col-sm-4 col-form-label">Medical Card ID</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" maxlength="11" name="member_medical_number" id="member_medical_number">
                  </div>
              </div>

            <div class="row mb-4">
              <label for="cgphone" class="col-sm-4 col-form-label">Meal Plan Duration (days)</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" maxlength="11" name="member_meal_duration" value="30"  readonly>
                </div>
            </div>

          </div>
            

            <!-- Partner box -->
            <div class="partner box">
              <div class="row mb-4">
                  <label for="partner" class="col-sm-4 col-form-label">Restaurant Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="partnership_restaurant">
                    </div>
              </div>
              <div class="row mb-4">
                <label for="partner" class="col-sm-4 col-form-label">Partnership Duration</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="partnership_duration" >
                  </div>
              </div>

              
            </div>

             

            <!-- Volunteer box -->
            <div class="volunteer box">
                <fieldset class="row mb-3">
                    <label class="col-form-label col-sm-4 pt-0">Volunteer Vaccination Status</label>
                      <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio1" value="0" >
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
  
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="volunteer_vaccination" id="inlineRadio2" value="1" >
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                      </div>
                  </fieldset>

              <div class="row mb-4">
                <label for="volunteer" class="col-sm-4 col-form-label">Volunteer Duration</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="volunteer_duration" >
                  </div>
              </div>

              <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0">Available day</label>
                  <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Monday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Tuesday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Wednesday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox3">Wednesday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Thursday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox4">Thursday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Friday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox5">Friday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value="Saturday" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox6">Saturday</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="volunteer_available[]" value ="Sunday"type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox7">Sunday</label>
                    </div>
                  </div>
              </fieldset>

              
            </div>

            {{-- <!-- Donor box -->
            <div class="donor box">
              <fieldset class="row mb-3">
                <label class="col-form-label col-sm-4 pt-0">Donation Plan</label>
                  <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Daiily Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox1">daily meal donation</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Weekly Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox2">weekly meal donation</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="donation_plan[]" value="Monthly Meal Plan" type="checkbox">
                      <label class="form-check-label" for="inlineCheckbox3">monthly meal donation</label>
                    </div>
                  </div>
              </fieldset>
            </div> --}}

            <button type="submit" class="btn btn-outline-primary" name="button2" style="float: right;">Register
            </button>
            <button type="reset" class="btn btn-outline-danger" style="float: right;margin-right: 20px;">Clear</button>

        </form>

       

      </div>
    </div>
  </div>
</body>
		
@endsection


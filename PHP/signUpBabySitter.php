<!DOCTYPE html>

<html lang ="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/signUp.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   <script src="jquery-3.6.1.min.js"></script>
   <script src="javaScript/Validations.js"></script>  
   <title>Jalees</title>
</head>


<body style=" background-color: #eee">
       <!-- expand يعني اختفاء البار متى ما صغرت الشاشه -->
       <div class="navbar navbar-expand-lg navbar-light text-light " style="background-color: rgb(227, 217, 175);" >
        <div class="container-fluid">
          <!-- making the brand name as a heading -->
          <a class="navbar-brand mb-0 h1" href="index.html"><img src="css/images/logo.png" style="width: 35%;" alt="Logo"></a>
              <!--عرض زر عند تصغير الشاشه ومنها يتم عرض عناصر البار -->
              <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#cNav" aria-controls="cNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
  
            
          <div class="collapse navbar-collapse" id="cNav">
              <!-- list of itms in the navbar -->
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="joinnow.html" class="nav-link active">Join now!</a></li>
                  <li class="nav-item"><a href="login.html" class="nav-link">Log in</a></li>
                  <li class="nav-item"><a href="mailto:Jalees@gmail.com" class="nav-link">Ask us</a></li>
              </ul>
          </div>
        </div>
        </div>
  


    <section class="vh-100">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up to Jalees</p>
                      <p class="text-center h5 fw mb-5 mx-1 mx-md-4 mt-4">I'm a Babysitter</p>
                
                 <!-- Profile Picture -->
                 <div id="addinPic" class="d-flex flex-column align-self-center mt-4" class="profile">
                  <img  src="CSS/images//ava2.webp" alt="profile pic" class = profile_image >
                   <!-- image from https://www.iconfinder.com/icons/403017/avatar_default_head_person_unknown_user_anonym_icon -->
                  <br>
                  <p style="font-size:10px; color:rgb(155, 155, 129); text-align: center;" >[Optional profile picture]</p>
                  <br>
                  <input type="file" id="uploadFile" name="profile-img" style="margin-left: 22% ">
                  <label class="align-self-end" for="uploadFile"><i class="bi bi-plus-circle-fill" id="plusS"></i></label>
                  <br>
               </div>

               <!-- the user wrong inputs -->
               <p  role='alert' id="error_alert" style="display: none"></p>
               

                       <!-- Form-->
                      <form action="#" method="post" id="signUpForm">

                       
                              <div class="form-outline">
                                <label class="form-label" for="First_Name"><strong>First Name</strong></label>
                                <input type="text" id="First_Name" class="form-control" required>
                              </div>
                              <br>
                              <div class="form-outline">
                                <label class="form-label" for="Last_Name"><strong>Last Name</strong></label>
                                <input type="text" id="Last_Name" class="form-control" required>
                              </div>
                              <br>
                            <div class="form-outline">
                              <label class="form-label" for="Email"><strong>Email</strong></label>
                              <input type="email" id="Email" class="form-control" required >
                            </div>
                            <br>
                            <div class="form-outline">
                              <label class="form-label" for="Password"><strong>Password</strong></label>
                              <input type="password" id="Password" class="form-control"  required >
                              <p style="font-size:10px; color:rgb(155, 155, 129);"></p>
                            </div>
                            <div class="form-outline">
                              <label class="form-label" for="userID"><strong>User ID</strong></label>
                              <input type="text" id="userID" class="form-control" required >
                            </div>
                            <br>
                            <div class="form-outline">
                              <label class="form-label" for="age"><strong>Age</strong></label>
                              <input type="number" id="age" class="form-control" required>
                            </div>
                            <br>
                          
                            


                              
                              <div class="form-outline">
                                <label class="form-label" for="phone"><strong>Phone Number</strong></label>
                                <input type="tel" id="phone" class="form-control"  required>
                              </div>
        
                              <br>
        
                              <div>
                                <label class="form-label"><strong>Gender:</strong></label>
                              <div class="form-check form-check-inline" style="margin-left:15px;">
                                <input class="form-check-input" type="radio" name="Gender" id="male" value="Male" required>
                                <label class="form-check-label" for="male">Male</label>
                              </div>
                              <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="Gender" id="female" value="Female" required>
                                <label class="form-check-label" for="female">Female</label>
                              </div>
        
                            </div>
        
                            <br>
                              <div>
                              <label class="form-label" for =city><strong>Select City</strong></label>
                              <select class="form-select" name ="city" id = city>
                                <option value="Abha">Abha</option>
                                <option value="Abu Arish">Abu Arish</option>
                                <option value="Al Baha">Al Baha</option>
                                <option value="Al Bukayriyah">Al Bukayriyah</option>
                                <option value="Al Duwadimi">Al Duwadimi</option>
                                <option value="Al Kharj">Al Kharj</option>
                                <option value="Al Rass">Al Rass</option>
                                <option value="Al Ula">Al Ula</option>
                                <option value="Al Khobar">Al Khobar</option>
                                <option value="Arar">Arar</option>
                                <option value="Bisha">Bisha</option>
                                <option value="Buridah">Buraidah</option>
                                <option value="Dammam">Dammam</option>
                                <option value="Dhahran">Dhahran</option>
                                <option value="Hafar Al Batin">Hafar Al Batin</option>
                                <option value="Hail">Hail</option>
                                <option value="Jazan">Jazan</option>
                                <option value="Jeddah">Jeddah</option>
                                <option value="Jubail">Jubail</option>
                                <option value="Khamis Mushait">Khamis Mushait</option>
                                <option value="Mecca">Mecca</option>
                                <option value="Medina">Medina</option>
                                <option value="Najran">Najran</option>
                                <option value="Riyadh">Riyadh</option>
                                <option value="Rabigh">Rabigh</option>
                                <option value="Riyadh AlKhabra">Riyadh AlKhabra</option>
                                <option value="Sakaka">Sakaka</option>
                                <option value="Shaqra">Shaqra</option>
                                <option value="Tabuk">Tabuk</option>
                                <option value="Taif">Taif</option>
                                <option value="Unayzah">Unayzah</option>
                                <option value="Yanbu">Yanbu</option>
                                <option value="Zulfi">Zulfi</option>
                              </select>
                            </div>
        
                              <br>
        
                              <div class="form-outline">
                                <label class="form-label" for="bio"><strong>Bio</strong></label>
                                <textarea class="form-control" id="bio" rows="4" placeholder="Share a little information about yourself"></textarea>
                              </div>
                              <br>
                            
                      <button type="submit" id="signInBtn2" name="signup-submit" class="btn btn-outline-secondary btn-lg">Sign up</button>
                    

                    </form>

                    <br>

                    <p style="font-size:19px;">Already have an account?  <a href="Login.html">Log in</a></p>
                 
      
                    </div>

                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <!-- image from https://undraw.co/illustrations -->
                      <img src="css/images/signUpPic2.png" class="img-fluid" alt="sign up Babysitter picture">  
      
                    </div>
                 

                  
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      
        
      </section>

      <script>




        $('#uploadFile').change(function(){ 
            document.getElementsByClassName('profile_image').src = window.URL.createObjectURL(this.files[0]);
        })
        $('#signUpForm').submit(function(e){
              $('#error_alert').html("");
              $('#error_alert').css('display', 'none');
              $('#success_alert').html("");
              $('#success_alert').css('display', 'none');
              $('#sign_up_form').removeAttr('target')
              
             
              var thereIsError = false;
              if(!validPhone($('#phone').val())){
                document.getElementById('error_alert').innerHTML += '&#9679; Invalid Phone! Phone number must be in the format 05XXXXXXXX<br>'; 
                thereIsError = true;
              }
              if(!validEmail($('#Email').val())){
                document.getElementById('error_alert').innerHTML += '&#9679; Invalid Email Address!<br>'; 
                thereIsError = true;
              }
              if(!validPass($('#Password').val())){
                document.getElementById('error_alert').innerHTML += '&#9679; Password should be at least 8 characters and should contain at least one special character<br>'; 
                thereIsError = true;
              }
              if(!validFirstName($('#First_Name').val())){
                document.getElementById('error_alert').innerHTML += '&#9679; First name should be maximum 30, and should not contain special characters or digits<br>'; 
                thereIsError = true;
              }
              if(!validLastName($('#Last_Name').val())){
                document.getElementById('error_alert').innerHTML += '&#9679; Last name should be at least 1 letters and maximum 30, and should not contain special characters or digits<br>'; 
                thereIsError = true;
              }
              if(!notEmptyRadio($('input[name="Gender"]'))){
                document.getElementById('error_alert').innerHTML += '&#9679; Please select gender<br>'; 
                thereIsError = true;
              }
              if((thereIsError === true)){
                 e.preventDefault();
                 $('#signUpForm').attr('target','my_iframe');
                 $('#error_alert').css('display', 'block');
              }
              else{
             $('#success_alert').html('Service Added Successfully');
             $('#success_alert').css('display', 'block');
          }
             
        })
        
    </script>

      <!-- Footer -->
      <p class="footer" style="padding-top: 20%;">Jalees &copy; <a href="mailto:Jalees@gmail.com">Contact Us</a></p>

</body>

</html>


                      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="info.css">
    
    
</head>
<body>
    <div class="container--dashboard">
      <div class="logo"><p>Polytechnic University of the Philippines</p></div>
      <div class="nav">
        <ul>
          <li class="active"><img src="assets/images/user-regular.svg" width="10px"></img>  My Info</li>
          <li><img src="assets/images/list-solid.svg" width="12px">  Course Enlistment/Enrollment</li>
          <li><img src="assets/images/book-solid.svg" width="12px"> <a href="grade.php">Grade Viewing</a></li>
          <li><img src="assets/images/comments-solid.svg" width="12px"> Faculty Evaluation</li>
          <li><a href="index.php">Signout</a></li>
        </ul>
      </div>
      <div class="semester">
        <button>2023-2024/2nd Semester</button>
      </div>
      <div class="main-content">
        
        <h1>Account Details</h1>
        <form action="#" class="information">
          <div class="info--card">
            <div class="element--card">Student ID</div>
            <input type="text" class="input--card" placeholder="1012301321" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Email Address</div>
            <input type="text" class="input--card" placeholder="juandelacruz@gmail.com" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Contact Number</div>
            <input type="text" class="input--card" placeholder="0912 345 6789" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Program of Study</div>
            <input type="text" class="input--card" placeholder="Bachelor of Science in Computer Engineering" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Learner's Reference Number</div>
            <input type="text" class="input--card" placeholder="2022101010" disabled/>
          </div>
        </form>

        <hr>
        <div class="header-edit">
        <h1>Personal Information</h1> <button name="personal-info" onclick="editInformation()">Edit</button>
      </div>
        <form action="#" class="information" id="personal-info">
          <div class="info--card">
            <div class="element--card">Last Name</div>
            <input type="text" class="input--card" placeholder="Sins" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">First Name</div>
            <input type="text" class="input--card" placeholder="Jhonny" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Suffix</div>
            <input type="text" class="input--card" placeholder="Jr." disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Birthdate</div>
            <input type="text" class="input--card" placeholder="2003-20-12" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Birthplace</div>
            <input type="text" class="input--card" placeholder="Quezon City" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Sex</div>
            <input type="text" class="input--card" placeholder="Male" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Nationality</div>
            <input type="text" class="input--card" placeholder="Filipino" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Civil Status</div>
            <input type="text" class="input--card" placeholder="Single" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Religion</div>
            <input type="text" class="input--card" placeholder="Catholic" disabled/>
          </div>


        <hr>
        <div class="header-edit">
          <h1>Address</h1> 
</div>


          <div class="info--card">
            <div class="element--card">Block Number</div>
            <input type="text" class="input--card" placeholder="1" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Street</div>
            <input type="text" class="input--card" placeholder="Sabungan street" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Subdivision</div>
            <input type="text" class="input--card" placeholder="N/A" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">City</div>
            <input type="text" class="input--card" placeholder="Quezon City" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">District</div>
            <input type="text" class="input--card" placeholder="District 1" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Zipcode</div>
            <input type="text" class="input--card" placeholder="1090" disabled/>
          </div>



        <hr>
<div class="header-edit">
        <h1>Background Education</h1>
</div>
          <div class="info--card">
            <div class="element--card">Elementary</div>
            <input type="text" class="input--card" placeholder="elementary school" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Junior Highschool</div>
            <input type="text" class="input--card" placeholder="High Junior Highschoool" disabled/>
          </div>

          <div class="info--card">
            <div class="element--card">Senior Highschool</div>
            <input type="text" class="input--card" placeholder="Superhigh Senior Highschool" disabled/>
          </div>


      </div>
    </div>

    <script>
      function editInformation(){
        var name = event.target.name; 
        var form = document.getElementById(name);
        var inputs = form.getElementsByTagName("input");
        var button = document.querySelector(".header-edit");
        var submit = document.querySelector("#submit-info");
        


        for(let i = 0; i < inputs.length; i ++){
          inputs[i].removeAttribute("disabled")
        }

        console.log(event.target.name)

        if (submit){
          return 
        } else {
        var submitInfo = document.createElement("button")
        submitInfo.innerHTML = "Submit";
        submitInfo.setAttribute("type", "submit");
        submitInfo.setAttribute("id", "submit-info")
        submitInfo.setAttribute("onclick", "submitInfo()");
        button.appendChild(submitInfo);
        }
      }

      function submitInfo(){
        var name = "personal-info"
        var form = document.getElementById(name);
        var inputs = form.getElementsByTagName("input")
        var element = document.getElementById("submit-info");
        var form = document.getElementById("personal-information")
        
        console.log(inputs);
        for(let i = 0; i < inputs.length; i ++){
          inputs[i].disabled = true;
        }

        if (element){
          element.remove();
        }
        

      }

    </script>
</body>
</html>

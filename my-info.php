<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="my-info.css">
    
    
</head>
<body>
    <div class="container--dashboard">
      <div class="logo"><p>Polytechnic University of the Philippines</p></div>
      <div class="nav">
        <ul>
          <li class="active"><img src="assets/images/user-regular.svg" width="10px"></img>  My Info</li>
          <li><img src="assets/images/list-solid.svg" width="12px">  Course Enlistment/Enrollment</li>
          <li><img src="assets/images/book-solid.svg" width="12px"> Grade Viewing</li>
          <li><img src="assets/images/comments-solid.svg" width="12px"> Faculty Evaluation</li>
          <li>Signout</li>
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
        <h1>Personal Information</h1> <button id="edit-submit" onclick="editInformation()">Edit</button>
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
        </form>

        <hr>

        <h1>Address</h1>
        <form action="#" class="information">
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

        </form>

        <hr>

        <h1>Family Information</h1>
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

      </div>
    </div>

    <script>
      function editInformation(){
        var form = document.getElementById("personal-info");
        var inputs = form.getElementsByTagName("input");
        var button = document.querySelector(".header-edit");
        for(let i = 0; i < inputs.length; i ++){
          inputs[i].removeAttribute("disabled")
        }

        var submitInfo = document.createElement("button")
        submitInfo.innerHTML = "Submit";
        submitInfo.setAttribute("type", "submit");
        submitInfo.setAttribute("id", "submit-info")
        submitInfo.setAttribute("onclick", "submitInfo()");
        button.appendChild(submitInfo);
    
      }

      function submitInfo(){
        var element = document.getElementById("submit-info");

        if (element){
          element.remove();
        }
        

      }

    </script>
</body>
</html>

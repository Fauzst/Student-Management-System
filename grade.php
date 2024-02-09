<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="grade.css">
    
    
</head>
<body>
    <div class="container--dashboard">
      <div class="logo"><p>Polytechnic University of the Philippines</p></div>
      <div class="nav">
        <ul>
          <li><img src="assets/images/user-regular.svg" width="10px"></img>  <a href="my-info.php">My Info</a></li>
          <li><img src="assets/images/list-solid.svg" width="12px">  Course Enlistment/Enrollment</li>
          <li class="active"><img src="assets/images/book-solid.svg" width="12px"> Grade Viewing</li>
          <li><img src="assets/images/comments-solid.svg" width="12px"> Faculty Evaluation</li>
          <li><a href="index.php">Signout</a></li>
        </ul>
      </div>
      <div class="semester">
        <button>2023-2024/2nd Semester</button>
      </div>
      <div class="main-content">
      <div class="header-edit">
            <h1>My Enrollment <span class="light">(History of Enrollment)</span></h1>
        </div>
        <div class="table-container">
            <table id="enrollment">
                <tr>
                    <th>Academic Year</th>
                    <th>Semester</th>
                    <th>Program</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>2024-2025</td>
                    <td>2nd Sem</td>
                    <td>B.S. in Computer Science</td>
                    <td>2nd</td>
                    <td><button class="select">Select</button></td>
                </tr>
                <tr>
                    <td>2024-2025</td>
                    <td>2nd Sem</td>
                    <td>B.S. in Computer Science</td>
                    <td>2nd</td>
                    <td><button class="select">Select</button></td>
                </tr>
                <tr class="selected">
                    <td>2024-2025</td>
                    <td>2nd Sem</td>
                    <td>B.S. in Computer Science</td>
                    <td>2nd</td>
                    <td><button class="select">Select</button></td>
                </tr>
            </table>
        </div>

        <hr>

        <div class="header-edit">
          <h1>My Grades</h1>
        </div>
        <div class="table-container">
          <table id="enrollment">
            <tr>
              <th>Academic Year</th>
              <th>Semeseter</th>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Units</th>
              <th>Midterm</th>
              <th>Final</th>
              <th>Semestral</th>
              <th>Remarks</th>
            </tr>
            <tr>
              <td>2023-2024</td>
              <td>2nd</td>
              <td>HUM1010</td>
              <td>Philosophy</td>
              <td>3</td>
              <td>1.4</td>
              <td>2</td>
              <td>3</td>
              <td>Passed</td>
            </tr>

          </table>
        </div>
        <b>GWA: </b>
        </div>
        
      </div>
</body>
</html>
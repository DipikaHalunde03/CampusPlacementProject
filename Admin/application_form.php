<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Application Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }

    h1{
        text-align: center;
     text-decoration: solid;


    }
  </style>
</head>
<body>

  <form action="storestudent.php" method="post"  enctype="multipart/form-data">
    <?php include('message.php');
            ?>
    <h1>Application Form </h1>
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="company_name ">Company Name:</label>
    <input type="text" id="jobtitle" name="jobtitle" value="<?php echo htmlspecialchars($_GET['jobtitle']); ?>"  required>

    

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="currentYear">Year of B.Tech:</label>
    <select id="currentYear" name="currentYear" required>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
      <option value="4">4th Year</option>
    </select>

    <label for="cgpa">Current CGPA:</label>
    <input type="text" id="cgpa" name="cgpa" required>

    <label for="backlogs">Number of Backlogs:</label>
    <select id="backlogs" name="backlogs" required>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="NO">None</option>
    </select>

   

    <label for="resume">Resume (PDF or CV):</label>
    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>   


    <button type="submit">Submit Application</button>
  </form>

</body>
</html>

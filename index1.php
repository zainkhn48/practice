<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
 <style>
   #t1{
    color: #ca0707ff;
    
    
   }
   
 </style>
    
    <title >College Student Form</title>
</head>
<body>
    <h2 id="t1"> Student Registration</h2>
    <form id="t2" method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <label>Class:</label>
        <input type="text" name="class" required><br><br>

        <label>Department:</label>
        <input type="text" name="department" required><br><br>

        <button type="submit" name="submit">Save</button>
    </form>
    <hr>



     <?php
        // Save Data
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $class = $_POST['class'];
            $department = $_POST['department'];

            $sql = "INSERT INTO students (name, age, class, department) VALUES ('$name','$age','$class','$department')";
            if ($conn->query($sql)) {
                echo "<p>✅ Student Added Successfully!</p>";
            } else {
                echo "❌ Error: " . $conn->error;
            }
          } ?>


 


 <?php
    $result = $conn->query("SELECT * FROM students");

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th><th>Name</th><th>Age</th><th>Class</th><th>Department</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['class']."</td>
                    <td>".$row['department']."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No students found.";
    }
    ?>



</body>
</html>

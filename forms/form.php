<!DOCTYPE html>
<html>
<head><title>PHP Form Handling</title></head>
<body>
  <form action = "process.php" method = "get">
    Enter Name <br>
    <input type = "text" name = "studentname" value = "Your Name">
    <br><br>
    Favorite Subject(s) <br>
    <input type = "checkbox" name = "subj[]" value = "EL">English
    <input type = "checkbox" name = "subj[]" value = "MA">Math
    <input type = "checkbox" name = "subj[]" value = "PG">Programming
    <br><br>
    Gender <br>
    <input type = "radio" name = "gender" value = "M">Male
    <input type = "radio" name = "gender" value = "F">Female
    <br><br>
    <input type = "submit" name = "sm" value = "Submit Form">
  </form>
</body>
</html>

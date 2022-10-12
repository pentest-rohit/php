<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>
    <!-- input in php most vvi -->
    <form action="input.php" method = "get" >
        <label for="name">Name</label>
        <input type="text" name ="name" >
        <br>
        <label for="age">Age</label>
        <input type="text" name = "age">
        <br>
        <button>Submit</button>

    </form>    
   Your Name is = <?php echo $_GET["name"];?>
   <br>

   Your age is = <?php  echo $_GET["age"];?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="habit.css" />
 <title>Create the new Category</title>
 <h1>Set up the new Category
 </h1>
</head>

<body>
 <form>
  <label for="nameCat">Name of the category: </label>
  <input type="text" id="nameCat" name="nameCat" minlength="1" required>
  <br>
  <label for="importanceCat">Importance of the category:</label>
  <input type="text" id="importanceCat" name="importanceCat" minlength="1">
  <br>
  <?php 
   /*
  <a href="index.html"><button type="submit" id="submit"> <img src="images\submit.png" alt="Submit"></button></a>
  */?>
 </form>

</body>
<script type="text/javascript" src="functions.js"></script>


</html>
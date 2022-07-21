<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <!-- <link href="styles.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
  body{
    background-color: lightyellow;
  }
  </style>
  </head>
  <body>
    <center>
      <div id="main-content">

      <h2>Convert Length</h2>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
        </div>
        
        <br>
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit" >
            <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
          
        </div>
        <br><br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
    </center>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>

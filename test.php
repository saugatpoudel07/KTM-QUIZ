<?php
  session_start();
  $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="ktmquiz";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

          $sql_get= "SELECT * FROM quiz WHERE 1 ORDER BY rand() LIMIT 1";
          $result=  $conn->query($sql_get);
          while($row = $result->fetch_assoc()) {
          $body=$row['Question'];
        }

       echo"$body" 

?>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KTMQUIZ | Home</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
  </head>
<form action="quiz.php?type=ans1" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">1</span>  <?php echo "$body" ?> </h3>
        </div>
        <div class="modal-body">
            

          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block"> <input type="radio" name="q_answer" value="1">1 One</label>
           <label class="element-animation2 btn btn-lg btn-primary btn-block"> <input type="radio" name="q_answer" value="2">2 Two</label>
           <label class="element-animation3 btn btn-lg btn-primary btn-block"> <input type="radio" name="q_answer" value="3">3 Three</label>
           <label class="element-animation4 btn btn-lg btn-primary btn-block"> <input type="radio" name="q_answer" value="4">4 Four</label>
       </div>
   </div>
   <div class="modal-footer text-muted">
   
        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
</div>
</form>
</html>
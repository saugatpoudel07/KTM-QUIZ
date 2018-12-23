<?php 

		session_start() ;

          
        //connecting to the database

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
		
		if(!isset($_SESSION["Name"])){
			header("location:login.php");
		
		}
		else{

        //checking email and password with database

        $sql_get_password="SELECT * FROM users";
        $result=  $conn->query($sql_get_password);
        
      
?>
<style>
#qid {
  padding: 10px 15px;
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  border-radius: 20px;
}
label.btn {
    padding: 18px 60px;
    white-space: normal;
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -o-transform: scale(1.0);
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s
}

label.btn:hover {
    text-shadow: 0 3px 2px rgba(0,0,0,0.4);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1)
}
label.btn-block {
    text-align: left;
    position: relative
}

label .btn-label {
    position: absolute;
    left: 0;
    top: 0;
    display: inline-block;
    padding: 0 10px;
    background: rgba(0,0,0,.15);
    height: 100%
}

label .glyphicon {
    top: 34%
}
h1 {
    text-align:center;
}

form {
    text-align:center;
}

#next {
  margin-top:30px;
}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KTMQUIZ | Home</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>

    <link rel="stylesheet" type="text/css" href="quiz.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" href="quiz.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">KTMQUIZ</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION["Name"]; ?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>KTMQUIZ <small>Play the Game</small></h1>
          </div>
          <div class="col-md-2">
           
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">LET'S BEGIN THE QUIZ!!</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
			<div class="col-md-2">
           
			
			</div>
			<div class="col-md-8">




<!-- Your First Project — A Dynamic Quiz Week 4 - Learn JS Properly -->

  <h1 id="question"></h1>
<div class="modal-body">
        
  <form>    

          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block"> <input type="radio" name="answer" value="0" id="ans0"><span id="choice0"></span></label>
           <label class="element-animation2 btn btn-lg btn-primary btn-block"> <input type="radio" name="answer" value="1" id="ans1"><span id="choice1"></span></label>
           <label class="element-animation3 btn btn-lg btn-primary btn-block"> <input type="radio" name="answer" value="2" id="ans2"><span id="choice2"></span></label>
           <label class="element-animation4 btn btn-lg btn-primary btn-block"> <input type="radio" name="answer" value="3" id="ans3"><span id="choice3"></span></label>
       </div>
   </div>
   <div class="modal-footer text-muted">
   
        <button type="button"  name="next" class="btn btn-primary" value="Next Question"  id="next">Next Question</button>

        <button type="button"  name="next" class="btn btn-primary" value="Next Question" onClick="window.location.reload()"  id="next">Reset</button>
</div>
    </form>



<script>
// Create an array to store all questions.
var allQuestions = [];
// Store each question in an object.
allQuestions[0] = {
    question: "What is the capital of Nepal?",
    choices: ["Pokhara", "Biratnagar", "Birgunj","Kathmandu"],
    correctAnswer: 3
};
allQuestions[1] = {
    question: "What is the other name for the abominable snowman living in the nepali mountains and, in general, in the himalayan range?",
    choices: ["Yeti", "Snowman", "Ooch Ka Ty","Sbowm"],
    correctAnswer: 0
};
allQuestions[2] = {
    question: "What is a famous pilgrimage site in Nepal Himalayas, both for buddhist and hindu pilgrims?",
    choices: ["Badrinath", "Sonamnath", "Amarnath","Muktinath"],
    correctAnswer: 3
};
allQuestions[3] = {
    question: "Whats the name of people living in the valleys of khumbu, Eastern Nepal, who provide most of the porters for trekkers?",
    choices: ["Gurung", "magar", "sherpa","indra"],
correctAnswer: 2
};
allQuestions[4] = {
    question: "What is the name of the beautiful lake by which pokhara lies?",
    choices: ["naini tal", "Sun lake", "phewatal","himal lake"],
    correctAnswer: 2
};
allQuestions[5] = {
    question: "Who became king of Nepal in 2001?",
    choices: ["ram das karna","birendra","gyanendra", "macchendra"],
    correctAnswer: 2
};
allQuestions[6] = {
    question: "What is the animal who helps people to carry so many things on the high paths of nepal?",
    choices: ["khondro","yak","dzak","blue sheep"],
    correctAnswer: 1
};
allQuestions[7] = {
    question: "What is the name of the famous street in kathmandu, where the first hippies lived in the 60's and 70's?",
    choices: ["jawala", "hippi lane", "mai street","freak street"],
    correctAnswer: 3
};
allQuestions[8] = {
    question: "The main square in the capital of Nepal,surrounded by  pagodas and hindu temples and the palace of assemblies by which it gets its name.",
    choices: ["Assembly square hall", "mandiraranath", "nepal square","durbar square"],
    correctAnswer: 3
};
allQuestions[9] = {
    question: "Nepal has tow main religions in the country, which are followed by most of people. What are they?",
    choices: ["Hinduism and buddhism","jainaism and hidiusm","buddhism and jainism","hiduism and taoism"],
    correctAnswer: 0
};

var random = allQuestions[Math.floor(Math.random()*allQuestions.length)];
// Display first question
document.getElementById("question").textContent = random.question;

document.getElementById("choice0").textContent = random.choices[0];

document.getElementById("choice1").textContent = random.choices[1];

document.getElementById("choice2").textContent = random.choices[2];

document.getElementById("choice3").textContent = random.choices[3];

// Create a variable to store the user's score
var userScore = 0;

// Create a variable to store the index of the current question
var questionNum = 0;

// When the NEXT button is clicked, the user's score is updated, the current question is hidden, and the next question is revealed.
  $("#next").click(function() {
   
  // Check if User answered question.
  // If so, update user's score. If not, do not continue quiz until answer is given.
  if($("form input[name=answer]:checked").val() == allQuestions[questionNum].correctAnswer) {
    userScore++;
  }
  
  // If last question, show user's score rather than next question
    if (questionNum == (allQuestions.length - 1)) {
    document.getElementsByTagName("form")[0].style.display = "none";
      
    document.getElementById("question").textContent ="Your score is " + userScore + " out of 10.";
    }
  
  // Current question is not the last question, so increment the current question index
    questionNum++;
  
  // Replace current question with next question
    document.getElementById("question").textContent = allQuestions[questionNum].question;

    document.getElementById("choice0").textContent = allQuestions[questionNum].choices[0];

    document.getElementById("choice1").textContent = allQuestions[questionNum].choices[1];

    document.getElementById("choice2").textContent = allQuestions[questionNum].choices[2];

    document.getElementById("choice3").textContent = allQuestions[questionNum].choices[3];
	});
</script>








</div>
</div>





			</div>

			<div class="col-md-2">
           
			
			</div>

		</div>
	  </div>
    </section>

    <footer id="footer">
      <p>Project by:<br>Saugat Poudel </p>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php 
		}
	
	?>
		

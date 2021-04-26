
 <?php  
        
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            foreach($_POST as $key => $value){
            echo "<p>Q1 ". $inc . ": What is the capital of Spain ? <br>;
            echo "<p>Q2 ". $inc . ": what is the capital of South Korea ? <br>;
            echo "<p>Q3 ". $inc . ": what is the capital of America ?<br>;
            echo "<p>Q4 ". $inc . ":  what is the capital of China?<br>;
            echo "<p>Q5 ". $inc . ": what is the capital of India ?<br>;
            echo "<p>You answered: ". preg_replace('/[0-9]+/', '',$value).<br>;
	        echo "<p>Correct answer: ". preg_replace('/[0-9]+/', '',$answers[$key]).<br>;
            echo "<div id='results'>$totalCorrect / 5 correct";
            
        ?>
        
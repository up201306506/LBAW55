<?php	
	function getAllExams() {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM exam
								ORDER BY examidentification ASC");
	    $stmt->execute();
	    return $stmt->fetchAll();
 	}
	
	function getExamsClassID($examid) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT * 
	                            FROM exam, class
								WHERE examid = ?
								AND exam.classid = class.classid");
	    $stmt->execute(array($examid));
	    return $stmt->fetch();
 	}

 	function getAllQuestions() {
 		global $conn;
	    $stmt = $conn->prepare("SELECT * FROM question");
	    $stmt->execute();
	    return $stmt->fetchAll();
 	}

 	function getAnswers($questionid) {
 		global $conn;
	    $stmt = $conn->prepare("SELECT answer FROM question, questionanswer, answersavailable
	    						WHERE answersavailable.questionid = ?
	    						AND question.questionid = ?
	    						AND answersavailable.questionanswerid = questionanswer.questionanswerid");
	    $stmt->execute(array($questionid, $questionid));
	    return $stmt->fetchAll();
 	}
?>
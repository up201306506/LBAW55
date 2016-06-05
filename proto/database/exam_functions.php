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

function getExamQuestions($examid) {
	global $conn;
	$stmt = $conn->prepare("SELECT question.questionid, question
							FROM question, questiongrades
							WHERE examid = ?
							AND questiongrades.questionid = question.questionid");
	$stmt->execute(array($examid));
	return $stmt->fetchAll();
}

function getAnswers($questionid) {
	global $conn;
	$stmt = $conn->prepare("SELECT answer FROM questionanswer
							WHERE questionid = ?");
	$stmt->execute(array($questionid));
	return $stmt->fetchAll();
}

function removeQuestionFromExam($examid, $questionid) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM questiongrades WHERE examid = ? AND questionid = ?");
	$stmt->execute(array($examid, $questionid));
}

function updateExamDate($examid, $date) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET date = ? WHERE examid = ?");
	$stmt->execute(array($date, $examid));
}

function updateExamDuration($examid, $duration) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET duration = ? WHERE examid = ?");
	$stmt->execute(array($duration, $examid));
}

function updateExamPassword($examid, $password) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET password = ? WHERE examid = ?");
	$stmt->execute(array($password, $examid));
}

function updateExamInformation($examid, $information) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET information = ? WHERE examid = ?");
	$stmt->execute(array($information, $examid));
}

function updateExamLocal($examid, $local) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET local = ? WHERE examid = ?");
	$stmt->execute(array($local, $examid));
}

?>
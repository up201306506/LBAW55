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

function deleteQuestion($questionid) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM question WHERE questionid = ?");
	$stmt->execute(array($questionid));
}

function getExamQuestions($examid) {
	global $conn;
	$stmt = $conn->prepare("SELECT question.questionid, question, questionnumber
							FROM question, questiongrades
							WHERE examid = ?
							AND questiongrades.questionid = question.questionid
							ORDER BY questionnumber ASC");
	$stmt->execute(array($examid));
	return $stmt->fetchAll();
}

function getAnswers($questionid) {
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM questionanswer
							WHERE questionid = ?");
	$stmt->execute(array($questionid));
	return $stmt->fetchAll();
}

function getExamIdAndClassId($identification, $classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
							FROM exam
							WHERE examidentification = ?
							AND classid = ?");
	$stmt->execute(array($identification, $classid));
	return $stmt->fetch();
}

function removeQuestionFromExam($examid, $questionid) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM questiongrades WHERE examid = ? AND questionid = ?");
	$stmt->execute(array($examid, $questionid));
}

function insertNewExamWithPassword($identification, $classid, $date, $hour, $duration, $local, $information, $password) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO exam (examidentification,classid,date,local,password,duration,information,beginningtime) VALUES (:examidentification, :classid, :date, :local, :password, :duration, :information, :beginningtime)");
	$stmt->bindParam(':examidentification', $identification);
	$stmt->bindParam(':classid', $classid);
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':local', $local);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':duration', $duration);
	$stmt->bindParam(':information', $information);
	$stmt->bindParam(':beginningtime', $hour);
	$stmt->execute();
	return getExamIdAndClassId($identification, $classid)['examid'];
}

function insertNewExamWithoutPassword($identification, $classid, $date, $hour, $duration, $local, $information) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO exam (examidentification,classid,date,local,duration,information,beginningtime) VALUES (:examidentification, :classid, :date, :local, :duration, :information, :beginningtime)");
	$stmt->bindParam(':examidentification', $identification);
	$stmt->bindParam(':classid', $classid);
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':local', $local);
	$stmt->bindParam(':duration', $duration);
	$stmt->bindParam(':information', $information);
	$stmt->bindParam(':beginningtime', $hour);
	$stmt->execute();
	return getExamIdAndClassId($identification, $classid)['examid'];
}

function insertQuestionInExam($examid, $questionid, $correct, $incorrect, $questionnumber) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO questiongrades (examid,questionid,correctanswervalue,incorrectanswervalue,questionnumber) VALUES (:examid, :questionid, :correct, :incorrect, :questionnumber)");
	$stmt->bindParam(':examid', $examid);
	$stmt->bindParam(':questionid', $questionid);
	$stmt->bindParam(':correct', $correct);
	$stmt->bindParam(':incorrect', $incorrect);
	$stmt->bindParam(':questionnumber', $questionnumber);
	$stmt->execute();
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

function updatePublish($examid, $publish) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET gradespublished = ? WHERE examid = ?");
	$stmt->execute(array($publish, $examid));
}

function calculateGrades($examid) {
	
}

?>
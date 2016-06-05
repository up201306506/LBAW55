<?php

/* search fuctions */
function searchUserBar($user,$prof,$stu){
	global $conn;
	$professors =   [];
	$student =  [];
	if($prof){
    	$stmt = $conn->prepare("SELECT name, description, userid, accounttypevar
								FROM 
								(
								SELECT name, description,userid,accounttypevar,
								to_tsvector(users.name) || to_tsvector(users.description) as document
								FROM users
								) AS alias
								WHERE alias.document @@ to_tsquery(?) AND accounttypevar = 'Professor'"); // --Professor or Student 
    	$stmt->execute(array($user));
    	$professors = $stmt->fetchAll();
	}
	if($stu){	
		$stmt = $conn->prepare("SELECT name, description, userid, accounttypevar
								FROM 
								(
								SELECT name, description,userid,accounttypevar,
								to_tsvector(users.name) || to_tsvector(users.description) as document
								FROM users
								) AS alias
								WHERE alias.document @@ to_tsquery(?) AND accounttypevar = 'Student'"); // --Professor or Student 
    	$stmt->execute(array($user));
    	$student = $stmt->fetchAll();
	}

    return array_merge($professors,$student);	
}

function seachClass($class){
	global $conn;
	$stmt = $conn->prepare("SELECT classname, description, classid, directorid FROM 
							(
							SELECT classname, description, classid, directorid,
							to_tsvector(class.classname) || to_tsvector(class.description) as document
							FROM class
							) AS alias
							WHERE alias.document @@ to_tsquery(?);"); 
    $stmt->execute(array($class));
    return $stmt->fetchAll();
}

function getUser($username) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM users 
		WHERE username = ?");
	$stmt->execute(array($username));
	return $stmt->fetch();
}

function getUserbyID($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch();
}

function getAllUsers() {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM users 
		WHERE accounttypevar != 'Administrator'
		AND isactive != 'Pending'
		ORDER BY username ASC");
	$stmt->execute();
	return $stmt->fetchAll();
}

function getProfessors() {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
							FROM users 
							WHERE accounttypevar = 'Professor'
							AND isactive = 'Active'
							ORDER BY name ASC");
	$stmt->execute();
	return $stmt->fetchAll();
}

function getAllClasses() {
	global $conn;
	$stmt = $conn->prepare("SELECT classid, classname, userid, name, class.password AS classpass
		FROM class, users
		WHERE directorid = userid");
	$stmt->execute();
	return $stmt->fetchAll();
}

function getClassById($classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
		FROM class
		WHERE classid = ?");
	$stmt->execute(array($classid));
	return $stmt->fetch();
}

function getClassByManagerAndClassname($userid, $classname) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
							FROM class
							WHERE directorid = ?
							AND classname = ?");
	$stmt->execute(array($userid, $classname));
	return $stmt->fetch();
}

function getAllCategories() {
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM category");
	$stmt->execute();
	return $stmt->fetchAll();
}

function getManagerOfClass($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT name
		FROM users
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch();
}

function getClassProfessors($classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT users.userid AS userid, name, accounttypevar
		FROM professormanagesclass, users
		WHERE classid = ?
		AND professormanagesclass.userid = users.userid");
	$stmt->execute(array($classid));
	return $stmt->fetchAll();
}

function getClassStudents($classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT users.userid AS userid, name, accounttypevar
							FROM userclass, users
							WHERE classid = ?
							AND userclass.userid = users.userid");
	$stmt->execute(array($classid));
	return $stmt->fetchAll();
}

function getAllStudents() {
	global $conn;
	$stmt = $conn->prepare("SELECT *
							FROM users
							WHERE accounttypevar = 'Student'
							ORDER BY name ASC");
	$stmt->execute();
	return $stmt->fetchAll();
}

function banUserFromClass($classid, $userid) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM userclass WHERE classid = ? AND userid = ?");
	$stmt->execute(array($classid, $userid));
}

function getExamsOfClass($classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT examid, examidentification, date, password
		FROM exam
		WHERE exam.classid = ?");
	$stmt->execute(array($classid));
	return $stmt->fetchAll();
}

function getExamsOfClassAll($classid) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
		FROM exam
		WHERE exam.classid = ?");
	$stmt->execute(array($classid));
	return $stmt->fetchAll();
}

function getExamsByUser($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT examid, examidentification, date, password
		FROM userclass, exam
		WHERE userclass.userid = ?
		AND userclass.classid = exam.classid");
	$stmt->execute(array($userid));
	return $stmt->fetchAll();
}

function getClassesByUser($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT class.classid AS classid, classname, users.userid AS profid, name, class.password AS classpass
		FROM userclass, class, users
		WHERE userclass.userid = ?
		AND userclass.classid = class.classid
		AND class.directorid = users.userid");
	$stmt->execute(array($userid));
	return $stmt->fetchAll();
}

function getExamById($examid) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
		FROM exam
		WHERE examid = ?");
	$stmt->execute(array($examid));
	return $stmt->fetch();
}

function correctClassPassword($password, $id) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
		FROM class
		WHERE password = ?
		AND classid = ?");
	$stmt->execute(array($password, $id));
	return $stmt->fetch();
}

function isLoginCorrect($username, $password) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM users 
		WHERE username = ? AND password = ?");
	$stmt->execute(array($username, hash('sha256', $password)));
	return $stmt->fetch();
}

function existsUser($username) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM users 
		WHERE username = ?");
	$stmt->execute(array($username));
	return $stmt->fetch() == true;
}

function insertNewUser($username, $email, $password, $usertype, $name, $isactive) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO users (username,accounttypevar,description,email,name,password,isActive) VALUES (:username, :usertype, 'Please insert a description', :email, :name, :password, :isactive)");// needs the isActive contrain
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':usertype', $usertype);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':password', hash('sha256', $password));
	$stmt->bindParam(':isactive', $isactive);
	$stmt->execute();
	return getUser($username);
}

function getQuestionIdByQuestionAndCategory($question, $categoryid) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
							FROM question 
							WHERE question = ? AND categoryid = ?");
	$stmt->execute(array($question, $categoryid));
	return $stmt->fetch();
}

function getAnswerIdByQuestionAndIsCorrect($answer, $correct) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
							FROM questionanswer 
							WHERE answer = ? AND iscorrectanswer = ?");
	$stmt->execute(array($answer, $correct));
	return $stmt->fetch();
}

function insertNewQuestion($question, $categoryid) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO question (question,categoryid) VALUES (:question, :categoryid)");
	$stmt->bindParam(':question', $question);
	$stmt->bindParam(':categoryid', $categoryid);
	$stmt->execute();
	return getQuestionIdByQuestionAndCategory($question, $categoryid)['questionid'];
}

function insertNewAnswer($answer, $correct) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO questionanswer (answer,iscorrectanswer) VALUES (:answer, :correct)");
	$stmt->bindParam(':answer', $answer);
	$stmt->bindParam(':correct', $correct);
	$stmt->execute();
	return getAnswerIdByQuestionAndIsCorrect($answer, $correct)['questionanswerid'];
}

function insertAnswerAvailable($questionid, $answerid) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO answeravailable (questionanswerid,questionid) VALUES (:answerid, :questionid)");
	$stmt->bindParam(':questionid', $questionid);
	$stmt->bindParam(':answerid', $answerid);
	$stmt->execute();
}

function insertNewUserClass($userid, $classid) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO userclass (userid,classid) VALUES (:userid, :classid)");
	$stmt->bindParam(':userid', $userid);
	$stmt->bindParam(':classid', $classid);
	$stmt->execute();
}

function insertNewClassWithoutPass($userid, $name, $description, $creationdate) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO class (directorid,classname,description,creationdate) VALUES (:userid, :name, :description, :creationdate)");
	$stmt->bindParam(':userid', $userid);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':creationdate', $creationdate);
	$stmt->execute();
	return getClassByManagerAndClassname($userid, $name)['classid'];
}

function insertNewClassWithPass($userid, $name, $password, $description, $creationdate) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO class (directorid,classname,password,description,creationdate) VALUES (:userid, :name, :password, :description, :creationdate)");
	$stmt->bindParam(':userid', $userid);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':creationdate', $creationdate);
	$stmt->execute();
	return getClassByManagerAndClassname($userid, $name)['classid'];
}

function insertProfessorInClass($classid, $profid) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO professormanagesclass (classid,userid) VALUES (:classid, :profid)");
	$stmt->bindParam(':classid', $classid);
	$stmt->bindParam(':profid', $profid);
	$stmt->execute();
}

function updateName($name, $userid) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET name = ? WHERE userid = ?");
	$stmt->execute(array($name, $userid));
}

function updateEmail($email, $userid) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET email = ? WHERE userid = ?");
	$stmt->execute(array($email, $userid));
}

function updatePassword($password, $userid) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET password = ? WHERE userid = ?");
	$stmt->execute(array(hash('sha256', $password), $userid));
}

function updateDescription($description, $userid) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET description = ? WHERE userid = ?");
	$stmt->execute(array($description, $userid));
}

function getUsername($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT username 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch()['username'];
}

function getName($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT name 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch()['name'];
}

function getEmail($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT email 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch()['email'];
}

function getAccountType($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT accounttypevar 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch()['accounttypevar'];
}

function getDescription($userid) {
	global $conn;
	$stmt = $conn->prepare("SELECT description 
		FROM users 
		WHERE userid = ?");
	$stmt->execute(array($userid));
	return $stmt->fetch()['description'];
}

function banUser($userid){
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET isactive = 'Inactive' WHERE userid  = ?");
	$stmt->execute(array($userid));
	$count = $stmt->rowCount();
	return $count == 1;
}

function unbanUser($userid) {
	global $conn;
	$stmt = $conn->prepare("UPDATE users SET isactive = 'Active' WHERE userid  = ?");
	$stmt->execute(array($userid));
	$count = $stmt->rowCount();
	return $count == 1;
}

?>
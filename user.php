<?php

class User
{
	function __construct()
	{
		$hostname = "sql2.njit.edu";
		$username = "ne58";
		$password = "7ir1qWL9P";
		$conn = new PDO("mysql:host=$hostname;dbname=ne58",
		$username, $password);
		$this->connection = $conn;
		//echo "Connected Successfully"."<br>"; 
	}

	function addUser($email, $fname, $lname, $phone, $birthday, $gender, $password)
	{
		$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', 
		'$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$results = $this->connection->query($sql);
	}

	function checkUserEmail($email)
	{
		try
		{
			$sql = "select fname, lname from accounts where email = '$email'";
			$results = $this->connection->query($sql);
		} 
		catch (Exception $e) 
		{
			http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}
	}

	function checkUserPassword($password, $email)
	{
		try
		{
			$sql = "select fname, lname from accounts where email = '$email' and password = '$password'";
			$results = $this->connection->query($sql);
		} 
		catch (Exception $e) 
		{
			http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}
	}

}

$user = new User;

$string = "mjlee@njit.edu";

$results = $user->checkUserEmail($string);

if (count($results) == 0) {
	echo "No such account exists";

}
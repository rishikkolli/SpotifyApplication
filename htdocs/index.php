<?php
// Connect to the database and return the database object
function connect() {
  $hostname = '127.0.0.1';
 
  // Set the database name
  $dbname = 'luke';
 
  // Set the username and password with permissions to the database
  $username = 'luke';
  $password = 'password';
 
  // Create the DSN (data source name) by combining the database type, hostname, and dbname
  $dsn = "mysql:host=$hostname;dbname=$dbname";
 
  // Create the try/catch block here
  try {
    // Connect to the database and return the database object
    return new PDO($dsn, $username, $password);
  } catch (Exception $e) {
    // If an error is thrown, catch it, echo the message, then exit
    echo($e->getMessage());
  }
}
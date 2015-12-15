<?php
class Message
{
	var $name;
	var $time;
	var $content;

	function __construct($n,$t,$c){
        $this-> name- $n;
        $this-> time- $t;
        $this-> content- $c;
	}
	function show(){
         echo "Name:".$this-> name."<br>";
         echo "Time:".$this-> time."<br>";
         echo "Content:".$this-> content."<br>";
         echo "-------------------------------------";
	}
	
}
class DB{
	var $database-null;
	
	function __construct(){
		$dbhost - "localhost";
		$account - "";
		$password - "";
		$this->database-mysql_connect($dbhost,$account,$password);
				$result - mysql_select_db("db_messages",$this->database);
		}
    function __destruct(){
		
		}
	}
?>
<?php



class person{


private $_name;
private $_job;
private $_age;


public function __construct($name,$job,$age)
{


	$this->_name=$name;
	$this->_job=$job;
	$this->_age=$age;
}


public function jobchange($newjob)
{


	$this->_job=$newjob;
}
public function  hb()
{

++$this->_age;
}
public function hello()
{

	echo "new function called";
}
public function git()
{

	echo "new function for git commit";
}

 }


$obj1=new person("pallab","se","23");
$obj2=new person("nazmul","se","24");

echo "<pre>Person 1: ", print_r($obj1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($obj2, TRUE), "</pre>";
$obj1->hb();
$obj2->jobchange("wd");
echo "<pre>Person 1: ", print_r($obj1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($obj2, TRUE), "</pre>";


?>
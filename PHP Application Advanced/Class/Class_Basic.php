<?php
class Books
{

 /* Member variables */
 var $price;
 var $title;
 
 // constant member
 const no = 1.7;

 // static characteristics
  public static $my_static = 100;
      
 
 /* Constructor */
 function __construct(  )
 {
	echo "In constructor";
 }
 
 /* Member functions */
 function setPrice($par)
 {
	$this->price = $par;
 }
 
 function getPrice()
 {
	echo $this->price ."<br/>";
 }
 
 function setTitle($par)
 {
	$this->title = $par;
 }
 
 function getTitle()
 {
	echo $this->title ." <br/>";
 }
}

// create object of above class
$physics = new Books;
$maths = new Books;
$chemistry = new Books;

// call member functions of above class
$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );

echo $physics->getTitle();
echo $chemistry->getTitle();
echo $maths->getTitle();

echo $physics->getPrice();
echo $chemistry->getPrice();
echo $maths->getPrice();

echo Books::my_static;

?>
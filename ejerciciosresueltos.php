<html>
    <head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
          // Here we define the function...
          function helloWorld() {
            echo "Hello world!";
          }
          
          // ...and here we call it!
          helloWorld();
        ?>
      </p>
    </body>
</html>

<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function greetings($name){
            echo "Greetings, " . $name . "!";            
            
        }
        
        greetings ("antonio");
        
        ?>
      </p>
    </body>
</html>


<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function aboutMe($name, $age){
            echo "good morning! My name is $name, and I am $age years old, ";
        }
        aboutMe("Antonio", 15)
        
        ?>
      </p>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
	<body>
      <p>
      <?php
        // The code below creates the class
        class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new Person('boring', '12345', 12345);
        
        // Printing out, what the greet method returns
        echo $me->greet(); 
        ?>
        </p>
    </body>
</html>


<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
            class Person{
               public $isAlive = true;
               public $firstname;
               public $lastname;
               public $age;
                function__construct($firstname, $lastname, $age){
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age= $age;  
                }
            }
            $teacher = new Person("boring", "12345", 12345);
            echo $teacher -> isAlive;
            $student = new Person("Antonio", "Cachuan", 20);
        ?>
      </p>
    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php 
            class Dog{
                public $numLegs = 4;
                public $name;
                function__construct($name){
                    $this->name=$name;                    
                }
                public function bark(){
                    return "Woof!";                    
                }
                public function greet(){
                    return "Hola mi nombre es" . $name;        
                }
            }
            $dog1 = new Dog("Barker");
            $dog2 = new Dog("Amigo");
            echo $dog1->bark();
            echo $dog2->greet();
        ?>
      </p>
    </body>
</html>





<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
          // Your code here
          class Cat(){
              public $isAlive = true;
              public $numLegs = 4;
              public $name;
              function__construct($name){
                  $this->name=$name;
              }
              public function meow(){
                  return "Meow meow";
              }
          }
          $gatito= new Cat("CodeCat");
          echo $gatito->meow();
        ?>
      </p>
    </body>
</html>


<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>
    </p>
  </body>
</html>




<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        class Bicycle extends Vehicle{
            public function honk(){
                return "Beep beep!";                
            }
            
        }
        $bicycle = new Bicycle();
        echo $bicycle->honk();
        // Add your code below!
        
        
      ?>
    </p>
  </body>
</html>


<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          
      }
      class Ninja extends Person {
        // Add your code here...
        const stealth="MAXIMUM";
      }
      // ...and here!
      if(Ninja::stealth){
          echo "MAXIMUM";
      }
      
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        // ...and call the method below!
        King::proclaim();
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person{
          
          public static function say(){
              echo "Here are my thoughts!";
          }
         
      }
      class Blogger extends Person{
          const cats =50;          
      }
      Blogger::say();
      echo Blogger::cats;
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title>Array Review</title>
  </head>
  <body>
    <p>
      <?php
        $fruits =array ('bananas', 'apples', 'pears');               /* Your code here! */
        echo 'I love eating ' . $fruits[1]. ' too!';
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title>Associate Arrays ARREGLOS ASOCIATIVOS</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);
            
        // This code will output "blue"...
        echo $myArray[1];
        echo '<br />';
            
        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
      ?>
    </p>
  </body>
</html>



<html>
  <head>
    <title>Making the Connection</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices.
        // Add 'BMW' as the last element in the array!
        $car = array(2012, 'blue', 5, "BMW");

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5
                   'make' => "BMW");
            
        // This code should output "BMW"...
        echo $car[3];
        echo '<br />';
            
        // ...and so should this!
        echo $assocCar['make'];
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Add your code here!
        echo $myAssocArray['doors'];
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
        $amigos = array('bff' => 'juan', 'hermano'=>'javier', 'amigo'=>'fernan');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br />Yo tengo conocidos<br />';
    
      // Create your own array here and loop
      // through it using foreach!
        foreach($amigos as $mostrar){
            echo $mostrar . '<br/>';
        
        }     
    
      ?>
    </p>
  </body>
</html>

<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('3 of Diamonds', 3),
                      array('7 of Diamonds', 7));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';
      ?>
    </p>
  </body>
</html>
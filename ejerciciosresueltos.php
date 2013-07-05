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
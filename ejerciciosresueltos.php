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
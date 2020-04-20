<?php
    // User details and database name
    $user = "a30022060";
    $password = "Toiohomai1234";
    $db = "a3002206_SCP";

    // Turns user and database into an object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));
    $result = $connection->query("select * from SUBJECT") or die($connection->error);

    if(isset($_POST['item_no']))
    {
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];
        $subject_image = $_POST['subject_image'];
        $description = $_POST['description'];
        $procedures = $_POST['procedures'];
        $reference = $_POST['reference'];

        $sql = "insert into SUBJECT(item_no, object_class, subject_image, description, procedures, reference) values('$item_no', '$object_class', '$subject_image', '$description', '$procedures', '$reference')"; 
        
        //If no errors are present and all required fields are filled when button is pressed
        if ($connection->query($sql) === TRUE) {
            include 'footer_and_headers/header.php';
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Click to go back to SCP Homepage</a></p>";
            include 'footer_and_headers/footer.php';
           }
        //If an error was detected in the form, display this
           else 
           {
               include 'footer_and_headers/header.php';
               echo "<h1>RECORD ERROR DETECTED: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Click to go back to SCP Subject Creator</a></p>";
               include 'footer_and_headers/footer.php';
           }

        
    } 
?>
<!-- Add header.php as the header for index -->
<?php include 'footer_and_headers/header.php'; ?>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container-fluid">
    <div class="row">
        
        <div class="col"></div>
        
        <div  class="col-6">
        <?php
            
        // Check if SUBJECT get value exists
        if(isset($_GET['SUBJECT']))
        {
            // remove single quotes from SUBJECT
            $item_number = trim($_GET['SUBJECT'], "'");

            // Run SQL command to select record based on get value
            $record = $connection->query("select * from SUBJECT where item_no ='$item_number'") or die($connection->error());

            // Convert $record into an array so we can use the 'echo' command to print on screen
            $row = $record->fetch_assoc();
            
            // create variables that hold data from db fields
            $item = $row['item_no'];
            $object_class = $row['object_class'];
            $procedures = $row['procedures'];
            $description = $row['description'];
            $subject_image = $row['subject_image'];
            $reference = $row['reference'];

            // \n drops paragraphs
            $procedures = str_replace('\n', '<br><br>', $procedures);
            $description = str_replace('\n', '<br><br>', $description);
            $reference = str_replace('\n', '<br><br>', $reference);

            // if db field image is empty
            if(empty($subject_image))
            {
              echo "<h1>SCP Subject Database</h1>
              
              <h3>Subject Number: {$item}</h3>
              
              <h3>Class: {$object_class}</h3>
              
              <h3>Description</h3>
              <p>{$description}</p>
              
              <h3>Procedures</h3>
              <p>{$procedures}</p>";
            }

            //if db field reference is empty
            else if(empty($reference))
            {
              echo "<h1>SCP Subject Database</h1>
              
              <h3>Subject Number: {$item}</h3>
              
              <h3>Class: {$object_class}</h3>

              <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='images/{$subject_image}'></p>
              
              <h3>Description</h3>
              <p>{$description}</p>
              
              <h3>Procedures</h3>
              <p>{$procedures}</p>";
            }
            
            //If both db field reference and subject image are empty
            else if(empty($reference && $subject_image))
            {
              echo "<h1>SCP Subject Database</h1>
              
              <h3>Subject Number: {$item}</h3>
              
              <h3>Class: {$object_class}</h3>
              
              <h3>Description</h3>
              <p>{$description}</p>
              
              <h3>Procedures</h3>
              <p>{$procedures}</p>";
            }
            
            else
            {
              // Display db fields including image and reference
              echo "<h1>SCP Subject Database</h1>
              
              <h3>Subject Number: {$item}</h3>
              
              <h3>Class: {$object_class}</h3>
              
              <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='images/{$subject_image}'></p>
              
              <h3>Description</h3>
              <p>{$description}</p>
              
              <h3>Procedures</h3>
              <p>{$procedures}</p>
              
              <h3>Reference</h3>
              <p>{$reference}</p>";

              
            }
        }
        else
        {
          
          // When the page is first loaded up, this info will appear on screen
          echo "<h1 class='text-center'>SCP Foundation Subject Database</h1>

              <p class='text-center'>Welcome to the SCP Foundation Database Agent.<br>To access SCP subject files, Please use the links above. To create a new subject database, please click 'ENTER NEW SUBJECT'.</p>

              <p><br><br><br><img src='images/scp-logo.png' class='img-fluid rounded mx-auto d-block'> <br><br><br></p>

              <p class='text-center'>Operating clandestine and worldwide, the Foundation operates beyond jurisdiction, empowered and entrusted by every major national government with the task of containing anomalous objects, entities, and phenomena.<br>
              These anomalies pose a significant threat to global security by threatening either physical or psychological harm.
              The Foundation operates to maintain normalcy, so that the worldwide civilian population can live and go on with their daily lives without <br>fear, mistrust, or doubt in their personal beliefs, and to maintain human independence from extraterrestrial, extradimensional, 
              and other extranormal influence.<br></p>

              <p class='text-center'>Our mission is three-fold:<br><br></p>

              <h2 class='text-center'>Secure</h2>
              
              <p class='text-center'>The Foundation secures anomalies with the goal of preventing them from falling into the hands of civilian or rival agencies, 
              through extensive observation and surveillance and by acting to intercept such anomalies at the earliest opportunity.<br></p>
              
              <h2 class='text-center'>Contain</h2>
              
              <p class='text-center'>The Foundation contains anomalies with the goal of preventing their influence or effects from spreading, 
              by either relocating, concealing, or dismantling such anomalies or by suppressing or preventing public dissemination of knowledge thereof.<br></p>
              
              <h2 class='text-center'>Protect</h2>
              
              <p class='text-center'>The Foundation protects humanity from the effects of such anomalies as well as the anomalies themselves until such time that they are either fully understood or new theories of science can be devised based on their properties and behavior.<br> 
              The Foundation may also neutralize or destroy anomalies as an option of last resort, if they are determined to be too dangerous to be contained.<br><br></p>";
            
            echo "<h1 class='text-center'>Special Containment Procedures</h1>
            
            <p class='text-center'>The Foundation maintains an extensive database of information regarding anomalies requiring Special Containment Procedures, commonly referred to as 'SCPs'.<br>The primary Foundation database contains summaries of such anomalies and emergency procedures for maintaining or re-establishing safe containment in the case of a containment breach or other event.<br></p>
            
            <p class='text-center'>Anomalies may take many forms, be it an object, an entity, a location, or a free-standing phenomenon.<br>These anomalies are categorized into one of several Object Classes and are either contained at one of the Foundation's myriad Secure Facilities or contained on-site if relocation is deemed unfeasible.</p>";
        }
        ?>
        </div>
        <div class="col"></div>
    </div>
</div>
<!--Add footer.php as the header for index -->
    <?php include 'footer_and_headers/footer.php'; ?>

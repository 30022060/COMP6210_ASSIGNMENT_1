<?php include 'footer_and_headers/header.php'; ?>
<!-- Data Form to create new SCP Subjects -->

    <div class="row">
        <div class="col"></div>
        <div  class="col">
        <h1>Enter new SCP Subject File Form</h1>
        <form name="scp_form" method="POST" action="connection.php" class="form-group">

            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="item_no" class="form-control" placeholder="Use the following format: SCP-###" required>
            <br>
            <label>Enter Subject Class Type</label>
            <br>
            <input type="text" name="object_class" class="form-control" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            <br>
            <label>(OPTIONAL) Enter Subject Image Name (image must be in images folder)</label>
            <br>
            <input type="text" name="subject_image" class="form-control" placeholder="Use following format: image_name.(gif, jpg, png)">
            <br>
            <label>Enter Subject Description Details</label>
            <br>
            <textarea name="description" rows="10" class="form-control" placeholder="Use \n to seperate paragraphs" required></textarea>
            <br>
            <br>
            <label>Enter Containment Procedures</label>
            <br>
            <textarea name="procedures" rows="10" class="form-control" placeholder="Use \n to seperate paragraphs" requried></textarea>
            <br>
            <label>(OPTIONAL) Enter Reference</label>
            <br>
            <textarea name="reference" rows="10" class="form-control" placeholder="Use \n to seperate paragraphs"></textarea>
            <br>


            <input type="submit" class="btn btn-primary" name="submit" value="Create New Subject File">
            <br><br><a href='index.php' class='btn btn-primary'>Back to Homepage</a>
            </form>
        </div>
        <div class="col"></div>
    </div>
   <?php include 'footer_and_headers/footer.php'; ?>
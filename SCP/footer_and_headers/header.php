<!DOCTYPE HTML>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <?php include 'connection.php'; ?>
  
<!-- SCP Subject Menu Row -->
<footer>
    <div class="row">
        <div class="col">
            
            <ul class="nav navbar-py-4 bg-dark h5">
             <?php foreach($result as $menu_item): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?SUBJECT='<?php echo $menu_item['item_no']; ?>'">
                    <?php echo $menu_item['item_no']; ?>
                    </a>
                </li>
                
              <?php endforeach; ?>
              <li class="nav-item active">
                    <a class="nav-link" href="insert.php">
                    ENTER NEW SUBJECT
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
    <hr width="100%">
</footer>
    
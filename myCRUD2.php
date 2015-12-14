<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>myFriend</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  </head>
  <body>
    
   
  <div class="container">
   <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <img src="dumbell.png" width="40px" />
      
      
   </div>
          
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li class="active"><a href="myFit.html">myFit Home</a></li>
         </ul>
    </div>  
    
   
    
    <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#exercise" role="tab" data-toggle="tab">Exercise</a></li>
      <li><a href="#ADD" role="tab" data-toggle="tab">ADD</a> </li>
    </ul>
    
    <div class="tab-content">
       <div class="tab-pane active" id=exercise>
                <h1> Because misery loves company! </h1>
                <a href="" onclick="ADD" class="btn btn-success">New Friend
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
                
                <a href="#" class="btn btn-danger">I hate them all.
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone #</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                    
                     <?php   include 'myDb.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM friends';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['fr_name'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['phone'] . '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>

                    </tbody>
                  </table>
                </div>
          </div>
      
      <div class=tab-pane id=ADD>
            <form>
              
            
              
              <div class="form-group">
                <label for="inputFriend">Excercise</label>
                <input type="text" class="form-control" id="inputName" placeholder="Enter Name">
              </div>
              
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="number" class="form-control" id="inputEmail" placeholder="Email@address.com">
              </div>
              
              <div class="form-group">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="Phone Number">
              </div>
              
              
              <div class="btn-group" role="group" aria-label="...">
                <a href="exercise" onclick=#exercise class="btn btn-warning">Back
                  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                </a>
                <a href="#" class="btn btn-success">Submit
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </div>
            </form>
          </div>
      </div>
    </div>
               
    
    
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
  <script type="text/javascript">
    $(".progress-bar").animate({width: "75%"},2000)
  </script>
  
  </body>
  


  
</html>

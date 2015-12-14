<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>myCRUDtemplate</title>

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
                <h1>Log your exercises here!</h1>
                
                 <a href="" onclick="ADD" class="btn btn-success">New Exercise
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
                
                <a href="#" class="btn btn-danger">Delete All
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Exercise</th>
                        <th>Repitions</th>
                        <th>Sets</th>
                        <th>Weight</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                    
                     <?php   include 'myDb.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM exercises';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['ex_name'] . '</td>';
                            echo '<td>'. $row['weight'] . '</td>';
                            echo '<td>'. $row['reps'] . '</td>';
                            echo '<td>'. $row['sets'] . '</td>';
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
                <label for="inputExercise">Excercise</label>
                <input type="text" class="form-control" id="inputExercise" placeholder="Exercise">
              </div>
              
              <div class="form-group">
                <label for="inputReps">Repitions</label>
                <input type="number" class="form-control" id="inputReps" placeholder="# of Reps">
              </div>
              
              <div class="form-group">
                <label for="inputSets">Sets</label>
                <input type="number" class="form-control" id="inputSets" placeholder="# of Sets">
              </div>
              
              <div class="form-group">
                <label for="inputWeight">Weight</label>
                <input type="number" class="form-control" id="inputWeight" placeholder="Weight (optional)">
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

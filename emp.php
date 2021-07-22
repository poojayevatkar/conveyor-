<?php 
 include_once 'insert_data.php';
 include_once 'delete.php';
 include 'db_connect.php';
 $result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="employee.css">

</head>
<body>
 <br>
 <br>
 <h3 class="text-center text-success" id="message"></h3> 
      <?php echo  $success; ?> 
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage <b>Employees</b></h2>
     </div>
     <div class="col-sm-6">
      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
      <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>      
     </div>
                </div>
   </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
      <th>
       <span class="custom-checkbox">
        <input type="checkbox" id="selectAll">
        <label for="selectAll"></label>
       </span>
      </th>
                        <th>eid</th>
                        <th>name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>dob</th>
                        <th>doj</th>
                        <th>dno</th>
                        <th>department</th>
                        <th>salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      while($row = mysqli_fetch_array($result))
                      {
                          ?>
    
     <tr>
      <td>
       <span class="custom-checkbox">
        <input type="checkbox" id="checkbox1" name="options[]" value="1">
        <label for="checkbox1"></label>
       </span>
      </td>
      <td><?php echo $row["eid"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["address"]; ?></td>
      <td><?php echo $row["phone"]; ?></td> 
      <td><?php echo $row["dob"]; ?></td>
      <td><?php echo $row["doj"]; ?></td>
      <!--<td><?php echo $row["dno"]; ?></td>
      <td><?php echo $row["department"]; ?></td>-->
      <td><?php echo $row["salary"]; ?></td> 
      <td>
       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
      </td>
     </tr>
        <?php
        }
        ?>

        <?php
            //close connection database
            mysqli_close($conn);
            ?>
                </tbody>
            </table>
   <!--<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>-->
        </div>
    </div>
 <!-- Edit Modal HTML -->
 <div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form method="post" action="emp.php">
     <div class="modal-header">      
      <h4 class="modal-title">Add Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>eid</label>
       <input type="text" class="form-control" name="eid" placeholder="Enter eid" required>
      </div>
      <div class="form-group">
       <label>name</label>
       <input type="text" class="form-control" name="name" placeholder="Enter name" required>
      </div>
      <div class="form-group">
       <label>Address</label>
       <textarea class="form-control" name="address" placeholder="Enter Address" required></textarea>
      </div>
      <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" name="phone" placeholder="Enter phone" required>
      </div> 
      <div class="form-group">
        <label>dob</label>
        <input type="text" class="form-control" name="dob" placeholder="Enter yyyy-mm-dd" required>
       </div> 
       <div class="form-group">
        <label>doj</label>
        <input type="text" class="form-control" name="doj" placeholder="Enter yyyy-mm-dd" required>
       </div> 
      <!-- <div class="form-group">
        <label>dno</label>
        <input type="text" class="form-control" name="dno" placeholder="Enter dno" required>
       </div> 
       <div class="form-group">
        <label>department</label>
        <input type="text" class="form-control" name="department" placeholder="Enter department" required>
       </div> -->
       <div class="form-group">
        <label>salary</label>
        <input type="text" class="form-control" name="salary" placeholder="Enter salary" required>
       </div>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success" name="add" value="Add">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Edit Modal HTML -->
 <div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Edit Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>eid</label>
       <input type="text" class="form-control" required>
      </div>
      <div class="form-group">
       <label>name</label>
       <input type="email" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Address</label>
       <textarea class="form-control" required></textarea>
      </div>
      <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" required>
      </div>  
      <div class="form-group">
        <label>dob</label>
        <input type="text" class="form-control" required>
       </div>  
       <div class="form-group">
        <label>doj</label>
        <input type="text" class="form-control" required>
       </div>  
      <!-- <div class="form-group">
        <label>dno</label>
        <input type="text" class="form-control" required>
       </div> 
       <div class="form-group">
        <label>department</label>
        <input type="text" class="form-control" required>
       </div> -->
       <div class="form-group">
        <label>salary/label>
        <input type="text" class="form-control" required>
       </div>            
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Delete Modal HTML -->
 <div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Delete Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>

 <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

<script src="emp.js"></script>

</body>
</html>

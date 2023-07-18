<?php  
include "partials/dbconnect.php";
$insert = false;
$update = false;
$delete = false;


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `marks` WHERE `slno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset( $_POST['snoEdit'])){
    // Update the record
        $sno = $_POST["snoEdit"];
        $roll = $_POST["roll"];
        $name = $_POST["name"];
        $class = $_POST["class"];
        $c = $_POST["c"];
        $cpp = $_POST["cpp"];
        $java= $_POST["java"];
        $python = $_POST["python"];
        $javascript = $_POST["javascript"];
        $react = $_POST["react"];

    // Sql query to be executed
    $sql = "UPDATE `marks` SET `roll` = '$roll' , `name` = '$name', `class` = '$class', `c` = '$c', `cpp` = '$cpp', `java` = '$java', `python` = '$python', `javascript` = '$javascript', `react` = '$react' WHERE `marks`.`slno` = $sno";
    $result = mysqli_query($conn, $sql);
    if($result){
        $update = true;
    }
    else{
        echo "We could not update the record successfully";
    }
}
// else{
//     $title = $_POST["title"];
//     $description = $_POST["description"];

//   // Sql query to be executed
//   $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
//   $result = mysqli_query($conn, $sql);

   
//   if($result){ 
//       $insert = true;
//   }
//   else{
//       echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//   } 
// }
}
?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Ask My Result!</title>

</head>
<style>
    body{
      background: #292C35;
      color:white;
    }
  h1{
    margin: 30px;
    font-size:58px;
    font-family: Georgia, serif;
  }
  td{
  color:white;
  background: black;
}
th{
  color:white;
  background: black;
}


  @media screen and (min-device-width: 294px) and (max-device-width: 500px){

h1{
  font-size:26px;
}}
</style>
<body>
<?php  include "partials/header.php";  ?>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header my-0 py-2">
          <h5 class="modal-title" id="editModalLabel">Edit Student Portal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="/ask_my_result/admin_student_edit.php" method="POST">
          <div class="modal-body my-0 py-0">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group my-0">
              <label for="title">Roll</label>
              <input type="text" class="form-control " id="rollEdit" name="roll" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="nameEdit" name="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">Class</label>
              <input type="text" class="form-control" id="classEdit" name="class" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">C</label>
              <input type="text" class="form-control" id="cEdit" name="c" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">C++</label>
              <input type="text" class="form-control" id="cppEdit" name="cpp" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">Java</label>
              <input type="text" class="form-control" id="javaEdit" name="java" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">Python</label>
              <input type="text" class="form-control" id="pythonEdit" name="python" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">JavaScript</label>
              <input type="text" class="form-control" id="javascriptEdit" name="javascript" aria-describedby="emailHelp">
            </div>
            <div class="form-group my-0">
              <label for="title">React</label>
              <input type="text" class="form-control" id="reactEdit" name="react" aria-describedby="emailHelp">
            </div>
            
          </div>
          <div class="modal-footer d-block  my-0 py-1">
          <button type="submit" class="btn btn-block btn-warning py-1">Update</button>
           
           
          </div>
        </form>
      </div>
    </div>
  </div>



  
  <div class="container my-5">
    <div class="row mb-4 mt-2 px-2">
        <div class="col-md-3"><a href="admin_edit.php"><button type="button" class="btn btn-block btn-primary py-2 my-1 ">Admin Dashbord</button></a></div>
        <div class="col-md-3"><a href="admin_marks.php"><button type="button" class="btn btn-block btn-success py-2 my-1">Marks</button></a></div>
        <div class="col-md-3"><a href="admin_notice.php"><button type="button" class="btn btn-block btn-warning py-2 my-1 ">Notice</button></a></div>
        <div class="col-md-3"><a href="admin_student_edit.php"><button type="button" class="btn btn-block btn-secondary py-2 my-1 ">Student-Edit</button></a></div>

    </div>





      <center><h1 class="x">Update Student Details</h1></center>
  </div>

  <div class="container my-4 pl-2 pr-3" style="color:white;">
  <div class="row" style="color:white;">
    <div class="col-md-12" style="color:white;">

    <table class="table" id="myTable" style=" color:white; box-shadow: 5px 5pX 70PX 30PX white;">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Roll</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">C</th>
          <th scope="col">CPP</th>
          <th scope="col">Java</th>
          <th scope="col">Pythton</th>
          <th scope="col">JavaScript</th>
          <th scope="col">React</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `marks`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['roll'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['class'] . "</td>
            <td>". $row['c'] . "</td>
            <td>". $row['cpp'] . "</td>
            <td>". $row['java'] . "</td>
            <td>". $row['python'] . "</td>
            <td>". $row['javascript'] . "</td>
            <td>". $row['react'] . "</td>
            <td> <button class='edit btn btn-sm btn-success px-3'  id=".$row['slno'].">Edit</button> <button class='delete btn btn-sm btn-dark' id=d".$row['slno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
       
  </div>
  </div>

  <?php include "partials/footer.php";  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        roll = tr.getElementsByTagName("td")[0].innerText;
        name = tr.getElementsByTagName("td")[1].innerText;
        Class = tr.getElementsByTagName("td")[2].innerText;
        c = tr.getElementsByTagName("td")[3].innerText;
        cpp = tr.getElementsByTagName("td")[4].innerText;
        java = tr.getElementsByTagName("td")[5].innerText;
        python = tr.getElementsByTagName("td")[6].innerText;
        javascript = tr.getElementsByTagName("td")[7].innerText;
        react = tr.getElementsByTagName("td")[8].innerText;
        console.log(roll, name);
        rollEdit.value = roll;
        nameEdit.value = name;
        classEdit.value = Class;
        cEdit.value = c;
        cppEdit.value = cpp;
        javaEdit.value = java;
        pythonEdit.value = python;
        javascriptEdit.value = javascript;
        reactEdit.value = react;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = ` /ask_my_result/admin_student_edit.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
 

</body>

</html>

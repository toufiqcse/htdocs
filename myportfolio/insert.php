<?php 

$title = 'Registration';
    include('header.php');
     //database connecton
     $connc = mysqli_connect('localhost','root','','student_information');
     if(!$connc){
      echo mysqli_connect_error();
  }

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
        $sql = "INSERT INTO student (Firstname,Lastname, Email) VALUES('$firstname','$lastname','$email')" ; 
            if(mysqli_query($connc, $sql)) {
                    echo "data insert successful";
                 header('location: insert.php');
            }else{
                    echo "Not insert";
            }
   

        
    
}

?>
<!-- //for upload image -->




<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your first name"   name="firstname">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your last name"   name="lastname">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="name" placeholder="Enter your email"   name="email">
                </div>
                <div class="mb-3 mt-3">
                    <input type="file" class="form-control" id="file_upload"  name="up_file">
                </div>
                <input type="submit" value="Insert" name="submit" class="btn btn-info">
            </form>
        </div>


        <div class="col-md-6">
            <h3 class="text-center p-2  bg-success text-white">User's Information</h3>
        <?php 
        $sqlview = "SELECT * FROM student";
        $queryview = mysqli_query($connc, $sqlview);

       echo "<table class='table table-success'>

            <tr> 
                <th>ID </th>
                <th>First Name </th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>    ";
        while($data = mysqli_fetch_assoc($queryview)){

        $id = $data['ID'];
        $firstname = $data['Firstname'];
        $lastname = $data['Lastname'];
        $email = $data['Email'];
        
        echo 
        "<tr>
            <td>$id</td>
            <td>$firstname</td>
            <td>$lastname</td>
            <td>$email</td>      
            <td> 
            <span class='btn btn-success'>Edit</span>
            <span class='btn btn-danger'>Delete</span>
            </td>      
        </tr>";
        
       }
        ?>
        </table>
        </div>


        


    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <!-- //show image -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <h3>Profile Photo</h3>

                
                </div>
            </div>
        </div>
    </div>
</div>








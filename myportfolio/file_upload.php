<?php 

    $title = 'File Handler';
    include('header.php');
     //database connecton
     $connc = mysqli_connect('localhost','root','','photo');
     if(!$connc){
      echo mysqli_connect_error();
  }

   


   if(isset($_POST['submit'])){
    $file_name       = $_FILES['up_file']['name']; //for showing the file name

    $temp_location   = $_FILES['up_file']['tmp_name'];  //for temp locations

    $file_type       = $_FILES['up_file']['type']; //file type

    $file_size       = $_FILES['up_file']['size']; //size of file

    // now trnasfer the file form temp location to my locations
    $upload_location = "images/".$file_name;

    if($file_size < 500000){
        if($file_type == 'image/jpeg'){
            // 1.index is temp location 2. is uploaded location
            if(file_exists($upload_location)){ //not upload same file
                echo 'File already exists';
            }else{
                if(move_uploaded_file($temp_location,$upload_location)){

                    $sql = "INSERT INTO image (imagename) VALUES('$file_name')" ; //data insert

                    if(mysqli_query($connc, $sql)){  //start query

                        echo "data inserted";
                    }else{
                        echo 'data not inserted';
                    }
                    echo  "file uploaded";
                }else{
                echo 'No uploaded';
                }
            }            
        }else{
            echo 'Please select a image file[jpeg]';
        }
    }else{
        echo 'image size must be 500kb';
    }   
   }  

?>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3 mt-3">
                                <input type="text" name="name" id="name" class="form-control" placeholder="enter name">
                                <label for="name" class="form-label">Select File</label>
                                <input type="file" class="form-control" id="file_upload"  name="up_file"> <br> 
                                <input type="submit" value="Upload" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body up_img">
                        <div class="view_img">
                            <h6>Profile photo</h6>
                            <?php
                            $sql = "SELECT * FROM image";
                            $query = mysqli_query($connc, $sql);
                            while($data = mysqli_fetch_assoc($query)){
                            $imagename = $data['imagename'];
                            echo "<img src='images/$imagename' >"; 
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
        
    </div>








<?php 
include('footer.php');

?>
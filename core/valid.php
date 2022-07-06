<?php 

$servername="localhost";
$dbuser="root";
$dbpass="";
$dbname="formdemo";


$conn=mysqli_connect($servername,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("connetion gagal:".mysqli_connect_error());
}


    
        if(isset($_POST['inputdata'])){
            if(strlen($_POST['nama'])<1){
                echo "<h5 style='color:red'>*nama wajib diletak*</h5>";

             } else{
                    $nama=$_POST['nama'];
                }

            if(strlen($_POST['password'])<1){
                    echo "<h5 style='color:red'>*Password wajib diletak*</h5>";
                } else{
                    $password=$_POST['password'];
                }
            }

            if(!filter_var($_POST['emel'],FILTER_VALIDATE_EMAIL)){
                echo "<h5 style='color:red'>*Emel wajib diletak*</h5>";
                }else{
                    $emel=$_POST['emel'];
                }

                // test connection db masuk atau tak

            if(isset($nama)&& isset ($password) && isset($emel)){
                echo "data siap";

            }else{
                echo "data problem";
            }
            
            


            
                $query="INSERT INTO agent(username,password,emel) values('$nama','$password','$emel')";

                if(mysqli_query($conn,$query)){
                    echo "database berhasil ditambah";
                }else{
                    echo "error:".mysqli_connect_error();
                }
            
            

        
    ?>

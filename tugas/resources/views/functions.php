<?php 
    $con = mysqli_connect("localhost","root","","kantinpakdin") ;

        function registrasi($data){
           global $con;

            $username = $data["username"];
            $email = $data["email"];
            $password = $data["password"];
            $password2 = $data["password2"];
            $result= mysqli_query($con, "SELECT username FROM user WHERE username=$username");
            
            if(mysqli_num_rows($result) === 1){
                echo "<script>
                alert('username sudah terdaftar');
                </script> ";
            return false;
            }
            if($password !== $password2){
                echo "<script>
                        alert('konfirmasi password salah');
                    </script> ";
                    return false;
            }

            

           


            $queryy = mysqli_query($con, "INSERT INTO akun VALUES ('$username','$password','$email')");

           return mysqli_affected_rows($con);
        
        



          }




?>
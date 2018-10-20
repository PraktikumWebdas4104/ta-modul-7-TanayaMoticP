<?php
include "koneksi.php";
//get the value from form update
 $nim = $_GET['nim']; //get the no which will deleted
 

//query for update data in database
 $query = "DELETE FROM maba WHERE nim = '$nim'" ;
 $hasil = mysqli_query($conn,$query);
 //see the result
 if ($hasil) {
    include "lihat.php";
	echo "<h4> Delete Data Success</h4>";
}
?>
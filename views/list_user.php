<?php
while($row = mysqli_fetch_assoc($query)){

    echo $row['id'].'<br/>'.$row['name'].'<br/>'.$row['fullname'].'<hr/>';
}
?>
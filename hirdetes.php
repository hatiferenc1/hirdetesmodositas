<?php
    $poszt= mysqli_fetch_array(mysqli_query($adb , "
                                                SELECT * FROM post 
                                                WHERE Pid ='$_GET[c]'
                                                "));

?>





<div class='pdoboz'>
    <h1><?=$poszt['Ptitle'];?></h1>
    <img src="./images/<?=$_GET['k'];?>" style="width: 40%;">
    <p><?=$poszt['Pdesc'];?></p>
    <p><?=$poszt['Ptel'];?></p>
    <p><?=$poszt['Pcity'];?></p>
    <p><?=$poszt['Pcost'];?></p>
</div>
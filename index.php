<?php
        namespace ejemplo\Maximo;
        require_once 'maximo.php';
        $max = maximo([1,7,3,4,-1,1000]);
        echo"<center>";
				echo "<h1 style='margin-top:200px;border:20px inset green;width:400px'>NUMERO MAXIMO=$max</h1>";
        echo"</center>";

?>

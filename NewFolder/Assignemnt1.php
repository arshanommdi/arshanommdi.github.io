<html leng="en">
    <?php
        function TenNum($endNum){
            for ($i = 5; $i <=$endNum; $i=$i+2) {
                echo "$i"."<br>";
            }
        }
        TenNum(20);
    ?>
</html>
<?php
    session_start();
    if(isSet($_POST['subSchedule']))
    {
        session_destroy();
        header('Location: location.php');
    }
    if(!isSet($_SESSION['validity'])){
        header('Location: location.php');
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isSet($_SESSION['validity'])){
                echo "<form method=\"POST\"><div class=\"form-group green-border-focus\"><label for=\"exampleFormControlTextarea5\">Enter the schedule</label><textarea name=\"schedule\" class=\"form-control\" id=\"exampleFormControlTextarea5\" rows=\"35\">";
                $data= file_get_contents("assets/timeTable.txt");
                // $data=str_replace("\n","[nl]",$data);
                echo $data;
                echo "</textarea></div><button name=\"subSchedule\" type=\"submit\">Update server</button></form>";
                if(isSet($_POST['subSchedule']))
                {
                    $schedule=$_POST['schedule'];
                    $handle= fopen("assets/timeTable.txt","w");
                    fwrite($handle,$schedule);
                    fclose($handle);
                }
            }
            
        ?>
        <br>
    </body>
</html>
<?php  
        define('DB_NAME', 'time availability');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');

        $link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if(!$link){
            die('Could not connect:' . mysqli_connect_error());
        }

        $db_selected = mysqli_select_db ( $link,DB_NAME);

        if(!$db_selected){
            die('Can\'t use' . DB_NAME . ':' . mysqli_connect_error() );
        }

        $name = $_POST['Name'];
        $dep = $_POST['Department'];
        $purp = $_POST['Purpose'];
        $date = $_POST['Date'];
        $room = $_POST['Room'];
        $from = $_POST['From_Time'];
        $to = $_POST['To_Time'];
        echo $date;
        $checker = "SELECT * FROM $room 
                    WHERE Date='$date'
                    AND (('$from' >= From_Time AND '$from' < To_Time)
                    OR  ('$to' > From_Time AND '$to' <= To_Time))"; 
        if($result=mysqli_query($link,$checker)){
            $rows = mysqli_num_rows($result);
            if($rows === 0){
                $sql = "INSERT INTO $room (Name, Department, Purpose, Date, From_Time, To_Time) values ('$name','$dep','$purp','$date','$from','$to')";
                if(!mysqli_query($link , $sql)){
                    die('Error: ' . mysqli_error($link) ); 
                }
                mysqli_close($link);
                header("Location: http://localhost/ReservationSystem/endpage_success.html");
            }
            else{
                mysqli_close($link);
                header("Location: http://localhost/ReservationSystem/endpage_unavailable.html");
            }
        }    
        
?> 
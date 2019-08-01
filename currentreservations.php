<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style type="text/css">
        table{
        border-collapse: collapse;
        width: 50%;
        color: #d96459;
        font-size: 25px;
        text-align: left;
        opacity: 0.9;
        margin-left: 25%;
        }
        th{
            background-color: #d96459;
            color:white;
        }
        tr{
            background-color: grey;
            color: white;
        }
        </style>
</head>
<body>
    <div class="container-fluid" style=" background-image: url(conference.jpg); background-position: center; background-size: cover; height:100vh;  background-repeat: no-repeat; position: absolute;"> 
    <a type="button" class="btn btn-primary btn-lg" style="float: left; margin: 2%;" href = "homepage.php">Back</a>        
    <div class="vertical-center" style="margin-top:10%;">
                <form action="" method="post">
                    <span class="form-label offset-xl-2  offset-lg-2" style="color: white; font-size: 18px"> Room  </span>
                    <select name='Room' class="col-xl-3 col-lg-3" name="Room" required style="-webkit-appearance: menulist-button; -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1); height: 4vh;-webkit-user-select: none; ; display: inline-block; text-align: center">
                        <option value="">Select an option</option>
                        <option value="room1">Room 1</option>
                        <option value="room2">Room 2</option>
                        <option value="room3">Room 3</option>
                        <option value="room4">Room 4</option>
                    </select>
                    <span class="form-label offset-xl-1 offset-lg-1" style="color:  white;  font-size: 18px"> Date  </span>
                    <input name='Date' class="col-xl-3 col-lg-3" required="required" type="date" name="Date" placeholder="Enter a date" style="-webkit-appearance: menulist-text; -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1); height: 4vh;-webkit-user-select: none; display: inline-block;">
                    <div class="form-btn">
                        <button class="submit-btn btn-primary" style=" height:50px; width: 35%; margin-top: 2%; border-radius: 3px; display: block; border: none; margin-left: 32%">View Schedule</button>
                    </div>
                </form>
            </div>
            <br>
            <?php
                define('DB_NAME', 'time availability');
                define('DB_USER', 'root');
                define('DB_PASSWORD', '');
                define('DB_HOST', 'localhost');
                $link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                // Check connection
                if(!$link){
                    die('Could not connect:' . mysqli_connect_error());
                }

                $db_selected = mysqli_select_db ( $link,DB_NAME);

                if(!$db_selected){
                    die('Can\'t use' . DB_NAME . ':' . mysqli_connect_error() );
                }
                if(isset($_POST['Room']) && isset($_POST['Date'])){
                    $date = date('Y-m-d', strtotime($_POST['Date']));
                    $room = $_POST['Room'];
                
                $result = mysqli_query($link,"SELECT * FROM $room WHERE Date='$date' ORDER BY From_Time");

                echo "<table><tr><th>Name</th><th>Department</th><th>Purpose</th><th>Date</th><th>From Time</th><th>To Time</th></tr>";

                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Department'] . "</td>";
                        echo "<td>" . $row['Purpose'] . "</td>";
                        echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>" . $row['From_Time'] . "</td>";
                        echo "<td>" . $row['To_Time'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                mysqli_close($link);
    ?>
    </div>
    
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>

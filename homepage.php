<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <div id="reserve" class="section" style="position:inherit; background-image: url(conference.jpg); background-position: center; background-size: cover; height:100vh">
    <a type="button" class="btn btn-primary btn-lg" style="float: right; margin: 2%;" href = "currentreservations.php">Check current reservations</a>
    <div class="section-center" style="top: 10%; position: relative">
            <div class="container"> 
                    <div class="reservation form" style="max-width: 420px; margin: auto; padding: 2%">
                        <div class="form-header" style="color: #ffc021; margin: auto; text-align:center; height: 50%">
                            <h1>RESERVE A ROOM</h1>
                        </div>
                        <div class="reservation form" style="color: white; background-color: black; padding: 5%" >
                            <form action="connection.php" method="post">
                                <div class="form-group">
                                    <span class="form-label" >Name</span>
                                    <input class="form-control" required="required" type="text" name="Name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                        <span class="form-label">Department</span>
                                        <input class="form-control" required="required" type="text" name="Department" placeholder="Enter your department">
                                </div>
                                <div class="form-group">
                                        <span class="form-label">Purpose</span>
                                        <input class="form-control" required="required" type="text" name="Purpose" placeholder="Enter the purpose of reservation">
                                </div>
                                <div class="form-group">
                                        <span class="form-label">Date</span>
                                        <input class="form-control" required="required" type="date" name="Date" placeholder="Enter a date">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Room</span>
                                    <select name="Room" required style="-webkit-appearance: menulist-button; -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1); height: 4vh;-webkit-user-select: none; width: 100%;">
                                        <option value="">Select an option</option>
                                        <option value="room1">Room 1</option>
                                        <option value="room2">Room 2</option>
                                        <option value="room3">Room 3</option>
                                        <option value="room4">Room 4</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <span class="form-label">From</span>
                                            <input class="form-control" required="required" type="time" name="From_Time" placeholder="Enter desired time">
                                    </div>
                                    <div class="form-group col-md-6">
                                            <span class="form-label">To</span>
                                            <input class="form-control" required="required" type="time" name="To_Time" placeholder="Enter desired time">
                                    </div>
                                </div> 
                                <div class="form-btn">
                                        <button class="submit-btn" style="background-color: #ffc021; height:50px; width: 100%; margin-top: 2%; border-radius: 3px; display: block; border: none">CHECK AVAILABILITY</button>
                                </div>
                            </form>   
                        </div> 
                
            </div>
        </div>
    </div>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>

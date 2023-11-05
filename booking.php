<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="booking.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <ul>
        <li><a href="" class="me">LOGIN</a></li>
        <li><a href="" class="me">ABOUT US</a></li>
        <li><a href="" class="me">CONTACTS</a></li>
        <li><a href="" class="me">HOME</a></li>
    </ul>
    <br>
    <br>
    <div class="app">
        <form method="post" action="booking-db.php">
        <center><h1>Make an Appointment</h1></center>
        <div class="info"><b>Name</b></div>
        <div class="details">
            <input type="text" class="na" placeholder="Enter you Name" name="Name" required>
            
        </div>
        <div class="info"><b>Contacts</b></div>
        <div class="details">
         <input type="text" class="na" placeholder="Enter your E-mail Address" name="email" required>
         <input type="text" class="na" placeholder="Enter your Contact Number" name="number" required>
        </div>
        <div class="info"><b>Services</b></div>
        <div class="details">
            Rooms:
            <select class="na" name="rooms">
                <option></option>
                <option>Deluxe</option>
                <option>Standard</option>
            </select>
            Additionals:
            <select class="na" name="additionals">
                <option></option>
                <option>Pillow</option>
                <option>Blankets</option>
                <option>Mattress</option>
            </select>
        </div>
        <div class="info"><b>Schedule</b></div>
        <div class="details">
            Check-in: <input type="date" class="na" name="check_in" required>
    </div>
            <div class="details">
            Check-out: <input type="date" class="na" name="check_out" required>
        </div>
        <input type="submit" class="su">
        <input type="submit" class="su" value="Reset">
        </form>
    </div>
</div>
</body>
</html>

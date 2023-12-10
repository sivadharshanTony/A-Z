<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking App</title>
<!-- Include your CSS file -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}"></head>
</head>
<body>
<div class="form-group">
        <h1>Welcome to the Bus Booking App</h1>
    </div>    
<form action="" method="post">
    @csrf
    <div class="booking-form">
    <div class="form-group">
        <label class="common-label" for="from">From:</label>
        <input type="text" name="from" id="from"  style="width: 50%;" class="form-control custom-input" required>
    </div>
<br>
    <div class="form-group">
        <label class="common-label" for="to">To:</label>
        <input  type="text" name="to" id="to" style="width: 53%;" class="form-control custom-input" required>
    </div>
    <br>
    <div class="form-group">
        <label class="common-label" style="font-size: 14px;"for="onward_date">Onward Journey Date:</label>
        <input type="date" name="onward_date" id="onward_date" class="form-control custom-input" required>
    </div>
    <div class="form-group">
        <label for="onward_time" style="font-size: 14px;" class="common-label">Time for Onward Journey:</label>
        <select name="onward_time" id="onward_time" style="width: 50%" class="form-control custom-input" data-live-search="true" required>
            <!-- Add your options here -->
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
        </select>
    </div>
    <div class="form-group">
        <label class="common-label"style="font-size: 14px;" for="return_date">Return Journey Date:</label>
        <input type="date" name="return_date" id="return_date" class="form-control custom-input">
    </div>

    <div class="form-group">
        <label for="return_time" style="font-size: 14px;" class="common-label">Time for Return Journey:</label>
        <select name="return_time" id="return_time" style="width: 50%; margin-right: 2px; margin-bottom: 10px;"  class="form-control custom-input" data-live-search="true" required>
            <!-- Add your options here -->
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
        </select>
    </div>
    <div class="form-group">
        <label class="common-label"style="font-size: 14px;" for="return_date">Male:</label>
        <input type="text" name="maleCount"  style="width: 10%" id="maleCount" class="form-control custom-input">
    </div>
    <div class="form-group">
        <label class="common-label"style="font-size: 14px;" for="return_date">Female:</label>
        <input type="text" name="femaleCount" style="width: 10%" id="femaleCount" class="form-control custom-input">
    </div>
    <div class="form-group">
        <label for="service" style="width: 1500%; font-size: 14px;" class="common-label">Service:</label>
        <select name="service" style="width: 100%" id="service" class="form-control custom-input" data-live-search="true">
            <!-- Add your options here -->
            <option value="morning">Select</option>>
        </select>
    </div>

    <div class="btnMiddle">
        <button class="btn action_bg btn-sm" type="submit">Search Buses</button>
    </div>
</div>  
<!-- Add your scripts or other body elements here -->
</form>
</body>
</html>

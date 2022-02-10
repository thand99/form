<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogSheet Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">   
           <u>Employee Logsheet system</u> 
        </div>
        <form action="formBackend.php" method="POST" id="logsheet" class = "input-group">
        <div class="form">
        <div class="input_field">
                <label>Date From:</label>
                <input name="dateFrom" type="date" class="input">
            </div>
            <div class="input_field">
                <label>Date To:</label>
                <input name="dateTo"  type="Date" class="input">
            </div>
            <div class="input_field">
                <label>Task title</label>
                <input name="taskTitle" type="text" class="input">
            </div>
            <div class="input_field">
                <label>Task description</label>
                <input name="taskDescription" type="text" class="input">
            </div>
            <div class="input_field">
                <label>Summary of Tasks</label>
                <input name="summuryOfTask" type="text" class="input">
            </div>
            <div class="input_field">
                <label>Duration in weeks</label>
                <input name="durationWeeks" type="number" class="input">
            </div>
            <div class="input_field">
                <label>Duration in days</label>
                <input name="durationDays" type="number" class="input">
            </div>
            <div class="input_field">
                <label>Subtotal: Weeks</label>
                <input name="subTotalWeeks" type="number" class="input">
            </div>
            <div class="input_field">
                <label>Subtotal in days</label>
                <input name="subTotalDays"  type="number" class="input">
            </div>
            <div class="input_field">
                <label>Total to date: Weeks</label>
                <input name="totToDateWeeks"  type="number" class="input">
            </div>
            <div class="input_field">
                <label>Total to date: Days</label>
                <input name="totToDateDays" type="number" class="input">
            </div>
            <div class="input_field">
                <label>Number of days absent from work</label>
                <input name="numDaysAbsent" type="number" class="input">
            </div>
            <div class="input_field">
                
                <label>Reason</label>
               <textarea name="absentReason" class="textarea"></textarea>
            </div>
            <div class="input_field">
                <label>Mentor/SupervisorName</label>
                <input name="mentorName" type="text" class="input">
            </div>
            <div class="input_field">
                <label>Date</label>
                <input name="signDate"  type="date" class="date">
            </div>
            <div class="input_field">
                <input type="submit" value="Submit" class="btn">
            </div>
            
        </div>
       </form>    
    </div>
    
</body>
</html>
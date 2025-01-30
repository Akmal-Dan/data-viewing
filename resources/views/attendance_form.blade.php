<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
</head>
<body>
    <h1>Attendance Form</h1>
    <form action="/attendance/show" method="POST">
        @csrf
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" required><br><br>

        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="students">Number of Students:</label>
        <input type="number" id="students" name="students" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

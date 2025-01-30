<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Details</title>
</head>
<body>
    <h1>Attendance Details</h1>
    <ul>
        @foreach ($attendances as $attendance)
            <li>
                Date: {{ $attendance['date'] }}<br>
                Class: {{ $attendance['class'] }}<br>
                Start Time: {{ $attendance['start_time'] }}<br>
                End Time: {{ $attendance['end_time'] }}<br>
                Subject: {{ $attendance['subject'] }}<br>
                Number of Students Present: {{ $attendance['students'] }}<br>
                <hr>
            </li>
        @endforeach
    </ul>
    <a href="/attendance/form">Go back to the form</a>
</body>
</html>

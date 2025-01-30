<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function showForm()
    {
        return view('attendance_form');
    }

    public function showAttendance(Request $request)
    {
        // Start session if not already started
        if (!session()->has('attendances')) {
            session(['attendances' => []]);
        }

        // Store the new attendance entry
        $attendance = [
            'class' => $request->input('class'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'subject' => $request->input('subject'),
            'date' => $request->input('date'), // New date input
            'students' => $request->input('students'), // New number of students input
        ];

        $attendances = session('attendances');
        $attendances[] = $attendance;

        // Sort the attendances by date and time (latest first)
        usort($attendances, function ($a, $b) {
            return strtotime($b['date'] . ' ' . $b['start_time']) - strtotime($a['date'] . ' ' . $a['start_time']);
        });

        session(['attendances' => $attendances]);

        return view('attendance_show', compact('attendances'));
    }
}

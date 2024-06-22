<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Charts\EmployeeRegistrationChart;

class DashboardController extends Controller
{
    public function index(EmployeeRegistrationChart $employeeRegistrationChart)
    {
        $employeeCount = Employee::count();

        // Generate the chart
        $chart = $employeeRegistrationChart->build();

        return view('dashboard.index', compact('employeeCount', 'chart'));
    }
}
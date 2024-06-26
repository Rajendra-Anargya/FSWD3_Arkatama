<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Employee;

class EmployeeRegistrationChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $monthlyRegistrations = Employee::selectRaw('COUNT(id) as count, MONTH(tanggal_masuk) as month')
            ->groupBy('month')
            ->pluck('count', 'month')->toArray();
    
        // Prepare data for the chart
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $registrationsData = [];
        
        $maxCount = max($monthlyRegistrations);
    
        for ($i = 1; $i <= 12; $i++) {
            $count = $monthlyRegistrations[$i] ?? 0;
            if ($maxCount > 0) {
                $scaledCount = round(($count / $maxCount) * 9) + 1;
            } else {
                $scaledCount = 1;
            }
            $registrationsData[] = $scaledCount;
        }
    
        return $this->chart->lineChart()
            ->addData('Registrations', $registrationsData)
            ->setHeight(250) 
            ->setXAxis($months);
    }
    }

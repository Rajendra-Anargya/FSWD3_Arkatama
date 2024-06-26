<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('dashboard.pegawai.view', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:employees',
            'tanggal_lahir' => 'required|date',
            'tanggal_masuk' => 'required|date',
            'divisi' => 'required|in:ui/ux,front end,back end',
        ]);

        $employee = Employee::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        // Calculate age based on date of birth
        $tanggal_lahir = Carbon::parse($employee->tanggal_lahir);
        $umur = $tanggal_lahir->diffInYears(Carbon::now());

        return view('dashboard.pegawai.detail', [
            'employee' => $employee,
            'umur' => $umur,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.pegawai.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'email' => 'sometimes|required|string|email|max:255|unique:employees,email,' . $employee->id,
            'tanggal_lahir' => 'sometimes|required|date',
            'tanggal_masuk' => 'sometimes|required|date',
            'divisi' => 'sometimes|required|in:ui/ux,front end,back end',
        ]);
    
        $employee->update($validatedData);
    
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}



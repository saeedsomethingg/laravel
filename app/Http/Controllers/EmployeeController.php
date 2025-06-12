<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('employees.index',compact('employees'));
    }

        public function create(){
        return view('employees.create');
    }

     public function store(Request $request)
    {
   
        $request->validate([
            'name' => 'required|max:30',
            'family' => 'required|max:35',
            'phone' => 'required|max:12',
            'address' => 'required|max:190',
        ]);

        $data=$request->all();
   
        Employee::create($data);

        return redirect()->route('employees')->with('success', 'کتابدار با موفقیت اضافه شد.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id){
                $request->validate([
            'name' => 'required|max:30',
            'family' => 'required|max:35',
            'phone' => 'required|max:12',
            'address' => 'required|max:190',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->family = $request->family;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->save();

        return redirect()->route('employees')->with('success', 'کتابدار با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect()->route('employees')->with('success', 'کتابدار با موفقیت حذف شد.');
    }
}

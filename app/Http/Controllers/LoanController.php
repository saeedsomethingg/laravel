<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Book;
use App\Models\Employee;

class LoanController extends Controller
{
    public function index()
    {   
        $loans = Loan::with(['member', 'book', 'employee'])->latest()->get();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
    $members = Member::all();
    $books = Book::all();
    $employees = Employee::all();

    return view('loans.create', compact('members', 'books', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'employee_id' => 'required|exists:employees,id',
        ]);

        Loan::create([
            'member_id' => $request->member_id,
            'book_id' => $request->book_id,
            'employee_id' => $request->employee_id,

        ]);

        return redirect()->route('loans.index')->with('success', 'فاکتور با موفقیت ثبت شد.');
    }
}


@extends('layouts.app')

@section('content')
         <!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="bg-white shadow rounded-lg p-6 mb-8">
                <h1 class="text-2xl font-bold text-gray-800">فرم امانت</h1>
            </header>
            <div class="bg-white rounded-lg shadow p-6 max-w-xl mx-auto">
                <form method="POST" action="{{ route('loans.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" >نام عضو</label>
                        <select name="member_id" required>
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}">{{ $member->name }} {{ $member->family }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" > نام کتاب </label>
                        <select name="book_id" required>
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }} </option>
                            @endforeach
                        </select><br>

                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" >کتابدار</label>
                        <select name="employee_id" required>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->family }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">ذخیره</button>
                        <a href="{{ route('loans.index') }}" class="bg-gray-300 text-gray-800 px-6 py-2 rounded hover:bg-gray-400 transition">انصراف</a>
                    </div>
                </form>
            </div>
        </main>
    
@endsection
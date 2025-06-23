<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریتی</title>
    <script src="{{asset('assets/js/tail.js')}}"></script>
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-gray-800 w-64 min-h-screen p-4">
            <div class="text-white text-2xl font-bold mb-8">داشبورد</div>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="{{route('loans.index')}}" class="text-white block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                            صفحه اصلی (امانت‌ها)
                        </a>
                    </li>
                    <li>
                        <a href="{{route('books')}}" class="text-white block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                            کتاب‌ها
                        </a>
                    </li>
                    <li>
                        <a href="{{route('members')}}" class="text-white block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                            اعضا
                        </a>
                    </li>
                    <li>
                        <a href="{{route('employees')}}" class="text-white block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                            کارکنان
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        @yield('content')
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .success-message {
            background-color: white;
            padding: 20px 40px;
            border: 2px solid #28a745;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.5rem;
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('layouts.header')

    <div class="success-message">
        Logged in Successfully!
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('index') }}";
        }, 3000);
    </script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

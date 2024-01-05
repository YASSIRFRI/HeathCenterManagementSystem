<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UM6P Health Center - Pharmacy Warehouse Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .custom-button {
            background-color: #4CAF50;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="container-fluid d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <img src="{{ asset('assets/img/um6p.png') }}" alt="University Logo" class="mb-4">
        <h2 class="mb-4">Welcome to UM6P Health Center</h2>
        <p class="mb-4">This is a Pharmacy Warehouse Management System designed to streamline the operations of our health center's pharmacy.</p>
        <div class="mb-4">
            <a href="{{ route('login') }}" class="btn btn-success custom-button">
                Log In
            </a>
            <a href="{{ route('register') }}" class="btn btn-success custom-button">
                Register 
            </a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 3rem;
            overflow: auto;
            align-items: center;
            justify-content: center;
            /* Add padding to the top of the body */
        }

        .card {
            width: 100%;
            max-width: 600px;
            /* Increased max-width for larger screens */
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            border-radius: 0.5rem;
            /* Slightly more rounded corners */
            border: 1px solid #e0e0e0;
            /* Add a border */
            background-color: #fff;
            margin-top: 30rem !important;
            margin-bottom: 10rem !important;

        }

        .card-title {
            text-align: center;
            margin-bottom: 1.5rem;
            /* Increased margin */
            font-weight: 500;
            /* Medium font weight */
            color: #343a40;
        }

        .form-label {
            font-weight: 400;
            /* Medium font weight for labels */
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 0.375rem;
            /* Slightly more rounded form controls */
            border: 1px solid #ced4da;
            padding: 0.75rem;
            /* Slightly increased padding */
            transition: border-color 0.2s ease;
            /* Smooth transition */
        }

        .form-control:focus {
            border-color: #007bff;
            /* Highlight on focus */
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
            /* Add focus shadow */
            outline: none;
            /* Remove default outline */
        }

        .btn-primary {
            width: 100%;
            border-radius: 0.375rem;
            /* Slightly more rounded button */
            padding: 0.75rem;
            /* Slightly increased padding */
            font-weight: 500;
            /* Medium font weight */
            background-color: #007bff;
            border: none;
            transition: background-color 0.2s ease, transform 0.1s ease;
            /* Smooth transition */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker shade on hover */
            transform: translateY(-1px);
            /* Slight lift on hover */
        }

        .btn-primary:active {
            background-color: #004080;
            /* Even darker shade on active */
            transform: translateY(0);
        }

        .mt-3 {
            margin-top: 1.5rem;
            /* Increased margin */
        }

        .text-center {
            text-align: center;
        }

        .small {
            font-size: 0.875rem;
            /* Slightly larger small text */
            color: #6c757d;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
            /* Increased margin bottom */
        }
    </style>
</head>

<body>
    <div class="container mt-3 mb-3">
        <div class="card mt-3">
            <h2 class="card-title">Register</h2>
            <form action="{{ route('auth.register') }}" enctype="multipart/form-data" method="POST" class="mt-3">
                @csrf
                <x-form-field label="Name" name="name" type="text"></x-form-field>
                <x-form-field label="Email" name="email" type="email"></x-form-field>
                <x-form-field label="Password" name="password" type="password"></x-form-field>
                <x-form-field label="Confirm Password" name="password_confirmation" type="password"></x-form-field>
                <x-form-field label="Contact" name="contact" type="text"></x-form-field>
                <x-form-field label="Location" name="location" type="text"></x-form-field>
                <x-form-field label="Image" name="image" type="file"></x-form-field>

                <button type="submit" class="btn btn-primary">Register</button>
                <div class="mt-3 text-center">
                    <small class="text-muted">Already have an account? <a
                            href="{{ route('auth.login.page') }}">Login</a></small>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

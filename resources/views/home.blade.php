<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirBnB-like Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Slightly softer shadow */
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            /* Added box-shadow transition */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            /* Increased shadow on hover */
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
            /* Ensure image covers the entire area */
            height: 250px;
            /* Fixed height for consistency */
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-size: 1rem;
            font-weight: 600;
            /* Medium font weight for title */
            margin-bottom: 0.5rem;
            color: #222;
            /* Darker title color */
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
            /* Medium gray for description */
        }

        .card-price {
            font-size: 1.2rem;
            font-weight: 700;
            /* Bold price */
            color: #222;
            margin-top: 0.5rem;
        }

        .location-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 0.25rem;
        }

        .star-rating {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            color: #f59e0b;
            /* Airbnb's star color */
            margin-top: 0.5rem;
        }

        .star-rating svg {
            width: 1rem;
            height: 1rem;
        }

        .num-reviews {
            color: #777;
            font-size: 0.8rem;
            margin-left: 0.25rem;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Services to Book</h1>
        <div class="row g-4">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ $service->imageUrl() }}" class="card-img-top" alt="House Interior">
                        <div class="card-body">
                            <div class="location-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.23 1.783-1.996 2.943A31.362 31.362 0 0 1 8 15c-1.766-1.157-2.473-1.878-3.004-2.94C3.834 10.723 3 9.992 3 8.942V4.5a4.5 4.5 0 0 1 9 0v4.44Z" />
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10Z" />
                                    <path d="M8 4a2 2 0 1 1 0 4 2 2 0 0 1 0-4Z" />
                                </svg>
                                <span>{{ $service->user->name }}</span>
                            </div>
                            <h2 class="card-title">{{ $service->name }}</h2>
                            <p class="card-text">{{ $service->description }}</p>
                            <div class="card-price">GHC {{ $service->amount }}</div>
                            <div class="star-rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.468L4.65 7.547l-3.066-2.626c-.289-.247-.269-.683.022-.906l6.063-5.456 6.064 5.456c.291.223.311.659.022.906l-3.066 2.626 1.185 7.428c.078.319-.341.54-.683.307L8 12.344l-5.385 3.301c-.341.233-.76-.09-.683-.306z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.468L4.65 7.547l-3.066-2.626c-.289-.247-.269-.683.022-.906l6.063-5.456 6.064 5.456c.291.223.311.659.022.906l-3.066 2.626 1.185 7.428c.078.319-.341.54-.683.307L8 12.344l-5.385 3.301c-.341.233-.76-.09-.683-.306z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.468L4.65 7.547l-3.066-2.626c-.289-.247-.269-.683.022-.906l6.063-5.456 6.064 5.456c.291.223.311.659.022.906l-3.066 2.626 1.185 7.428c.078.319-.341.54-.683.307L8 12.344l-5.385 3.301c-.341.233-.76-.09-.683-.306z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.468L4.65 7.547l-3.066-2.626c-.289-.247-.269-.683.022-.906l6.063-5.456 6.064 5.456c.291.223.311.659.022.906l-3.066 2.626 1.185 7.428c.078.319-.341.54-.683.307L8 12.344l-5.385 3.301c-.341.233-.76-.09-.683-.306z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path
                                        d="M5.354 5.119 7.538.79a.5.5 0 0 1 .924 0l2.184 4.329 5.475.476a.5.5 0 0 1 .28 1.001l-3.98 3.592 1.008 5.41a.5.5 0 0 1-.766.48l-4.64-3.37a.5.5 0 0 1-.766 0l-4.64 3.37a.5.5 0 0 1-.766-.48l1.008-5.41-3.98-3.592a.5.5 0 0 1 .28-1.001z" />
                                    <path d="M8 12.027a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                </svg>
                                <span class="num-reviews">(25 reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

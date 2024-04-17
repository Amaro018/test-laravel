<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Star Rating System</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
        /* Additional styles to customize the stars */
        .star-rating .star {
            transition: color 0.2s ease-in-out;
        }

        .star-rating input[type="radio"]:checked~.star {
            color: orange;
            /* Highlight color for selected stars */
        }

        .star-rating .star:hover,
        .star-rating .star:hover~.star {
            color: orange;
            /* Hover state color for stars */
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div>
        <form class="star-rating">
            <div class="flex justify-center space-x-1">
                <!-- Correct order for visually representing stars from 1 to 5 -->
                <input type="radio" name="rating" id="star1" value="1" class="hidden" />
                <label for="star1" class="star text-3xl cursor-pointer">&#9733;</label>

                <input type="radio" name="rating" id="star2" value="2" class="hidden" />
                <label for="star2" class="star text-3xl cursor-pointer">&#9733;</label>

                <input type="radio" name="rating" id="star3" value="3" class="hidden" />
                <label for="star3" class="star text-3xl cursor-pointer">&#9733;</label>

                <input type="radio" name="rating" id="star4" value="4" class="hidden" />
                <label for="star4" class="star text-3xl cursor-pointer">&#9733;</label>

                <input type="radio" name="rating" id="star5" value="5" class="hidden" />
                <label for="star5" class="star text-3xl cursor-pointer">&#9733;</label>
            </div>
        </form>
    </div>
</body>

</html>

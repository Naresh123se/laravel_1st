<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<div class=" ">
    <div class="container py-5 ">

        <h3 class="category-heading1 category-heading ">Our Specialities</h3>
        <div id="categoryCarousel" class="slick-carousel">
            @foreach ($viewcategories as $category)
            <div class="profile-content">
                <a style="text-decoration: none" href="{{ route('products.searchSort', ['category' => $category->id]) }}">
                    <img src="{{ asset('storage/' . $category->category_icon) }}"
                        class="profile-image" alt="Profile Image 1">
                    <p class="category-name " style="color: rgba(23, 10, 10, 0.729); ">{{ $category->name }}</p>
                </a>

            </div>
            @endforeach
        </div>

        <style>
            .profile-container {
                border-radius: 30px;
                box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                margin: 0 5px;
                align-items: stretch;
                width: 90%;
            }

            .profile-content {
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .slick-initialized .slick-slide {
                display: flex;
            }

            .category-name {
                margin-top: 5px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }

            .category-heading {
                text-align: center;
                font-size: 2.3rem;
                color: #FFC107;
            }
     
            .category-heading1 {
                color: #000;
            }

            .profile-image {
                width: 100px;
                height: 100px;
                object-fit: cover;
                border-radius: 20%;
                padding: 4px;
                box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                max-width: 100%;
                /* Ensure images are responsive */
            }

       
        </style>

        <script>
            $(document).ready(function() {
                $('#categoryCarousel').slick({
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: false,
                    draggable: true,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: false
                        }
                    }],
                    lazyLoad: 'ondemand',
                    speed: 500,
                });
            });
        </script>
    </div>

</div>
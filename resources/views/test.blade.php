<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                @foreach($datas as $review)
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <figure class="figure testimoni-figure">
                            <div class="row mx-3 ">
                                <div class="col-4 mt-3 text-center ">
                                    <img src="{{asset($review->image)}}" class="img-testimoni" alt="">
                                </div>
                                <div class="col-6 my-auto pl-0">
                                    <h6 class="testimoni-nama mt-4 mb-0 font-weight-bold">{{$review->name}}</h6>
                                    <p class="testimoni-pekerjaan mx-auto text-muted"
                                       style="font-size: small;">{{$review->job}}</p>
                                </div>
                                <div class="quote-item col-2 pl-0 my-auto">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <figcaption class="figure-caption">
                                        <div class="figure-caption text-dark text-justify px-3 pt-2">
                                            <p><span class="quote">"</span> {{$review->message}} <span
                                                    class="font-weight-bold quote">"</span></p>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    </div>
                @endforeach
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <style>
        /*
        code by Iatek LLC 2018 - CC 2.0 License - Attribution required
        code customized by Azmind.com
    */
        @media (min-width: 768px) and (max-width: 991px) {
            /* Show 4th slide on md if col-md-4*/
            .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }

        @media (min-width: 576px) and (max-width: 768px) {
            /* Show 3rd slide on sm if col-sm-6*/
            .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -50%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }

        @media (min-width: 576px) {
            .carousel-item {
                margin-right: 0;
            }

            /* show 2 items */
            .carousel-inner .active + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be also positioned for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        /* MD */
        @media (min-width: 768px) {
            /* show 3rd of 3 item slide */
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* right or prev direction */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        /* LG */
        @media (min-width: 991px) {
            /* show 4th item */
            .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }

            /* Show 5th slide on lg if col-lg-3 */
            .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -25%; /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* right or prev direction //t - previous slide direction last item animation fix */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
    </style>
    <script>
        /*
        Carousel
    */
        $('#carousel-example').on('slide.bs.carousel', function (e) {
            /*
                CC 2.0 License Iatek LLC 2018 - Attribution required
            */
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 5;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    } else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });
    </script>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('public/assets/css/gamestyle.css')}}">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/js/wScratchPad.min.js')}}"></script>
    <script src="{{url('public/assets/js/ajax.js')}}"></script>
    <script src="{{url('public/assets/js/sweetalert.min.js')}}"></script>
    <script src="{{url('public/assets/js/confetti.browser.min.js')}}"></script>
    <title>RublyX</title>
</head>

@if(isset($restaurant) && isset($quiz_data))
@if($restaurant->status == 0)
    <div class="container">
        <div class="card py-5 px-3 d-flex justify-content-center align-items-center">
            <img class="py-2 logo_img" src="{{asset("public/restaurant_logo/".$restaurant->restaurant_logo)}}" alt="">
            <h2 class="py-2">{{$restaurant->restaurant_name}}</h2>
            <form id="validation_form" class="d-flex justify-content-center flex-column">
                @csrf
                <h4 class="mt-5">Enter Validation Code To activate</h4>
                <input type="hidden" value="{{$restaurant->id}}" name="id">
                <input type="number" name="validation_code" required class="form-control py-2 mt-2">
                <button type="submit" class="btn btn-primary p-2 mt-2">Submit</button>
            </form>
        </div>
    </div>
@else
        <script type="text/javascript">
            if (localStorage.getItem("{{$restaurant->id}}") === "yes") {
                if (localStorage.getItem("{{$restaurant->id}}_form") === "none") {
                    setTimeout(function () {
                        $('.winner_modal').modal('toggle');
                    }, 500)
                } else {
                    setTimeout(function () {
                        var html = $(".wn_win").html();
                        $(".scratch_card_sec").html(html);
                    }, 500)
                }
            }
        </script>
    <style>
        .swal-icon img {
            width: 150px;
            border-radius: 30px;
        }
    </style>

    <section class="scratch_card_sec"
             style="background-image :url({{url('public/background_image/'.$restaurant->background_img)}})">
        <div style="display: flex; flex-direction: column; justify-content: space-around; height: 100vh">
            <div class="head-logo-restau text-center">
                <img class="logo_img my-2" src="{{asset("public/restaurant_logo/".$restaurant->restaurant_logo)}}" alt="">
                <h2>{{$restaurant->restaurant_name}}</h2>
            </div>

            <div class="scratch-cards px-5">
                <div class="row pb-xl-5">
                    <div class="col-md-4 mt-3">
                        <div class="card1" id="card1">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card1" id="card2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card1" id="card3">
                        </div>
                    </div>
                </div>
            </div>

            <div class="rate_us_menu d-flex justify-content-around ">
                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset('public/images/menu.svg')}}"> &nbsp Menu
                    </div>
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1"
                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered menu_modal">
                        <div class="modal-content">
                            <div class="modal-header bg-light flex-column p-0 modal_menu_head">
                                <img class="logo_img my-2" style="margin: 0 auto;"
                                     src="{{asset("public/restaurant_logo/".$restaurant?->restaurant_logo)}}" alt="">
                                <h5>{{$restaurant?->restaurant_name}}</h5>
                                <button type="button" class="btn-close btn_menu_close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @php
                                    $monday = json_decode($restaurant?->working_hours?->monday,true);
                                    $tuesday = json_decode($restaurant?->working_hours?->tuesday,true);
                                    $wednesday = json_decode($restaurant?->working_hours?->wednesday,true);
                                    $thursday = json_decode($restaurant?->working_hours?->thursday,true);
                                    $friday = json_decode($restaurant?->working_hours?->friday,true);
                                    $saturday = json_decode($restaurant?->working_hours?->saturday,true);
                                    $sunday = json_decode($restaurant?->working_hours?->sunday,true);
                                @endphp
                                <h6 class="fw-bold text-center">Opening Hours</h6>
                                <div class="text-center">
                                    <div class="p-1"><strong>Monday</strong>
                                        : {{ $monday ? $monday['from'] .' To '. $monday['to']  : 'Off'}} </div>
                                    <div class="p-1"><strong>Tuesday</strong>
                                        : {{ $tuesday ? $tuesday['from'] .' To '. $tuesday['to']  : 'Off'}} </div>
                                    <div class="p-1"><strong>Wednesday</strong>
                                        : {{ $wednesday ? $wednesday['from'] .' To '. $wednesday['to']  : 'Off'}} </div>
                                    <div class="p-1"><strong>Thursday</strong>
                                        : {{ $thursday ? $thursday['from'] .' To '. $thursday['to']  : 'Off'}} </div>
                                    <div class="p-1"><strong>Friday</strong>
                                        : {{$friday ? $friday['from'] .' To '. $friday['to'] : 'Off'}}</div>
                                    <div class="p-1"><strong>Saturday</strong>
                                        : {{($saturday ? $saturday['from'] .' To '. $saturday['to'] : 'Off')}} </div>
                                    <div class="p-1"><strong>Sunday</strong>
                                        : {{($sunday ? $sunday['from'] .' To '. $sunday['to'] : 'Off')}} </div>
                                </div>
                                @if($restaurant?->owner_phone != null || $restaurant?->owner_email != null )
                                    <div class="pt-3 d-flex flex-column">
                                        <h6 class="fw-bold  text-center">Contact Information</h6>
                                        @if($restaurant?->owner_phone != null)
                                            <a class="text-left" href="tel:{{$restaurant?->owner_phone}}">
                                                <img src="{{asset('public/images/phone-portrait-outline.svg')}}">
                                                <i class="fa fa-phone"></i>{{$restaurant?->owner_phone}}</a>
                                        @endif
                                        @if($restaurant?->owner_email != null)
                                            <a href="mailto:{{$restaurant?->owner_email}}" class="pt-1">
                                                <img src="{{asset('public/images/mail-outline.svg')}}">
                                                <i class="fa fa-mail"></i>{{$restaurant?->owner_email}}</a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <div class="d-flex w-100 justify-content-between">
                                    <a href="{{$restaurant?->menu_link}}" target="_blank" type="button"
                                       class="btn btn-info">PDF Menu</a>
                                    <a href="{{$restaurant?->google_reviews_link}}" target="_blank" type="button"
                                       class="btn btn-warning">Google
                                        Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <a href="{{$restaurant?->google_reviews_link}}" class="btn btn-outline-warning" target="_blank">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <img src="{{asset('public/images/star.svg')}}"> &nbsp Rate Us
                    </div>
                </a>

            </div>
            <div class="modal fade winner_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Fill this form to get reward</h1>
                        </div>
                        <div class="modal-body">
                            <form id="winner_form">
                                @csrf
                                <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                                <input type="hidden" name="quiz_id" value="{{$quiz_data[0]->id}}">
                                <div class="mb-1">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input type="text" name="fname" class="form-control" id="fullname" required>
                                </div>
                                <div class="mb-1">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           aria-describedby="emailHelp"
                                           required>
                                </div>
                                <div class="mb-1">
                                    <label for="address" class="form-label">Street</label>
                                    <input type="text" name="address" class="form-control" id="address" required>
                                </div>
                                <div class="mb-1">
                                    <label for="house_no" class="form-label">House No</label>
                                    <input type="text" name="house_no" class="form-control" id="house_no" required>
                                </div>
                                <div class="mb-1">
                                    <label for="postal_code" class="form-label">Postal Code</label>
                                    <input type="text" name="postal_code" class="form-control" id="postal_code" required>
                                </div>
                                <div class="mb-1">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" id="city" required>
                                </div>
                                <div class="mb-1">
                                    <label for="contact" class="form-label">Phone No</label>
                                    <input type="number" name="contact" class="form-control" id="contact" required>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn_modal float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Modal -->

    </section>
    <div class="wn_win">
        @include('partial.restaurant_details')
    </div>
    <footer>
    </footer>
    </body>
</html>
@endif
@else
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h3>Oops! Page not found</h3>
                <h1><span>4</span><span>0</span><span>4</span></h1>
            </div>
            <h2>we are sorry, but the page you requested was not found</h2>
        </div>
    </div>
    @php
    die();
    @endphp
@endif


<script>

    function confiti() {
        confetti({
            particleCount: 100,
            spread: 70,
            origin: {y: 0.6}
        });
    }

    var globalurl = '{{url('/')}}';
    var product_image1 = "{{$quiz_data[0]->win_product_image}}";
    var product_image2 = "{{$quiz_data[1]->win_product_image}}";
    var product_image3 = "{{$quiz_data[2]->win_product_image}}";
    var scratch_result = "{{$prediction}}";
    var total_scratch = [];

    $('#card1').wScratchPad({
        cursor: 'pointer',
        size: 20,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}', // Foreground (image path or hex color).
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 1, product_image1);
        },
        scratchUp: function (e, first_card) {
        },

    });
    $('#card2').wScratchPad({
        cursor: 'pointer',
        size: 20,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}',
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 2, product_image2);
        },
        scratchUp: function (e, second_card) {
        },

    });
    $('#card3').wScratchPad({
        cursor: 'pointer',
        size: 20,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}',
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 3, product_image3);
        },
        scratchUp: function (e, third_card) {
        },
    });


    function scratch_done(e, current_card, card_number, product_image) {
        if (current_card >= 75) {
            if (total_scratch.indexOf(card_number) === -1) {
                total_scratch.push(card_number);
            }
            $('#card' + card_number).wScratchPad('clear');
            $('#card' + card_number).find('img').attr('src', globalurl + '/public/quiz_images/' + product_image);
            $('#card' + card_number).wScratchPad('enable', false);
            if (total_scratch.length === 3) {
                scratch_function(scratch_result);
            }
        }
    }

    function scratch_function(result) {
        window.localStorage.setItem("{{$restaurant->id}}_form", "none");
        window.localStorage.setItem("{{$restaurant->id}}", "yes");
        if (scratch_result == "win") {
            confiti();
            setTimeout(function () {
                swal({
                    title: "Congratulation",
                    text: "{{$quiz_data[0]->title}}",
                    icon: globalurl + '/public/quiz_images/' + product_image1,
                    buttons: ["", "Fill Form"],
                    closeOnClickOutside: false,
                }).then((form) => {
                    $('.winner_modal').modal('toggle');
                });
            }, 500)
        } else {
            localStorage.removeItem("{{$restaurant->id}}_form");
            swal({
                title: "Sorry!",
                text: "No Win",
                icon: globalurl + '/public/images/sademoji.png',
                buttons: false,
                closeOnClickOutside: false
            });

        }
    }


    // Submit Winner
    $('#winner_form').submit(function (e) {
        e.preventDefault();
        let data = new FormData(this);
        let a = function () {
            setTimeout(function () {
                localStorage.removeItem("{{$restaurant->id}}_form");
                window.location.reload();
            }, 500);
        };
        let arr = [a];
        if ((total_scratch.length === 3 && scratch_result == "win") || (localStorage.getItem("{{$restaurant->id}}_form") === "none")) {
            call_ajax_with_functions('', '{{route('winner_details')}}', data, arr);
        } else {
            swal("Failure", " Error! Unexpected Response", "error");
        }
    });

    // validated Restaurant
    $('#validation_form').submit(function (e) {
        e.preventDefault();
        let data = new FormData(this);
        let a = function () {
            setTimeout(function () {
                window.location.reload();
            }, 500);
        };
        let arr = [a];
        call_ajax_with_functions('', '{{route('validate_restaurant')}}', data, arr);
    });


</script>


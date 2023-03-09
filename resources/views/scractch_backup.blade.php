@if(isset($restaurant) && isset($quiz_data))
@else
    <h2>No Prize's Found </h2>
    @php
        die();
        //    header("Location: " . URL::to('/'), true, 302);
        //    exit();
    @endphp
@endif
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

    <title>RublyX</title>
</head>
<body class="position-relative">
<section class="scratch_card_sec"
         style="background-image :url({{url('public/background_image/'.$restaurant->background_img)}})">
    <div class="container h-100">
        <div class="head-logo-restau text-center">
            <img class="logo_img py-2" src="{{asset("public/restaurant_logo/".$restaurant->restaurant_logo)}}" alt="">
            <h2>{{$restaurant->restaurant_name}}</h2>
        </div>

        <div class="scratch-cards px-xl-5">
            <div class="row pb-xl-5">
                <div class="col-4 mt-3">
                    <div class="card1" id="card1">
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card1" id="card2">
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card1" id="card3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade winner_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Fill this Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="winner_form">
                        @csrf
                        <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                        <input type="hidden" name="quiz_id" value="{{$quiz_id}}">
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
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                        <div class="mb-1">
                            <label for="contact" class="form-label">Contact No</label>
                            <input type="number" name="contact" class="form-control" id="contact" required>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn_modal float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="wn_win">

</div>
<footer>
</footer>
</body>
</html>
<script>

    var globalurl = '{{url('/')}}';
    var product_image1 = "{{$quiz_data[0]->win_product_image}}";
    var product_image2 = "{{$quiz_data[1]->win_product_image}}";
    var product_image3 = "{{$quiz_data[2]->win_product_image}}";
    var scratch_result = "{{$prediction}}";
    var total_scratch = [];

    $('#card1').wScratchPad({
        cursor: 'pointer',
        size: 50,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}', // Foreground (image path or hex color).
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 1 , product_image1);
        },
        scratchUp: function (e, first_card) {
        },

    });
    $('#card2').wScratchPad({
        cursor: 'pointer',
        size: 50,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}',
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 2 , product_image2);
        },
        scratchUp: function (e, second_card) {
        },

    });
    $('#card3').wScratchPad({
        cursor: 'pointer',
        size: 50,          // The size of the brush/scratch.
        bg: '{{$restaurant->color}}',  // Background (image path or hex color).
        fg: '{{url('/public/scratch_img/'.$restaurant->scratch_img)}}',
        realtime: true,
        scratchMove: function (e, card) {
            scratch_done(e, card, 3 , product_image3);
        },
        scratchUp: function (e, third_card) {
        },
    });




    function scratch_done(e, current_card, card_number, product_image) {
        if (current_card >= 75) {
            if(total_scratch.indexOf(card_number) === -1)
            {
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
        if (scratch_result == "win") {
            setTimeout(function () {
                $('.winner_modal').modal('toggle');
            }, 2000)
        } else {
            alert("looser");
        }
    }


    // Submit Winner
    $('#winner_form').submit(function (e) {
        e.preventDefault();
        let data = new FormData(this);
        let a = function () {
            setTimeout(function () {
                window.location.href = '{{url('/')}}'
            }, 1000);
        };
        let arr = [a];
        call_ajax_with_functions('', '{{route('winner_details')}}', data, arr);
    });


</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('public/assets/css/gamestyle.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <title>Doctor Yasir</title>
</head>
<body class="position-relative">
<section class="scratch_card_sec">
    <div class="container h-100">
        <div class="head-logo-restau text-center">
            <img class="logo_img py-2" src="{{asset("public/assets/img/game-page/logo-img.jpg")}}" alt="">
            <h2>Dönerhaus</h2>
            <div class="info_restau text-light">
                Open until Thursday 17:00 | Schillerstraße 12, 12345 Hamburg |  +1234567890
            </div>
        </div>
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center my-2">
            <div class="info_menu">
                <a href=""><img src="{{asset('public/assets/img/game-page/menu_icon.png')}}" style="width: 45px" alt="rate us"></a>
            </div>
            <div class="rate_us_icon mx-2 mx-lg-0">
                <a href=""><img src="{{asset('public/assets/img/game-page/Rate%20Us%20icon.png')}}" style="width: 45px" alt="rate us"></a>
            </div>
        </div>
        <div class="start_game_title">
            <img src="{{asset('public/assets/img/game-page/Bg_scratch_and_win.png')}}" class="bg_scratch_title" alt="">
            <img src="public/assets/img/game-page/scratch%20and%20win%20text.png" class="txt_scratch_title" alt="">
        </div>
        <div class="scratch-cards px-xl-5">
            <div class="row pb-xl-5">
                <div class="col-4 mt-3">
                    <div class="card1" id="js-container">
                        <canvas class="canvas" id="js-canvas" width="120" height="120" ></canvas>
                        <div class="backimg h-100 d-flex justify-content-center align-items-center" style="visibility: hidden; background-color: white; border-radius: 7px;">

                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card1" id="js-container2">
                        <canvas class="canvas" id="js-canvas2" width="120" height="120"></canvas>
                        <div class="backimg2 h-100 d-flex justify-content-center align-items-center" style="visibility: visible; background-color: white; border-radius: 7px;">

                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card1" id="js-container3">
                        <canvas class="canvas" id="js-canvas3" width="120" height="120"></canvas>
                        <div class="backimg3 h-100 d-flex justify-content-center align-items-center" style="visibility: visible; background-color: white; border-radius: 7px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cancel_start_div d-flex justify-content-between m-auto">
            <div class="game-start-btn">
                <img src="{{asset('public/assets/img/game-page/btn_start.png')}}" style="width: 120px" alt="">
                <img src="{{asset('public/assets/img/game-page/txt_start.png')}}" class="txt_btns" alt="">
            </div>
            <div class="game-cancel-btn">
                <img src="{{asset('public/assets/img/game-page/btn_start.png')}}"  style="width: 120px" alt="">
                <img src="{{asset('public/assets/img/game-page/Txt_cancel.png')}}" class="txt_btns" alt="">
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn_modal d-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Fill this Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-1">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullname" required>
                            </div>
                            <div class="mb-1">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            <div class="mb-1">
                                <label for="contact" class="form-label">Contact No</label>
                                <input type="number" class="form-control" id="contact" required>
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn_modal float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!--<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn_modal text-light">Submit</button>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wn_win">

</div>
</body>
</html>


<script>


    (function() {

        'use strict';

        var isDrawing, lastPoint;
        var container    = document.getElementById('js-container'),
            canvas       = document.getElementById('js-canvas'),
            canvasWidth  = canvas.width,
            canvasHeight = canvas.height,
            ctx          = canvas.getContext('2d'),
            image        = new Image(),
            brush        = new Image();

        // base64 Workaround because Same-Origin-Policy
        image.src = 'data:image/png;base64,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';
        image.onload = function() {
            ctx.drawImage(image, 0, 0);
            // Show the form when Image is loaded.
            document.querySelectorAll('.backimg')[0].style.visibility = 'visible';
        };
        brush.src = 'data:image/png;base64,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';

        canvas.addEventListener('mousedown', handleMouseDown, false);
        canvas.addEventListener('touchstart', handleMouseDown, false);
        canvas.addEventListener('mousemove', handleMouseMove, false);
        canvas.addEventListener('touchmove', handleMouseMove, false);
        canvas.addEventListener('mouseup', handleMouseUp, false);
        canvas.addEventListener('touchend', handleMouseUp, false);

        function distanceBetween(point1, point2) {
            return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
        }

        function angleBetween(point1, point2) {
            return Math.atan2( point2.x - point1.x, point2.y - point1.y );
        }

        // Only test every `stride` pixel. `stride`x faster,
        // but might lead to inaccuracy
        function getFilledInPixels(stride) {
            if (!stride || stride < 1) { stride = 1; }

            var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
                pdata    = pixels.data,
                l        = pdata.length,
                total    = (l / stride),
                count    = 0;

            // Iterate over all pixels
            for(var i = count = 0; i < l; i += stride) {
                if (parseInt(pdata[i]) === 0) {
                    count++;
                }
            }

            return Math.round((count / total) * 100);
        }

        function getMouse(e, canvas) {
            var offsetX = 0, offsetY = 0, mx, my;

            if (canvas.offsetParent !== undefined) {
                do {
                    offsetX += canvas.offsetLeft;
                    offsetY += canvas.offsetTop;
                } while ((canvas = canvas.offsetParent));
            }

            mx = (e.pageX || e.touches[0].clientX) - offsetX;
            my = (e.pageY || e.touches[0].clientY) - offsetY;

            return {x: mx, y: my};
        }

        function handlePercentage(filledInPixels) {
            filledInPixels = filledInPixels || 0;
            console.log(filledInPixels + '%');
            if (filledInPixels > 25) {
                canvas.parentNode.removeChild(canvas);
            }
        }

        function handleMouseDown(e) {
            isDrawing = true;
            lastPoint = getMouse(e, canvas);
        }

        function handleMouseMove(e) {
            if (!isDrawing) { return; }

            e.preventDefault();

            var currentPoint = getMouse(e, canvas),
                dist = distanceBetween(lastPoint, currentPoint),
                angle = angleBetween(lastPoint, currentPoint),
                x, y;

            for (var i = 0; i < dist; i++) {
                x = lastPoint.x + (Math.sin(angle) * i) - 25;
                y = lastPoint.y + (Math.cos(angle) * i) - 25;
                ctx.globalCompositeOperation = 'destination-out';
                ctx.drawImage(brush, x, y);
            }

            lastPoint = currentPoint;
            handlePercentage(getFilledInPixels(32));
        }

        function handleMouseUp(e) {
            isDrawing = false;
        }

    })();

    (function() {

        'use strict';

        var isDrawing, lastPoint;
        var container    = document.getElementById('js-container2'),
            canvas       = document.getElementById('js-canvas2'),
            canvasWidth  = canvas.width,
            canvasHeight = canvas.height,
            ctx          = canvas.getContext('2d'),
            image        = new Image(),
            brush        = new Image();

        // base64 Workaround because Same-Origin-Policy
        image.src = 'data:image/png;base64,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';
        image.onload = function() {
            ctx.drawImage(image, 0, 0);
            // Show the form when Image is loaded.
            document.querySelectorAll('.backimg2')[0].style.visibility = 'visible';
        };
        brush.src = 'data:image/png;base64,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';

        canvas.addEventListener('mousedown', handleMouseDown, false);
        canvas.addEventListener('touchstart', handleMouseDown, false);
        canvas.addEventListener('mousemove', handleMouseMove, false);
        canvas.addEventListener('touchmove', handleMouseMove, false);
        canvas.addEventListener('mouseup', handleMouseUp, false);
        canvas.addEventListener('touchend', handleMouseUp, false);

        function distanceBetween(point1, point2) {
            return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
        }

        function angleBetween(point1, point2) {
            return Math.atan2( point2.x - point1.x, point2.y - point1.y );
        }

        // Only test every `stride` pixel. `stride`x faster,
        // but might lead to inaccuracy
        function getFilledInPixels(stride) {
            if (!stride || stride < 1) { stride = 1; }

            var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
                pdata    = pixels.data,
                l        = pdata.length,
                total    = (l / stride),
                count    = 0;

            // Iterate over all pixels
            for(var i = count = 0; i < l; i += stride) {
                if (parseInt(pdata[i]) === 0) {
                    count++;
                }
            }

            return Math.round((count / total) * 100);
        }

        function getMouse(e, canvas) {
            var offsetX = 0, offsetY = 0, mx, my;

            if (canvas.offsetParent !== undefined) {
                do {
                    offsetX += canvas.offsetLeft;
                    offsetY += canvas.offsetTop;
                } while ((canvas = canvas.offsetParent));
            }

            mx = (e.pageX || e.touches[0].clientX) - offsetX;
            my = (e.pageY || e.touches[0].clientY) - offsetY;

            return {x: mx, y: my};
        }

        function handlePercentage(filledInPixels) {
            filledInPixels = filledInPixels || 0;
            console.log(filledInPixels + '%');
            if (filledInPixels > 25) {
                canvas.parentNode.removeChild(canvas);
            }
        }

        function handleMouseDown(e) {
            isDrawing = true;
            lastPoint = getMouse(e, canvas);
        }

        function handleMouseMove(e) {
            if (!isDrawing) { return; }

            e.preventDefault();

            var currentPoint = getMouse(e, canvas),
                dist = distanceBetween(lastPoint, currentPoint),
                angle = angleBetween(lastPoint, currentPoint),
                x, y;

            for (var i = 0; i < dist; i++) {
                x = lastPoint.x + (Math.sin(angle) * i) - 25;
                y = lastPoint.y + (Math.cos(angle) * i) - 25;
                ctx.globalCompositeOperation = 'destination-out';
                ctx.drawImage(brush, x, y);
            }

            lastPoint = currentPoint;
            handlePercentage(getFilledInPixels(32));
        }

        function handleMouseUp(e) {
            isDrawing = false;
        }

    })();

    (function() {

        'use strict';

        var isDrawing, lastPoint;
        var container    = document.getElementById('js-container3'),
            canvas       = document.getElementById('js-canvas3'),
            canvasWidth  = canvas.width,
            canvasHeight = canvas.height,
            ctx          = canvas.getContext('2d'),
            image        = new Image(),
            brush        = new Image();

        // base64 Workaround because Same-Origin-Policy
        image.src = 'data:image/png;base64,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';
        image.onload = function() {
            ctx.drawImage(image, 0, 0);
            // Show the form when Image is loaded.
            document.querySelectorAll('.backimg3')[0].style.visibility = 'visible';
        };
        brush.src = 'data:image/png;base64,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';

        canvas.addEventListener('mousedown', handleMouseDown, false);
        canvas.addEventListener('touchstart', handleMouseDown, false);
        canvas.addEventListener('mousemove', handleMouseMove, false);
        canvas.addEventListener('touchmove', handleMouseMove, false);
        canvas.addEventListener('mouseup', handleMouseUp, false);
        canvas.addEventListener('touchend', handleMouseUp, false);

        function distanceBetween(point1, point2) {
            return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
        }

        function angleBetween(point1, point2) {
            return Math.atan2( point2.x - point1.x, point2.y - point1.y );
        }

        // Only test every `stride` pixel. `stride`x faster,
        // but might lead to inaccuracy
        function getFilledInPixels(stride) {
            if (!stride || stride < 1) { stride = 1; }

            var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
                pdata    = pixels.data,
                l        = pdata.length,
                total    = (l / stride),
                count    = 0;

            // Iterate over all pixels
            for(var i = count = 0; i < l; i += stride) {
                if (parseInt(pdata[i]) === 0) {
                    count++;
                }
            }

            return Math.round((count / total) * 100);
        }

        function getMouse(e, canvas) {
            var offsetX = 0, offsetY = 0, mx, my;

            if (canvas.offsetParent !== undefined) {
                do {
                    offsetX += canvas.offsetLeft;
                    offsetY += canvas.offsetTop;
                } while ((canvas = canvas.offsetParent));
            }

            mx = (e.pageX || e.touches[0].clientX) - offsetX;
            my = (e.pageY || e.touches[0].clientY) - offsetY;

            return {x: mx, y: my};
        }

        function handlePercentage(filledInPixels) {
            filledInPixels = filledInPixels || 0;
            console.log(filledInPixels + '%');
            if (filledInPixels > 25) {
                canvas.parentNode.removeChild(canvas);
            }
        }

        function handleMouseDown(e) {
            isDrawing = true;
            lastPoint = getMouse(e, canvas);
        }

        function handleMouseMove(e) {
            if (!isDrawing) { return; }

            e.preventDefault();

            var currentPoint = getMouse(e, canvas),
                dist = distanceBetween(lastPoint, currentPoint),
                angle = angleBetween(lastPoint, currentPoint),
                x, y;

            for (var i = 0; i < dist; i++) {
                x = lastPoint.x + (Math.sin(angle) * i) - 25;
                y = lastPoint.y + (Math.cos(angle) * i) - 25;
                ctx.globalCompositeOperation = 'destination-out';
                ctx.drawImage(brush, x, y);
            }

            lastPoint = currentPoint;
            handlePercentage(getFilledInPixels(32));
        }

        function handleMouseUp(e) {
            isDrawing = false;
        }

    })();


</script>

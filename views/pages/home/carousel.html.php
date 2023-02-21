<?php include('carousel.css.php'); ?>

<div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item py-5 active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 1</h4>
                                    <p class="card-text">1 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 2</h4>
                                    <p class="card-text">2 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 3</h4>
                                    <p class="card-text">3 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 4</h4>
                                    <p class="card-text">4 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 4</h4>
                                    <p class="card-text">1 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 5</h4>
                                    <p class="card-text">2 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 6</h4>
                                    <p class="card-text">3 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 7</h4>
                                    <p class="card-text">4 Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
             
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-12">
            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>




<div class="contenu-carrousel d-none">
    <div class="carrousel">
        <div id="website"></div>
        <div id="ussd"></div>
        <div id="search"></div>
        <div id="chatbot"></div>
        <div id="sms"></div>
        <div id="radio"></div>
        <div id="leds"></div>
        <div id="tv"></div>
        <div id="push-vocal"></div>
    </div>
    <div class="controls d-flex justify-content-center">
        <button class="mx-1" onclick="carrousel('-')">
            <span class="material-symbols-outlined">arrow_left</span>
        </button>
        <button class="mx-1" onclick="carrousel('')">
            <span class="material-symbols-outlined">arrow_right</span>
        </button>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 1000 // five seconds 
        })
    });
</script>
<script defer>
    var angle = 0;

    function carrousel(sign) {
        spinner = document.querySelector(".carrousel");
        if (!sign) {
            angle = angle + 40
        } else {
            angle = angle - 40
        }
        spinner.setAttribute("style", "transform:rotateY(" + angle + "deg);")
    }

    // document.querySelector('#website').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/website-ads';
    // })
    // document.querySelector('#ussd').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/ussd';
    // })
    // document.querySelector('#search').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/search-engine-ads';
    // })
    // document.querySelector('#chatbot').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/chatbot';
    // })
    // document.querySelector('#sms').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/sms';
    // })

    // document.querySelector('#radio').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/radio';
    // })
    // document.querySelector('#leds').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/led-pannels-ads';
    // })
    // document.querySelector('#tv').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/tv';
    // })
    // document.querySelector('#push-vocal').addEventListener('click', ()=>{
    //     window.location.href = '<?php echo (WEB_ROOT) ?>page/push-vocal';
    // })
</script>
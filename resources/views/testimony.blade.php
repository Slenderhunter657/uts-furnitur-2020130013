@extends('layout.master2')
@section('title', 'Testimonies')
@section('contentTop')
    <h1 class="cover-heading">Testimony!</h1>
    <p class="lead"> See what others say about IKEAH!</p>
    <p class="text-left"> We like to hear what people says about our product, our staff, and of course, about the company! </p>
    <a class="btn btn-primary" href="#testimony" role="button">Let's check them out!</a>
    <br>
    <hr class="my-5">
    <p class="text-left"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus posuere velit, in pharetra metus lacinia id. Donec et faucibus sem. Nam sit amet mattis sapien. Proin laoreet velit quis ipsum tempor, quis aliquet velit posuere. Etiam eget dignissim turpis. Maecenas euismod lobortis arcu in convallis. Morbi nibh enim, fringilla vitae odio a, vestibulum congue quam. </p>
@endsection
@section('contentBottom')
    <div id="testimony" class="container text-center mt-3 p-4" style="background-color: rgba(0,0,0,0.6)">
        <h1>Testimony</h1>
        <div class="card-columns">
                <div class="card">
                    "<i>Nice work on your furniture. The service was excellent. I couldn't have asked for more than this. I didn't even need training.</i>"
                    <br><b>- Ossie A.</b>
                </div>
                <div class="card">
                    "<i>Wow what great service, I love it! I just can't get enough of furniture. I want to get a T-Shirt with furniture on it so I can show it off to everyone. I could probably go into sales for you.</i>"
                    <br><b>- Woody P.</b>
                </div>
                <div class="card">
                    "<i>I would gladly pay over 600 dollars for furniture.</i>"
                    <br><b>- Benedicta J.</b>
                </div>
                <div class="card">
                    "<i>Needless to say we are extremely satisfied with the results. I love furniture.</i>"
                    <br><b>- Mikel V.</b>
                </div>
                <div class="card">
                    "<i>Furniture is the most valuable business resource we have EVER purchased. The best on the net! The service was excellent.</i>"
                    <br><b>- Glen C.</b>
                </div>
                <div class="card">
                    "<i>Just what I was looking for. Furniture is the next killer app.</i>"
                    <br><b>- Minny I.</b>
                </div>
                <div class="card">
                    "<i>I couldn't have asked for more than this. I would be lost without furniture.</i>"
                    <br><b>- Binny J.</b>
                </div>
                <div class="card">
                    "<i>I will let my mum know about this, she could really make use of furniture! You guys rock! You guys rock! Furniture impressed me on multiple levels.</i>"
                    <br><b>- Jefry E.</b>
                </div>
                <div class="card">
                    "<i>Furniture is the real deal!</i>"
                    <br><b>- Patin J.</b>
                </div>
        </div>
        <br><hr class="my-5">
        <h5>Courtesy of: https://testimonial-generator.com/index.php</h5>
    </div>
@endsection

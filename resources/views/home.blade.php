    @extends('layout/main')

    @section('title','Foodserve!')

    @section('container')
    <div class="container">

        <div id="carouselExampleInterval" class="carousel slide mt-5 mb-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
        <img src="https://image.freepik.com/free-psd/restaurant-banner-template_23-2148466832.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
        <img src="https://image.freepik.com/free-psd/fast-food-banner-template_23-2148609079.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://image.freepik.com/free-psd/chinese-food-banner-template_23-2148679550.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

        <div class="row">
            <div class="col-12">
                <h2 class="mt-3 mb-2 text-center">Category</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mt-3">
        <div class="col mb-4">
            <div class="card">
            <img src="https://www.relevance.com/wp-content/uploads/2019/09/Content-Marketing-Strategy-for-a-Coffee-Shop-750x430.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cafe</h5>
                <p class="card-text">..</p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="https://cna-sg-res.cloudinary.com/image/upload/q_auto,f_auto/image/12759098/16x9/991/557/75e5b3b1ca24619c794bc7c84ad82145/qo/a-bar-.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bar & Nightlife</h5>
                <p class="card-text">..</p>
            </div>
            </div>
        </div>
        <!-- <div class="col mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div> -->
        </div>
    </div>
    

    @endsection
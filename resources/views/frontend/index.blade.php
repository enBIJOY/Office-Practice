@extends('frontend.layout.master')

@section('title','Home Page')
@section('content')
    <h1>Home Page</h1>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
      
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, eos earum? Dignissimos itaque nostrum quisquam esse illo ex hic consequuntur minus eum et qui nemo iure, eos dolorem repellat aliquam eius facere deleniti distinctio maxime maiores animi sequi rem? Ratione placeat facilis earum quas, porro quod reiciendis ipsam vitae laboriosam quam odit mollitia quidem tempora pariatur, nesciunt autem perspiciatis praesentium doloremque laudantium ea enim cupiditate architecto fugit dicta! Dolore, consectetur.</p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora nihil ipsam, enim sed, sapiente minima repudiandae provident sit consequuntur itaque adipisci delectus ipsum corporis recusandae error? Eos enim est maxime dolorem ipsam, sint quis fugit architecto nisi corporis magnam quisquam culpa doloribus iste fuga, pariatur tempore vitae nobis aliquid veritatis voluptatum! Repellendus laudantium quo eius adipisci libero temporibus quas omnis autem fuga inventore illum impedit culpa, cupiditate ea rem, amet iste, commodi dicta quasi ab sunt repudiandae quidem. Non, exercitationem. Nesciunt voluptatum harum facilis eum neque corrupti repellat. Modi suscipit corporis molestias. Dolorem eos rem impedit accusamus ipsa ea enim voluptates nemo laudantium! Ab, nostrum sequi dolores, architecto corrupti soluta possimus aspernatur deserunt vel iure mollitia, amet voluptatem quo odit non officiis similique eveniet. Quaerat saepe ut distinctio necessitatibus? Dolorum voluptate facere fuga odit.
    </p>
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">An active item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore harum nemo consequuntur, dicta consequatur eos? Aliquam eos excepturi ullam explicabo unde provident voluptas, vel fugiat corrupti nobis tempore doloremque dolorum ab temporibus rerum rem ad sit sunt? Illo, ab in?</p>
@endsection
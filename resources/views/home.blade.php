@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Categories
                </div>
                <div class="card-body">
                <div class="card-text">
                    <ul class="list-unstyled">
                        <li class="border-bottom py-2">
                            <a href="#" class="text-decoration-none">
                                Man Wear
                            </a>
                        </li>
                        <li class="border-bottom py-2">
                            <a href="#" class="text-decoration-none">
                                Women Wear
                            </a>
                        </li>
                        <li class="border-bottom py-2">
                            <a href="#" class="text-decoration-none">
                                Baby 
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/sliders/slide-1.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion</h5>
                        <p>Get Now</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/sliders/slide-2.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion</h5>
                        <p>Get Now</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/sliders/slide-1.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promotion</h5>
                        <p>Get Now</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- test -->
    <div class="row">

  <div class="prd-slider">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>
    </div>
    <!-- end test -->
    <h4 class="mr-auto">Special One</h4>
    <div class="row justify-content-center mb-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <h4 class="mr-auto">Special Two</h4>
    <div class="row justify-content-center mb-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <h4 class="mr-auto">Special Three</h4>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Product Name</div>
                <div class="card-body">
                    Here is intl_get_error_message
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary float-right">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

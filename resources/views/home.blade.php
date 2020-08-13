@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
           <div class="col-md-3">
               <div class="card-header">Categories</div>
               <div class="card-body">
                   <div class="card-text">
                       <ul class="list-unstyled">
                         <li class="border-button py-2">
                             <a href="" class="text-decleration-none">Men Wear</a>
                         </li>
                         <li class="border-button py-2">
                             <a href="" class="text-decleration-none">Women Wear</a>
                         </li>
                         <li class="border-button py-2">
                             <a href="" class="text-decleration-none">Baby</a>
                         </li>
                       </ul> 
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
                    <img src="{{asset('images/sliders/slide-1.jpg')}}" class="d-block w-100" alt="First Slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Promotion</h5>
                            <p>Get Now</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('images/sliders/slide-2.jpg')}}" class="d-block w-100" alt="Second Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Promotion</h5>
                            <p>Get Now</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('images/sliders/slide-1.jpg')}}" class="d-block w-100" alt="Third Slide">
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
        <div class="row mx-auto my-auto-center mb-4">
        <div class="row">
            <h3 class="col-md-10 text-success">Hot List</h3>
            <div class="col-md-2">
            <a href="#">See More...</a>
            </div>
        </div>
        <div id="recipeCarousel" class="carousel slide product-slide w-100" data-ride="carousel" data-interval="2000" pause="hover">
            <div class="carousel-inner product w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="card col-md-3">
                        <div class="card-header text-center">First Product</div>
                        <div class="card-body">
                            <img width="900" height="1200" class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/NMSDC.png?10873">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card col-md-3">
                        <div class="card-header text-center">Second Product</div>
                        <div class="card-body">
                            <img class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/DBE-ACDBE-logo.png?10873">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card col-md-3">
                        <div class="card-header text-center">
                            Third Product
                        </div>
                        <div class="card-body">
                            <img class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/MBE_LOGO.png?10873">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card col-md-3">
                        <div class="card-header text-center">Product</div>
                        <div class="card-body">
                        <img class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/2018_WBENC_logo_text_gray.png?10873">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card col-md-3">
                        <div class="card-header text-center">Product</div>
                        <div class="card-body">
                            <img class="d-block img-fluid" src="http://novel-mg.com/assets/cert_logo.png">
                        </div>
                    </div>                   
                </div>
                <div class="carousel-item">
                    <div class="card col-md-3">
                        <div class="card-header text-center">Product</div>
                        <div class="card-body">
                            <img class="d-block img-fluid" src="https://www.kriaanet.com/wp-content/uploads/2019/02/300ppi-feat-logo_feat_logo-EDWOSB.png">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
    </div>

@endsection

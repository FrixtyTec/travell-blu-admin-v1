@extends('layout.front')
@section('content')

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container-fluid">

                        <div class=" container-fluid my-5 ">
                            <div class="row justify-content-center ">
                                <div class="col-xl-10">
                                    <div class="card shadow-lg ">
                                        <div class="row p-2 mt-3 justify-content-between mx-sm-2">


                                            <div class="row mx-auto justify-content-center text-center">
                                                <div class="col-12 mt-3 ">
                                                    <nav aria-label="breadcrumb" class="second ">
                                                        <ol class="breadcrumb indigo lighten-6 first ">
                                                            <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-1">BACK TO HOME</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                                            <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-1">BOOKING DEALTIS</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                                            <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">CHECKOUT</span></a></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>
                                            <div class="row justify-content-around col-md-12">
                                                <div class="col-md-6">
                                                    <div class="card border-0">
                                                        <div class="card-header pb-0">
                                                            <h2 class="card-title space ">Checkout</h2>
                                                            <p class="card-text text-muted mt-4 space">BOOKING DETAILS</p>
                                                            <hr class="my-0">
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto mt-0">
                                                                    <p><b>Rokesh, 7th main road, +91 9876543210</b></p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p><b>rockesh@gmail.com</b> </p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col">
                                                                    <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                                                    <hr class="mt-0">
                                                                </div>
                                                            </div>
                                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">NAME ON CARD</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Name of Card">                                                                </div>
                                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">CARD NUMBER</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="4534 5555 5555 5555">                                                                </div>
                                                            <div class="row no-gutters">
                                                                <div class="col-sm-6 pr-sm-2">
                                                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">VALID THROUGH</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="06/21">                                                                        </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">CVC CODE</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="183">                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-md-5">
                                                                <div class="col"> <button type="button" name="" id="" class="btn btn-lg btn-block ">SAVE </button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-0 ">
                                                        <div class="card-header card-2">
                                                            <h2 class="card-title space ">Fare Summary</h2>
                                                            <p class="card-text text-muted mt-md-4 mb-2 space">YOUR ORDER </p>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto col-md-7">
                                                                    <div class="media flex-column flex-sm-row">
                                                                        <div class="media-body my-auto">
                                                                            <div class="row ">
                                                                                <div class="col-auto">
                                                                                    <p class="mb-0"><b>Base Fare</b>
                                                                                    </p><small class="text-muted">Adult(s) (1 X ₹ 2,500)</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" pl-0 flex-sm-col col-auto my-auto">
                                                                    <p class="boxed-1">2</p>
                                                                </div>
                                                                <div class=" pl-0 flex-sm-col col-auto my-auto ">
                                                                    <p><b>₹ 5000</b></p>
                                                                </div>
                                                            </div>
                                                            <hr class="my-2">
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto col-md-7">
                                                                    <div class="media flex-column flex-sm-row">
                                                                        <div class="media-body my-auto">
                                                                            <div class="row ">
                                                                                <div class="col">
                                                                                    <p class="mb-0"><b>Fee & Surcharges</b></p><small class="text-muted">Total fee & surcharges:</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pl-0 flex-sm-col col-auto my-auto">
                                                                    <p class="boxed">3</p>
                                                                </div>
                                                                <div class="pl-0 flex-sm-col col-auto my-auto">
                                                                    <p><b>₹ 884</b></p>
                                                                </div>
                                                            </div>
                                                            <hr class="my-2">
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto col-md-7">
                                                                    <div class="media flex-column flex-sm-row">
                                                                        <div class="media-body my-auto">
                                                                            <div class="row ">
                                                                                <div class="col">
                                                                                    <p class="mb-0"><b>Other Services</b></p><small class="text-muted">Charity</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pl-0 flex-sm-col col-auto my-auto">
                                                                    <p class="boxed-1">1</p>
                                                                </div>
                                                                <div class="pl-0 flex-sm-col col-auto my-auto">
                                                                    <p><b>₹ 2</b></p>
                                                                </div>
                                                            </div>
                                                            <hr class="my-2">
                                                            <div class="row ">
                                                                <div class="col">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-4">
                                                                            <p class="mb-1"><b>Subtotal</b></p>
                                                                        </div>
                                                                        <div class="flex-sm-col col-auto">
                                                                            <p class="mb-1"><b> ₹ 5886</b></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between">
                                                                        <div class="col">
                                                                            <p class="mb-1"><b>GST (18%)</b></p>
                                                                        </div>
                                                                        <div class="flex-sm-col col-auto">
                                                                            <p class="mb-1"><b>₹ 1056</b></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-4">
                                                                            <p><b>Total</b></p>
                                                                        </div>
                                                                        <div class="flex-sm-col col-auto">
                                                                            <p class="mb-1"><b>₹ 6942</b></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="my-0">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-5 mt-4 ">
                                                                <div class="col-md-12 col-lg-12 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CODE</button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- .tm-container-outer -->
            </section>



           
@endsection
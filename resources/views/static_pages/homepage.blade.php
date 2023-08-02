@extends('layouts.app')
@section('content')

    
    <!--slider area start-->
    <section class="slider_section slider_s_two mb-50">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1> Pendant <br> Collection 2022</h1>
                               <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p>
                                <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider4.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>The New iPad  <br> Entry Level 9.7-inch </h1>
                                <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p> 
                                <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>   
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider5.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>Fast Charge   <br> Collection 2022 </h1>
                                <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p>
                                 <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    @include('static_pages._product')
    
    <!--Categories product area start-->
    <div class="categories_product_area mb-50">
        <div class="container">
           <div class="row">
               <div class="col-12">
                    <div class="section_title">
                       <h2>Hot Categories</h2>
                    </div>
                </div>
           </div>
            <div class="row categories_margin no-gutters">
                <div class="col-lg-3 col-md-6">
                    <article class="single_categories_product column1">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="shop.html"><img src="assets/img/custom-p/product1.jpg" alt=""></a>
                            </div>
                            <div class="categories_product_content">
                                <h4><a href="shop.html">Computer & Laptop</a></h4>
                                <ul>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>
                        </figure>
                    </article> 
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="single_categories_product column2">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="shop.html"><img src="assets/img/custom-p/product2.jpg" alt=""></a>
                            </div>
                            <div class="categories_product_content">
                                <h4><a href="shop.html">Smartphone & Tablet</a></h4>
                                <ul>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>
                        </figure>
                    </article> 
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="single_categories_product column3">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="shop.html"><img src="assets/img/custom-p/product3.jpg" alt=""></a>
                            </div>
                            <div class="categories_product_content">
                                <h4><a href="shop.html">Game & Consoles</a></h4>
                                <ul>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>
                        </figure>
                    </article> 
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="single_categories_product column4">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="shop.html"><img src="assets/img/custom-p/product4.jpg" alt=""></a>
                            </div>
                            <div class="categories_product_content">
                                <h4><a href="shop.html">Video Games & Toys</a></h4>
                                <ul>
                                    <li><a href="#">Video Games</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>
                        </figure>
                    </article> 
                </div>
            </div>
        </div>
    </div>
    <!--Categories product area end-->
    
    <!--product area start-->
    @include('static_pages._smproduct')
    <!--product area end-->

    <!--shipping area start-->
    @include('static_pages._shipping')
    <!--shipping area end-->
   
    <!-- modal area start-->
    @include('static_pages._modal')
    <!-- modal area end-->

@endsection

<div class="product_area product_style2 mb-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2>Bestseller Products</h2>
                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#Tablet3" role="tab"
                                    aria-controls="Tablet3" aria-selected="false">
                                    Luggage
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Game3" role="tab" aria-controls="Game3"
                                    aria-selected="false">
                                    Backpacks
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#tabs2" role="tab" aria-controls="tabs2"
                                    aria-selected="true">
                                    Bags
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Tablet3" role="tabpanel">
                <div class="row">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        @foreach($featuredProducts as $product)
                            @include('static_pages.product._single_product', [ 'carrier' => $product ])
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Game3" role="tabpanel">
                <div class="row">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis
                                                scelerisque</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product6.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$56.00</span>
                                            <span class="current_price">$52.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product7.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product10.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$75.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product2.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product1.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$76.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabs2" role="tabpanel">
                <div class="row">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product7.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product10.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$75.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis
                                                scelerisque</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product6.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$56.00</span>
                                            <span class="current_price">$52.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product2.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product1.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$76.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Watches3" role="tabpanel">
                <div class="row">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product1.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$76.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis
                                                scelerisque</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product6.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$56.00</span>
                                            <span class="current_price">$52.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product10.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$75.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa
                                                quis</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product2.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_name">
                                        <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat
                                                metus</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ Vite::asset('resources/img/product/product7.jpg') }}"
                                                alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale!</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="quick view"> Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product_footer">
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$72.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to
                                                        cart</a></li>

                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a></li>

                                                <li class="compare"><a href="#" title="Add to Compare"><i
                                                            class="ion-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

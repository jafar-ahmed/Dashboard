@extends('layouts.app')
@section('content')
    <div class="body-content">
        <!-- home-sliders -->
        <section class="home-slider owl-carousel">
            @foreach ($sliders as $slider)
                <div class="home-slider-item">
                    <img src="{{ asset('/storage/' . $slider->image) }}" alt="">
                    <div class="text">
                        <h2>{{ $slider->title }}</h2>
                        <p>
                            {{ $slider->description }}
                        </p>
                        <a href="#" class="btn custom-btn">عرض التفاصيل</a>
                    </div>
                </div>
            @endforeach
        </section>
        <div class="progress">
            <div class="line"></div>
        </div>
        <!-- home-sliders -->

        <!-- main-categories-section -->
        <section class="main-categories-section">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-6">

                            <div class="m-category-item wow fadeInUp" data-wow-duration="1.5s">
                                <a href="">
                                    <figure>
                                        <img src="{{ asset('/storage/' . $category->image) }}" class="img-fluid">
                                    </figure>
                                    <h3>{{ $category->title }}</h3>
                                    <span class="more">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8.996"
                                            viewBox="0 0 14 8.996">
                                            <path id="Path_32245" data-name="Path 32245"
                                                d="M741.909,1491.729a1,1,0,0,1-1.413-.05l-3.231-3.5a1.006,1.006,0,0,1,0-1.36l3.231-3.5a1,1,0,0,1,1.47,1.36l-1.682,1.82H750a1,1,0,1,1,0,2h-9.716l1.682,1.82A1,1,0,0,1,741.909,1491.729Z"
                                                transform="translate(-737 -1483.002)" fill="currentColor"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </span>
                                </a>
                            </div>


                        </div>
                    @endforeach
                </div>
        </section>
        <!-- main-categories-section -->

        <!-- h-statistics-section -->
        <section class="h-statistics-section">
            <div class="container">
                <div class="wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="info wow fadeInUp" data-wow-duration="1.5s">
                                <h3>{{ $app_contents->title }}</h3>
                                <p>الأرقام تخبرك عنا بشكل أكبر</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="h-statistic-item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.776" height="25.776"
                                        viewBox="0 0 25.776 25.776">
                                        <g id="_3d-square" data-name="3d-square" transform="translate(0.9 0.9)">
                                            <path id="Vector"
                                                d="M8.391,23.976h7.193c5.994,0,8.391-2.4,8.391-8.391V8.391C23.976,2.4,21.578,0,15.584,0H8.391C2.4,0,0,2.4,0,8.391v7.193C0,21.578,2.4,23.976,8.391,23.976Z"
                                                fill="none" stroke="#201e1e" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.8" />
                                            <g id="Group" transform="translate(5.083 4.791)">
                                                <g id="Group-2" data-name="Group" transform="translate(0.551 3.913)">
                                                    <path id="Vector-2" data-name="Vector" d="M0,0,6.354,3.68,12.659.024"
                                                        fill="none" stroke="#201e1e" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.8" />
                                                    <path id="Vector-3" data-name="Vector" d="M0,6.533V0"
                                                        transform="translate(6.354 3.668)" fill="none" stroke="#201e1e"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                                </g>
                                                <path id="Vector-4" data-name="Vector"
                                                    d="M5.419.352,1.582,2.486A3.41,3.41,0,0,0,0,5.171V9.235A3.379,3.379,0,0,0,1.582,11.92l3.836,2.134a3.431,3.431,0,0,0,2.985,0L12.24,11.92a3.41,3.41,0,0,0,1.582-2.685V5.159A3.379,3.379,0,0,0,12.24,2.474L8.4.34A3.391,3.391,0,0,0,5.419.352Z"
                                                    transform="translate(0 0)" fill="none" stroke="#201e1e"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            </g>
                                        </g>
                                    </svg>
                                </figure>
                                <h4>{{ $app_contents->products_numbers }}+</h4>
                                <p>عدد المنتجات</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="h-statistic-item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.974" height="25.8"
                                        viewBox="0 0 24.974 25.8">
                                        <g id="shop" transform="translate(0.903 0.9)">
                                            <path id="Vector"
                                                d="M0,0V5.4c0,5.4,2.16,7.56,7.547,7.56h6.467c5.387,0,7.547-2.163,7.547-7.56V0"
                                                transform="translate(0.827 11.044)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M3.625,12.019a3.564,3.564,0,0,0,3.606-3.99L6.437,0H.825L.019,8.029A3.564,3.564,0,0,0,3.625,12.019Z"
                                                transform="translate(7.989 0)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M4.82,12.019A3.914,3.914,0,0,0,8.786,7.632L8.449,4.327C8.017,1.2,6.815,0,3.666,0H0L.841,8.425A4.1,4.1,0,0,0,4.82,12.019Z"
                                                transform="translate(14.36 0)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-4" data-name="Vector"
                                                d="M3.988,12.019A4.074,4.074,0,0,0,7.954,8.425l.264-2.656L8.8,0H5.13C1.981,0,.779,1.2.346,4.327L.022,7.632A3.914,3.914,0,0,0,3.988,12.019Z"
                                                transform="translate(0 0)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-5" data-name="Vector"
                                                d="M3,0C1,0,0,1,0,3v3H6.009V3C6.009,1,5.012,0,3,0Z"
                                                transform="translate(8.609 17.991)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                        </g>
                                    </svg>
                                </figure>
                                <h4>{{ $app_contents->projects_numbers }}+</h4>
                                <p>عدد المشاريع</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="h-statistic-item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.8" height="26.066"
                                        viewBox="0 0 25.8 26.066">
                                        <g id="vuesax_linear_people" data-name="vuesax/linear/people"
                                            transform="translate(-621.102 -253.1)">
                                            <g id="people" transform="translate(622.003 254)">
                                                <g id="Group" transform="translate(16.013)">
                                                    <path id="Vector"
                                                        d="M3.213,6.209a.728.728,0,0,0-.229,0,3.111,3.111,0,1,1,.229,0Z"
                                                        fill="none" stroke="#201e1e" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.8" />
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M.036,5.945a6.78,6.78,0,0,0,4.741-.866,2.3,2.3,0,0,0,0-4.115A6.823,6.823,0,0,0,0,.108"
                                                        transform="translate(1.937 9.025)" fill="none"
                                                        stroke="#201e1e" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.8" />
                                                </g>
                                                <g id="Group-2" data-name="Group">
                                                    <path id="Vector-3" data-name="Vector"
                                                        d="M3,6.209a.728.728,0,0,1,.229,0,3.111,3.111,0,1,0-.229,0Z"
                                                        transform="translate(1.778)" fill="none" stroke="#201e1e"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.8" />
                                                    <path id="Vector-4" data-name="Vector"
                                                        d="M6.014,5.945a6.78,6.78,0,0,1-4.741-.866,2.3,2.3,0,0,1,0-4.115A6.823,6.823,0,0,1,6.05.108"
                                                        transform="translate(0 9.025)" fill="none" stroke="#201e1e"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.8" />
                                                </g>
                                                <g id="Group-3" data-name="Group" transform="translate(7.244 8.964)">
                                                    <path id="Vector-5" data-name="Vector"
                                                        d="M3.213,6.209a.728.728,0,0,0-.229,0,3.111,3.111,0,1,1,.229,0Z"
                                                        transform="translate(1.561)" fill="none" stroke="#201e1e"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.8" />
                                                    <path id="Vector-6" data-name="Vector"
                                                        d="M1.273.957a2.3,2.3,0,0,0,0,4.115,6.832,6.832,0,0,0,7,0,2.3,2.3,0,0,0,0-4.115A6.887,6.887,0,0,0,1.273.957Z"
                                                        transform="translate(0 9.043)" fill="none" stroke="#201e1e"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.8" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </figure>
                                <h4>{{ $app_contents->employees_numbers }}+</h4>
                                <p>عدد العاملين</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="h-statistic-item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.782" height="25.782"
                                        viewBox="0 0 25.782 25.782">
                                        <g id="category-2" transform="translate(0.9 0.9)">
                                            <path id="Vector"
                                                d="M3.6,9.593H6q3.6,0,3.6-3.6V3.6Q9.593,0,6,0H3.6Q0,0,0,3.6V6Q0,9.593,3.6,9.593Z"
                                                transform="translate(14.389)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M3.6,9.593H6q3.6,0,3.6-3.6V3.6Q9.593,0,6,0H3.6Q0,0,0,3.6V6Q0,9.593,3.6,9.593Z"
                                                transform="translate(0 14.389)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M9.593,4.8A4.8,4.8,0,1,1,4.8,0,4.8,4.8,0,0,1,9.593,4.8Z" fill="none"
                                                stroke="#201e1e" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.8" />
                                            <path id="Vector-4" data-name="Vector"
                                                d="M9.593,4.8A4.8,4.8,0,1,1,4.8,0,4.8,4.8,0,0,1,9.593,4.8Z"
                                                transform="translate(14.389 14.389)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                                        </g>
                                    </svg>
                                </figure>
                                <h4>{{ $app_contents->branches_numbers }}</h4>
                                <p>عدد الفروع</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- h-statistics-section -->

        <!-- h-products-section -->
        <section class="h-products-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>أحدث المنتجات</h2>
                    <div class="actions d-flex align-items-center">
                        <a href="" class="view-all">عرض الكل</a>
                        <span class="cs-nav prev" data-target="#products-slider"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="cs-nav next" data-target="#products-slider"><i
                                class="fas fa-chevron-left"></i></span>
                    </div>
                </header>

                <div class="sec-body">
                    <div class="products-slider owl-carousel" id="products-slider">
                        @foreach ($new_products as $item)
                           <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('/storage/' . $item->image) }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                                <span class="discout">
                                    -30%
                                </span>
                            </figure>
                            <h3><a href="">{{ $item->title }}</a></h3>
                            <h5><span>{{ $item->price }}</span>شيكل </h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                         @endforeach




                        {{-- <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/2.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">كرسي مكتب طبي </a></h3>
                            <h5><span>550</span>شيكل</h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/3.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">كرسي خيزران أصلي </a></h3>
                            <h5><span>600</span>شيكل</h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/4.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">نجفة خشبية حديث</a></h3>
                            <h5><span>90</span>شيكل<small><span>120</span> شيكل</small></h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/4.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">نجفة خشبية حديث</a></h3>
                            <h5><span>90</span>شيكل<small><span>120</span> شيكل</small></h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>

            </div>
        </section>
        <!-- h-products-section -->

        <!-- h-products-section 2-->
        <section class="h-products-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>المنتجات الأكثر مبيعاً</h2>
                    <div class="actions d-flex align-items-center">
                        <a href="" class="view-all">عرض الكل</a>
                        <span class="cs-nav prev" data-target="#products-slider2"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="cs-nav next" data-target="#products-slider2"><i
                                class="fas fa-chevron-left"></i></span>
                    </div>
                </header>
                <div class="sec-body">
                    <div class="products-slider owl-carousel" id="products-slider2">
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/5.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                                <span class="discout">
                                    -20%
                                </span>
                            </figure>
                            <h3><a href="">لمبة سقف سادة</a></h3>
                            <h5><span>150</span>شيكل </h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/6.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">كشاف طاقة شمسية </a></h3>
                            <h5><span>550</span>شيكل</h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/7.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">نجفة حديدية أنيقة </a></h3>
                            <h5><span>600</span>شيكل</h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/8.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">كرسي كنب أنيق</a></h3>
                            <h5><span>90</span>شيكل<small><span>120</span> شيكل</small></h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <figure>
                                <a href="" class="img">
                                    <img src="{{ asset('h_assets/images/products/4.png') }}" class="img-fluid">
                                </a>
                                <a href="" class="add-to-favorite">
                                    <i class="far fa-heart"></i>
                                </a>
                            </figure>
                            <h3><a href="">نجفة خشبية حديث</a></h3>
                            <h5><span>90</span>شيكل<small><span>120</span> شيكل</small></h5>
                            <div class="add_to_cart">
                                <div class="icon add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.5" height="15.5"
                                        viewBox="0 0 15.5 15.5">
                                        <g id="Group_1" data-name="Group 1" transform="translate(-115 -259)">
                                            <path id="Vector" d="M0,0H13.5" transform="translate(116 266.75)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-2" data-name="Vector" d="M0,13.5V0"
                                                transform="translate(122.75 260)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="count">
                                    <input type="hidden" value="0" class="count-in">
                                    <span>0</span>
                                </div>
                                <div class="icon remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.64" height="21.5"
                                        viewBox="0 0 19.64 21.5">
                                        <g id="trash" transform="translate(-110.18 -189.25)">
                                            <path id="Vector"
                                                d="M18,.5C14.67.17,11.32,0,7.98,0A59.068,59.068,0,0,0,2.04.3L0,.5"
                                                transform="translate(111 193.48)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M0,2.97.22,1.66C.38.71.5,0,2.19,0H4.81C6.5,0,6.63.75,6.78,1.67L7,2.97"
                                                transform="translate(116.5 190)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector"
                                                d="M13.7,0l-.65,10.07c-.11,1.57-.2,2.79-2.99,2.79H3.64C.85,12.86.76,11.64.65,10.07L0,0"
                                                transform="translate(113.15 197.14)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector" d="M0,0H3.33"
                                                transform="translate(118.33 204.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M0,0H5"
                                                transform="translate(117.5 200.5)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- h-products-section -->

        <!-- banner-1-section -->
        <section class="banner-1-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <div class="wrapper d-flex align-items-center">
                    <div class="row align-items-center w-100">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="info">
                                <h2>عروض مميزة على نجف الكريستال</h2>
                                <h4>نتشرف بزيارتكم في كافة فروعنا</h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <a href="" class="btn btn-block mx-auto">عرض المنتجات</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-1-section -->

        <!-- h-whyus-section -->
        <section class="h-whyus-section">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-duration="1.5s">
                    <h2>لماذا نحن؟</h2>
                </header>
                <div class="sec-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="whyus-item wow fadeInUp" data-wow-duration="1.5s">
                                <figure>
                                    <img src="{{ asset('h_assets/images/whyus/1.png') }}" class="img-fluid">
                                </figure>
                                <h3>الجودة</h3>
                                <p class="content">
                                    منتجات الشركة مطابقة للمعايير .والمواصفات القياسية المطلوبة
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="whyus-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <figure>
                                    <img src="{{ asset('h_assets/images/whyus/2.png') }}" class="img-fluid">
                                </figure>
                                <h3>الخبرة</h3>
                                <p class="content">
                                    من خلال خبرتنا في المجال، نضمن لك .منتجات ذات جودة عالية
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="whyus-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <figure>
                                    <img src="{{ asset('h_assets/images/whyus/3.png') }}" class="img-fluid">
                                </figure>
                                <h3>الثقة</h3>
                                <p class="content">
                                    نهتم بتقديم منتجات غذائية بجودة .عالية و خدمات مميزة للعملاء
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="whyus-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                <figure>
                                    <img src="{{ asset('h_assets/images/whyus/4.png') }}" class="img-fluid">
                                </figure>
                                <h3>الشحن</h3>
                                <p class="content">
                                    نضمن لك أفضل تجربة شحن ليصلك .الطلب إلى باب منزلك
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- h-whyus-section -->

        <!-- projects-section -->
        <section class="projects-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>مشاريع تم تنفيذها</h2>
                    <div class="actions d-flex align-items-center">
                        <a href="" class="view-all">عرض الكل</a>
                        <span class="cs-nav prev" data-target="#projects-slider"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="cs-nav next" data-target="#projects-slider"><i
                                class="fas fa-chevron-left"></i></span>
                    </div>
                </header>
                <div class="sec-body">
                    <div class="projects-slider owl-carousel" id="projects-slider">
                        <div class="project-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/projects/1.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <h3>كابيتال مول</h3>
                                <a href="" class="btn cs-btn-white">
                                    عرض التفاصيل
                                </a>
                            </div>
                        </div>
                        <div class="project-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/projects/2.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <h3>فندق غزة</h3>
                                <a href="" class="btn cs-btn-white">
                                    عرض التفاصيل
                                </a>
                            </div>
                        </div>
                        <div class="project-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/projects/3.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <h3>تركيب نظام شمسي</h3>
                                <a href="" class="btn cs-btn-white">
                                    عرض التفاصيل
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- projects-section -->

        <!-- blog-section -->
        <section class="blog-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>المدونة</h2>
                    <div class="actions d-flex align-items-center">
                        <a href="" class="view-all">عرض الكل</a>
                        <span class="cs-nav prev" data-target="#blog-slider"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="cs-nav next" data-target="#blog-slider"><i
                                class="fas fa-chevron-left"></i></span>
                    </div>
                </header>
                <div class="sec-body">
                    <div class="blog-slider owl-carousel" id="blog-slider">
                        <div class="news-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/news/1.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="21.5"
                                        viewBox="0 0 19.5 21.5">
                                        <g id="calendar" transform="translate(-494.25 -189.25)">
                                            <path id="Vector" d="M0,0V3" transform="translate(500 190)"
                                                fill="none" stroke="#201e1e" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector" d="M0,0V3"
                                                transform="translate(508 190)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector" d="M0,0H17"
                                                transform="translate(495.5 197.09)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector"
                                                d="M18,5v8.5c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V5C0,2,1.5,0,5,0h8C16.5,0,18,2,18,5Z"
                                                transform="translate(495 191.5)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-6" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-7" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-8" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-9" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-10" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                    <span>‏15 فبراير, 2022</span>
                                </div>
                                <h3>أنواع أنظمة الطاقة الشمسية</h3>
                                <div class="content">
                                    تعمل أنظمة الطاقة الكهروضوئية الشمسية عن طريق تحويل ضوء الشمس مباشرة إلى كهرباء وتعد
                                    الخلايا ...الضوئية أو الخلايا الشمسية هي لبنة من وحدات
                                </div>
                                <a href="" class="read-more">
                                    اضغط لتفاصيل أكثر
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8.996"
                                        viewBox="0 0 14 8.996">
                                        <path id="Path_382" data-name="Path 382"
                                            d="M741.909,1491.729a1,1,0,0,1-1.413-.05l-3.231-3.5a1.006,1.006,0,0,1,0-1.36l3.231-3.5a1,1,0,0,1,1.47,1.36l-1.682,1.82H750a1,1,0,1,1,0,2h-9.716l1.682,1.82A1,1,0,0,1,741.909,1491.729Z"
                                            transform="translate(-737 -1483.002)" fill="currentColor"
                                            fill-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="news-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/news/2.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="21.5"
                                        viewBox="0 0 19.5 21.5">
                                        <g id="calendar" transform="translate(-494.25 -189.25)">
                                            <path id="Vector" d="M0,0V3" transform="translate(500 190)"
                                                fill="none" stroke="#201e1e" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector" d="M0,0V3"
                                                transform="translate(508 190)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector" d="M0,0H17"
                                                transform="translate(495.5 197.09)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector"
                                                d="M18,5v8.5c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V5C0,2,1.5,0,5,0h8C16.5,0,18,2,18,5Z"
                                                transform="translate(495 191.5)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-6" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-7" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-8" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-9" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-10" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                    <span>‏‏10 مارس, 2022</span>
                                </div>
                                <h3>نوعية الأثاث تصنع سعادة الأسرة</h3>
                                <div class="content">
                                    تسهم نوعية قطع الأثاث وطرق ترتيبها داخل المنزل في تشكيل الكثير من جوانب حياة الأسرة،
                                    فهي من بين ...مكونات المنزل الأكثر إثارة للشعور بالسعادة
                                </div>
                                <a href="" class="read-more">
                                    اضغط لتفاصيل أكثر
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8.996"
                                        viewBox="0 0 14 8.996">
                                        <path id="Path_382" data-name="Path 382"
                                            d="M741.909,1491.729a1,1,0,0,1-1.413-.05l-3.231-3.5a1.006,1.006,0,0,1,0-1.36l3.231-3.5a1,1,0,0,1,1.47,1.36l-1.682,1.82H750a1,1,0,1,1,0,2h-9.716l1.682,1.82A1,1,0,0,1,741.909,1491.729Z"
                                            transform="translate(-737 -1483.002)" fill="currentColor"
                                            fill-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="news-item">
                            <figure>
                                <img src="{{ asset('h_assets/images/news/3.png') }}" class="img-fluid">
                            </figure>
                            <div class="info">
                                <div class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="21.5"
                                        viewBox="0 0 19.5 21.5">
                                        <g id="calendar" transform="translate(-494.25 -189.25)">
                                            <path id="Vector" d="M0,0V3" transform="translate(500 190)"
                                                fill="none" stroke="#201e1e" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-2" data-name="Vector" d="M0,0V3"
                                                transform="translate(508 190)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-3" data-name="Vector" d="M0,0H17"
                                                transform="translate(495.5 197.09)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-4" data-name="Vector"
                                                d="M18,5v8.5c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V5C0,2,1.5,0,5,0h8C16.5,0,18,2,18,5Z"
                                                transform="translate(495 191.5)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Vector-5" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-6" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(507.2 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-7" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-8" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(503.501 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-9" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 201.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Vector-10" data-name="Vector" d="M.495.5H.5"
                                                transform="translate(499.8 204.2)" fill="none" stroke="#201e1e"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                    <span>‏‏22 أكتوبر, 2022</span>
                                </div>
                                <h3>أشكال وديكورات النجف المختلفة</h3>
                                <div class="content">
                                    تحرص ربة الأسرة على اختيار ديكورات منزلها بعناية بما يلائم ذوقها ومساحة الغرف فيه،
                                    ولاشك أن اختيار ...مصادر الإضاءة فى المنزل من أكثر الأمور التى تحرص
                                </div>
                                <a href="" class="read-more">
                                    اضغط لتفاصيل أكثر
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8.996"
                                        viewBox="0 0 14 8.996">
                                        <path id="Path_382" data-name="Path 382"
                                            d="M741.909,1491.729a1,1,0,0,1-1.413-.05l-3.231-3.5a1.006,1.006,0,0,1,0-1.36l3.231-3.5a1,1,0,0,1,1.47,1.36l-1.682,1.82H750a1,1,0,1,1,0,2h-9.716l1.682,1.82A1,1,0,0,1,741.909,1491.729Z"
                                            transform="translate(-737 -1483.002)" fill="currentColor"
                                            fill-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-section -->

        <!-- testimonial-section -->
        <section class="testimonial-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>أراء العملاء</h2>
                    <div class="actions d-flex align-items-center">
                        <span class="cs-nav prev" data-target="#testimonial-slider"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="cs-nav next" data-target="#testimonial-slider"><i
                                class="fas fa-chevron-left"></i></span>
                    </div>
                </header>
                <div class="sec-body">
                    <div class="testimonial-slider owl-carousel" id="testimonial-slider">
                        <div class="testimonial-item">
                            <div class="text d-flex">
                                <svg id="Group_54013" data-name="Group 54013" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="16.2" viewBox="0 0 24 16.2">
                                    <g id="Group_54730" data-name="Group 54730" transform="translate(0 0)">
                                        <path id="icon"
                                            d="M22.895,14.175A5,5,0,0,0,27.316,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448,4.39,4.39,0,0,0-1.343-3.448,5.027,5.027,0,0,0-3.582-1.259,5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,25.3,2.9,8.206,8.206,0,0,1,27.932.985L27.428,0a9.814,9.814,0,0,0-4.422,3.722A9.7,9.7,0,0,0,21.5,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,22.895,14.175Z"
                                            transform="translate(-8.577 0)" fill="#ed3237" />
                                        <path id="icon-2" data-name="icon"
                                            d="M1.4,14.175A5,5,0,0,0,5.821,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448A4.39,4.39,0,0,0,9.739,8.045,5.027,5.027,0,0,0,6.157,6.786a5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,3.806,2.9,8.206,8.206,0,0,1,6.436.985L5.933,0A9.814,9.814,0,0,0,1.511,3.722,9.7,9.7,0,0,0,0,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,1.4,14.175Z"
                                            transform="translate(0 0)" fill="#ed3237" />
                                    </g>
                                </svg>
                                <p class="flex-fill"> شركة أضواء البشير نشهد لها بالتميز القوي لمنتجاتها النوعية
                                    والمميزة في السوق, رغم قلة .الإمكانيات في قطاع غزة</p>
                            </div>
                            <figure>
                                <img src="{{ asset('h_assets/images/avatar-2.png') }}" class="img-fluid">
                            </figure>
                            <h3>عبدالرحمن إبراهيم</h3>
                            <h4>مهندس برمجيات</h4>
                        </div>
                        <div class="testimonial-item">
                            <div class="text d-flex">
                                <svg id="Group_54013" data-name="Group 54013" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="16.2" viewBox="0 0 24 16.2">
                                    <g id="Group_54730" data-name="Group 54730" transform="translate(0 0)">
                                        <path id="icon"
                                            d="M22.895,14.175A5,5,0,0,0,27.316,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448,4.39,4.39,0,0,0-1.343-3.448,5.027,5.027,0,0,0-3.582-1.259,5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,25.3,2.9,8.206,8.206,0,0,1,27.932.985L27.428,0a9.814,9.814,0,0,0-4.422,3.722A9.7,9.7,0,0,0,21.5,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,22.895,14.175Z"
                                            transform="translate(-8.577 0)" fill="#ed3237" />
                                        <path id="icon-2" data-name="icon"
                                            d="M1.4,14.175A5,5,0,0,0,5.821,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448A4.39,4.39,0,0,0,9.739,8.045,5.027,5.027,0,0,0,6.157,6.786a5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,3.806,2.9,8.206,8.206,0,0,1,6.436.985L5.933,0A9.814,9.814,0,0,0,1.511,3.722,9.7,9.7,0,0,0,0,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,1.4,14.175Z"
                                            transform="translate(0 0)" fill="#ed3237" />
                                    </g>
                                </svg>
                                <p class="flex-fill"> , مجموعة منتجات شركة أضواء البشير رائعة , ومميزة, نفخر بهذه
                                    المنتجات الفلسطينية .منتجات ذات جودة تستحق الثقة</p>
                            </div>
                            <figure>
                                <img src="{{ asset('h_assets/images/avatar-3.png') }}" class="img-fluid">
                            </figure>
                            <h3>إسماعيل يوسف</h3>
                            <h4>أستاذ جامعي</h4>
                        </div>
                        <div class="testimonial-item">
                            <div class="text d-flex">
                                <svg id="Group_54013" data-name="Group 54013" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="16.2" viewBox="0 0 24 16.2">
                                    <g id="Group_54730" data-name="Group 54730" transform="translate(0 0)">
                                        <path id="icon"
                                            d="M22.895,14.175A5,5,0,0,0,27.316,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448,4.39,4.39,0,0,0-1.343-3.448,5.027,5.027,0,0,0-3.582-1.259,5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,25.3,2.9,8.206,8.206,0,0,1,27.932.985L27.428,0a9.814,9.814,0,0,0-4.422,3.722A9.7,9.7,0,0,0,21.5,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,22.895,14.175Z"
                                            transform="translate(-8.577 0)" fill="#ed3237" />
                                        <path id="icon-2" data-name="icon"
                                            d="M1.4,14.175A5,5,0,0,0,5.821,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448A4.39,4.39,0,0,0,9.739,8.045,5.027,5.027,0,0,0,6.157,6.786a5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,3.806,2.9,8.206,8.206,0,0,1,6.436.985L5.933,0A9.814,9.814,0,0,0,1.511,3.722,9.7,9.7,0,0,0,0,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,1.4,14.175Z"
                                            transform="translate(0 0)" fill="#ed3237" />
                                    </g>
                                </svg>
                                <p class="flex-fill"> منتجات شركة أضواء البشير, منتجات فلسطينية نفتخر بانتاجها وبالأيدي
                                    العاملة فيه من كافة .أبناء شعبنا ونسأل الله التقدم والازدهار لهم</p>
                            </div>
                            <figure>
                                <img src="{{ asset('h_assets/images/avatar-4.png') }}" class="img-fluid">
                            </figure>
                            <h3>عبدالرحيم حمادة</h3>
                            <h4>مدير إداري</h4>
                        </div>
                        <div class="testimonial-item">
                            <div class="text d-flex">
                                <svg id="Group_54013" data-name="Group 54013" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="16.2" viewBox="0 0 24 16.2">
                                    <g id="Group_54730" data-name="Group 54730" transform="translate(0 0)">
                                        <path id="icon"
                                            d="M22.895,14.175A5,5,0,0,0,27.316,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448,4.39,4.39,0,0,0-1.343-3.448,5.027,5.027,0,0,0-3.582-1.259,5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,25.3,2.9,8.206,8.206,0,0,1,27.932.985L27.428,0a9.814,9.814,0,0,0-4.422,3.722A9.7,9.7,0,0,0,21.5,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,22.895,14.175Z"
                                            transform="translate(-8.577 0)" fill="#ed3237" />
                                        <path id="icon-2" data-name="icon"
                                            d="M1.4,14.175A5,5,0,0,0,5.821,16.2a5.611,5.611,0,0,0,3.806-1.259,4.424,4.424,0,0,0,1.455-3.448A4.39,4.39,0,0,0,9.739,8.045,5.027,5.027,0,0,0,6.157,6.786a5.092,5.092,0,0,0-4.086,1.7,4.682,4.682,0,0,1-.112-1.2,5.264,5.264,0,0,1,.28-1.806A6.958,6.958,0,0,1,3.806,2.9,8.206,8.206,0,0,1,6.436.985L5.933,0A9.814,9.814,0,0,0,1.511,3.722,9.7,9.7,0,0,0,0,8.976a10.909,10.909,0,0,0,.392,3.01A6.727,6.727,0,0,0,1.4,14.175Z"
                                            transform="translate(0 0)" fill="#ed3237" />
                                    </g>
                                </svg>
                                <p class="flex-fill"> منتجات شركة أضواء البشير, منتجات فلسطينية نفتخر بانتاجها وبالأيدي
                                    العاملة فيه من كافة .أبناء شعبنا ونسأل الله التقدم والازدهار لهم</p>
                            </div>
                            <figure>
                                <img src="{{ asset('h_assets/images/avatar-4.png') }}" class="img-fluid">
                            </figure>
                            <h3>عبدالرحيم حمادة</h3>
                            <h4>مدير إداري</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section -->

        <!-- h-faqs-section -->
        <section class="h-faqs-section">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between wow fadeInUp"
                    data-wow-duration="1.5s">
                    <h2>الأسئلة الأكثر شيوعاً</h2>
                </header>
                <div class="sec-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="faqs-sec  wow fadeInUp" data-wow-duration="1.5s">
                                <div class="accordion" id="accordionFaqs">
                                    <div class="faqs-item">
                                        <div class="head d-flex align-items-center justify-content-between"
                                            data-toggle="collapse" data-target="#q-1" aria-expanded="true">
                                            <h3>ما هي أقسام المنتجات التي تقدمها شركة أضواء البشير؟</h3>
                                            <div class="ic">
                                                <i class="fas fa-plus plus"></i>
                                                <i class="fas fa-times cross"></i>
                                            </div>
                                        </div>
                                        <div class="content collapse show" id="q-1"
                                            data-parent="#accordionFaqs">
                                            <div class="content-wrapper">
                                                تسعى شركة أضواء البشير وباستمرار نحو تقديم منتجات عالية الجودة تلبي
                                                احتياجات المستهلكين ومواصلة سعيها الدؤوب لتطوير كافة جوانب أعمالها
                                                بتطبيق أعلى معايير الجودة, منذ انطلاق مسيرتها، نمت الشركة عبر خطط
                                                استثمارية .مدروسة لتصبح اليوم أكبر شركة محلية في عالم الأضواء, مع هذا
                                                الانتشار والتوسع تبقى الجودة العامل المشترك والأبرز
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faqs-item">
                                        <div class="head collapsed d-flex align-items-center justify-content-between"
                                            data-toggle="collapse" data-target="#q-2" aria-expanded="false">
                                            <h3>لماذا شركة أضواء البشير؟</h3>
                                            <div class="ic">
                                                <i class="fas fa-plus plus"></i>
                                                <i class="fas fa-times cross"></i>
                                            </div>
                                        </div>
                                        <div class="content collapse" id="q-2" data-parent="#accordionFaqs">
                                            <div class="content-wrapper">
                                                تسعى شركة أضواء البشير وباستمرار نحو تقديم منتجات عالية الجودة تلبي
                                                احتياجات المستهلكين ومواصلة سعيها الدؤوب لتطوير كافة جوانب أعمالها
                                                بتطبيق أعلى معايير الجودة, منذ انطلاق مسيرتها، نمت الشركة عبر خطط
                                                استثمارية .مدروسة لتصبح اليوم أكبر شركة محلية في عالم الأضواء, مع هذا
                                                الانتشار والتوسع تبقى الجودة العامل المشترك والأبرز
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faqs-item">
                                        <div class="head collapsed d-flex align-items-center justify-content-between"
                                            data-toggle="collapse" data-target="#q-3" aria-expanded="false">
                                            <h3>ما هي بوابات الدفع المتاحة والمعتمدة التي يمكنني الدفع من خلالها؟</h3>
                                            <div class="ic">
                                                <i class="fas fa-plus plus"></i>
                                                <i class="fas fa-times cross"></i>
                                            </div>
                                        </div>
                                        <div class="content collapse" id="q-3" data-parent="#accordionFaqs">
                                            <div class="content-wrapper">
                                                تسعى شركة أضواء البشير وباستمرار نحو تقديم منتجات عالية الجودة تلبي
                                                احتياجات المستهلكين ومواصلة سعيها الدؤوب لتطوير كافة جوانب أعمالها
                                                بتطبيق أعلى معايير الجودة, منذ انطلاق مسيرتها، نمت الشركة عبر خطط
                                                استثمارية .مدروسة لتصبح اليوم أكبر شركة محلية في عالم الأضواء, مع هذا
                                                الانتشار والتوسع تبقى الجودة العامل المشترك والأبرز
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faqs-item">
                                        <div class="head collapsed d-flex align-items-center justify-content-between"
                                            data-toggle="collapse" data-target="#q-4" aria-expanded="false">
                                            <h3>ما هي فروع شركة أضواء البشير في غزة؟</h3>
                                            <div class="ic">
                                                <i class="fas fa-plus plus"></i>
                                                <i class="fas fa-times cross"></i>
                                            </div>
                                        </div>
                                        <div class="content collapse" id="q-4" data-parent="#accordionFaqs">
                                            <div class="content-wrapper">
                                                تسعى شركة أضواء البشير وباستمرار نحو تقديم منتجات عالية الجودة تلبي
                                                احتياجات المستهلكين ومواصلة سعيها الدؤوب لتطوير كافة جوانب أعمالها
                                                بتطبيق أعلى معايير الجودة, منذ انطلاق مسيرتها، نمت الشركة عبر خطط
                                                استثمارية .مدروسة لتصبح اليوم أكبر شركة محلية في عالم الأضواء, مع هذا
                                                الانتشار والتوسع تبقى الجودة العامل المشترك والأبرز
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faqs-item">
                                        <div class="head collapsed d-flex align-items-center justify-content-between"
                                            data-toggle="collapse" data-target="#q-5" aria-expanded="false">
                                            <h3>هل يوجد توصيل للمنتجات التي يتم شراؤها من الشركة؟</h3>
                                            <div class="ic">
                                                <i class="fas fa-plus plus"></i>
                                                <i class="fas fa-times cross"></i>
                                            </div>
                                        </div>
                                        <div class="content collapse" id="q-5" data-parent="#accordionFaqs">
                                            <div class="content-wrapper">
                                                تسعى شركة أضواء البشير وباستمرار نحو تقديم منتجات عالية الجودة تلبي
                                                احتياجات المستهلكين ومواصلة سعيها الدؤوب لتطوير كافة جوانب أعمالها
                                                بتطبيق أعلى معايير الجودة, منذ انطلاق مسيرتها، نمت الشركة عبر خطط
                                                استثمارية .مدروسة لتصبح اليوم أكبر شركة محلية في عالم الأضواء, مع هذا
                                                الانتشار والتوسع تبقى الجودة العامل المشترك والأبرز
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="contact-call-action d-flex align-items-center  wow fadeInUp"
                                data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="wrapper">
                                    <figure>
                                        <img src="{{ asset('h_assets/images/contact-ic.png') }}" class="img-fluid">
                                    </figure>
                                    <h3> هل لا تجب إجابة على استفساراتك؟</h3>
                                    <p> أهلاً بك عزيزي. ما عليك سوى ترك رسالة وسنعاود الاتصال بك والإجابة عليك في أسرع
                                        .وقت ممكن</p>
                                    <div class="actions">
                                        <a href="" class="btn">تواصل معنا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- h-faqs-section -->

        <!-- clients-section -->
        <section class="clients-section wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <header class="sec-header d-flex align-items-center justify-content-between">
                    <h2>الموردين الرئيسيين</h2>
                </header>
                <div class="sec-body">
                    <div class="row justify-content-center">
                        <section class="clients-slider owl-carousel">
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/1.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/2.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/3.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/4.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/5.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/6.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/7.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/8.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/9.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="client-item d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="{{ asset('h_assets/images/clients/10.png') }}" class="img-fluid">
                                </a>
                            </div>
                        </section>
                        {{-- <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/1.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/2.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/3.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/4.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/5.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/6.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/7.png" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/8.png" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/9.png" class="img-fluid">
                                        </a>
                                    </div>
                                </div>card-flush
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                    <div class="client-item d-flex align-items-center justify-content-center">
                                        <a href="">
                                            <img src="{{ asset('h_assets/images/clients/10.png" class="img-fluid">
                                        </a>
                                    </div>
                                </div> --> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section -->
    </div>
@endsection




{{-- <body>

    <!-- pre-loader -->
    <section class="pre-loader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>
    <!-- pre-loader -->

     <!-- Side Menu -->
    <aside class="side-menu">
        <div class="text-right">
            <button class="bg-transparent border-0 btn text-muted btn-lg" id="closeMenu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="scroll-menu">
            <nav class="scrollspy_menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">المنتجات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.html">الحملات والعروض</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers_care.html">العناية بالزبائن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.html">الوظائف</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">السلة <span class="badge badge-danger">10</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span>المفضلة</span> <span class="badge badge-danger">8</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">لوحة التحكم </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تسجيل الخروج</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="side-overlay"></div>
    <!-- Side Menu --> --}}

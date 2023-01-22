  <!-- Main header -->
  <header class="main-header fixed-top">
      <div class="header-top">
          <nav class="navbar navbar-expand-lg">
              <div class="container">
                  <a class="navbar-brand" href="#">
                      <img src="{{ asset('h_assets/images/logo.svg') }}" alt="" title="" />
                  </a>
                  <div class="h-tools d-flex align-items-center order-lg-last">
                      <button type="button" class="navbar-toggler btn " id="openMenu">
                          <i class="fas fa-bars"></i>
                      </button>
                      <a class="h-cart-ic badge-ic" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.811"
                              viewBox="0 0 21.5 21.811">
                              <g id="vuesax_linear_bag" data-name="vuesax/linear/bag"
                                  transform="translate(-109.25 -188.939)">
                                  <g id="bag">
                                      <path id="Vector" d="M3.62,0,0,3.63" transform="translate(113.19 190)"
                                          fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5" />
                                      <path id="Vector-2" data-name="Vector" d="M0,0,3.62,3.63"
                                          transform="translate(123.19 190)" fill="none" stroke="currentColor"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                      <path id="Vector-3" data-name="Vector"
                                          d="M0,2C0,.15.99,0,2.22,0H17.78C19.01,0,20,.15,20,2c0,2.15-.99,2-2.22,2H2.22C.99,4,0,4.15,0,2Z"
                                          transform="translate(110 193.85)" fill="none" stroke="currentColor"
                                          stroke-width="1.5" />
                                      <path id="Vector-4" data-name="Vector" d="M0,0V3.55"
                                          transform="translate(117.76 202)" fill="none" stroke="currentColor"
                                          stroke-linecap="round" stroke-width="1.5" />
                                      <path id="Vector-5" data-name="Vector" d="M0,0V3.55"
                                          transform="translate(122.36 202)" fill="none" stroke="currentColor"
                                          stroke-linecap="round" stroke-width="1.5" />
                                      <path id="Vector-6" data-name="Vector"
                                          d="M0,0,1.41,8.64C1.73,10.58,2.5,12,5.36,12h6.03c3.11,0,3.57-1.36,3.93-3.24L17,0"
                                          transform="translate(111.5 198)" fill="none" stroke="currentColor"
                                          stroke-linecap="round" stroke-width="1.5" />
                                  </g>
                              </g>
                          </svg>
                          <span class="count">8</span>
                      </a>
                      <a class="h-favorit-ic badge-ic" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="19.321"
                              viewBox="0 0 21.5 19.321">
                              <g id="heart" transform="translate(-237.25 -190.35)">
                                  <path id="Vector"
                                      d="M10.62,17.71a2.181,2.181,0,0,1-1.24,0C6.48,16.72,0,12.59,0,5.59A5.574,5.574,0,0,1,5.56,0,5.515,5.515,0,0,1,10,2.24,5.547,5.547,0,0,1,20,5.59C20,12.59,13.52,16.72,10.62,17.71Z"
                                      transform="translate(238 191.1)" fill="none" stroke="currentColor"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                              </g>
                          </svg>
                          <span class="count">10</span>
                      </a>
                      <div class="h-user">
                          <div class="dropdown">
                              <div class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                  data-toggle="dropdown" aria-expanded="false">
                                  <img src="{{ asset('h_assets/images/avatar.png') }}" class="img-fluid img-circle">
                                  <i class="fas fa-chevron-down"></i>
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="/dashboard">لوحة التحكم</a>
                                {{-- logout --}}
{{--                                  <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                      onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                                      تسجيل الخروج--}}
{{--                                  </a>--}}
{{--                                  <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                      class="d-none">--}}
{{--                                      @csrf--}}
{{--                                  </form>--}}
                                  {{--  --}}
                                  {{-- <a class="dropdown-item" href="/logout">تسجيل الخروج</a> --}}
                              </div>
                          </div>
                      </div>
                      <a href="" class="h-lang d-flex align-items-center">
                          <span>EN</span>
                          <img src="{{ asset('h_assets/images/globe.png') }}" alt="">
                      </a>
                  </div>

                  <div class="header-search">
                      <form>
                          <div class="search-input-wrapper d-flex align-items-center">
                              <!-- <span class="ic"> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5"
                                  viewBox="0 0 21.5 21.5">
                                  <g id="vuesax_linear_search-normal" data-name="vuesax/linear/search-normal"
                                      transform="translate(-429.25 -189.25)">
                                      <g id="search-normal">
                                          <path id="Vector"
                                              d="M9.5-.75A10.25,10.25,0,1,1-.75,9.5,10.262,10.262,0,0,1,9.5-.75Zm0,19A8.75,8.75,0,1,0,.75,9.5,8.76,8.76,0,0,0,9.5,18.25Z"
                                              transform="translate(430 190)" fill="#797d81" />
                                          <path id="Vector-2" data-name="Vector"
                                              d="M2,2.75a.748.748,0,0,1-.53-.22l-2-2A.75.75,0,0,1-.53-.53.75.75,0,0,1,.53-.53l2,2A.75.75,0,0,1,2,2.75Z"
                                              transform="translate(448 208)" fill="#797d81" />
                                      </g>
                                  </g>
                              </svg>
                              <!-- </span> -->
                              <input type="text" class="form-control" name=""
                                  placeholder="بحث عن أثاث, نجف, أدوات كهربائية ...">
                          </div>
                      </form>
                  </div>

              </div>
          </nav>
      </div>
      <div class="header-bottom">
          <div class="container">
              <nav class="navbar navbar-expand-lg">
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
                  </ul>
              </nav>
          </div>
      </div>
  </header>
  <!-- Main header -->

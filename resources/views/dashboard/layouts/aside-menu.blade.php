<!--begin::Aside-->
<div id="kt_aside" class="aside bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto pt-9 pb-7 px-9" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/dashboard">
            <img alt="Logo"  src="{{ asset('d_assets/media/logos/windows-in-a-square.png') }}" style="height: 40px; width: 40px" class=" logo-default"/><span style="font-size: 20px"> Dashboard</span>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid px-3 px-lg-6">
        <!--begin::Aside Menu-->
        <!--begin::Menu-->
        <div class="menu menu-column menu-pill menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-arrow-gray-500 menu-active-bg-primary fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
             id="kt_aside_menu" data-kt-menu="true">
            <div class="hover-scroll-y me-n3 pe-3" id="kt_aside_menu_scroll" data-kt-scroll="true"
                 data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                 data-kt-scroll-wrappers="#kt_aside_menu"
                 data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="20px">
                <div class="menu-item mb-1">
                    <a class="menu-link active" href="/dashboard">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7"
                                                          height="7" rx="1.5" />
                                                    <path
                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <path
                                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                    fill="#000000" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Tools</span>
                                    <span class="menu-arrow"></span>
                                </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/app-contents">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">App Contents</span>
                            </a>
                        </div>

                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/slider">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Slider</span>
                            </a>
                        </div>

                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/categories">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>

                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/products">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Products</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/suppliers">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Suppliers</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/colors">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Colors</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="/dashboard/admins">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Admins</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
                                                <path
                                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                    fill="#000000" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Pages</span>
                                    <span class="menu-arrow"></span>
                                </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="general/about.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">About Us</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="general/invoice.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Invoice</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="general/faq.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">FAQ</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Wizard
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Pricing
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Account</span>
                                    <span class="menu-arrow"></span>
                                </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="account/overview.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Settings
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Security
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Audit Logs
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Activity
                                                <span
                                                    class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotone/Interface/Lock.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.11117 13.2288C3.27137 11.0124 5.01376 9.29156 7.2315 9.15059C8.55778 9.06629 10.1795 9 12 9C13.8205 9 15.4422 9.06629 16.7685 9.15059C18.9862 9.29156 20.7286 11.0124 20.8888 13.2288C20.9535 14.1234 21 15.085 21 16C21 16.915 20.9535 17.8766 20.8888 18.7712C20.7286 20.9876 18.9862 22.7084 16.7685 22.8494C15.4422 22.9337 13.8205 23 12 23C10.1795 23 8.55778 22.9337 7.23151 22.8494C5.01376 22.7084 3.27137 20.9876 3.11118 18.7712C3.04652 17.8766 3 16.915 3 16C3 15.085 3.04652 14.1234 3.11117 13.2288Z"
                                        fill="#12131A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13 16.7324C13.5978 16.3866 14 15.7403 14 15C14 13.8954 13.1046 13 12 13C10.8954 13 10 13.8954 10 15C10 15.7403 10.4022 16.3866 11 16.7324V18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18V16.7324Z"
                                        fill="#12131A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6V10C17 10.5523 16.5523 11 16 11C15.4477 11 15 10.5523 15 10V6C15 4.34315 13.6569 3 12 3C10.3431 3 9 4.34315 9 6V10C9 10.5523 8.55228 11 8 11C7.44772 11 7 10.5523 7 10V6Z"
                                        fill="#12131A" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Authentication
                            <span
                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Base</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Sign-in
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Sign-up
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Two-steps Auth
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Password Reset
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">New Password
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Extended</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Multi-steps
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Free Trial
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Coming Soon
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">General</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Welcome
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Verify Email
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Password Confirmation
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Close Account
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Error 404
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Error 500
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Email</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#" target="blank"
                                        data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Verify Email
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" target="blank"
                                        data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Password Reset
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#" target="blank"
                                        data-kt-page="pro">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Password Change
                                            <span
                                                class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Menu-->
    </div>

    <!--end::Aside menu-->
</div>
<!--end::Aside-->



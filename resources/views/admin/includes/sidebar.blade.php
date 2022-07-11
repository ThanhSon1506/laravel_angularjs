     <!--APP-SIDEBAR-->
     <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{asset('themes/admin/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{asset('themes/admin/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="{{asset('themes/admin/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{asset('themes/admin/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu overflow-auto main-sidemenu--height">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg')}}"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Chính</h3>
                            </li>
                            <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Tổng quan</span><span class="badge bg-pink side-badge">4</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="profile.html" class="slide-item"> Thống kê</a></li>
                                    <li><a href="editprofile.html" class="slide-item"> Công nợ</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Báo cáo</a></li>
                                </ul>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li> 
                            <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-truck"></i><span class="side-menu__label">Bán hàng</span><span class="badge bg-green side-badge">4</span><i
                                        class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{route('admin.index.order')}}" class="slide-item"> Đơn hàng</a></li>
                                    <li><a href="editprofile.html" class="slide-item"> Yêu cầu thanh toán</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Bảng giá</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Khuyến mãi - CK</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Khách hàng - NCC</a></li>
                                    <li><a href="notify-list.html" class="slide-item"> Theo dõi tiến độ</a></li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a class="side-menu__item" href="{{route('admin.index.sell')}}">
                                    <i class="side-menu__icon fa fa-truck" aria-hidden="true"></i>
                                    <span class="side-menu__label">Bán hàng</span>
                                </a>
                            </li> -->
                            
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.warehouse')}}">
                                    <i class="side-menu__icon fa fa-archive" aria-hidden="true"></i>
                                    <span class="side-menu__label">Kho hàng</span>
                                    <span class="badge bg-yellow side-badge">45</span>

                                </a>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-file-o" aria-hidden="true"></i>
                                        <span class="side-menu__label">Hóa đơn - Chứng từ</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="{{route('admin.index.page_form_stock')}}" class="slide-item"> Giấy từ kho</a></li>
                                    <li><a href="{{route('admin.index.invoice')}}" class="slide-item"> Hóa đơn</a></li>
                                    <li><a href="{{route('admin.index.printed_form')}}" class="slide-item"> Mẫu in</a></li>
                                    <li><a href="{{route('admin.index.search')}}" class="slide-item"> Tra cứu</a></li>
                                </ul>
                            </li>


                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.approve')}}">
                                    <i class="side-menu__icon fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <span class="side-menu__label">Phê duyệt</span>
                                    <span class="badge bg-gray side-badge">45</span>
                                </a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.notification')}}">
                                    <i class="side-menu__icon fa fa-bell" aria-hidden="true"></i>
                                    <span class="side-menu__label">Thông báo</span>
                                    <span class="badge bg-blue side-badge">90</span>
                                </a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.email_compose')}}">
                                    <i class="side-menu__icon fa fa-envelope" aria-hidden="true"></i>
                                    <span class="side-menu__label">Email</span>
                                </a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.calendar')}}">
                                    <i class="side-menu__icon fa fa-calendar-check-o" aria-hidden="true"></i>
                                    <span class="side-menu__label">Calendar</span>
                                </a>
                            </li>
                           
                            <li class="sub-category">
                                <h3>Settings</h3>
                            </li>
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                        <i class="side-menu__icon fa fa-cogs" aria-hidden="true"></i>
                                        <span class="side-menu__label">Hệ thống</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li><a href="shop.html" class="slide-item"> Quy cách sản phẩm</a></li>
                                    <li><a href="shop-description.html" class="slide-item"> Phương thức</a></li>
                                    <li><a href="cart.html" class="slide-item"> Mã hàng</a></li>
                                    <li><a href="add-product.html" class="slide-item">Cấu hình chung</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.user')}}">
                                    <i class="side-menu__icon fa fa-user" aria-hidden="true"></i>
                                    <span  class="side-menu__label">Người dùng</span>
                                </a>
                            </li>
                            <li class="sub-category">
                                <h3>Help & Support</h3>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{route('admin.index.faq')}}">
                                    <i class="side-menu__icon fa fa-question-circle" aria-hidden="true"></i>
                                    <span class="side-menu__label">FAQ câu hỏi thường gặp</span>
                                </a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="widgets.html">
                                    <i class="side-menu__icon fa fa-headphones" aria-hidden="true"></i>
                                    <span class="side-menu__label">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="widgets.html">
                                    <i class="side-menu__icon fa fa-file-text-o" aria-hidden="true"></i>
                                    <span class="side-menu__label">Documentation</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg')}}" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

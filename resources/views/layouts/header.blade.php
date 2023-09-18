<header class="header fixed top-0 right-0 w-full bg-orange-500 leading-[4rem] flex justify-around items-center z-50">
    <section class="sidebar-header bg-gray-700">
        <section class="flex justify-between items-center md:flex-row-reverse px-2">
            <span id="sidebar-toggle-show" class="inline md:hidden cursor-pointer"><i class="fas fa-toggle-off"></i></span>
            <span id="sidebar-toggle-hide" class="hidden md:inline cursor-pointer"><i class="fas fa-toggle-on"></i></span>
            <span><img class="logo rounded-full" src="{{ asset('admin-assets/images/logo.png') }}" alt=""></span>
            <span class="md:hidden" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
        </section>
    </section>
    <section class="body-header bg-white" id="body-header">
        <section class="flex justify-between">
            <section>
                <span class="mr-5">
                    <span id="search-area" class="search-area hidden py-[.3rem] px-[.6rem] rounded-[2rem]">
                        <i id="search-area-hide" class="fas fa-times cursor-pointer"></i>
                        <input id="search-input" type="text" class="search-input border-none my-0 mx[.6rem] outline-none bg-transparent">
                        <i class="fas fa-search cursor-pointer"></i>
                    </span>
                <i id="search-toggle" class="fas fa-search p-1 hidden md:inline cursor-pointer"></i>
                </span>

                <span id="full-screen" class="cursor-pointer p-1 hidden md:inline mr-5">
                    <i id="screen-compress" class="fas fa-compress !hidden"></i>
                    <i id="screen-expand" class="fas fa-expand"></i>
                </span>
                <span id="blur-screen" class="cursor-pointer p-1 hidden md:inline mr-5">
                    <i id="screen-eye" class="fas fa-eye !hidden"></i>
                    <i id="screen-eye-off" class="fas fa-eye-slash"></i>
                </span>
            </section>
            <section class="flex">
                <span class="ml-2 md:ml-4 relative">
                    <span id="header-notification-toggle" class="cursor-pointer">
                        <i class="far fa-bell"></i><sup class="badge badge-danger">4</sup>
                    </span>
                <section id="header-notification" class="header-notifictation hidden absolute left-0 bg-white text-black mt-[.2rem] w-[16rem] rounded">
                    <section class="flex justify-between">
                        <span class="px-2">
                            نوتیفیکیشن ها
                        </span>
                        <span class="px-2">
                            <span class="badge badge-danger">جدید</span>
                        </span>
                    </section>

                    <ul class="flex flex-col rounded px-0">
                        <li>
                            <section class="media flex items-center p-2">
                                <div>
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                </div>
                                <section class="media-body pr-1">
                                    <h5 class="notification-user font-bold">محمد هاشمی</h5>
                                    <p class="notification-text">این یک متن تستی است</p>
                                    <p class="notification-time">30 دقیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        <li>
                            <section class="media flex items-center p-2">
                                <div>
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                </div>
                                <section class="media-body pr-1">
                                    <h5 class="notification-user font-bold">محمد هاشمی</h5>
                                    <p class="notification-text">این یک متن تستی است</p>
                                    <p class="notification-time">30 دقیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        <li>
                            <section class="media flex items-center p-2">
                                <div>
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                </div>
                                <section class="media-body pr-1">
                                    <h5 class="notification-user font-bold">محمد هاشمی</h5>
                                    <p class="notification-text">این یک متن تستی است</p>
                                    <p class="notification-time">30 دقیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        <li>
                            <section class="media flex items-center p-2">
                                <div>
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                </div>
                                <section class="media-body pr-1">
                                    <h5 class="notification-user font-bold">محمد هاشمی</h5>
                                    <p class="notification-text">این یک متن تستی است</p>
                                    <p class="notification-time">30 دقیقه پیش</p>
                                </section>
                            </section>
                        </li>
                        
                    </ul>
                </section>
                </span>
                <span class="ml-2 md:ml-4 relative">
                    <span id="header-comment-toggle" class="cursor-pointer">
                        <i class="far fa-comment-alt"><sup class="badge badge-danger">3</sup></i>
                    </span>

                <section id="header-comment" class="header-comment right-[-124px]">

                    <section class="border-b px-4">
                        <input type="text" class="w-full px-2 my-4 focus:outline-none focus:border focus:rounded-lg focus:border-gray-400 " placeholder="جستجو ...">
                    </section>

                    <section class="header-comment-wrapper">
                        <ul class="flex flex-col rounded px-0">
                            <li>
                                <section class="media flex items-center p-2 mt-1">
                                    <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                    <section class="media-body w-full pr-1">
                                        <section class="flex justify-between items-center">
                                            <div><h5 class="comment-user">محمد هاشمی</h5></div>
                                            <div class="w-2 h-2 ml-5 rounded-full bg-green-500"></div>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li>
                                <section class="media flex items-center p-2 mt-1">
                                    <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                    <section class="media-body w-full pr-1">
                                        <section class="flex justify-between items-center">
                                            <div><h5 class="comment-user">محمد هاشمی</h5></div>
                                            <div class="w-2 h-2 ml-5 rounded-full bg-green-500"></div>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li>
                                <section class="media flex items-center p-2 mt-1">
                                    <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                    <section class="media-body w-full pr-1">
                                        <section class="flex justify-between items-center">
                                            <div><h5 class="comment-user">محمد هاشمی</h5></div>
                                            <div class="w-2 h-2 ml-5 rounded-full bg-green-500"></div>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li>
                                <section class="media flex items-center p-2 mt-1">
                                    <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                    <section class="media-body w-full pr-1">
                                        <section class="flex justify-between items-center">
                                            <div><h5 class="comment-user">محمد هاشمی</h5></div>
                                            <div class="w-2 h-2 ml-5 rounded-full bg-green-500"></div>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            <li>
                                <section class="media flex items-center p-2 mt-1">
                                    <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                    <section class="media-body w-full pr-1">
                                        <section class="flex justify-between items-center">
                                            <div><h5 class="comment-user">محمد هاشمی</h5></div>
                                            <div class="w-2 h-2 ml-5 rounded-full bg-green-500"></div>
                                        </section>
                                    </section>
                                </section>
                            </li>
                            
                        </ul>
                    </section>

                </section>

                </span>
                <span class="ml-3 md:ml-5 relative ">
                    <span id="header-profile-toggle" class="cursor-pointer flex">
                        <img class="header-avatar" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="">
                        <span class="header-username">متین سلیمانی</span>
                <i class="fas fa-angle-down"></i>
                </span>
                <section id="header-profile" class="header-profile rounded">
                    <section class="flex justify-center flex-wrap rounded">
                        <a href="#" class="p-1 bg-gray-100 rounded-lg m-1 header-profile-link">
                            <i class="fas fa-cog"></i>تنظیمات
                        </a>
                        <a href="#" class="p-1 bg-gray-100 rounded-lg m-1 header-profile-link">
                            <i class="fas fa-user"></i>کاربر
                        </a>
                        <a href="#" class="p-1 bg-gray-100 rounded-lg m-1 header-profile-link">
                            <i class="far fa-envelope"></i>پیام ها
                        </a>
                        <a href="#" class="p-1 bg-gray-100 rounded-lg m-1 header-profile-link">
                            <i class="fas fa-sign-out-alt"></i>خروج
                        </a>
                    </section>
                </section>
                </span>
            </section>
        </section>
    </section>
</header>
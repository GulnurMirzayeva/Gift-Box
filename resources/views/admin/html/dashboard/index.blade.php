
<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="light" data-bs-theme-color="theme-color-default">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/core/libs.min.css') }}">

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/hope-ui.min.css?v=5.0.0') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.min.css?v=5.0.0') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/customizer.min.css?v=5.0.0') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/rtl.min.css?v=5.0.0') }}">

  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
    <!-- loader END -->

    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('admin') }}" class="navbar-brand">
                <h4 class="logo-title">Box & Tale</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>



                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Pages</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                                <svg class="icon-20"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Pages</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="">
                                  <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">Billing</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                    <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                    <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Users</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('dashboard/app/user-profile.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('dashboard/app/user-add.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A </i>
                                    <span class="item-name">Add User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('dashboard/app/user-list.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('admin.dashboard') }}">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Admin</span>
                        </a>
                    </li>

                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Elements</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false" aria-controls="sidebar-widget">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z" fill="currentColor"></path>
                                    <path d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">widget</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/widget/widgetbasic.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/widget/widgetchart.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Chart</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/widget/widgetcard.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Widget Card</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button" aria-expanded="false" aria-controls="sidebar-maps">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="currentColor"></path>
                                    <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                                </svg>
                            </i>
                            <span class="item-name">Maps</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/maps/google.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> G </i>
                                    <span class="item-name">Google</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/maps/vector.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Vector</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false" aria-controls="sidebar-form">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Form</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/form/form-element.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> E </i>
                                    <span class="item-name">Elements</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/form/form-wizard.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Wizard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/form/form-validation.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> V </i>
                                    <span class="item-name">Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false" aria-controls="sidebar-table">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Table</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/table/bootstrap-table.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> B </i>
                                    <span class="item-name">Bootstrap Table</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/table/table-data.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                    <span class="item-name">Datatable</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mb-5">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-icons" role="button" aria-expanded="false" aria-controls="sidebar-icons">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z" fill="currentColor"/>
                                    <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Icons</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-icons" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/icons/solid.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> S </i>
                                    <span class="item-name">Solid</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/icons/outline.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> O </i>
                                    <span class="item-name">Outlined</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard/icons/dual-tone.html') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                    <span class="item-name">Dual Tone</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>    <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
              <a href="{{ url('../dashboard/index.html') }}" class="navbar-brand">

                <h4 class="logo-title">BOX & TALE</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/admin/images/Flag/flag001.png') }}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                            <span class="bg-primary"></span>
                        </a>
                        <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                            <div class="m-0 border-0 shadow-none rounded card">
                                <div class="p-0 ">
                                    <ul class="p-0 list-group list-group-flush">
                                        <li class="iq-sub-card list-group-item"><a class="p-0 d-flex justify-content-start d-flex align-items-center" href="#"><img src="{{ asset('assets/admin/images/Flag/flag-03.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                        <li class="iq-sub-card list-group-item"><a class="p-0 d-flex justify-content-start d-flex align-items-center" href="#"><img src="{{ asset('assets/admin/images/Flag/flag-04.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                        <li class="iq-sub-card list-group-item"><a class="p-0 d-flex justify-content-start d-flex align-items-center" href="#"><img src="{{ asset('assets/admin/images/Flag/flag-02.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                        <li class="iq-sub-card list-group-item"><a class="p-0 d-flex justify-content-start d-flex align-items-center" href="#"><img src="{{ asset('assets/admin/images/Flag/flag-05.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                        <li class="iq-sub-card list-group-item"><a class="p-0 d-flex justify-content-start d-flex align-items-center" href="#"><img src="{{ asset('assets/admin/images/Flag/flag-06.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                            </svg>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                            <div class="m-0 shadow-none card">
                                <div class="py-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                    <div class="header-title">
                                        <h5 class="mb-0 text-white">All Notifications</h5>
                                    </div>
                                </div>
                                <div class="p-0 card-body">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <img class="p-1 avatar-40 rounded-pill bg-primary-subtle" src="{{ asset('assets/admin/images/shapes/01.png') }}" alt="">
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 text-start iq-text">Emma Watson Bni</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">95 MB</p>
                                                    <small class="float-end font-size-12">Just Now</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Repeat similar structure for other notifications -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                                <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                            </svg>
                            <span class="bg-primary count-mail"></span>
                        </a>
                        <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                            <div class="m-0 shadow-none card">
                                <div class="py-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                    <div class="header-title">
                                        <h5 class="mb-0 text-white">All Message</h5>
                                    </div>
                                </div>
                                <div class="p-0 card-body ">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="p-1 avatar-40 rounded-pill bg-primary-subtle" src="{{ asset('assets/admin/images/shapes/01.png') }}" alt="">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Bni Emma Watson</h6>
                                                <small class="float-start font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown custom-drop">
                        <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/admin/images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                            <img src="{{ asset('assets/admin/images/avatars/avtar_1.png') }}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                            <img src="{{ asset('assets/admin/images/avatars/avtar_2.png') }}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                            <img src="{{ asset('assets/admin/images/avatars/avtar_4.png') }}" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                            <img src="{{ asset('assets/admin/images/avatars/avtar_5.png') }}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                            <img src="{{ asset('assets/admin/images/avatars/avtar_3.png') }}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ asset('dashboard/app/user-profile.html') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ asset('auth/sign-in.blade.php') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="iq-header-img">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header.png') }}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header1.png') }}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header2.png') }}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header3.png') }}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header4.png') }}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/admin/images/dashboard/top-header5.png') }}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>
          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0">
<div class="row">
   <div class="col-md-12 col-lg-12">
      <div class="row row-cols-1">
         <div class="overflow-hidden d-slider1 ">
            <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Sales</p>
                           <h4 class="counter">$560K</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Profit</p>
                           <h4 class="counter">$185K</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Total Cost</p>
                           <h4 class="counter">$375K</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Revenue</p>
                           <h4 class="counter">$742K</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Net Income</p>
                           <h4 class="counter">$150K</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                           <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Today</p>
                           <h4 class="counter">$4600</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                           <svg class="card-slie-arrow icon-24 " width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <p  class="mb-2">Members</p>
                           <h4 class="counter">11.2M</h4>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
         </div>
      </div>
   </div>
   <div class="col-md-12 col-lg-8">
      <div class="row">
         <div class="col-md-12">
            <div class="card" data-aos="fade-up" data-aos-delay="800">
               <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                  <div class="header-title">
                     <h4 class="card-title">$855.8K</h4>
                     <p class="mb-0">Gross Sales</p>
                  </div>
                  <div class="d-flex align-items-center align-self-center">
                     <div class="d-flex align-items-center text-primary">
                        <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                           </g>
                        </svg>
                        <div class="ms-2">
                           <span class="text-gray">Sales</span>
                        </div>
                     </div>
                     <div class="d-flex align-items-center ms-3 text-info">
                        <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                           </g>
                        </svg>
                        <div class="ms-2">
                           <span class="text-gray">Cost</span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                     This Week
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <div id="d-main" class="d-main"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-xl-6">
            <div class="card" data-aos="fade-up" data-aos-delay="900">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Earnings</h4>
                  </div>
                  <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        This Week
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <div class="flex-wrap d-flex align-items-center justify-content-between">
                     <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                     <div class="d-grid gap col-md-4 col-lg-4">
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Fashion</span>
                              <h6>251K</h6>
                           </div>
                        </div>
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Accessories</span>
                              <h6>176K</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-xl-6">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Conversions</h4>
                  </div>
                  <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        This Week
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <div id="d-activity" class="d-activity"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-12">
            <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="mb-2 card-title">Enterprise Clients</h4>
                     <p class="mb-0">
                        <svg class ="me-2 text-primary icon-24" width="24"  viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                        </svg>
                        15 new acquired this month
                     </p>
                  </div>
               </div>
               <div class="p-0 card-body">
                  <div class="mt-4 table-responsive">
                     <table id="basic-table" class="table mb-0 table-striped" role="grid">
                        <thead>
                           <tr>
                              <th>COMPANIES</th>
                              <th>CONTACTS</th>
                              <th>ORDER</th>
                              <th>COMPLETION</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <img class="rounded bg-primary-subtle img-fluid avatar-40 me-3" src="../../../../../public/assets/admin/images/shapes/01.png" alt="profile">
                                    <h6>Addidis Sportwear</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$14,000</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>60%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-primary-subtle w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <img class="rounded bg-primary-subtle img-fluid avatar-40 me-3" src="{{ asset('assets/admin/images/shapes/05.png') }}" alt="profile">
                                    <h6>Netflixer Platforms</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$30,000</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>25%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-primary-subtle w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <img class="rounded bg-primary-subtle img-fluid avatar-40 me-3" src="{{ asset('assets/admin/images/shapes/02.png') }}" alt="profile">
                                    <h6>Shopifi Stores</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$8,500</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>100%</h6>
                                 </div>
                                 <div class="shadow-none progress   bg-success-subtle w-100" style="height: 4px">
                                    <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <img class="rounded bg-primary-subtle img-fluid avatar-40 me-3" src="{{ asset('assets/admin/images/shapes/03.png') }}" alt="profile">
                                    <h6>Bootstrap Technologies</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$20,500</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>100%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-success-subtle w-100" style="height: 4px">
                                    <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                     <img class="rounded bg-primary-subtle img-fluid avatar-40 me-3" src="{{ asset('assets/admin/images/shapes/04.png') }}" alt="profile">
                                    <h6>Community First</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="iq-media-group iq-media-group-1">
                                    <a href="#" class="iq-media-1">
                                       <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                    </a>
                                 </div>
                              </td>
                              <td>$9,800</td>
                              <td>
                                 <div class="mb-2 d-flex align-items-center">
                                    <h6>75%</h6>
                                 </div>
                                 <div class="shadow-none progress bg-primary-subtle w-100" style="height: 4px">
                                    <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-12 col-lg-4">
      <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
               <div class="pb-4 border-0 card-header">
                  <div class="p-4 rounded primary-gradient-card">
                     <div class="d-flex justify-content-between align-items-center">
                        <div>
                           <h5 class="font-weight-bold">VISA </h5>
                           <P class="mb-0">PREMIUM ACCOUNT</P>
                        </div>
                        <div class="master-card-content">
                           <svg class="master-card-1 icon-60" width="60"  viewBox="0 0 24 24">
                              <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                           </svg>
                           <svg class="master-card-2 icon-60" width="60"  viewBox="0 0 24 24">
                              <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                           </svg>
                        </div>
                     </div>
                     <div class="my-4">
                        <div class="card-number">
                           <span class="fs-5 me-2">5789</span>
                           <span class="fs-5 me-2">****</span>
                           <span class="fs-5 me-2">****</span>
                           <span class="fs-5">2847</span>
                        </div>
                     </div>
                     <div class="mb-2 d-flex align-items-center justify-content-between">
                        <p class="mb-0">Card holder</p>
                        <p class="mb-0">Expire Date</p>
                     </div>
                     <div class="d-flex align-items-center justify-content-between">
                        <h6>Mike Smith</h6>
                        <h6 class="ms-5">06/11</h6>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="flex-wrap mb-4 d-flex align-itmes-center justify-content-between">
                     <div class="d-flex align-itmes-center me-0 me-md-4">
                        <div>
                           <div class="p-3 mb-2 rounded bg-primary-subtle">
                              <svg class="icon-20"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="currentColor"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="ms-3">
                           <h5>1153</h5>
                           <small class="mb-0">Products</small>
                        </div>
                     </div>
                     <div class="d-flex align-itmes-center">
                        <div>
                           <div class="p-3 mb-2 rounded bg-secondary-subtle">
                              <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="ms-3">
                           <h5>81K</h5>
                           <small class="mb-0">Order Served</small>
                        </div>
                     </div>
                  </div>
                  <div class="mb-4">
                     <div class="flex-wrap d-flex justify-content-between">
                        <h2 class="mb-2">$405,012,300</h2>
                        <div>
                           <span class="badge bg-success rounded-pill">YoY 24%</span>
                        </div>
                     </div>
                     <p class="text-info">Life time sales</p>
                  </div>
                  <div class="grid-cols-2 d-grid gap-card">
                     <button class="p-2 btn btn-primary text-uppercase">SUMMARY</button>
                     <button class="p-2 btn btn-secondary text-uppercase">ANALYTICS</button>
                  </div>
               </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
               <div class="text-center card-body d-flex justify-content-around">
                  <div>
                     <h2 class="mb-2">750<small>K</small></h2>
                     <p class="mb-0 text-gray">Website Visitors</p>
                  </div>
                  <hr class="hr-vertial">
                  <div>
                     <h2 class="mb-2">7,500</h2>
                     <p class="mb-0 text-gray">New Customers</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="600">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="mb-2 card-title">Activity overview</h4>
                     <p class="mb-0">
                        <svg class ="me-2 icon-24" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                        </svg>
                        16% this month
                     </p>
                  </div>
               </div>
               <div class="card-body">
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">$2400, Purchase</h6>
                        <span class="mb-0">11 JUL 8:10 PM</span>
                     </div>
                  </div>
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">New order #8744152</h6>
                        <span class="mb-0">11 JUL 11 PM</span>
                     </div>
                  </div>
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">Affiliate Payout</h6>
                        <span class="mb-0">11 JUL 7:64 PM</span>
                     </div>
                  </div>
                  <div class="mb-2  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">New user added</h6>
                        <span class="mb-0">11 JUL 1:21 AM</span>
                     </div>
                  </div>
                  <div class="mb-1  d-flex profile-media align-items-top">
                     <div class="mt-1 profile-dots-pills border-primary"></div>
                     <div class="ms-4">
                        <h6 class="mb-1 ">Product added</h6>
                        <span class="mb-0">11 JUL 4:50 AM</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      </div>

      </main>
    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <svg width="24" viewBox="0 0 24 24" class="animated-rotate icon-24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      </svg>
    </a>

    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true"
      aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <div class="d-flex align-items-center">
          <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="mb-3">Scheme</h5>
            <div class="d-grid gap-3 grid-cols-3 mb-4">
              <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                </svg>
                <span class="ms-2 "> Auto </span>
              </div>

              <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                    d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                </svg>
                <span class="ms-2 "> Dark </span>
              </div>
              <div class="btn btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                    d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
                <span class="ms-2 "> Light</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <div class="d-flex align-items-center justify-content-between">
              <h5 class="mt-4 mb-3">Color Customizer</h5>
              <button class="btn btn-transparent p-0 border-0" data-value="theme-color-default" data-info="#001F4D"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Default">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                    fill="#31BAF1" />
                  <path
                    d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                    fill="#0169CA" />
                </svg>
              </button>
            </div>
            <div class="grid-cols-5 mb-4 d-grid gap-x-2">
              <div class="btn btn-border bg-transparent" data-value="theme-color-blue" data-info="#573BFF"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Theme-1">
                <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                  <circle cx="12" cy="12" r="10" fill="#00C3F9" />
                  <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
                </svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-gray" data-info="#FD8D00"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Theme-2">
                <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                  <circle cx="12" cy="12" r="10" fill="#91969E" />
                  <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
                </svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-red" data-info="#366AF0"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Theme-3">
                <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                  <circle cx="12" cy="12" r="10" fill="#DB5363" />
                  <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
                </svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-yellow" data-info="#6410F1"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Theme-4">
                <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                  <circle cx="12" cy="12" r="10" fill="#EA6A12" />
                  <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
                </svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-pink" data-info="#25C799"
                data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                data-bs-original-title="Theme-5">
                <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                  <circle cx="12" cy="12" r="10" fill="#E586B3" />
                  <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
                </svg>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mb-3 mt-4">Scheme Direction</h5>
              <div class="d-grid gap-3 grid-cols-2 mb-4">
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/01.png') }}" alt="ltr"
                           class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode"
                           data-name="dir" data-value="ltr">
                      <img src="{{ asset('assets/admin/images/settings/light/01.png') }}" alt="ltr"
                           class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode"
                           data-name="dir" data-value="ltr">
                      <span class=" mt-2"> LTR </span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/02.png') }}" alt=""
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir"
                           data-value="rtl">
                      <img src="{{ asset('assets/admin/images/settings/light/02.png') }}" alt=""
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir"
                           data-value="rtl">
                      <span class="mt-2 "> RTL </span>
                  </div>
              </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Color</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                data-value="sidebar-white">
                <span class=""> Default </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                data-value="sidebar-dark">
                <span class=""> Dark </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                data-value="sidebar-color">
                <span class=""> Color </span>
              </div>

              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
                data-value="sidebar-transparent">
                <span class=""> Transparent </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Types</h5>
              <div class="d-grid gap-3 grid-cols-3 mb-4">
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/03.png') }}" alt="mini"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-mini">
                      <img src="{{ asset('assets/admin/images/settings/light/03.png') }}" alt="mini"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-mini">
                      <span class="mt-2">Mini</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/04.png') }}" alt="hover"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                      <img src="{{ asset('assets/admin/images/settings/light/04.png') }}" alt="hover"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                      <span class="mt-2">Hover</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/05.png') }}" alt="boxed"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-boxed">
                      <img src="{{ asset('assets/admin/images/settings/light/05.png') }}" alt="boxed"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-type" data-value="sidebar-boxed">
                      <span class="mt-2">Boxed</span>
                  </div>
              </div>
              <hr class="hr-horizontal">
              <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
              <div class="d-grid gap-3 grid-cols-2 mb-4">
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/06.png') }}" alt="rounded-one-side"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-rounded">
                      <img src="{{ asset('assets/admin/images/settings/light/06.png') }}" alt="rounded-one-side"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-rounded">
                      <span class="mt-2">Rounded One Side</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/07.png') }}" alt="rounded-all"
                           class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-rounded-all">
                      <img src="{{ asset('assets/admin/images/settings/light/07.png') }}" alt="rounded-all"
                           class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-rounded-all">
                      <span class="mt-2">Rounded All</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/08.png') }}" alt="pill-one-side"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-pill">
                      <img src="{{ asset('assets/admin/images/settings/light/09.png') }}" alt="pill-one-side"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-pill">
                      <span class="mt-2">Pill One Side</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/09.png') }}" alt="pill-all"
                           class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item"
                           data-value="navs-pill-all">
                      <img src="{{ asset('assets/admin/images/settings/light/08.png') }}" alt="pill-all"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                           data-name="sidebar-item" data-value="navs-pill-all">
                      <span class="mt-2">Pill All</span>
                  </div>
              </div>
              <hr class="hr-horizontal">
              <h5 class="mt-4 mb-3">Navbar Style</h5>
              <div class="d-grid gap-3 grid-cols-2 ">
                  <div class=" text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/11.png') }}" alt="image"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                      <img src="{{ asset('assets/admin/images/settings/light/10.png') }}" alt="image"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                      <span class="mt-2">Glass</span>
                  </div>
                  <div class=" text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/12.png') }}" alt="sticky"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                      <img src="{{ asset('assets/admin/images/settings/light/12.png') }}" alt="sticky"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                      <span class="mt-2">Sticky</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/13.png') }}" alt="transparent"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                      <img src="{{ asset('assets/admin/images/settings/light/13.png') }}" alt="transparent"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                      <span class="mt-2">Transparent</span>
                  </div>
                  <div class="text-center">
                      <img src="{{ asset('assets/admin/images/settings/dark/10.png') }}" alt="color"
                           class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-target=".iq-navbar" data-name="navbar-type" data-value="default">
                      <img src="{{ asset('assets/admin/images/settings/light/01.png') }}" alt="color"
                           class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                           data-name="navbar-default" data-value="default">
                      <span class="mt-2">Default</span>
                  </div>
                  <div class="btn btn-border active col-span-full mt-4 d-block" data-setting="navbar" data-name="navbar-default"
                       data-value="default">
                      <span class=""> Default Navbar</span>
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Kitabxana Paket Skripti -->
    <script src="{{ asset('assets/admin/js/core/libs.min.js') }}"></script>

    <!-- Xarici Kitabxana Paket Skripti -->
    <script src="{{ asset('assets/admin/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Skripti -->
    <script src="{{ asset('assets/admin/js/charts/widgetcharts.js') }}"></script>

    <!-- Mapchart Skripti -->
    <script src="{{ asset('assets/admin/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('assets/admin/js/charts/dashboard.js') }}"></script>

    <!-- fslightbox Skripti -->
    <script src="{{ asset('assets/admin/js/plugins/fslightbox.js') }}"></script>

    <!-- Parametrlər Skripti -->
    <script src="{{ asset('assets/admin/js/plugins/setting.js') }}"></script>

    <!-- Slider-tab Skripti -->
    <script src="{{ asset('assets/admin/js/plugins/slider-tabs.js') }}"></script>

    <!-- Form Wizard Skripti -->
    <script src="{{ asset('assets/admin/js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animasiya Plugin-->
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>

    <!-- App Skripti -->
    <script src="{{ asset('assets/admin/js/hope-ui.js') }}" defer></script>



  </body>
</html>

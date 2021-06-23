
<!-- header backend include file -->
@include('back_end.includes_backend.header')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:#FF7A01; color:#FFFFFF;">
            <a href="index-2.html" class="brand-logo">
                <!-- <img class="logo-abbr" src="assets/backendassets/images/logo.png" alt="">
                <img class="logo-compact" src="assets/backendassets/images/logo-text.png" alt="">
                <img class="brand-title" src="assets/backendassets/images/logo-text.png" alt=""> -->

                GAS DELIVERY
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
	

        <!-- dashboard_top_bar -->
        @include('back_end.includes_backend.dashboard_top_bar')



        <!--**********************************
            Sidebar start
        ***********************************-->
        
        @include('back_end.includes_backend.sidebar')
        
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		<!--**********************************
            Content body start
        ***********************************-->

        @yield('content')
        
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="#" target="_blank">Ronald</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    
    @include('back_end.includes_backend.scripts')
	
	
</body>

</html>
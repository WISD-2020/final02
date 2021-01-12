<!-- Sidbar -->
<div id="sidebar">

    <div class="inner">

        <!-- Search Box -->


        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="/home">課表</a></li>
                <li><a href="{{route('student.leave')}}">申請請假</a></li>
                <li><a href="{{route('student.record')}}">課程出缺席狀況</a></li>
                <li><a href="https://www.ncut.edu.tw/">學校首頁</a></li>
                <li><a href="{{route('user.logout')}}">登出</a></li>
            </ul>
        </nav>
        <!-- Featured Posts -->
        <div class="featured-posts">
            <div class="heading">
                <h2>Featured Posts</h2>
            </div>
            <div class="owl-carousel owl-theme">
                <a href="#">
                    <div class="featured-item">
                        <img src="{{asset('images/featured_post_01.jpg')}}" alt="featured one">
                        <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                    </div>
                </a>
                <a href="#">
                    <div class="featured-item">
                        <img src="{{asset('images/featured_post_01.jpg')}}" alt="featured two">
                        <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                    </div>
                </a>
                <a href="#">
                    <div class="featured-item">
                        <img src="{{asset('images/featured_post_01.jpg')}}" alt="featured three">
                        <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">Copyright &copy; 2019 Company Name
                <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Template Mo</a></p>
        </footer>

    </div>
</div>

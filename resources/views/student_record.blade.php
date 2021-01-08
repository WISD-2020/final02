@extends('layouts.master')

@section('title','點名紀錄')

@section('content')
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="/home">學生點名系統</a>
              </div>
            </header>
            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <h1>學生出席紀錄查詢</h1></br></br>
{{--                    <p><strong>Ramayana</strong> is free Bootstrap 4 CSS template from templatemo website..</p>--}}
                  </div>
                </div>
              </div>
            </div>



            <!-- Tables -->
            <section class="tables">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>出席</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>日期</th>
                            <th>課程</th>
                            <th>星期-節次</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($students->attends as $attend)
                            @if($attend->truant=='曠課')
                                <tr>
                                    <td>{{$attend->classes->date}}</td>
                                    <td>{{$attend->classes->course->name}}</td>
                                    <td>{{$attend->classes->time}}</td>
                                    <td>{{$attend->truant}}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </section></br>
                  <h2>請假</h2></br>
                  <table>
                      <tr>
                          <th>日期</th>
                          <th>課程</th>
                          <th>星期-節次</th>
                      </tr>
                      @foreach($students->attends as $attend)
                          @if($attend->truant!='曠課')
                              <tr>
                                  <td>{{$attend->classes->date}}</td>
                                  <td>{{$attend->classes->course->name}}</td>
                                  <td>{{$attend->classes->time}}</td>
                                  <td>{{$attend->truant}}</td>
                              </tr>
                          @endif
                      @endforeach
                  </table>
          </div>
        </div>
      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
              <section id="search" class="alt">
                  <form method="get" action="#">
                      <input type="text" name="search" id="search" placeholder="Search..." />
                  </form>
              </section>

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

    </div>
</body>
@endsection




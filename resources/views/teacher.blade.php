@extends('layouts.master')

@section('title','老師首頁')

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
                      <a href="#">學生點名系統</a>
                  </div>
              </header>
            <!-- Top Image -->
            <section class="top-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <img src="{{asset('images/main-banner.jpg')}}" alt="">
                    <div class="down-content">

                        </br></br>
                        <h1>{{$teacher->name}}你好~</h1></br>
                      <h2>個人資料</h2>
                      </br>

                          <TABLE CELLPADDING=2 border=4 BORDERCOLORLIGHT="#FFD0D0" BORDERCOLORDARK="#A425B1">

                              <TR><TH>教師編號</TH><TD>{{$teacher->account}}</TD><TH>電子郵件</TH><TD>{{Auth::user()->email}}</TD>
                                 </TR>
{{--                              <TR><TH>姓名</TH><TD>李達夫--}}
{{--                                  </TD><TH>系別</TH><TD>資訊管理系</TD></TR>--}}
{{--                              <TR><TH>密碼</TH><TD>111--}}
{{--                                  </TD><TH>連絡電話</TH><TD>041532548</TD></TR>--}}
{{--                              <TR>--}}
{{--                                  <TH COLSPAN=1>出生日期</TH>--}}
{{--                                  <TD>1999/5/4</TD>--}}
{{--                                  <TH COLSPAN=1>地址</TH>--}}
{{--                                  <TD COLSPAN=1>北市南港路三段50巷號7號5F</TD>--}}
{{--                              </TR>--}}
                          </TABLE>
                        <!-- 顯示在瀏覽器上的文字 -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
              <!-- 顯示在瀏覽器上的文字 -->
              <table BORDER="2" align=center>
                  <h1>課表</h1>
                  <tr>
                      <td>節次/星期</td>
                      <td>星期一</td>
                      <td>星期二</td>
                      <td>星期三</td>
                      <td>星期四</td>
                      <td>星期五</td>
                  </tr>
                  <tr>
                      <td>第一節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                          @if($class->time=='1-1')
                                  {{$class->course->name}}</br>
                                      老師:{{$class->course->teacher->name}}</br>
                              地點:{{$class->course->location}}
                                  @endif
                                      @endforeach
                          @endforeach
                      </td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-1')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach  </td>
                      <td> @foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-1')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach </td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-1')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-1')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <tr>
                      <td>第二節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='1-2')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-2')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-2')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-2')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-2')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <tr>
                      <td>第三節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='1-3')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-3')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-3')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-3')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-3')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <tr>
                      <td>第四節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='1-4')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach </td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-4')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-4')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-4')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-4')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <tr>
                      <td>第五節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='1-5')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-5')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-5')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-5')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-5')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <tr>
                      <td>第六節</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='1-6')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='2-6')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='3-6')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='4-6')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                      <td>@foreach($courses as $course)
                              @foreach($course->classes as $class)
                                  @if($class->time=='5-6')
                          {{$class->course->name}}</br>
                          老師:{{$class->course->teacher->name}}</br>
                          地點:{{$class->course->location}}
                                  @endif
                              @endforeach
                          @endforeach</td>
                  </tr>
                  <td>第七節</td>
                  <td>@foreach($courses as $course)
                          @foreach($course->classes as $class)
                              @if($class->time=='1-7')
                      {{$class->course->name}}</br>
                      老師:{{$class->course->teacher->name}}</br>
                      地點:{{$class->course->location}}
                              @endif
                          @endforeach
                      @endforeach</td>
                  <td>@foreach($courses as $course)
                          @foreach($course->classes as $class)
                              @if($class->time=='2-7')
                      {{$class->course->name}}</br>
                      老師:{{$class->course->teacher->name}}</br>
                      地點:{{$class->course->location}}
                              @endif
                          @endforeach
                      @endforeach</td>
                  <td>@foreach($courses as $course)
                          @foreach($course->classes as $class)
                              @if($class->time=='3-7')
                      {{$class->course->name}}</br>
                      老師:{{$class->course->teacher->name}}</br>
                      地點:{{$class->course->location}}
                              @endif
                          @endforeach
                      @endforeach</td>
                  <td>@foreach($courses as $course)
                          @foreach($course->classes as $class)
                              @if($class->time=='4-7')
                      {{$class->course->name}}</br>
                      老師:{{$class->course->teacher->name}}</br>
                      地點:{{$class->course->location}}
                              @endif
                          @endforeach
                      @endforeach</td>
                  <td>@foreach($courses as $course)
                          @foreach($course->classes as $class)
                              @if($class->time=='5-7')
                      {{$class->course->name}}</br>
                      老師:{{$class->course->teacher->name}}</br>
                      地點:{{$class->course->location}}
                              @endif
                          @endforeach
                      @endforeach</td>
                  </tr>


              </table>


          </div>
        </div>
      <!-- Sidbar -->
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
                <li><a href="index">點名</a></li>
                <li><a href="simple_page.blade.php">審核請假</a></li>
                <li><a href="shortcodes.blade.php">課程出缺席狀況</a></li>
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





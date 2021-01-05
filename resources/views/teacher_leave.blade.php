@extends('layouts.master')

@section('title','審核請假    ')

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
            @if(!isset($id))
                <?php $id=1 ?>
            @endif
                <!-- Page Heading -->
                <div class="page-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>學生申請請假</h1></br></br>

                                {{--                    <p><strong>Ramayana</strong> is free Bootstrap 4 CSS template from templatemo website..</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i=0 ; ?>
            <?php $k=0 ; ?>
                <!-- Tables -->
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Tables</h2>
                                </div>
                                <div class="default-table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>請假日期</th>
                                            <th>星期-節次</th>
                                            <th>課程</th>
                                            <th>姓名</th>
                                            <th>請假類型</th>
                                            <th>原因</th>
                                            <th>審核</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($leaves as $leave)
                                            @if($leave->result=='未審核')
                                                <?php $i=$i+1; ?>
                                                @if($i>=(($id-1)*2+1))
                                                    <?php $k=$k+1;?>
                                                    @if($k<=2)
                                        <tr>
                                            <td>{{$leave->leave_date}}</td>
                                                <td>{{$leave->classes->time}}</td>
                                            <td>{{$leave->classes->course->name}}</td>
                                            <td>{{$leave->student->name}}</td>
                                            <td>{{$leave->type}}</td>
                                            <td>{{$leave->reason}}</td>
                                            <td>
                                                <a href="{{route('teacher.leave.pass',['leave'=>$leave->id])}}">
                                                    通過</a>
                                                /
                                                <a href="{{route('teacher.leave.fail',['leave'=>$leave->id])}}">
                                                    不通過</a>
                                            </td>
                                        </tr>
                                                    @endif
                                                @endif
                                        @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <ul class="table-pagination">
                                        <?php  $i=ceil($i/2); ?>
                                        <ul class="table-pagination">
                                            @if($id-1>=1)
                                                <li><a href="{{route('teacher.leave', ['id'=>$id-1])}}">前一頁</a></li>
                                            @endif
                                            @if($id-1<1)
                                                <li><a href="{{route('teacher.leave', ['id'=>1])}}">前一頁</a></li>
                                            @endif
                                            @for($j=1;$j<=$i;$j++)
                                                <li><a href="{{route('teacher.leave', ['id'=>$j])}}">{{$j}}</a></li>
                                            @endfor
                                            @if($id+1<=$i)
                                                <li><a href="{{route('teacher.leave', ['id'=>$id+1])}}">下一頁</a></li>
                                            @endif
                                            @if($id+1>$i)
                                                <li><a href="{{route('teacher.leave', ['id'=>$i])}}">下一頁</a></li>
                                            @endif
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Forms -->

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
                        <li><a href="{{route('teacher.leave')}}">審核請假</a></li>
                        <li><a href="{{route('teacher.record')}}">課程出缺席狀況</a></li>
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




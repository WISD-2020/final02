@extends('layouts.master')

@section('title','學生首頁')

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
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <section class="top-image">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('images/main-banner.jpg')}}" alt="">
                                <div class="down-content">

                                    </br></br>
                                    <h1>{{$student->name}}你好~</h1></br>
                                    <h2>個人資料</h2>
                                    </br>

                                    <TABLE CELLPADDING=2 border=4 BORDERCOLORLIGHT="#FFD0D0" BORDERCOLORDARK="#A425B1">

                                        <TR>
                                            <TH>學生編號</TH>
                                            <TD>{{$student->student_id}}</TD>
                                            <TH>電子郵件</TH>
                                            <TD>{{Auth::user()->email}}</TD>
                                        </TR>
                                        <TR>
                                            <TH>姓名</TH>
                                            <TD>{{$student->name}}</TD>
                                            <TH>系別</TH>
                                            <TD>{{$student->faculty}}</TD>
                                        </TR>
                                        <TR>
                                            <TH>連絡電話</TH>
                                            <TD>{{$student->phone}}</TD>
                                        </TR>
                                        <TR>
                                            <TH COLSPAN=1>出生日期</TH>
                                            <TD>{{$student->birth}}</TD>
                                            <TH COLSPAN=1>地址</TH>
                                            <TD COLSPAN=1>{{$student->address}}</TD>
                                        </TR>
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
                        <td>
                            @foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-1')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @break
                            @endforeach
                            @endforeach
                        </td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-1')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach  </td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-1')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach </td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-1')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-1')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td>第二節</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-2')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-2')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-2')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-2')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-2')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td>第三節</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-3')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-3')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-3')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-3')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-3')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td>第四節</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-4')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-4')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-4')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-4')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-4')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td>第五節</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-5')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-5')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>
                            @foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-5')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach
                        </td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-5')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-5')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <tr>
                        <td>第六節</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='1-6')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='2-6')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='3-6')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='4-6')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                        <td>@foreach($takes as $take)
                            @foreach($take->course->classes as $class)
                            @if($class->time=='5-6')
                            {{$class->course->name}}</br>
                            老師:{{$class->course->teacher->name}}</br>
                            地點:{{$class->course->location}}
                            <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                            @endif
                            @endforeach
                            @endforeach</td>
                    </tr>
                    <td>第七節</td>
                    <td>@foreach($takes as $take)
                        @foreach($take->course->classes as $class)
                        @if($class->time=='1-7')
                        {{$class->course->name}}</br>
                        老師:{{$class->course->teacher->name}}</br>
                        地點:{{$class->course->location}}
                        <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                        @endif
                        @endforeach
                        @endforeach</td>
                    <td>@foreach($takes as $take)
                        @foreach($take->course->classes as $class)
                        @if($class->time=='2-7')
                        {{$class->course->name}}</br>
                        老師:{{$class->course->teacher->name}}</br>
                        地點:{{$class->course->location}}
                        <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                        @endif
                        @endforeach
                        @endforeach</td>
                    <td>@foreach($takes as $take)
                        @foreach($take->course->classes as $class)
                        @if($class->time=='3-7')
                        {{$class->course->name}}</br>
                        老師:{{$class->course->teacher->name}}</br>
                        地點:{{$class->course->location}}
                        <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                        @endif
                        @endforeach
                        @endforeach</td>
                    <td>@foreach($takes as $take)
                        @foreach($take->course->classes as $class)
                        @if($class->time=='4-7')
                        {{$class->course->name}}</br>
                        老師:{{$class->course->teacher->name}}</br>
                        地點:{{$class->course->location}}
                        <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                        @endif
                        @endforeach
                        @endforeach</td>
                    <td>@foreach($takes as $take)
                        @foreach($take->course->classes as $class)
                        @if($class->time=='5-7')
                        {{$class->course->name}}</br>
                        老師:{{$class->course->teacher->name}}</br>
                        地點:{{$class->course->location}}
                        <a href="{{route('student.attend',['time'=>$class->time,'course'=>$class->course->name])}}">點名</a>
                        @endif
                        @endforeach
                        @endforeach</td>
                    </tr>
                </table>

            </div>
        </div>
        @include('layouts.sidebar')
    </div>
    </body>
@endsection





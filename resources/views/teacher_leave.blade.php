@extends('layouts.master')

@section('title','審核請假')

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
                                <h1>審核學生請假</h1></br></br>

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
                                    <h2>學生申請</h2>
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
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Forms -->

            </div>
        </div>
        @include('layouts.teacher_sidebar')
    </div>
    </body>
@endsection




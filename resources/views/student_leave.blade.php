@extends('layouts.master')

@section('title','申請請假')

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
                                <h1>申請請假</h1></br></br>

                                {{--                    <p><strong>Ramayana</strong> is free Bootstrap 4 CSS template from templatemo website..</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tables -->

                <!-- Forms -->
                <form action="{{route('student.period.show')}}" method="get">
                    {{ csrf_field() }}
                    <label for="course">課程：</label>
                    <select id="course" name="course" class="form-control" style="width:150px;display:inline">
                        <option value="" disabled selected hidden>請選擇課程</option>
                        @foreach($takes as $take)
                            <option value="{{$take->course->id}}">{{$take->course->name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="leave_date">請假日期：</label>
                        <input id="leave_date" name="leave_date" type="date">
                    </div>
                    <button type="submit" name="search" style="display:inline">查詢</button>
                </form>

                <form action="{{route('student.store')}}" method="POST" role="form">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="period">星期-節次：</label>
                        <select id="period" name="period" class="form-control" style="width:150px">
                            @if (isset($classes))
                                @foreach($classes as $class)
                                    <option value="{{$class->time}}">{{$class->time}}</option>
                                @endforeach
                            @endif
                        </select>

                        <label for="type">請假類型：</label>
                        <select id="type" name="type" class="form-control" style="width:100px">
                            <option value="病假">病假</option>
                            <option value="事假">事假</option>
                            <option value="公假">公假</option>
                        </select>
                        <label for="reason">原因：</label>
                        <textarea id="reason" name="reason" class="form-control"></textarea>
                    </div>
                    @if(isset($date))
                    <input type="hidden" name="date" value={{$date}}>
                    <input type="hidden" name="course" value={{$course->name}}>
                    @endif
                    <input  type="submit" name="submit" value="送出">
                </form>
                <!-- Tables -->
                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>申請請假紀錄</h2>
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
                                        @foreach($students->leaves as $leave)
                                            <tr>
                                                <td>{{$leave->leave_date}}</td>
                                                <td>{{$leave->classes->time}}</td>
                                                <td>{{$leave->classes->course->name}}</td>
                                                <td>{{$leave->student->name}}</td>
                                                <td>{{$leave->type}}</td>
                                                <td>{{$leave->reason}}</td>
                                                <td>{{$leave->result}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('layouts.sidebar')
    </div>
    </body>
@endsection




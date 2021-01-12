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
        @include('layouts.sidebar')
    </div>
</body>
@endsection




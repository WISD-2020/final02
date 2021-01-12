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
           @if(!isset($id))
           <?php $id=1 ?>
            @endif
            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <h1>學生出席紀錄查詢</h1></br></br>
                      <form action="{{route('teacher.record.show', ['id'=>$id])}}" method="GET">
                          {{ csrf_field() }}
                          <font size="5">課堂:
                          <select name="course">
                              <option value="" disabled selected hidden>請選擇課程</option>
                              @foreach($courses as $course)
                              　<option value="{{$course->id}}">{{$course->name}}</option>
                              @endforeach
                          </select>
                          <button type="submit">查詢</button></font>
                      </form>
{{--                    <p><strong>Ramayana</strong> is free Bootstrap 4 CSS template from templatemo website..</p>--}}
                  </div>
                </div>
              </div>
            </div>


          @if (isset($classes))
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
                              <th>姓名</th>
                            <th>日期</th>
                            <th>課程</th>
                            <th>星期-節次</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($classes as $class)
                             @foreach($class->attends as $attend)
                                 @if($attend->truant=='曠課')
                             <?php $i=$i+1; ?>
                             @if($i>=(($id-1)*2+1))
                                 <?php $k=$k+1;?>
                              @if($k<=2)
                           <tr>
                            <td>{{$attend->student->name}}</td>
                            <td>{{$attend->classes->date}}</td>
                              <td>{{$attend->classes->course->name}}</td>
                              <td>{{$attend->classes->time}}</td>
                              <td>{{$attend->truant}}</td>
                          </tr>
                              @endif
                           @endif
                                 @endif
                        @endforeach
                         @endforeach
                        </tbody>
                      </table>
                        <?php  $i=ceil($i/2); ?>
                      <ul class="table-pagination">
                          @if($id-1>=1)
                        <li><a href="{{route('teacher.record.show', ['id'=>$id-1])}}">前一頁</a></li>
                          @endif
                              @if($id-1<1)
                                  <li><a href="{{route('teacher.record.show', ['id'=>1])}}">前一頁</a></li>
                              @endif
                 @for($j=1;$j<=$i;$j++)
                              <li><a href="{{route('teacher.record.show', ['id'=>$j])}}">{{$j}}</a></li>
                          @endfor
                              @if($id+1<=$i)
                        <li><a href="{{route('teacher.record.show', ['id'=>$id+1])}}">下一頁</a></li>
                              @endif
                              @if($id+1>$i)
                                  <li><a href="{{route('teacher.record.show', ['id'=>$i])}}">下一頁</a></li>
                              @endif
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section></br>
              @endif
              @if (isset($classes))
                  <h2>請假</h2></br>
                  <table>
                      <tr>
                          <th>姓名</th>
                          <th>日期</th>
                          <th>課程</th>
                          <th>星期-節次</th>
                      </tr>
                      @foreach($classes as $class)
                          @foreach($class->attends as $attend)
                              @if($attend->truant!='曠課')
                                  <tr>
                                      <td>{{$attend->student->name}}</td>
                                      <td>{{$attend->classes->date}}</td>
                                      <td>{{$attend->classes->course->name}}</td>
                                      <td>{{$attend->classes->time}}</td>
                                      <td>{{$attend->truant}}</td>
                                  </tr>
                              @endif
                          @endforeach
                      @endforeach
                  </table>
              @endif
          </div>
        </div>
        @include('layouts.sidebar')
    </div>
</body>
@endsection




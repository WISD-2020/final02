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
                      <form action="teacher/record/search" method="GET">
                          <font size="5">課堂:
                          <select name="Course">
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
                            <th>Product no.</th>
                            <th>Description</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#1011</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$20.50</td>
                          </tr>
                          <tr>
                            <td>#1012</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$20.50</td>
                          </tr>
                          <tr>
                            <td>#1013</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$20.50</td>
                          </tr>
                          <tr>
                            <td>#1014</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$20.50</td>
                          </tr>
                          <tr>
                            <td>#1015</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$20.50</td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="table-pagination">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                    <div class="alternate-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Product no.</th>
                            <th>Description</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#2005</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2006</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2007</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2008</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                          <tr>
                            <td>#2008</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>$19.95</td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="table-pagination">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active"><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Forms -->
            <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Forms</h2>
                    </div>
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <select name="category" id="category">
                            <option value="categories" selected>Select Category</option>
                            <option value="Featured">General</option>
                            <option value="Newest">Specific</option>
                            <option value="Low Price">Technical</option>
                            <option value="High Price">Application</option>
                          </select>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-small" type="checkbox" id="demo-priority-small" value="small">
                            <label for="demo-priority-small">Small</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-medium" type="checkbox" id="demo-priority-medium" value="medium">
                            <label for="demo-priority-medium">Medium</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="radio-item">
                            <input name="demo-large" type="checkbox" id="demo-priority-large" value="large" >
                            <label for="demo-priority-large">Large</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-small" value="16-20" checked>
                            <label for="demo-small">Age: 16 - 20</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-medium" value="21-30">
                            <label for="demo-medium">Age: 21 - 30</label>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <div class="circle-item">
                            <input name="demo-priority" type="radio" id="demo-old" value="30+">
                            <label for="demo-old">Age: 30+</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>


            <!-- Tables -->
            <section class="buttons">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Buttons</h2>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="filled-rectangle-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-rectangle-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-radius-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-radius-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-rounded-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-rounded-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="filled-icon-button">
                          <a href="#"><i class="fa fa-check"></i>Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-icon-button">
                          <a href="#"><i class="fa fa-check"></i>Border Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="filled-rectangle-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="border-rectangle-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="filled-rounded-button">
                          <a href="#">Filled Button</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="border-rounded-button">
                          <a href="#">Border Button</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

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
                      <li><a href="simple_page">審核請假</a></li>
                      <li><a href="teacher/record">課程出缺席狀況</a></li>
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




<!DOCTYPE html>
<html lang="en">

<head>


    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <!--====== Title ======-->
    <title>manage roles</title>

    <!--====== Favicon Icon ======-->
    <link rel="icon" href="data:,">



    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!--====== Material Icons ======-->
    <link rel="stylesheet" href="{{asset('assets/iconfont/material-icons.css')}}">

    <!-- dataTables.bootstrap4.min css-->
    <link href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" media="screen">




    <!-- animate css-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" media="screen">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!--====== CkEditors js ======-->
    <link rel="stylesheet" href="{{asset('assets/js/ckeditor.js')}}">




</head>
<body>

<!-- Prealoder -->
<div class="spinner_body">
   <div class="spinner"></div>
</div>

<!-- Prealoder -->

<!--====== Start Header Section======-->
<header>
    <div class="header">


      <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-bg">

          <div class="brand-logo">
            <a class="navbar-brand" href="index.html" id="menu-action">
            </a>
            <div id="nav-toggle">
                <div class="cta">
                    <div class="toggle-btn type1"></div>
                </div>
            </div>
          </div>
        <!--   For Toggle Mobile Nav icon -->



              <!--   For Toggle Mobile Nav Icon -->

          <div class="collapse navbar-collapse pr-3" id="#">

          </div>


        </nav>

      </div>
    <!--   For Toggle Mobile Nav -->

    <!--   For Toggle Mobile Nav -->
    </div>
</header>
<!--====== End Header Section======-->

<!--====== Start Left Sidebar Section======-->
  <section id="left-sidebar-area">
  <!--   Left Sidebar  -->
        <div id="left-sidebar-section">


            <aside>
              <div class="left-sidebar" id="wrapper-sidebar">
                <ul>
                  <li><a href="{{route('index')}}"><i class="material-icons">home</i>Dashboard</a></li>
                  <li><a href="{{route('users')}}"><i class="material-icons">supervisor_account</i>Users</a></li>
                  <li><a href="{{route('role')}}"><i class="material-icons">perm_data_setting</i>Role</a></li>
                    <li><a href="{{ route('admin.index') }}" class="btn btn-danger">
                            Exit to Admin Dashboard
                        </a>
                    </li>
                  </ul>
              </div>
            </aside>
        </div>
  <!--   Left Sidebar  -->
  </section>
<!--====== End Left Sidebar Section======-->


<!--====== Start Main Wrapper Section======-->
<section class="d-flex" id="wrapper">



    <div class="page-content-wrapper">
       <!--  Header BreadCrumb -->
        <div class="content-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="material-icons">home</i>Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Roles</li>
              </ol>
            </nav>
            <div class="create-item">
  <!-- Register Staff Button -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registerStaffModal">
    Register Staff
</button>

            </div>
        </div>
          <!--  Header BreadCrumb -->
          <!--  main-content -->
        <div class="main-content">



        <!-- Users DataTable-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card bg-white">
                    <div class="card-body mt-3">
                      <div class="table-responsive">
                          <table id="roleTable" class="table table-striped table-borderless" style="width:100%">
                            <thead class="table-warning">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-capitalize">{{ $user->usertype }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
                      </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- Users DataTable-->






        </div>
        <!--  main-content -->
    </div>

</section>

<!--====== End Main Wrapper Section======-->




<!--====== JQuery from CDN ======-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>

<!--====== dataTables js ======-->
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>

<!--====== Chart.min js ======-->
<script src="{{asset('assets/js/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/chartfunction.js')}}"></script>

<!--====== wow.min js ======-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--====== Main js ======-->
<script src="{{asset('assets/js/script.js')}}"></script>

    <script>
        var color = Chart.helpers.color;
        function createConfig(colorName) {
            return {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My First dataset',
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                        backgroundColor: color(window.chartColors[colorName]).alpha(0.5).rgbString(),
                        borderColor: window.chartColors[colorName],
                        borderWidth: 1,
                        pointStyle: 'rectRot',
                        pointRadius: 5,
                        pointBorderColor: 'rgb(0, 0, 0)'
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        labels: {
                            usePointStyle: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Normal Legend'
                    }
                }
            };
        }

        function createPointStyleConfig(colorName) {
            var config = createConfig(colorName);
            config.options.legend.labels.usePointStyle = true;
            config.options.title.text = 'Point Style Legend';
            return config;
        }

        window.onload = function() {
            [{
                id: 'chart-legend-normal',
                config: createConfig('red')
            }, {
                id: 'chart-legend-pointstyle',
                config: createPointStyleConfig('blue')
            }].forEach(function(details) {
                var ctx = document.getElementById(details.id).getContext('2d');
                new Chart(ctx, details.config);
            });
        };
    </script>
<!-- Register Staff Button -->
<button type="button" class="btn btn-warning text-white mb-3" data-bs-toggle="modal" data-bs-target="#registerStaffModal">
    Register Staff
</button>

<!-- Modal Structure -->
<div class="modal fade" id="registerStaffModal" tabindex="-1" aria-labelledby="registerStaffModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="registerStaffModalLabel">Register Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('admin.store.staff') }}">

        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name</label> 
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-warning text-white">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>

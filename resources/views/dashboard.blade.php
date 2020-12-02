@extends('templates.master')

@section('content')
       

    <div class="content-wrapper">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item active" aria-current="page"><i class="icon-location-pin text-success"></i> Lokasi = Gedung B</li>
            </ol>
        </nav>
        <div class="row mb-3">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="fa fa-thermometer-1 icon-lg text-success"></i>
                    <div class="ml-3">
                      <p class="mb-0">Suhu Reaktor</p>
                      <h6>30 &#8451;</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="fa fa-flask icon-lg text-warning"></i>
                    <div class="ml-3">
                      <p class="mb-0">Volume Biogas</p>
                      <h6>48 Lt</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="fa fa-adjust icon-lg text-info"></i>
                    <div class="ml-3">
                      <p class="mb-0">Tekanan reaktor Biogas</p>
                      <h6>1 atm</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="fa fa-free-code-camp icon-lg text-danger"></i>
                    <div class="ml-3">
                      <p class="mb-0">Kondisi Biogas</p>
                      <h6>Tidak Normal</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="fa fa-thermometer-1 icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">Suhu R.Sistem</p>
                      <h6>25 &#8451;</h6>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                      <i class="fa fa-minus-circle icon-lg text-danger"></i>
                      <div class="ml-3">
                        <p class="mb-0">Resiko Kebakaran</p>
                        <h6>Berbahaya</h6>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center text-disabled">Grafik Sensor</h2>
                  <hr>
                  <div class="row mt-3">
                    <div class="col-lg-4 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Pilih Grafik</h4>
                          <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Sensor
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Sensor Suhu Reaktor</a>
                              <a class="dropdown-item" href="#">Sensor Volume Biogas</a>
                              <a class="dropdown-item" href="#">Sensor Tekanan reaktor Biogas</a>
                              <a class="dropdown-item" href="#">Sensor Suhu Kolektor</a>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Grafik Sensor Suhu Reaktor</h4>
                          <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

@endsection

@section('js')
    <script>
        $(function(){
            $("#dashboard").addClass('active');
        });

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2020-12-6', '2020-12-6', '2020-12-6', '2020-12-6', '2020-12-6', '2020-12-6'],
                datasets: [{
                    label: 'sensor suhu reaktor',
                    data: [30, 29, 31, 30, 32, 30],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

  
    </script>
@endsection



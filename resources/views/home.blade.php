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
                    <i class="fa fa-thermometer-1 icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">Suhu R.Sistem</p>
                      <h6>25 &#8451;</h6>
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
                        <p class="mb-0">Kondisi Gas</p>
                        <h6>Aman</h6>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-lg">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center text-disabled">Grafik Sensor</h2>
                  <hr>
                  <div class="row mt-3">               
                    <div class="col-lg grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title" id="title">Grafik Sensor Suhu Reaktor</h4>
                          <canvas id="myChart"></canvas>  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">               
                    <div class="col-lg grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title" id="title">Grafik Volume Biogas</h4>
                          <canvas id="vChart"></canvas>  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">               
                    <div class="col-lg grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title" id="title">Grafik Tekanan Reaktor Biogas</h4>
                          <canvas id="tChart"></canvas>  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">               
                    <div class="col-lg grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title" id="title">Grafik Suhu Sistem</h4>
                          <canvas id="susistemChart"></canvas>  
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
      var ctx = document.getElementById('myChart');
      ctx.height = 170;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [],
                datasets: [{
                label: 'Grafik Sensor',
                data: [],
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

          var ctx1 = document.getElementById('vChart');
          ctx1.height = 170;
          var vChart = new Chart(ctx1, {
            type: 'line',
            data: {
                    labels: [],
                    datasets: [{
                    label: 'Grafik Sensor',
                    data: [],
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
          
          var ctx2 = document.getElementById('tChart');
          ctx2.height = 170;
          var tChart = new Chart(ctx2, {
            type: 'line',
            data: {
                    labels: [],
                    datasets: [{
                    label: 'Grafik Sensor',
                    data: [],
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

          var ctx3 = document.getElementById('susistemChart');
          ctx3.height = 170;
          var sChart = new Chart(ctx3, {
            type: 'line',
            data: {
                    labels: [],
                    datasets: [{
                    label: 'Grafik Sensor',
                    data: [],
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

            //ajax request 
            var rsuhu = setInterval(RsuhuChart, 5000);
            function RsuhuChart()
              {
                $.ajax({
                  url: "{{ route('api.chart') }}",
                  type: 'GET',
                  dataType: 'json',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                    myChart.data.labels = data.labels;
                    myChart.data.datasets[0].data = data.data;
                    myChart.update();
                  },
                  error: function(data){
                    console.log(data);
                  }
                });
            }

            var volume = setInterval(volumeChart, 5000);
            function volumeChart()
              {
                $.ajax({
                  url: "{{ route('api.cjarak') }}",
                  type: 'GET',
                  dataType: 'json',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                   vChart.data.labels = data.labels;
                   vChart.data.datasets[0].data = data.data;
                   vChart.update();
                  },
                  error: function(data){
                    console.log(data);
                  }
                });
            }

            var bmp = setInterval(tekanan, 5000);
            function tekanan()
              {
                $.ajax({
                  url: "{{ route('api.cbmp') }}",
                  type: 'GET',
                  dataType: 'json',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                   tChart.data.labels = data.labels;
                   tChart.data.datasets[0].data = data.data;
                   tChart.update();
                  },
                  error: function(data){
                    console.log(data);
                  }
                });
            }
        
            var susistem = setInterval(susistem, 5000);
            function susistem()
              {
                $.ajax({
                  url: "{{ route('api.csusistem') }}",
                  type: 'GET',
                  dataType: 'json',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(data) {
                    sChart.data.labels = data.labels;
                    sChart.data.datasets[0].data = data.data;
                    sChart.update();
                  },
                  error: function(data){
                    console.log(data);
                  }
                });
            }
         
           
      
  
    </script>
@endsection



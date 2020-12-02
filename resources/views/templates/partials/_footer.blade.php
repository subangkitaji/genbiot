<!-- plugins:js -->
<script src="{{ asset('public/assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/assets/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('public/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- endinject -->




 <!-- Custom js for this page-->
 <script src="{{ asset('public/assets/js/bootstrap-datepicker.min.js')}}"></script>
 <script src="{{ asset('public/assets/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
 <script src="{{asset('public/assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- End plugin js for this page-->

<!-- Custom js for this page-->
@yield('js')

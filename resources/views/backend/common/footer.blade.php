  <!-- footer start-->
  <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright text-start">
                <p class="mb-0">Copyright 2023 Nishan All rights reserved.</p>
            </div>
            <div class="col-md-6 pull-right text-end">
                <p class=" mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
</div>
</div>



<!-- latest jquery-->
<script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('backend/assets/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('backend/assets/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('backend/assets/js/chart/chartjs/chart.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backend/assets/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('backend/assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('backend/assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('backend/assets/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{asset('backend/assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('backend/assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('backend/assets/js/counter/counter-custom.js')}}"></script>

<!--peity chart js-->
<script src="{{asset('backend/assets/js/chart/peity-chart/peity.jquery.js')}}"></script>

<!-- Apex Chart Js -->
<script src="https://cdn.js')}}delivr.net/npm/apexcharts"></script>

<!--sparkline chart js-->
<script src="{{asset('backend/assets/js/chart/sparkline/sparkline.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('backend/assets/js/admin-customizer.js')}}"></script>

<!--dashboard custom js-->
<script src="{{asset('backend/assets/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('backend/assets/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('backend/assets/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backend/assets/js/lazysizes.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>\
@if(Session::has('message'))

<script>
    toastr.options={
        "progressBar":true,
        "closeButton":true,
    }
    
    toastr.success('{{Session::get('message')}}','Success!',{timeOut:1200});
</script>



@endif
@if(Session::has('error'))

<script>
    toastr.options={
        "progressBar":true,
        "closeButton":true,
    }
    
    toastr.error('{{Session::get('error')}}','Error!',{timeOut:1200});
</script>



@endif


<!--script admin-->
<script src="{{asset('backend/assets/js/admin-script.js')}}"></script>

</body>

</html>
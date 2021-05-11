   <!-- END: Content-->

   <div class="sidenav-overlay"></div>
   <div class="drag-target"></div>

   <!-- BEGIN: Footer-->
   <footer class="footer footer-static footer-light">
       <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
           <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
       </p>
   </footer>
   <!-- END: Footer-->


   <!-- BEGIN: Vendor JS-->
   <script src="{{asset('public/assets/app-assets/vendors/js/vendors.min.js')}}"></script>
   <!-- BEGIN Vendor JS-->
   <script src="{{asset('public/assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
   <!-- BEGIN: Page Vendor JS-->
   <script src="{{asset('public/assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
   <!-- END: Page Vendor JS-->

   <!-- BEGIN: Theme JS-->
   <script src="{{asset('public/assets/app-assets/js/core/app-menu.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/core/app.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/scripts/components.js')}}"></script>
   <!-- END: Theme JS-->
   <script src="{{asset('public/assets/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>

   <!-- BEGIN: Page JS-->
   <script src="{{asset('public/assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
   <!-- END: Page JS-->
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/scripts/datatables/datatable.js')}}"></script>
   {{-- <script src="{{asset('public/assets/assets/js/dataTables.responsive.min.js')}}"></script> --}}
   <script src="{{asset('public/assets/app-assets/js/core/app-menu.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/core/app.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/scripts/components.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/js/scripts/pages/user-profile.js')}}"></script>
   <script src="{{asset('public/assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

</body>
<!-- END: Body-->

</html>

 
 <script>
 
     //add lead
     $("#addLead").click(function(e) {
        
         e.preventDefault();

         $.ajax({
             type: "POST",
             url: "{{ route('admin.addlead') }}",
             data: $('#addleadform').serialize(),
             success: function(data) {
                 if (data.status) {
                    
                 } else {

                 }

             }
         }); // submitting the form when user press yes
     });

     



 </script>
 @yield('script')
 </body>

 </html>

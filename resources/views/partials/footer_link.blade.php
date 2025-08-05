    <!-- jQuery library js -->
    <script src="{{URL::to('blog/assets/js/lib/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{URL::to('blog/assets/js/lib/bootstrap.bundle.min.js')}}"></script>
    <!-- Apex Chart js -->
    <script src="{{URL::to('blog/assets/js/lib/apexcharts.min.js')}}"></script>
    <!-- Data Table js -->
    <script src="{{URL::to('blog/assets/js/lib/dataTables.min.js')}}"></script>
    <!-- Iconify Font js -->
    <script src="{{URL::to('blog/assets/js/lib/iconify-icon.min.js')}}"></script>
    <!-- jQuery UI js -->
    <script src="{{URL::to('blog/assets/js/lib/jquery-ui.min.js')}}"></script>
    <!-- Vector Map js -->
    <script src="{{URL::to('blog/assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <script src="{{URL::to('blog/assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- Popup js -->
    <script src="{{URL::to('blog/assets/js/lib/magnifc-popup.min.js')}}"></script>
    <!-- Slick Slider js -->
    <script src="{{URL::to('blog/assets/js/lib/slick.min.js')}}"></script>
    <!-- prism js -->
    <script src="{{URL::to('blog/assets/js/lib/prism.js')}}"></script>
    <!-- file upload js -->
    <script src="{{URL::to('blog/assets/js/lib/file-upload.js')}}"></script>
    <!-- audioplayer -->
    <script src="{{URL::to('blog/assets/js/lib/audioplayer.js')}}"></script>

    <!-- main js -->
    <script src="{{URL::to('blog/assets/js/app.js')}}"></script>

    <script src="{{URL::to('blog/assets/js/homeOneChart.js')}}"></script>

    <script>
        let table = new DataTable('#dataTable');
    </script>

    <script>
        // ================== Image Upload Js Start ===========================
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
        // ================== Image Upload Js End ===========================
    </script>
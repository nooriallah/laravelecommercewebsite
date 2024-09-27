<script src="/backend/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/backend/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/backend/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/backend/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/backend/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="/backend/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
{{-- bootstrap 5 --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" --}}
{{--        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" --}}
{{--        crossorigin="anonymous"></script> --}}
<!-- inject:js -->
<script src="/backend/assets/js/off-canvas.js"></script>
<script src="/backend/assets/js/hoverable-collapse.js"></script>
<script src="/backend/assets/js/misc.js"></script>
<script src="/backend/assets/js/settings.js"></script>
<script src="/backend/assets/js/todolist.js"></script>
<!-- endinject -->

{{-- Sweat alerts --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Custom js for this page -->
<script src="/backend/assets/js/dashboard.js"></script>

{{--  CKeditor  --}}
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}

<!-- End custom js for this page -->


<script>
    CKEDITOR.replace('description');



    const confirmFunc = (evt) => {

        evt.preventDefault()

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>

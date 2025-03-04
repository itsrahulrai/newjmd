<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Laravel Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin, admin dashboard template, bootstrap 5, dashboard, laravel, laravel admin, laravel admin panel, laravel admin template, laravel blade, laravel dashboard, laravel dashboard template, laravel mvc, laravel php, laravel ui template, ui kit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TITLE -->
    <title>@yield('title') </title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="{{ asset('assets/admin/css/sidemenu.css') }}" rel="stylesheet" id="sidemenu-theme">

    <!--C3 CHARTS CSS -->
    <link href="{{ asset('assets/admin/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/admin/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/admin/plugins/icons/icons.css') }}" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="{{ asset('assets/admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet" />

    <!-- TABS STYLES -->
    <link href="{{ asset('assets/admin/plugins/tabs/tabs.css') }}" rel="stylesheet" />


    <!-- FORN WIZARD CSS -->
    <link href="{{ asset('assets/admin/plugins/formwizard/smart_wizard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/formwizard/smart_wizard_theme_arrows.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/formwizard/smart_wizard_theme_circles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/formwizard/smart_wizard_theme_dots.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/forn-wizard/css/demo.css') }}" rel="stylesheet">


    <!-- SELECT2 CSS -->
    <link href="{{ asset('assets/admin/plugins/select2/select2.min.css') }}" rel="stylesheet" />



    <!-- DATA TABLE CSS -->
    <link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet" />



    <!-- ACCORDION CSS -->
    <link href="{{ asset('assets/admin/plugins/accordion/accordion.css') }}" rel="stylesheet" />


    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assets/admin/colors/color1.css') }}" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets/admin/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/switcher/demo.css') }}" rel="stylesheet" />

    <!-- Include Dropify CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
    <!-- Include Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   

    <!-- GALLERY CSS -->
    <link href="{{ asset('assets/admin/plugins/gallery/gallery.css') }}" rel="stylesheet">

    <!-- flatpickr CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



 <!-- summernote CSS -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

    <!-- Dropify text small  -->
    <style>
        .dropify-message p {
            margin: 5px 0 0 0;
            font-size: 14px !important;
        }
    </style>

    @stack('style')
</head>

<body class="app sidebar-mini">




    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/admin/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            @include('admin.includes.sidebar')
            <!--/APP-SIDEBAR-->
            <!-- Mobile Header -->
            @include('admin.includes.header')
            <!-- /Mobile Header -->
            <!--app-content open-->
            <div class="app-content">
                @yield('content')

            </div>
            <!-- CONTAINER END -->
        </div>


        <!-- FOOTER -->
        @include('admin.includes.footer')
        <!-- FOOTER CLOSED -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>


    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/admin/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/admin/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/admin/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/admin/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/p-scroll/pscroll-1.js') }}"></script>


    <!--- TABS JS -->
    <script src="{{ asset('assets/admin/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/tabs/tab-content.js') }}"></script>

    <!-- FORM WIZARD JS-->
    <script src="{{ asset('assets/admin/plugins/formwizard/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/formwizard/fromwizard.js') }}"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="{{ asset('assets/admin/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/parsleyjs/parsley.min.js') }}"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->
    <script src="{{ asset('assets/admin/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/form-wizard.js') }}"></script>


    <!-- CHARTJS CHART JS-->
    <script src="{{ asset('assets/admin/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chart/utils.js') }}"></script>



    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets/admin/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/admin/plugins/select2/select2.full.min.js') }}"></script>


    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/table-data.js') }}"></script>


    <!-- ECHART JS-->
    <script src="{{ asset('assets/admin/plugins/echarts/echarts.js') }}"></script>

    <!-- APEXCHART JS -->
    <script src="{{ asset('assets/admin/js/apexcharts.js') }}"></script>

    <!-- INDEX JS -->
    <script src="{{ asset('assets/admin/js/index1.js') }}"></script>

    <!-- ACCORDION JS -->
    <script src="{{ asset('assets/admin/plugins/accordion/accordion.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/accordion/accordion.js') }}"></script>


    <!-- GALLERY JS -->
    <script src="{{ asset('assets/admin/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lightgallery-1.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/gallery/lg-share.js') }}"></script>


    <!-- CUSTOM JS-->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jshelper.js') }}"></script>


    {{-- summernote --}}



    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets/admin/switcher/js/switcher.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.delete-item', event => {
                event.preventDefault();

                const $row = $(event.currentTarget).closest('tr');
                const deleteUrl = $(event.currentTarget).attr('href');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#F72B50',
                    cancelButtonColor: '#0E8A74',
                    confirmButtonText: "Yes, delete it!"
                }).then(result => {
                    if (result.isConfirmed) {
                        // Send an AJAX request to delete the item from the server
                        $.ajax({
                            type: 'POST',
                            url: deleteUrl,
                            data: {
                                _method: 'DELETE', // Include the method as hidden input
                            },
                            success: data => {
                                const {
                                    status,
                                    message
                                } = data;
                                const icon = status === 'success' ? 'success' : 'error';

                                Swal.fire({
                                    title: status === 'success' ? 'Deleted!' :
                                        'Error!',
                                    text: message,
                                    icon: icon
                                });

                                // If deletion is successful, remove the row from the table
                                if (status === 'success') {
                                    $row.remove();
                                }
                            },
                            error: (xhr, status, error) => {
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>

    <script>
        @if ($errors->any())
            let errorMessages = "";
            @foreach ($errors->all() as $error)
                errorMessages += "{{ $error }}\n";
            @endforeach
            Swal.fire({
                icon: 'error',
                title: 'Validation Errors',
                text: errorMessages,
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    <!-- Include Dropify JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        function deleteConfirm() {
            return confirm('Are you sure you want to delete this item?');
        }
        $('.dropify').dropify();

        // Used events
        var drEvent = $('.dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
    </script>


    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Okay'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'Error',
                text: '{!! implode('\n', $errors->all()) !!}',
                icon: 'error',
                confirmButtonText: 'Okay'
            });
        </script>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#content22').summernote({
            height: 200,
        });

        
        $('#content23').summernote({
            height: 200,
        });
        $('#content24').summernote({
            height: 200,
        });

       
    });
</script>
</body>

</html>
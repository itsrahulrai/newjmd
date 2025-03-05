
  
 
 

   
    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/lazysize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/count-down.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/multiple-modal.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>

    <script src="{{asset('front/js/sibforms.js')}}" defer=""></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>


    <script>
        function showContent(sectionId) {
            event.preventDefault();
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.add('d-none');
            });

            // Show the selected content
            document.getElementById(sectionId).classList.remove('d-none');

            // Remove active class from all nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });

            // Add active class to the clicked nav link
            document.getElementById('nav-' + sectionId).classList.add('active');
        }
    </script>
     @stack('script')
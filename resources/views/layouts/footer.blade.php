<footer class="footer">
  <div class=" container-fluid ">
    {{-- <nav>
      <ul>
        <li>
          <a href="https://www.creative-tim.com" target="_blank">
            {{__(" Creative Tim")}}
          </a>
        </li>
        <li>
          <a href="http://presentation.creative-tim.com" target="_blank">
            {{__(" About Us")}}
          </a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com" target="_blank">
            {{__(" Blog")}}
          </a>
        </li>
        <li>
          <a href="https://www.updivision.com" target="_blank">
            {{__(" Updivision")}}</a>
        </li>
      </ul>
    </nav> --}}
    <div class="copyright" id="copyright">
      &copy;
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>, {{__(" Designed by")}}
      <a href="https://www.invisionapp.com" target="_blank">{{__(" Invision")}}</a>{{__(" . Coded by")}}
      <a href="https://www.creative-tim.com" target="_blank">{{__(" Creative Tim ")}}</a>&
      <a href="https://www.updivision.com" target="_blank">{{__(" Updivision")}}</a>
    </div>
  </div>
</footer>

<script src=" {{ asset('/sb')}}/js/jquery.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/popper.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/bootstrap.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.easing.1.3.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.waypoints.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.stellar.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/owl.carousel.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.magnific-popup.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/aos.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.animateNumber.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/bootstrap-datepicker.js"></script>
  <script src=" {{ asset('/sb')}}/js/jquery.timepicker.min.js"></script>
  <script src=" {{ asset('/sb')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src=" {{ asset('/sb')}}/js/google-map.js"></script>
  <script src=" {{ asset('/sb')}}/js/main.js"></script>
  <script src=" {{ asset('/sb')}}/js/app.js"></script>

{{-- TABEL --}}
  <script src="{{ asset('sb/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('sb/js/demo/datatables-demo.js') }}"></script>
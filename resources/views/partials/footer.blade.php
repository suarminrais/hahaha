    <!-- Footer -->
    <footer class="py-5 ">
      <div class="container">
        
        <p class="m-0 text-center text-white">Copyright &copy; Vectorina 2018. Allright reserved.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/multiple-select.js')}}"></script>
    <script>
        $('.select-multi').multipleSelect();
    </script>
    <script src="{{ asset('vue.js') }}"></script>

    @yield('js')
    @yield('script')
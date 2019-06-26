    <div class="container-fluid">
      <div class="container">
        <hr>
        <footer>
          © 2018 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số/ Địa chỉ: TP. BMT / GPĐKKD số: Websitr đang thử nghiệm. <br>
          Thiết Kế Bởi : <a href="" title="" target="#">Laravel</a>
      </footer>
      </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-warning btn-lg back-to-top" role="button" title="Click lên đâu trang" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{!!url('public/js/jquery.min.js')!!}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{!!url('public/bootstrap/js/bootstrap.min.js')!!}"></script>
    <script src="{!!url('public/js/menu.js')!!}"></script> 
    <script type='text/javascript' src='{!!url('public/js/jquery.easing.1.3.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/camera.min.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/myscript.js')!!}'></script> 
    <script type='text/javascript' src='{!!url('public/js/active-menu.js')!!}'></script> 
    {{-- <script src="{!!url('public/js/jquery.blueimp-gallery.min.js')!!}"></script> --}}
    <script src="{!!url('public/js/bootstrap-image-gallery.min.js')!!}"></script>

    {{-- validate --}}
    <script src="{!!url('public/js/validate/jquery.validate.min.js')!!}"></script>
    <script src="{!!url('public/js/validate/jquery.validate.js')!!}"></script>
    <script type="text/javascript">
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>

  </body>
</html>
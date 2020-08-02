</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src={{URL::asset("js/main.js")}}></script>
<script src="{{URL::asset('public/ckeditor/ckeditor.js')}}"></script>
<script src="http://wbs-eg.com/public/ckeditor/adapters/jquery.js"></script>
<script>
    $( 'textarea' ).ckeditor();
</script>
@yield('script')
<script>
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $(".add_image").click(function () {
                var html = $(".clone2").html();
                $(".increment2").after(html);
            });
            $(".add_color").click(function () {
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click", ".btn-danger", function () {
                $(this).parents(".control-group").remove();
            });

        })



</script>
</body>
</html>

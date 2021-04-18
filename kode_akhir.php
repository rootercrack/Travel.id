</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    //show hidden password
    $(document).ready(function() {
        $("#icon-click").click(function() {
            $("#icon").toggleClass('fa-eye-slash');

            var input = $("#pass");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>

</body>
</html>
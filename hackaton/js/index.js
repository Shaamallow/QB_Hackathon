$(document).ready(function () {
  var check = false;

  $(".row").click(function () {
    var newHeight = check ? 115 : 400;
    check = !check;
    $(this)
      .children(".row_container")
      .animate({ "max-height": newHeight + "px" }, 300, "swing", {
        queue: false,
      });
  });

  /*$(".row").hover(
    function () {},
    function () {
      if (check) {
        var newHeight = check ? 115 : 400;
        check = !check;
        $(this)
          .children(".row_container")
          .animate({ "max-height": newHeight + "px" }, 300, "swing", {
            queue: false,
          });
      }
    }
  );*/
});

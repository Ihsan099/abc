$(document).ready(function () {
  $(".service-item img").hover(
    function () {
      $(this).animate({ width: "110%" }, "fast");
    },
    function () {
      $(this).animate({ width: "100%" }, "fast");
    }
  );
});

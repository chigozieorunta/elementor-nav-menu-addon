(function ($) {
  $(document).ready(function () {
    alert("Editor is working...");
    //$("#elementor-preview").css("display", "none");
    //$("#elementor-preview-iframe").css("display", "none");
    $("#elementor-preview-iframe")
      .contents()
      .find(".elementor-nav-menu--dropdown")
      .html("<h1>Hello World!</h1>");

    var iframe = document.getElementById("elementor-preview-iframe");
    var elmnt = iframe.contentWindow.document.getElementsByTagName(
      "elementor-nav-menu--dropdown"
    )[0];
    elmnt.style.display = "none";
  });
})(jQuery);

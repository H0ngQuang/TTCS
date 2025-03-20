$(document).ready(function () {
    $("#sign-up").click(function () {
        $(".sign-in").hide();
        $(".sign-in").removeClass("show"); // Ẩn sign - in
        $(".signup").show();
        $(".signup").addClass("show"); // Hiển thị sign - up
    });

    $("#sign-in").click(function () {
        $(".signup").hide();
        $(".signup").removeClass("show"); // Ẩn sign - up
        $(".sign-in").show();
        $(".sign-in").addClass("show"); // Hiển thị sign - in
    });
    $("#start_date, #end_date").dateimepicker({
        format: "d/m/Y",
        timepicker: false
    });
});

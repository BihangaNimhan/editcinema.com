! function(n) {
    "use strict";

    function s() { for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++) "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), e[t].nextElementSibling.classList.remove("show")) }

    function t(e) { 1 == n("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (n("html").removeAttr("dir"), n("#dark-mode-switch").prop("checked", !1), n("#rtl-mode-switch").prop("checked", !1), n("#bootstrap-style").attr("href", "assets/css/bootstrap.min.css"), n("#app-style").attr("href", "assets/css/app.min.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) : 1 == n("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (n("html").removeAttr("dir"), n("#light-mode-switch").prop("checked", !1), n("#rtl-mode-switch").prop("checked", !1), n("#bootstrap-style").attr("href", "assets/css/bootstrap-dark.min.css"), n("#app-style").attr("href", "assets/css/app-dark.min.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == n("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e && (n("#light-mode-switch").prop("checked", !1), n("#dark-mode-switch").prop("checked", !1), n("#bootstrap-style").attr("href", "assets/css/bootstrap-rtl.min.css"), n("#app-style").attr("href", "assets/css/app-rtl.min.css"), n("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "rtl-mode-switch")) }

    function e() { document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), n("body").removeClass("fullscreen-enable")) }
    var a;
    n("#side-menu").metisMenu(), n("#vertical-menu-btn").on("click", function(e) { e.preventDefault(), n("body").toggleClass("sidebar-enable"), 992 <= n(window).width() ? n("body").toggleClass("vertical-collpsed") : n("body").removeClass("vertical-collpsed") }), n("body,html").click(function(e) {
            var t = n("#vertical-menu-btn");
            t.is(e.target) || 0 !== t.has(e.target).length || e.target.closest("div.vertical-menu") || n("body").removeClass("sidebar-enable")
        }), n("#sidebar-menu a").each(function() {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e && (n(this).addClass("active"), n(this).parent().addClass("mm-active"), n(this).parent().parent().addClass("mm-show"), n(this).parent().parent().prev().addClass("mm-active"), n(this).parent().parent().parent().addClass("mm-active"), n(this).parent().parent().parent().parent().addClass("mm-show"), n(this).parent().parent().parent().parent().parent().addClass("mm-active"))
        }), n(".navbar-nav a").each(function() {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e && (n(this).addClass("active"), n(this).parent().addClass("active"), n(this).parent().parent().addClass("active"), n(this).parent().parent().parent().addClass("active"), n(this).parent().parent().parent().parent().addClass("active"), n(this).parent().parent().parent().parent().parent().addClass("active"))
        }), n(document).ready(function() {
            var e;
            0 < n("#sidebar-menu").length && 0 < n("#sidebar-menu .mm-active .active").length && (300 < (e = n("#sidebar-menu .mm-active .active").offset().top) && (e -= 300, n(".vertical-menu .simplebar-content-wrapper").animate({ scrollTop: e }, "slow")))
        }), n('[data-toggle="fullscreen"]').on("click", function(e) { e.preventDefault(), n("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT) }), document.addEventListener("fullscreenchange", e), document.addEventListener("webkitfullscreenchange", e), document.addEventListener("mozfullscreenchange", e), n(".right-bar-toggle").on("click", function(e) { n("body").toggleClass("right-bar-enabled") }), n(document).on("click", "body", function(e) { 0 < n(e.target).closest(".right-bar-toggle, .right-bar").length || n("body").removeClass("right-bar-enabled") }),
        function() {
            if (document.getElementById("topnav-menu-content")) {
                for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++) e[t].onclick = function(e) { "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show")) };
                window.addEventListener("resize", s)
            }
        }(), [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e) { return new bootstrap.Tooltip(e) }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) { return new bootstrap.Popover(e) }), n(window).on("load", function() { n("#status").fadeOut(), n("#preloader").delay(350).fadeOut("slow") }), window.sessionStorage && ((a = sessionStorage.getItem("is_visited")) ? (n(".right-bar input:checkbox").prop("checked", !1), n("#" + a).prop("checked", !0), t(a)) : sessionStorage.setItem("is_visited", "light-mode-switch")), n("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function(e) { t(e.target.id) }), Waves.init()
}(jQuery);

function beginlogin() {

    // toast init
    var toastLiveExample = document.getElementById('liveToast');
    var toast_content = document.getElementById("toast_body");

    var username = document.getElementById("username");
    var password = document.getElementById("password");
    // var otp = document.getElementById("otp");
    var remember = document.getElementById("customCheck1");


    var form = new FormData();
    form.append("username", username.value);
    form.append("password", password.value);
    // form.append("otp", otp.value);
    form.append("remember", remember.checked);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                window.location = "index.php";
            } else {
                var toast = new bootstrap.Toast(toastLiveExample);
                toastLiveExample.className = "toast toast-danger text-white"
                toast_content.innerText = text;

                toast.show();
            }
        }

    };
    r.open("POST", "process_admin_login.php", true);
    r.send(form);
}

function beginregister() {

    // toast init
    var toastLiveExample = document.getElementById('liveToast');
    var toast_content = document.getElementById("toast_body");

    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var email = document.getElementById("email");

    var form = new FormData();
    form.append("username", username.value);
    form.append("password", password.value);
    form.append("email", email.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                window.location = "auth-login.php";
            } else {
                var toast = new bootstrap.Toast(toastLiveExample);
                toastLiveExample.className = "toast toast-danger text-white"
                toast_content.innerText = text;

                toast.show();
            }
        }

    };
    r.open("POST", "process_admin_register.php", true);
    r.send(form);
}

function addvideo() {

    var submit_btn = document.getElementById("submit_btn");
    var processing_btn = document.getElementById("processing_btn");

    submit_btn.className = "d-none";
    processing_btn.className = "btn btn-primary col-12";


    var title = document.getElementById("title");
    var category = document.getElementById("category");
    var path = document.getElementById("path");
    var image = document.getElementById("file");

    var form = new FormData();
    form.append("title", title.value);
    form.append("category", category.value);
    form.append("path", path.value);
    form.append("img", image.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                submit_btn.className = "btn btn-primary waves-effect waves-light me-1 col-12";
                processing_btn.className = "btn btn-primary col-12 d-none";
                swal({
                    title: "Success!",
                    text: "New Video added .",
                    icon: "success",
                    button: "Ok",
                }).then(function() {
                    window.location = "add_videos.php";
                });
            } else {
                submit_btn.className = "btn btn-primary waves-effect waves-light me-1 col-12";
                processing_btn.className = "btn btn-primary col-12 d-none";
                swal({
                    title: "Alert!",
                    text: text,
                    icon: "error",
                    button: "Ok",
                }).then(function() {
                    // window.location = "post_center.php";
                });
            }

        }
    }

    r.open("POST", "process_add_videos.php", true);
    r.send(form);
}


function delete_video(id) {
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this video!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                begin_delete(id);
                swal("Poof! Your video has been deleted!", {
                    icon: "success",
                }).then(function() {
                    window.location = "manage_videos.php";
                });
            } else {}
        });
}


function begin_delete(id) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                swal({
                    title: "Success!",
                    text: "New Video added .",
                    icon: "success",
                    button: "Ok",
                }).then(function() {
                    window.location = "manage_videos.php";
                });
            }

        }
    }

    r.open("GET", "process_delete_videos.php?id=" + id, true);
    r.send();

}

function update_videos(id) {

    var modal = document.getElementById("update_modal");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            modal.innerHTML = text;
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
            myModal.show();

        }
    }

    r.open("GET", "process_begin_update_videos.php?id=" + id, true);
    r.send();

}

function begin_update_videos(id) {

    var submit_btn = document.getElementById("submit_btn");
    var processing_btn = document.getElementById("processing_btn");

    submit_btn.className = "d-none";
    processing_btn.className = "btn btn-primary col-12";


    var title = document.getElementById("up_title");
    var category = document.getElementById("up_category");
    var path = document.getElementById("up_path");
    var image = document.getElementById("up_file");

    var form = new FormData();
    form.append("title", title.value);
    form.append("category", category.value);
    form.append("path", path.value);
    form.append("id", id);
    form.append("img", image.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "1") {
                submit_btn.className = "btn btn-primary waves-effect waves-light me-1 col-12";
                processing_btn.className = "btn btn-primary col-12 d-none";
                swal({
                    title: "Success!",
                    text: " Video Updated .",
                    icon: "success",
                    button: "Ok",
                }).then(function() {
                    window.location = "manage_videos.php";
                });
            } else {
                submit_btn.className = "btn btn-primary waves-effect waves-light me-1 col-12";
                processing_btn.className = "btn btn-primary col-12 d-none";
                swal({
                    title: "Alert!",
                    text: text,
                    icon: "error",
                    button: "Ok",
                }).then(function() {
                    // window.location = "post_center.php";
                });
            }

        }
    }

    r.open("POST", "process_update_videos.php", true);
    r.send(form);

}
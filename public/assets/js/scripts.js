/*!
 * Start Bootstrap - Freelancer v6.0.4 (https://startbootstrap.com/themes/freelancer)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
 */
// Fungsi untuk mengatur teks pengetikan dan penghapusan
function typeAndDelete(text, i, fnCallback) {
    if (i < text.length) {
        document.querySelector(".typing-text").textContent += text.charAt(i);
        setTimeout(function () {
            typeAndDelete(text, i + 1, fnCallback);
        }, 100); // Waktu pengetikan per karakter (ms)
    } else {
        setTimeout(function () {
            deleteText(text, text.length - 1, fnCallback);
        }, 1000); // Waktu delay sebelum proses penghapusan dimulai (ms)
    }
}

// Fungsi untuk menghapus teks
function deleteText(text, i, fnCallback) {
    if (i >= 0) {
        var newText = text.substr(0, i);
        document.querySelector(".typing-text").textContent = newText;
        setTimeout(function () {
            deleteText(text, i - 1, fnCallback);
        }, 50); // Waktu penghapusan per karakter (ms)
    } else if (typeof fnCallback == "function") {
        setTimeout(fnCallback, 1000); // Waktu delay setelah penghapusan selesai (ms)
    }
}

// Fungsi untuk memulai efek pengetikan dan penghapusan
function startTypingAnimation() {
    var text = "Muhamad Irvan Sandy";

    function repeatAnimation() {
        typeAndDelete(text, 0, function () {
            document.querySelector(".cursor").style.display = "none"; // Sembunyikan kursor setelah pengetikan dan penghapusan selesai
            setTimeout(function () {
                document.querySelector(".typing-text").textContent = ""; // Reset teks
                document.querySelector(".cursor").style.display = "inline"; // Tampilkan kembali kursor
                repeatAnimation(); // Ulangi animasi pengetikan
            }, 2000); // Waktu delay sebelum memulai animasi berulang kembali (ms)
        });
    }

    repeatAnimation();
}

// Panggil fungsi untuk memulai animasi pengetikan pada saat halaman selesai dimuat
document.addEventListener("DOMContentLoaded", startTypingAnimation);
(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 71,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Scroll to top button appear
    $(document).scroll(function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 80,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Floating label headings for the contact form
    $(function () {
        $("body")
            .on(
                "input propertychange",
                ".floating-label-form-group",
                function (e) {
                    $(this).toggleClass(
                        "floating-label-form-group-with-value",
                        !!$(e.target).val()
                    );
                }
            )
            .on("focus", ".floating-label-form-group", function () {
                $(this).addClass("floating-label-form-group-with-focus");
            })
            .on("blur", ".floating-label-form-group", function () {
                $(this).removeClass("floating-label-form-group-with-focus");
            });
    });
})(jQuery); // End of use strict

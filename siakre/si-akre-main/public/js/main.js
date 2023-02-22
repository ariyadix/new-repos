if (document.body.contains(document.querySelector(".header_stick"))) {
    window.addEventListener("load", (event) => {
        myFunction();
    });
    window.onscroll = function () {
        myFunction();
    };

    var headerStick = document.querySelector(".header_stick");
    var content = headerStick.nextElementSibling;
    console.log(content);
    var headerStickz = document.querySelector(".header_stick .btn ");
    var sticky = headerStickz.offsetTop + 50;

    var stickHeight = $(".header_stick").height() + 16;
    console.log(sticky);

    function myFunction() {
        if (window.pageYOffset > sticky) {
            adjustWidth();
            //  $(".sticky + .card").css("margin-top", stickHeight);

            headerStick.classList.add("sticky");
            headerStick.nextElementSibling.style.marginTop = stickHeight + "px";
        } else {
            //  $(".sticky + .card").css("margin-top", 16);

            headerStick.classList.remove("sticky");
            headerStick.nextElementSibling.style.marginTop = "16px";
        }
    }
    $(window).resize(function () {
        adjustWidth();
    });

    function adjustWidth() {
        var parentwidth = $(".content").width() - 15;
        $(".header_stick").width(parentwidth);
    }
}

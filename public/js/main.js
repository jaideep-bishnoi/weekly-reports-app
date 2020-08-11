var acc = document.getElementsByClassName("accordion");
    var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }

// $(".menu-list a").click(function(){
//     $(".menu-list a").addClass("is-active");
// });

$(".menu-list li a").click(function (e) {
    $(this).addClass("is-active").siblings().removeClass("is-active");
});
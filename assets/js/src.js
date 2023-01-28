/* navbar - fixedtop - start */
// document.addEventListener("DOMContentLoaded", function(){
//     window.addEventListener('scroll', function() {
//         if (window.scrollY > 0) {
//             document.getElementById('navbar_top').classList.add('fixed-top');
//             // add padding top to show content behind navbar
//             navbar_height = document.querySelector('.navbar').offsetHeight;
//             document.body.style.paddingTop = navbar_height + 'px';
//         } 
//         else {
//             document.getElementById('navbar_top').classList.remove('fixed-top');
//             // remove padding top from body
//             document.body.style.paddingTop = '0';
//         } 
//     });
// }); 
/* navbar - fixedtop - end */
/* navbar dropdown list on hover - Start */
$(".navigation li").hover(function() {
    var isHovered = $(this).is(":hover");
    if (isHovered) {
      $(this).children("ul").stop().slideDown(300);
    } else {
      $(this).children("ul").stop().slideUp(300);
    }
});
/* navbar dropdown list on hover - End */
/* index - How-CD - Start */  
function openCity(evt, eventName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove('show');
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove('active');
    }
    document.getElementsByClassName(eventName)[0].classList.add('show');
    document.getElementsByClassName(eventName)[1].classList.add('show');
    var currentTabClass = evt.currentTarget.className.split(" ")[1];
    console.log(currentTabClass);
    document.getElementsByClassName(currentTabClass)[0].classList.add('active');
    // document.getElementsByClassName(currentTabClass)[1].classList.add('active');
}
document.getElementById("defaultOpen").click();
/* index - How-CD - End */
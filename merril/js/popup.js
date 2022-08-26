//popup js begin
document.querySelector("#close-down").addEventListener("click", function(){
    document.querySelector(".popup-video").style.display = "none";
});
document.querySelector(".play").addEventListener("click", function(){
    document.querySelector(".popup-video").style.display = "block";
});
//popup js end

jQuery(document).ready(function(){
    jQuery('.comment-slide').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      dots: false
    });
  });
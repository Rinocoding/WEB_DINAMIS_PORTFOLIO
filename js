$('document').ready(function(){


// --------------------JAVASCRIP UNTUK ANIMASI KEMAMPUAN
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();
 
   console.log(wScroll);
});

// -------------------JAVASCRIPT UNTUK ANIMASI PORTFOLIO
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();
  if (wScroll >= 2348) {
    $(".logos .port").each(function (i) {
      setTimeout(function () {
        $(".logos .port").eq(i).addClass("muncul");
      }, 500 * (i + 1));
    });
  }
});


// ------------------- JAVASCRIPT  UNTUK FITUR UBAH WARNA BACKGROUND
$('#ubah-warna').on('click', function(){
  $('body').toggleClass('backgroundColor');
  $('body').toggleClass('color');
  if($('body').hasClass('backgroundColor')){
    $('body').css('backgroundColor','#100a15')
    $('header').css('backgroundColor','#100a15')
    $('.logo').css('color','red')
    $('.awalan').css('color','white')
    $('body').css('color','white')
  }else{
    $('body').css('backgroundColor','#303030')
    $('header').css('backgroundColor','#303030')
    $('.logo').css('color','red')
    $('body').css('color','white')
  }


})




// ----------------------- JAVASCRIPT UNTUK FORM KETIKA FOKUS/BLUR
$(".hidden").focus(function(){
  $(this).css("background-color", "orange");
});
$(".hidden").blur(function(){
  $(this).css("background-color", "white");
});
$(".hidden").blur(function(){
  $(this).css("background-color", "white");
});


// --------------- JAVASCRIPT KODE UNTUK MENDNDAKAN NAV AKTIF 
$("a").click(function(){
  $("a").removeClass("active");
  $(this).addClass("active");
});


// ----------------------- JAVASCRIPT UNTUK FORM KETIKA FOKUS/BLUR









  

// -------------------------ANIMASI JAVASCIPT UNTUK ABOUT

var animated = false; // Variabel untuk memantau apakah animasi sudah dimunculkan atau belum

$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  // Jarak saat animasi muncul
  var scrollOffset = 200;

  // Tentukan kondisi untuk munculkan animasi
  if (wScroll >= scrollOffset && !animated) {
    $(".text1, .text2").addClass("show");
    animated = true; // Set variabel animated menjadi true setelah animasi dimunculkan
  } else if (wScroll < scrollOffset && animated) {
    // Jika di-scroll ke atas lagi dan animasi sudah dimunculkan sebelumnya
    $(".text1, .text2").removeClass("show");
    animated = false; // Set variabel animated menjadi false ketika elemen disembunyikan lagi
  }
});





$(".animasi-kan").click(function() {
  $(".animasi").css('display','block');
});

$(".hapus").click(function(e) {
  $(".animasi").css('display','none');
});






$('.portfolio img').on('load', function() {
  $(this).addClass('loaded');
});

});//Penutup ready jquery







const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    }
  });
});

const hiddenElement = document.querySelectorAll('.hidden');
hiddenElement.forEach((el) => observer.observe(el));


const WINDOW_TYPE_SP = 0;
const WINDOW_TYPE_TAB = 1;
const WINDOW_TYPE_PC = 2;

const WINDOW_SIZE_SP = 768;
const WINDOW_SIZE_TAB = 1025;

window.onload = function(){
  $('#btn-hamburger').on('click', dispHamburger);

  $('.btn-contact').on('click', function(){
    window.location.href = Constants.CONTACT_URL;
  });

  $('.btn-price').on('click', function(){
    window.location.href = Constants.PRICE_URL;
  });

  $('.page-in-scroll').click(function() {
    const speed = 500;
    const href = $(this).attr("href");
    const target = $(href == "#" || href == "" ? 'html' : href);
    const header = $('header').height();
    let position = target.offset().top - header;
    if($(this).text() == "実績・制作物"){
      position += 450;
    }
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  if(typeof load == 'function'){
    load();
  }
};

$(window).on('resize', function(){
  if(typeof resize == 'function'){
    resize();
  }
});

function getWindowType(){
  if($(window).outerWidth() < WINDOW_SIZE_SP){
    // スマートフォン
    return WINDOW_TYPE_SP;
  }else if($(window).outerWidth() < WINDOW_SIZE_TAB){
    // タブレット
    return WINDOW_TYPE_TAB;
  }else{
    // PC
    return WINDOW_TYPE_PC;
  }
}

function dispHamburger() {
  if($('#btn-hamburger, #btn-hamburger-line').hasClass('open')){
    $('#nav').fadeOut();
    $('main').find('a,button,input').css('pointer-events', 'auto');
    $('main').off('click');
    $('body').css('overflow', 'visible');
  }else{
    $('#nav').fadeIn();
    $('main').find('a,button,input').css('pointer-events', 'none');
    $('main').on('click', dispHamburger);
    $('body').css('overflow', 'hidden');
  }
  $('#btn-hamburger, #btn-hamburger-line').toggleClass('open');
}
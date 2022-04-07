function load(){
  const index = new Index();
  index.init();
}

function resize() {
  const index = new Index();
  index.responsiveView();
}

function Index() {}

Index.prototype.init = function(){
  this.responsiveView();
  this.addEvent();
}

Index.prototype.responsiveView = function(){
  if(getWindowType() === WINDOW_TYPE_SP) {
    
  }else{
    
  }
};

Index.prototype.addEvent = function(){
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true
  });
  $('.work-accordion-row').on('click', function(){
    $(this).toggleClass('active');
    $(this).find('.toggle-btn').eq(0).toggleClass('toggle-open');
    $(this).next().fadeToggle(200);
  });
};
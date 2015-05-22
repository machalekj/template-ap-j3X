window.addEvent('domready',function() {
 
  /*Image slideshow - main page*/
  var container = $('slideshow-mainpage');
  var showDuration;
  var images;
  var currentIndex = 0;
  var interval;
    
  if(container) {
    /* settings */
    showDuration = 4000;
    images = container.getElements('img');
    currentIndex = 0;
    /* opacity and fade */
    images.each(function(img,i){ 
      if(i > 0) {
        img.set('opacity',0);
      }
    });
    /* worker */
    var show = function() {
      images[currentIndex].fade('out');
      images[currentIndex = currentIndex < images.length - 1 ? currentIndex+1 : 0].fade('in');
    };
    /* start once the page is finished loading */
    window.addEvent('load',function(){
      interval = show.periodical(showDuration);
    });
  }
  
  /*Image slideshow - main page*/
  var container2 = $('slideshow-podpor');
  if(container2) {
    /* settings */
    showDuration = 6000;
    images = container2.getElements('img');
    currentIndex = 0;
    /* opacity and fade */
    images.each(function(img,i){ 
      if(i > 0) {
        img.set('opacity',0);
      }
    });
    /* worker */
    show = function() {
      images[currentIndex].fade('out');
      images[currentIndex = currentIndex < images.length - 1 ? currentIndex+1 : 0].fade('in');
    };
    /* start once the page is finished loading */
    window.addEvent('load',function(){
      interval = show.periodical(showDuration);
    });
  }
  
});
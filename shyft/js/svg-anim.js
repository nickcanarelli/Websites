// SVG Animation Script 

function pathPrepare ($el) {
    var lineLength = $el[0].getTotalLength();
    $el.css("stroke-dasharray", lineLength);
    $el.css("stroke-dashoffset", lineLength);
}

// init controller
var controller = new ScrollMagic.Controller();

// loop through all elements
$(".svg-animation").each(function() {

    var $thePath = $(this).find("path#thePath");
    
    // prepare SVG
    pathPrepare($thePath);
    
    // build tween
    var tween = new TimelineMax()
        .add(TweenMax.to($thePath, 1, {
            strokeDashoffset: 0, 
            ease:Linear.easeNone
        }))

    // build scene
    var scene = new ScrollMagic.Scene({
        triggerElement: $(this)[0],
        duration: 200, 
        tweenChanges: true,
        reverse: false
    })
    .setTween(tween)
    .addTo(controller)
});
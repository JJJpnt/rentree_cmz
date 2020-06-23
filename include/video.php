<div class="">
        <div class="videoWrapper">
            <!-- Copy & Pasted from YouTube -->
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/lc8plTCIWCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <div id="video-placeholder" class=""></div>
        </div>
    </div>
<script src="https://www.youtube.com/iframe_api"></script>




<script type="text/javascript">


$(function(){
    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var lastScrollTop = 0;
    
    var videoStarted = false;
    
    var targetOffset = $(".videoWrapper").offset().top;
    // alert("blah"+targetOffset);

    $(window).on('resize scroll', function(){
        // console.log("You hatin I'm scollin");
        if ( $("#video-placeholder").isInViewport() && !videoStarted ) {   
            // alert("start video");
            player.playVideo();
            videoStarted = true;
        } else {
        // ...
        }
    });
});

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-placeholder', {
        width: "100%",
        height: "auto",
        videoId: 'lc8plTCIWCc',
        playerVars: {
            color: 'white',
        },
        events: {
            onReady: initializeYT
        }
    });
}

function initializeYT(){

    // Update the controls on load
    // updateTimerDisplay();
    // updateProgressBar();

    // Clear any old interval.
    // clearInterval(time_update_interval);

    // Start interval to update elapsed time display and
    // the elapsed part of the progress bar every second.
    // time_update_interval = setInterval(function () {
    //     updateTimerDisplay();
    //     updateProgressBar();
    // }, 1000)

}








</script>
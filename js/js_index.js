$(document).ready(function () {
        videoControlsOnHover();
});

/**
 * Add controls when mouse over, Pure JS!
 */
function videoControlsOnHover() {
    var video = document.getElementById('live_vid');
    video.onmouseover = function(){
        if(this.hasAttribute("controls")) {
            this.removeAttribute("controls");
        } else {
            this.setAttribute("controls", "controls");
        }
    };
}


$(document).ready(function () {
    if(typeof jQuery=="undefined"){
        alert("jQuery id undefined");
    } else {
        getAnimalTitles();
        animalTitleTransition();
        videoControlsOnHoverPureJS();
    }
});

/**
 * Get all titles from the animals page
 */
function getAnimalTitles() {    
 var animals = $('.animal');

    for (var i = 0; i < animals.length; i++) {
        var animal = animals[i].id;
        $('#' + animal + ' .description').load(animal + ".html .pmain h2").text();
    }
}

/**
 * Mouse in mouse out transition
 */
function animalTitleTransition() {

    // Mouse over
    var animalImage = $('.animal-image');
    animalImage.on('mouseover', function() {
        var image = $(this).find('img');
        var description = $(this).find('.description');

        image.css('opacity', 0.5);
        description.css('display', 'block');
    });

    // Mouse out
    animalImage.on('mouseout', function() {
        var image = $(this).find('img');
        var description = $(this).find('.description');

        image.css('opacity', 1);
        description.css('display', 'none');
    });
}

function videoControlsOnHover(){
    var video = $('video');
    video.hover(function() {
        if (this.hasAttribute("controls")) {
            this.removeAttribute("controls")
        } else {
            this.setAttribute("controls", "controls")
        }
    });
}

function videoControlsOnHoverPureJS() {
    var video = document.getElementById('live_vid');
    video.onmouseover = function(){
        if(this.hasAttribute("controls")) {
            this.removeAttribute("controls");
        } else {
            this.setAttribute("controls", "controls");
        }
    };
}


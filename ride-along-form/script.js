$(document).ready(function() {
    // Initialize the flipbook with smaller dimensions
    $("#flipbook").turn({
        width: 800, // Smaller total width for two pages
        height: 500, // Smaller height for pages
        autoCenter: true,
        elevation: 50,
        gradients: true,
        duration: 1000,
        display: 'double', // Set to 'double' for two-page view
        acceleration: true,
        when: {
            turning: function(event, page, view) {
                playPageFlipSound();
            },
            turned: function(event, page, view) {
                // Handle actions after page is turned
            }
        }
    });

    // Navigation buttons
    $('#prev').click(function() {
        $('#flipbook').turn('previous');
    });

    $('#next').click(function() {
        $('#flipbook').turn('next');
    });

    // Zoom functionality
    var scale = 1;
    $('#zoom-in').click(function() {
        scale += 0.1;
        $('#flipbook').css('transform', 'scale(' + scale + ')');
    });

    $('#zoom-out').click(function() {
        scale = Math.max(1, scale - 0.1);
        $('#flipbook').css('transform', 'scale(' + scale + ')');
    });

    // Fullscreen functionality
    $('#fullscreen').click(function() {
        var elem = document.getElementById("flipbook");
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox */
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE/Edge */
            elem.msRequestFullscreen();
        }
    });

 // Add click event listeners to each page
    $(".page").click(function() {
        var link = $(this).data("link");
        if (link) {
            window.location.href = link;
        }
    });

    // Function to play page flip sound using a similar sound to FlipHTML5
    function playPageFlipSound() {
        var audio = new Audio('https://cdn.freesound.org/previews/338/338921_3239899-lq.mp3');
        audio.play();
    }
});

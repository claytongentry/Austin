var close_button = "<br/><button id = 'closeBtn' onclick='closeVideo()'>Close</button>";

function closeVideo() {
    document.getElementById("video").style.display = "none";

    // Test this
    $("#video").html("");
    $("#grid").fadeIn("300");
}

function playVideo(reel) {
    document.getElementById("grid").style.display = "none";

    // http://stackoverflow.com/questions/6805297/using-jquery-to-dynamically-load-vimeo-videos
    switch (reel) {
        case 'directing':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('http://vimeo.com/7100569') + '&width=800&callback=?', function(data){
                $('#video').html(data.html);
                $('#video').append(close_button);
            });
            break;
        case 'cinematography':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('https://vimeo.com/110931915') + '&width=800&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'motion_graphics':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=800&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'editing':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=800&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'vfx':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=800&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'gaffing':
            $.getJSON('http://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=800&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        default:
            break;
    }

    $("#video").fadeIn();
}

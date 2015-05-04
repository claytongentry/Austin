var close_button = "<br/><button class = 'btn' onclick='closeVideo()'>Close</button>";

function closeVideo() {
    document.getElementById("video_instructions").style.display = "block";

    $("#video").html("");
    $("#video_instructions").show();
}

function playVideo(reel) {
    document.getElementById("video_instructions").style.display = "none";

    // http://stackoverflow.com/questions/6805297/using-jquery-to-dynamically-load-vimeo-videos
    switch (reel) {
        case 'directing':
            $.getJSON('https://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('http://vimeo.com/7100569') + '&width=970&callback=?', function(data){
                $('#video').html(data.html);
                $('#video').append(close_button);
            });
            break;
        case 'cinematography':
            $.getJSON('https://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('https://vimeo.com/110931915') + '&width=970&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'motion_graphics':
            $.getJSON('https://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=970&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'editing':
            $.getJSON('https://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=970&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        case 'vfx':
            $.getJSON('https://www.vimeo.com/api/oembed.json?url=' + encodeURIComponent('//') + '&width=970&callback=?', function(data){
                $("#video").html(data.html);
                $("#video").append(close_button);
            });
            break;
        default:
            break;
    }

    $("#video").fadeIn();
}

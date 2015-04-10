function closeVideo() {
    document.getElementById("video").style.display = "none";
    $("#grid").fadeIn("300");
}

function playVideo(reel) {
    document.getElementById("grid").style.display = "none";
    $("#video").fadeIn("300");

    // switch (reel) {
    //     case 'directing':
    //       Insert Vimeo link
    //       break;
    //     case 'cinematography':
    //       break;
    //     case 'motion_graphics':
    //       break;
    //     case 'editing':
    //       break;
    //     case 'vfx':
    //       break;
    //     case 'gaffing':
    //       break;
    //     default:
    //       break;
    // }
}

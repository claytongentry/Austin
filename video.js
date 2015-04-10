function closeVideo() {
    document.getElementById("video").style.display = "none";
    $("#grid").fadeIn("300");
}

function playVideo(reel) {
    $("#grid").fadeOut("300");
    $("#video").fadeIn("300");

    // switch (reel) {
    //     case 'directing':
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

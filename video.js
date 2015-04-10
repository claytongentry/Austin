function closeVideo() {
    document.getElementById("video").style.display = "none";
    document.getElementById("grid").style.display = "block";
}

function playVideo(reel) {
    document.getElementById("grid").style.display = "none";
    document.getElementById("video").style.display = "block";

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

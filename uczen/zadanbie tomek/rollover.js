
var rollovers_count = 5;

var filenames_off = new Array;

filenames_off[0] = "img/lorem-off.png";
filenames_off[1] = "img/ipsum-off.png";
filenames_off[2] = "img/dolor-off.png";
filenames_off[3] = "img/sit-off.png";
filenames_off[4] = "img/amet-off.png";

var filenames_on = new Array;

filenames_on[0] = "img/lorem-on.png";
filenames_on[1] = "img/ipsum-on.png";
filenames_on[2] = "img/dolor-on.png";
filenames_on[3] = "img/sit-on.png";
filenames_on[4] = "img/amet-on.png";

var images_off = new Array;
var images_on  = new Array;

var images_loaded = false;



function rollover_on(AElementID, AImageNo)
{
    if (images_loaded) {
        var el = document.getElementById(AElementID);
        el.src = filenames_on[AImageNo];
    }
}

function rollover_off(AElementID, AImageNo)
{
    if (images_loaded) {
        var el = document.getElementById(AElementID);
        el.src = filenames_off[AImageNo];
    }
}

function rollover_on2(AElementID1, AImageNo1, AElementID2, AImageNo2)
{
    rollover_on(AElementID1, AImageNo1);
    rollover_on(AElementID2, AImageNo2);
}

function rollover_off2(AElementID1, AImageNo1, AElementID2, AImageNo2)
{
    rollover_off(AElementID1, AImageNo1);
    rollover_off(AElementID2, AImageNo2);
}



function preload()
{
    for (i = 0; i < rollovers_count; i++) {

        images_off[i] = new Image();
        images_off[i].src = filenames_off[i];

        images_on[i] = new Image();
        images_on[i].src = filenames_on[i];

    }

    images_loaded = true;
}



function pH_scale(){
    var desired = document.getElementById('desired').value;
    var current = document.getElementById('current').value;

    var regulation_value = (desired - current) / 10;

    if (regulation_value < 0){
        regulation = regulation_value * -1;
        var measure = regulation * 100;
        document.getElementById('measure').innerHTML = "Apply "+measure+"Kgs of acidic fertilizer per hactare";
    }
    if (regulation_value > 0){
        var measure = regulation_value * 100;
        document.getElementById('measure').innerHTML = "Apply "+measure+"Kgs of basic fertilizer per hactare";

    }

    return false;
}



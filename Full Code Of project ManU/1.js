var images = ["spl","spl2","spl3","spl4","spl5"];

function randImg() {
    var size = images.length
    var x = Math.floor(size * Math.random())
    document.getElementById('image').src = images[x];
}

randImg();
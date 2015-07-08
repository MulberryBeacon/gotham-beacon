var runAfterOnload = function() {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'css/stylesheet.css';
    var head = document.getElementsByTagName('head')[0];
    head.parentNode.insertBefore(link, head);
};

var raf = requestAnimationFrame || msRequestAnimationFrame;

if (raf) {
    raf(runAfterOnload);
}
else {
    window.addEventListener('load', runAfterOnload);
}

function init() {
    $('.printing-block').vegas({
        delay: 7000,
        timer: false,
        shuffle: true,
        firstTransition: 'fade',
        transitionDuration: 2000,
        slides: [
            { src: "img/printing1.jpg" },
            { src: "img/printing2.jpg"},
            { src: "img/printing3.jpg"}
        ],
        animation: 'kenburns'
    });
}

window.onload = init();


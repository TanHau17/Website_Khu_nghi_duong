const listImg = document.querySelector('.list-img');
const imgs = document.getElementsByTagName('img');
let current = 0;

setInterval(() => {
    if(current === imgs.length - 1) {
        current++
        let width = imgs[0].offsetWidth
        listImg.style.transform = `translateX(0px)`
    } else {
        current++
        let width = imgs[0].offsetWidth
        listImg.style.transform = `translateX($(width * -1 * current)px)`
    }
    
}, 4000);

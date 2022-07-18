// banner navigation function

function bannerCoffee(){ //coffe div click
    document.getElementById('banner-bg').style.background='url(assets/image/banner-cafe.png) no-repeat center -350px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('cafe-title-banner').style.opacity='1';
    }, 100); 
}
function bannerResto(){ //reso div click
    document.getElementById('banner-bg').style.background='url(assets/image/banner-music.jpg) no-repeat center -180px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('resto-title-banner').style.opacity='1';
    }, 100); 
}
function bannerGym(){ //Gym div click
    document.getElementById('banner-bg').style.background='url(assets/image/banner-gym.png) no-repeat center -180px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('gym-title-banner').style.opacity='1';
    }, 100); 
}
function bannerPool(){ //pool div click
    document.getElementById('banner-bg').style.background='url(assets/image/banner-pool.png) no-repeat center -400px / cover';
    document.getElementById('lux-hotel-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('cafe-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('resto-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('gym-title-banner').style.cssText='display:none;opacity:0;'
    document.getElementById('pool-title-banner').style.display='block';

    setTimeout( ()=>{
        document.getElementById('pool-title-banner').style.opacity='1';
    }, 100); 
}

// end banner navigation

    let hamburger = document.getElementById('hamburger');

    let mobile_menu = document.getElementById('mobile_menu');

    hamburger.addEventListener('click', function(){
        mobile_menu.classList.toggle('active');
        console.log('clicked');
    });

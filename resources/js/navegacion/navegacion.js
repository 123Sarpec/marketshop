

    
    const btnMenu = document.getElementById('btnMenu');
    const menuMovil = document.getElementById('navegacionMovil');
    const iconMenu = document.getElementById('iconMenu');
    const iconClose = document.getElementById('iconClose');

    btnMenu.addEventListener('click', function () {

        menuMovil.classList.toggle('hidden');

        iconMenu.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');

        const abierto = !menuMovil.classList.contains('hidden');

        btnMenu.setAttribute('aria-expanded', abierto);
    });

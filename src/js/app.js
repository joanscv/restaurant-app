(function() {
    const mesasDiv = document.querySelector('.dashboard__restaurante-mesas');

    if(mesasDiv){
        const mesasBtns = document.querySelectorAll('.dashboard__mesa ');
        mesasBtns.forEach(mesa=>mesa.addEventListener('click', openMenu));

        function openMenu(e){
            const menuDiv = document.createElement('DIV');
            menuDiv.classList.add('menu');

            const tituloMenu = document.createElement('H2');
            tituloMenu.textContent = 'Menú';
            tituloMenu.classList.add('menu__titulo');

            const contenidoMenu = document.createElement('DIV');
            contenidoMenu.classList.add('menu__contenido');

            const sidebarMenu = document.createElement('ASIDE');

        }




    }

    
})()




function controleMenu (){

    var menu = document.getElementById("cabecalho")
    var iconeAbrir = document.getElementById('iconBars');
    var iconeFechar = document.getElementById('iconX');
    var header = document.getElementById('header');


    if(menu.style.display === "flex"){

        header.style.maxWidth = '2.5%';
        iconeAbrir.style.display= 'flex';
        iconeFechar.style.display= 'none';
        menu.style.display= 'none';

    }else{

        header.style.maxWidth = '20%';
        iconeFechar.style.display= 'none';
        menu.style.display= 'flex';
        iconeAbrir.style.display= 'flex';


    }

}


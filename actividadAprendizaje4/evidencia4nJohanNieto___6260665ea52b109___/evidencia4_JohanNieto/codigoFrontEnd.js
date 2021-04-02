const celdas= document.getElementsByTagName('td');

for (const celda of celdas) {
    console.log(celda);
    switch(celda.innerHTML){
        case 'R':
            celda.style.color= '#00F';
            break;
        case 'V':
            celda.style.color= '#0F0';
            break;
        case 'L':
            celda.style.color= '#F00';
            break;
    }
}


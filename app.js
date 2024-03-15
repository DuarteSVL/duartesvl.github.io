
document.addEventListener("DOMContentLoaded", function() {
    makeEmentas();
});

// JavaScript code was executing before the DOM was fully loaded, which was causing id #tableEmenta to be null

//To make the code run only after the DOM was loaded, wrapped the JavaScript code in a DOMContentLoaded event listener

let ementas = [
    {
        id: "segunda",
        dia: "Segunda-feira",
        sopa: "Couve de Bruxelas",
        prato: "Douradinhos  com arroz de tomate",
        dieta: "pescada cozida com batatas",
        sobremesa: "fruta da época",
        lanche: "pão com manteiga ou queijo"
    },
    {
        id: "terca",
        dia: "Terça-feira",
        sopa: "Couve de Bruxelas",
        prato: "Douradinhos  com arroz de tomate",
        dieta: "pescada cozida com batatas",
        sobremesa: "fruta da época",
        lanche: "pão com manteiga ou queijo"
    },

]

// Will need a function to inject data into the ementas array.


function makeEmentas() {
    const tableEmenta = document.querySelector("#ementa");



    for (ementa of ementas) {
        let codigo = `
            <tr id="${ementa.id}">
                <th scope="row">${ementa.dia}</th>
                <td>${ementa.sopa}</td>
                <td>${ementa.prato}</td>
                <td>${ementa.dieta}</td>
                <td>${ementa.sobremesa}</td>
                <td>${ementa.lanche}</td>
            </tr>`;
        
        tableEmenta.innerHTML += codigo;
    }
}

makeEmentas();
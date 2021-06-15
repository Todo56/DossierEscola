const Temes = [
    {
        "id": 1,
        "name": "Mini Treball Sobre Relés",
        "trimestre": 3,
        "description": `En aquesta activitat vam haver de buscar informació sobre els relés (Què és, tipus, com funciona, per a què serveix).`,
        "files": [{
            "name": "Activitat de Relés",
            "link": "https://cdn.todo56.dev/tecnologia/work/informe-rele.odt"
        }]
    },
    {
        "id": 2,
        "name": "Activitat de Relés",
        "trimestre": 3,
        "description": `El professor ens va donar un arxiu amb activitats relacionades amb relés que vam haver de completar i entregar pel teams.`,
        "files": [
            {
                "name": "Activitat Relés",
                "link": "https://cdn.todo56.dev/tecnologia/work/Ejercicios reles.pdf"
            }
        ]
    },
    {
        "id": 3,
        "name": "Examen 'nostre' de electrònica analògica",
        "trimestre": 3,
        "description": `Aquesta activitat era bastant peculiar. El professor ens va demanar a cada alumne de preparar 10 preguntes tipus examen. Després ell agafaria 10 d'aquestes i ens faria un examen amb elles, aquestes podien ser sobre qualsevol tema discutit aquest any a tecnologia. Després de escriure preguntes vam haver de escriure unes respostes per aquestes i penjar-les a una carpeta del drive. Aquest examen no va ser molt positiu ja que hi havia una pregunta que era completament impossible de resoldre amb les dades i que era de batxillerat.`,
        "files": [
            {
                "name": "Activitat Relés",
                "link": "https://cdn.todo56.dev/tecnologia/work/Ejercicios reles.pdf"
            }
        ]
    },
    {
        "id": 4,
        "name": "Àlgebra de Boole",
        "trimestre": 3,
        "description": `En aquesta activitat havíem de veure un vídeo i intentar detectar un error molt gran que hi havia. Resulta que la variable B a la part inferior esquerra no era necessària.`,
        "links": [{
            "name": "Vídeo",
            "link": "https://www.youtube.com/watch?list=RDCMUCbho5-gJi8FwvhVFzfod6VQ&v=9_rpiAScBvk&feature=youtu.be"
        }]
    },
    {
        "id": 5,
        "name": "Taules de la veritat",
        "trimestre": 3,
        "description": `Aquesta activitat va ser la primera dins del algebra de boole i va ser traduir uns textos a taules de la veritat. `,
        "files": [
            {
                "name": "Activitat Relés",
                "link": "https://cdn.todo56.dev/tecnologia/work/Ejercicios reles.pdf"
            }
        ]
    },
    {

        "id": 6,
        "name": "Minterm i Maxterm",
        "trimestre": 3,
        "description": `En aquesta activitat havíem de simplificar les funcions booleanes que vam obtenir a partir de les taules de fa uns exercicis. La simplificació es fa reduint certes expressions que donen un resultat assegurat.`,
        "files": [
            {
                "name": "Activitat Relés",
                "link": "https://cdn.todo56.dev/tecnologia/work/Ejercicios reles.pdf"
            }
        ]

    },
    {
        "id": 7,
        "name": "Simplificació de funciones Booleanas",
        "trimestre": 3,
        "description": `En aquesta activitat havíem de simplificar les funcions booleanes que vam obtenir a partir de les taules de fa uns exercicis. La simplificació es fa reduint certes expressions que donen un resultat assegurat.`,
        "files": [
            {
                "name": "Activitat Relés",
                "link": "https://cdn.todo56.dev/tecnologia/work/Ejercicios reles.pdf"
            }
        ]
    }
];

function carregarTrimestre(elementId, trimestreId, navbar = false) {
    let element = document.getElementById(elementId);
    for (const tema of Temes) {
        if (tema.trimestre === trimestreId) {
            let temaHtml;
            if (navbar) {
                temaHtml = obtenirTemaNavBarHtml(tema);
            } else {
                temaHtml = obtenirTemaEnHtml(tema);
            }
            element.innerHTML = element.innerHTML + temaHtml
        }
    }
}

function carregarTema(elementId, temaId) {
    console.log(temaId)
    let element = document.getElementById(elementId);
    for (const tema of Temes) {
        if (tema.id == temaId) {
            element.innerHTML = element.innerHTML + `<h1 class="text-center">Tema: ${tema.name}</h1><br>`;
            element.innerHTML = element.innerHTML + `
            
            <div class="card">
  <div class="card-header">
    <h3> ${tema.id}. ${tema.name}</h3>
  </div>
  <div class="card-body">
    <h5 class="card-title">Descripció:</h5>
    <p style='font-size: 20px;'>${tema.description}</p>
  </div>
</div>
            `;

            if (tema.images && tema.images.length !== 0) {
                for (const image of tema.images) {
                    element.innerHTML = element.innerHTML + `<br><img src='${image}' width="500px">`;
                }
                element.innerHTML = element.innerHTML + "<br><br>";
            }

            if (tema.files && tema.files.length !== 0) {
                element.innerHTML = element.innerHTML + "<h5>Arxius:</h5>";
                for (const file of tema.files) {
                    element.innerHTML = element.innerHTML + `<a style='font-size: 15px; margin: 0;' href="${file.link}" download="${obtenirNomArchiu(file.link)}"><i class="fas fa-file"></i> ${file.name}</a>`;
                }
                element.innerHTML = element.innerHTML + "<br><br>";
            }

            if (tema.links && tema.links.length !== 0) {
                element.innerHTML = element.innerHTML + "<h5>Links:</h5>";
                for (const link of tema.links) {
                    element.innerHTML = element.innerHTML + `<a style='font-size: 15px; margin: 0;' href="${link.link}"><i class="fas fa-paperclip"></i> ${link.name}</a>`;
                }
                element.innerHTML = element.innerHTML + "<br><br>";
            }

            if (tema.glossary && tema.glossary.length !== 0) {
                element.innerHTML = element.innerHTML + "<h5>Vocabulari:</h5>";
                for (const paraula of tema.glossary) {
                    element.innerHTML = element.innerHTML + `<p style='font-size: 15px'><b>${paraula.word}</b>: ${paraula.description}</p>`;
                }
            }


            if (tema.avis && tema.avis !== "") {
                element.innerHTML = element.innerHTML + `<p style='font-size: 25px'><b>ALERTA: ${tema.avis}</b></p>`;
            }
        }
    }
}

function obtenirTemaNavBarHtml(tema) {
    return `<a class='dropdown-item' href='./tema.php?id=${tema.id}'>${tema.id}. ${tema.name}</a>`;
}

function obtenirNomArchiu(link) {
    let parts = (/^(([A-Z]:)?[\.]?[\\{1,2} \/]?.*[\\{1,2}\/])*(.+)\.(.+)/gm).exec(link);
    return parts[3] + "." + parts[4];
}

function obtenirTemaEnHtml(tema) {
    let base = `<br><br>
    <div class="card">
  <div class="card-header" style="font-size: 30px;">
    #${tema.id} ${tema.name}
  </div>
  <div class="card-body">
    <h5 class="card-title">Descripció:</h5>
    <p class="card-text" style="font-size: 15px;">${tema.description}</p>
    `;

    if (tema.images && tema.images.length !== 0) {
        for (const image of tema.images) {
            base = base + `<img src='${image}' width="250px">`;
        }
    }

    base = base + `  </div>
    <div class="card-footer">`;

    if (tema.files && tema.files.length !== 0) {
        base = base + "<h6>Arxius:</h6>";
        for (const file of tema.files) {
            base = base + `<a style='font-size: 10px; margin: 0;' href="${file.link}" download="${obtenirNomArchiu(file.link)}"><i class="fas fa-file"></i> ${file.name}</a>`;
        }
        base = base + "<br><br>";
    }

    if (tema.links && tema.links.length !== 0) {
        base = base + "<h6>Links:</h6>";
        for (const link of tema.links) {
            base = base + `<a style='font-size: 10px; margin: 0;' href="${link.link}"><i class="fas fa-paperclip"></i> ${link.name}</a>`;
        }
        base = base + "<br><br>";
    }

    if (tema.glossary && tema.glossary.length !== 0) {
        base = base + "<h6>Vocabulari:</h6>";
        for (const paraula of tema.glossary) {
            base = base + `<p style='font-size: 10px'><b>${paraula.word}</b>: ${paraula.description}</p>`;
        }
    }


    if (tema.avis && tema.avis !== "") {
        base = base + `<p style='font-size: 13px'><b>ALERTA: ${tema.avis}</b></p>`;
    }

    base = base + "</div></div>";

    return base;
}
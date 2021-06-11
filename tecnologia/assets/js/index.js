const Temes = [{
    
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
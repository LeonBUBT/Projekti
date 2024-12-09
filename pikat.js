const butoniLista = document.getElementById("butoniLista");
const listaOpsioneve = document.getElementById("listaOpsioneve");
const detajetDeges = document.getElementById("detajetDeges");

const emriDeges = document.getElementById("emriDeges");
const adresaDeges = document.getElementById("adresaDeges");
const orarDeges = document.getElementById("orarDeges");
const kontaktiDeges = document.getElementById("kontaktiDeges");
const sherbimeDeges = document.getElementById("sherbimeDeges");

const teDhenatDeges = {
    dega1: {
        emri: "Dega Kryesore",
        adresa: "Ndertesa e Dukagjinit, Prishtine, Kosove",
        orar: "E Hene - E Premte: 8:00 - 16:00",
        kontakti: "Tel: +1235 42 22 333",
        sherbime: "ATM, Llogari, Kredi, Depozita"
    },
    dega2: {
        emri: "Dega Qender Qytetit",
        adresa: "Sheshi Skenderbeu, Prishtine",
        orar: "E Hene - E Shtune: 9:00 - 18:00",
        kontakti: "Tel: +355 42 55 444",
        sherbime: "ATM, Konsultime, Depozita"
    },
    dega3: {
        emri: "Dega e Aeroportit",
        adresa: "Aeroporti Adem Jashari , Sllatine",
        orar: "E Hene - E Diel: 7:00 - 22:00",
        kontakti: "Tel: +355 42 11 555",
        sherbime: "ATM, Exchange, Informacion"
    }
};

butoniLista.addEventListener("click", () => {
    listaOpsioneve.classList.toggle("trego");
});

listaOpsioneve.addEventListener("click", (event) => {
    const degaID = event.target.getAttribute("data-dega");
    if (degaID && teDhenatDeges[degaID]) {
        const { emri, adresa, orar, kontakti, sherbime } = teDhenatDeges[degaID];
        emriDeges.textContent = emri;
        adresaDeges.textContent = `Adresa: ${adresa}`;
        orarDeges.textContent = `Orari: ${orar}`;
        kontaktiDeges.textContent = `Kontakti: ${kontakti}`;
        sherbimeDeges.textContent = `Sherbimet: ${sherbime}`;
        detajetDeges.classList.add("trego");
    }
    listaOpsioneve.classList.add("fshehur");
});

// Perkthe

// SLIDE SHOW OSHT MA NALT:
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000);
}

// Kalkulatori qe do mem lujt
document.addEventListener("DOMContentLoaded", () => {
    const shumaRange = document.getElementById("shuma-kredise");
    const shumaInput = document.getElementById("shuma-value");
    const maturitetiRange = document.getElementById("maturiteti-kredise");
    const maturitetiInput = document.getElementById("maturiteti-value");
    const normaRange = document.getElementById("norma-interesit");
    const normaInput = document.getElementById("norma-value");

    const shumaOutput = document.getElementById("shuma-output");
    const kestiOutput = document.getElementById("kesti-output");
    const interesiOutput = document.getElementById("interesi-output");
    const maturitetiOutput = document.getElementById("maturiteti-output");

    function calculate() {
        const shuma = parseFloat(shumaRange.value);
        const maturiteti = parseInt(maturitetiRange.value);
        const norma = parseFloat(normaRange.value) / 100;

        const kesti = (shuma * norma) / (1 - Math.pow(1 + norma, -maturiteti));
        const interesiTotal = kesti * maturiteti - shuma;

        shumaOutput.textContent = `${shuma.toFixed(2)} €`;
        kestiOutput.textContent = `${kesti.toFixed(2)} €`;
        interesiOutput.textContent = `${interesiTotal.toFixed(2)} €`;
        maturitetiOutput.textContent = `${maturiteti} muaj`;
    }

    function syncValues(range, input) {
        range.addEventListener("input", () => {
            input.value = range.value;
            calculate();
        });

        input.addEventListener("input", () => {
            range.value = input.value;
            calculate();
        });
    }

    syncValues(shumaRange, shumaInput);
    syncValues(maturitetiRange, maturitetiInput);
    syncValues(normaRange, normaInput);

    calculate();
});
// footer
document.addEventListener('DOMContentLoaded', () => {
    const scrollToTopButton = document.createElement('button');
    scrollToTopButton.innerText = '↑';
    scrollToTopButton.classList.add('scroll-to-top');

    document.body.appendChild(scrollToTopButton);

    scrollToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });
});
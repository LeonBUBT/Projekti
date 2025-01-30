document.getElementById('phone').addEventListener('input', function (e) {
    const input = e.target;
    let value = input.value.replace(/\D/g, ''); 
    value = value.slice(0, 9);
    if (e.inputType !== 'deleteContentBackward') {

        let formatted = value
            .replace(/(\d{3})(\d{0,3})/, '$1 $2') 
            .replace(/(\d{3}) (\d{3})(\d{0,3})/, '$1 $2 $3');
    
        input.value = formatted;
    } else {
      input.value = value;
    }
    input.value = formatted;
});

const individ = document.getElementById('individ');
const business = document.getElementById('business');
const form = document.querySelector('form');
const nextBtn = document.querySelector('.next');
const accTypeDiv = document.getElementById('acc-type');

var accType = null;

individ.addEventListener('click',()=>{
    accType=individ.value;
    console.log(accType);
    nextBtn.classList.add("show");
});

business.addEventListener('click',()=>{
    accType=business.value;
    console.log(accType);
    nextBtn.classList.add("show");
});

nextBtn.addEventListener('click',()=>{
    accTypeDiv.style.display="none";
    form.classList.toggle("hidden");
});

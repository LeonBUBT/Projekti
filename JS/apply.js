document.querySelectorAll('.autoformat').forEach(input =>{
    input.addEventListener('input',function(e) {
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
});

document.getElementById('id').addEventListener('input', function (e) {
    const input = e.target;
    let value = input.value.replace(/\D/g, ''); 
    value = value.slice(0, 10);

    if (value.length > 10) {
      value = value.slice(0, 10);
    }

    input.value = value;
});

const individ = document.getElementById('individ');
const business = document.getElementById('business');
const individualForm = document.getElementById('individualForm');
const businessForm = document.getElementById('businessForm');
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

    if(accType===individ.value){
        individualForm.classList.toggle("hidden");
    }else if(accType===business.value){
        businessForm.classList.toggle("hidden");
    }


});

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
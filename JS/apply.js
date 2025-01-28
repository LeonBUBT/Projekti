document.getElementById('phone').addEventListener('input', function (e) {
    const input = e.target;
    let value = input.value.replace(/\D/g, '');
    const formatted = value
      .replace(/^(\d{3})(\d)/, '($1) $2')
      .replace(/(\d{3})(\d{1,4})$/, '$1-$2');
    input.value = formatted;
  });



const refreshBtn = document.querySelector('#refresh');
refreshBtn.addEventListener("click", function () {
    location.reload();
});

const markBtn = document.querySelector('#mark');
markBtn.addEventListener("click", function () {
    checkNumbers(1);
    checkNumbers(2);
    checkNumbers(3);
});

function checkNumbers(number) {
    const sorteados = $(`[sorteado-${number}]`);
    const tabela = $(`[data-secao-apostas-${number}]`);

    for (let i = 0; i < 60; i++) {
        for (let j = 0; j < 6; j++) {
            tabela[i].innerText == sorteados[j].innerText ? tabela[i].classList.add('check') : null
        }
    }
}
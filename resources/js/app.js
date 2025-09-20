import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const audioToggle = document.getElementById('audio-toggle');
    const audio = document.getElementById('audio');
    const audioIcon = document.getElementById('audio-icon');
    const modal = document.getElementById('modal');
    const roleta = document.getElementById('roleta');
    const resultado = document.getElementById('resultado');
    const closeModal = document.getElementById('close-modal');

    if (!audioToggle || !modal || !roleta) return; // Evita erro em outras páginas

    audioToggle.addEventListener('click', () => {
        audio?.play().catch(()=>{});
        audioIcon?.classList.replace('fa-volume-off', 'fa-volume-up');
        modal.style.display = 'flex';

        setTimeout(() => {
            girarRoleta();
        }, 50); // Delay para renderizar o modal
    });

    closeModal?.addEventListener('click', () => {
        modal.style.display = 'none';
        roleta.style.transform = 'rotate(0deg)';
        resultado.innerText = '';
        audio?.pause();
        audioIcon?.classList.replace('fa-volume-up', 'fa-volume-off');
    });

    function girarRoleta() {
        const slices = 10; 
        const deg = 360 / slices;

        const impares = [];
        for(let i=1; i<=100; i+=2) impares.push(i);
        const numero = impares[Math.floor(Math.random() * impares.length)];

        const sliceIndex = Math.floor(Math.random() * slices);
        const angleForNumber = sliceIndex * deg;
        const fullSpins = 5*360;
        const finalRotation = fullSpins + angleForNumber;

        roleta.style.transform = `rotate(${finalRotation}deg)`;

        roleta.addEventListener('transitionend', function handler() {
            resultado.innerText = "Número sorteado: " + numero;
            roleta.removeEventListener('transitionend', handler);
        });
    }
});

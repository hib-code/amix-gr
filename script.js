var swiper = new Swiper(".swiper", {
    effect: "cube",
    allowTouchMove: false,
    grabCursor: false,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },
    mousewheel: true
});
swiper.on('slideChange', function () {
    for (let i of document.querySelectorAll(".Links li")) i.classList.remove("activeLink")
    Array.from(document.querySelectorAll(".Links li"))[swiper.activeIndex].classList.add("activeLink")

});
function Navigate(indx) {
    for (let i of document.querySelectorAll(".Links li")) i.classList.remove("activeLink")
    Array.from(document.querySelectorAll(".Links li"))[indx].classList.add("activeLink")
    swiper.slideTo(indx, 1000, true)
}
//telephone

function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}
//hna dyall notifaction
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // يمنع إعادة تحميل الصفحة

    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        const msgZone = document.getElementById('messageZone');
        msgZone.innerHTML = `
            <div style="
                position:fixed;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                z-index:9999;
                padding:22px 28px;
                background:#151f28;
                color:#fff;
                border:2px solid ${result.includes('❌') ? '#ff0000' : '#602e9e'};
                border-radius:12px;
                box-shadow:0 4px 16px rgba(21,47,40,0.18);
                max-width:420px;
                text-align:center;
                font-family:Arial,sans-serif;
            ">
                <span style="font-size:26px;color:${result.includes('❌') ? '#ff0000' : '#7829f7'};">
                    <i class="fa-solid ${result.includes('❌') ? 'fa-circle-exclamation' : 'fa-circle-check'}"></i>
                </span>
                <div style="font-size:20px;font-weight:bold;margin-top:10px;">
                    ${result}
                </div>
            </div>
        `;
        form.reset();

        setTimeout(() => {
            msgZone.innerHTML = "";
        }, 5000);
    })
    .catch(error => {
        document.getElementById('messageZone').innerHTML = `
            <div style="padding:15px;background:#ff0000;color:#fff;
                        border:2px solid #602e9e;border-radius:8px;">
                ❌ Une erreur est survenue. Veuillez réessayer.
            </div>`;
    });
});
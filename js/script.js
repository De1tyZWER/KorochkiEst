let i = 0;
const s = document.querySelectorAll(".slide");
const d = document.querySelectorAll(".dot");

function show(n) {
    s.forEach(x => x.classList.remove("active"));
    d.forEach(x => x.classList.remove("active"));
    i = (n + s.length) % s.length;
    s[i].classList.add("active");
    d[i].classList.add("active");
}

document.querySelector(".prev").onclick = () => show(--i);
document.querySelector(".next").onclick = () => show(++i);

setInterval(() => show(++i), 3000);

d.forEach((x, n) => x.onclick = () => show(n));
let oneInput = document.querySelector('#inputOne');
let twoInput = document.querySelector('#inputTwo');
let oneTitleInput = document.querySelector('#oneTitle');
let twoTitleInput = document.querySelector('#twoTitle');

oneInput.addEventListener("focus", () => {
    oneTitleInput.classList.add('select');
});
oneInput.addEventListener("blur", () => {
    oneTitleInput.classList.remove('select');
});

twoInput.addEventListener("focus", () => {
    twoTitleInput.classList.add('select');
});
twoInput.addEventListener("blur", () => {
    twoTitleInput.classList.remove('select');
});
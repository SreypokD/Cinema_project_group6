const card = document.querySelector('#cardShow');
const back = document.querySelector('#back');
const show = document.querySelector('#showCard');



show.addEventListener('click', function()
{
    card.classList.remove('hidden');
});

back.addEventListener('click', function()
{
    card.classList.add('hidden');
});
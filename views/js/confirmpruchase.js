
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const hideModal = document.querySelector('.hideModal');
// new payment 


// show modal when we click on confirm pruchase button
showModal.addEventListener('click', function()
{
    modal.classList.remove('hidden');
});

// hide modal when we click on cancel button
hideModal.addEventListener('click', function()
{
    modal.classList.add('hidden');
});







const modal = document.querySelector('.modal');

const showModal = document.querySelector('.showModal');
const hideModal = document.querySelector('.hideModal');
// new payment 
const addShowModal = document.querySelector('.addShowModal');
const modalNew = document.querySelector('.modalNew');
const hideModalNew = document.querySelector('.hideModalNew');

// show modal when we click on confirm pruchase button
showModal.addEventListener('click', function()
{
    modal.classList.remove('hidden');
});

// // hide modal when we click on cancel button
hideModal.addEventListener('click', function()
{
    modal.classList.add('hidden');
});

// // show modal when we click on payment button
addShowModal.addEventListener('click', function()
{
    modalNew.classList.remove('hidden');
    modal.classList.add('hidden');
});

// // hide modal when we click on cancel button
hideModalNew.addEventListener('click', function()
{
    modalNew.classList.add('hidden');
});

// get time from meanchey cinema clicked 
let movieTime = document.querySelector('.movieTime');
let span = document.querySelector('.time');

movieTime.addEventListener('click', function(){ 
    
    var value = (movieTime.innerHTML);
    span.textContent = value;
    modal.classList.remove('hidden');
});

// get time from eden cinema clicked 
let movieTime1 = document.querySelector('.movieTime1');
let span1 = document.querySelector('.time');

movieTime1.addEventListener('click', function(){ 
   
    var value = (movieTime1.innerHTML);
    span1.textContent = value;
    modal.classList.remove('hidden');
});

// get time from kmall cinema clicked 
let movieTime3 = document.querySelector('.movieTime3');
let span3 = document.querySelector('.time');

movieTime3.addEventListener('click', function(){    
    var value = (movieTime3.innerHTML);
    span1.textContent = value;
    modal.classList.remove('hidden');
});

// calculate pice of ticket 
function multiply(){
    var numberOfTicket = document.getElementById('ticketNumber').value;
    var price = 3.5;
    var cerrency = "$";
    var totalPrice = cerrency + price * numberOfTicket ;
    document.getElementById('total').value = totalPrice;
    }
        
multiply()



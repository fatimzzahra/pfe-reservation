// document.addEventListener('DOMContentLoaded', function() {
//     const hotelCards = document.querySelectorAll('.hotel-card');
//     const firstHotelCard = document.querySelector('.first-hotel');

//     hotelCards.forEach(card => {
//         card.addEventListener('mouseenter', () => {
//             if (!card.classList.contains('first-hotel')) {
//                 firstHotelCard.classList.add('hovered');
//                 card.classList.add('hovered');
//             }
//         });
        
//         card.addEventListener('mouseleave', () => {
//             if (!card.classList.contains('first-hotel')) {
//                 firstHotelCard.classList.remove('hovered');
//                 card.classList.remove('hovered');
//             }
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    const hotelCards = document.querySelectorAll('.hotel-card');
    const firstHotelCard = hotelCards[0];

    hotelCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            hotelCards.forEach(c => c.classList.remove('hovered'));
            card.classList.add('hovered');
        });

        card.addEventListener('mouseleave', () => {
            hotelCards.forEach(c => c.classList.remove('hovered'));
            firstHotelCard.classList.add('hovered');
        });
    });
});



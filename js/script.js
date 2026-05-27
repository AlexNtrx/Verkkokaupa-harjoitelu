
// lisää tapahtumankuuntelija "Lisää ostoskoriin" -painikkeille ja näytä ilmoitus, kun tuote lisätään ostoskoriin
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click',function() {
            const productId = this.getAttribute('data-id');
            const productTitle = this.getAttribute('data-title');
            const productPrice = this.getAttribute('data-price');
            
            alert(`Lisätty ostoskoriin: ${productTitle} (ID: ${productId},Hinta: ${productPrice}€)`);
        }
        );
    });
});
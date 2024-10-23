function adjustQuantity(item, value) {
    const quantityElement = document.getElementById(item + '-quantity');
    let quantity = parseInt(quantityElement.textContent);
    quantity = Math.max(0, quantity + value); // Ensure quantity is not negative
    quantityElement.textContent = quantity;
}

function bestellen() {
    const naam = $('#naam').val();
    const smosKaas = parseInt($('#smos-kaas-quantity').text());
    const smosHam = parseInt($('#smos-ham-quantity').text());
    const smosMartino = parseInt($('#smos-martino-quantity').text());

    // Check if the name and at least one sandwich is ordered
    if (!naam || (smosKaas === 0 && smosHam === 0 && smosMartino === 0)) {
        $('#isempty').show();
        return;
    }

    $.ajax({
        url: './include/broodjes.php',
        method: 'POST',
        data: {
            naam: naam,
            smosKaas: smosKaas,
            smosHam: smosHam,
            smosMartino: smosMartino
        },
        success: function(response) {
            alert('Bestelling succesvol verzonden!');
            location.reload();  // Refresh the page after order is placed
        },
        error: function() {
            alert('Er is een fout opgetreden bij het plaatsen van de bestelling.');
        }
    });
}

import 'bootstrap/dist/js/bootstrap.bundle.min.js';

$(document).ready(function() {
    // Show modal when clicking on product image
    $('.prod-image img').click(function() {
        // Get product details
        var productName = $(this).closest('.prod-cards').find('.prod-details h1').text();
        var brand = $(this).closest('.prod-cards').find('.prod-details span').text().replace('Brand: ', '');
        var price = $(this).closest('.prod-cards').find('.prod-details p:first-of-type').text().replace('Rs.', '');
        var description = $(this).closest('.prod-cards').find('.prod-details p:last-of-type').text();
        var imageSrc = $(this).attr('src');

        // Set modal content
        $('#modalProductName').text(productName);
        $('#modalBrand').text('Brand: ' + brand);
        $('#modalPrice').text('Rs.' + price);
        $('#modalDescription').text(description);
        $('#modalProductImage').attr('src', imageSrc);

        // Show modal
        $('#productModal').css('display', 'block');
    });

    // Close the modal when clicking on the close button (x)
    $('.close').click(function() {
        $('#productModal').css('display', 'none');
    });

    // Close the modal when clicking outside of it
    $(window).click(function(event) {
        if (event.target == document.getElementById('productModal')) {
            $('#productModal').css('display', 'none');
        }
    });
});

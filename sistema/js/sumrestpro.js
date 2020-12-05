

$('.qty-minus').on('click', function(e){
e.preventDefault();
if ( $(this).closest('.bundle-qty').find('.qty').val() != 1  ) {
$(this).closest('.bundle-qty').find('.qty').val(parseInt($(this).closest('.bundle-qty').find('.qty').val()) - 1);
}
});



$('.qty-plus').on('click', function(e){
e.preventDefault();
if ( $(this).closest('.bundle-qty').find('.qty').val() >= 1 && $(this).closest('.bundle-qty').find('.qty').val() <=4 ) {
$(this).closest('.bundle-qty').find('.qty').val(parseInt($(this).closest('.bundle-qty').find('.qty').val()) + 1);
		}

});










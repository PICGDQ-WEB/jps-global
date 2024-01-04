function filterSearch()
{
    document.getElementById('filterSearch').addEventListener('input', function () {
        const searchText = this.value.toLowerCase();
    
        const products = document.querySelectorAll('#products .product__card');
    
        products.forEach((product) => {
            const spanText = product.querySelector('span').innerText.toLowerCase();
    
            if (spanText.includes(searchText)) {
                $(product).parent().show();
                $('#noResultFound').hide();
            } else {
                $('#noResultFound').show();
                $(product).parent().hide();
            }
        });
    });
}

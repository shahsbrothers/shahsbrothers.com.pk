$(document).ready(function() {
    $.ajax({
        "url": "admin/core/get_products.php",
        "type": "GET",
        "datatype": 'json',
        "success": function(data) {
            products = JSON.parse(data)
            console.log(products)

            for (i = 0; i < products.length; i++) {
                products[i][3] = products[i][3].substring(3);
            }

            html = ``;
            for (i = 0; i < products.length; i++) {
                html += addProduct(products[i])
            }

            document.getElementById("products_listing").innerHTML = html;
        }
    });

});

function addProduct(product) {
    item = `
<div class="col-lg-4 col-md-6 portfolio-item filter-web">
<div class="portfolio-wrap">
    <img src="` + product[3] + `" class="img-fluid" alt="">
    <div class="portfolio-info">
        <h4>` + product[1] + `</h4>
        <p>` + product[2] + `</p>
        <div class="portfolio-links">
            <a href="` + product[3] + `" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="fas fa-expand"></i></a>
        </div>
    </div>
</div>
</div>
`
    return item;
}
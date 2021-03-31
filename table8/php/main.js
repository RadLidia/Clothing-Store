
let id_product = $("input[name*='id_product']");
id_product.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let name = $("input[name*='name']");
    let price = $("input[name*='price']");
    let units_in_stock = $("input[name*='units_in_stock']");
    let manufacturer_id = $("input[name*='manufacturer_id']");



    id_product.val(textvalues[0]);
    name.val(textvalues[1]);
    price.val(textvalues[2]);
    units_in_stock.val(textvalues[3]);
    manufacturer_id.val(textvalues[4]);
})

function displayData(e){
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues =[];

    for(const value of td){
        // console.log(value);
        if(value.dataset.id == e.target.dataset.id){
            //console.log(e.target.dataset.id);
            //console.log(value);
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}

let id_order = $("input[name*='id_order']");
id_order.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let shipping_date = $("input[name*='shipping_date']");
    let customer_id = $("input[name*='customer_id']");
    let employee_id = $("input[name*='employee_id']");
    let shipper_id = $("input[name*='shipper_id']");



    id_order.val(textvalues[0]);
    shipping_date.val(textvalues[1]);
    customer_id.val(textvalues[2]);
    employee_id.val(textvalues[3]);
    shipper_id.val(textvalues[4]);


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
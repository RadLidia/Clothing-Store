
let order_id = $("input[name*='order_id']");
order_id.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let amount = $("input[name*='amount']");
    let card_cash = $("input[name*='card_cash']");


    order_id.val(textvalues[0]);
    amount.val(textvalues[1]);
    card_cash.val(textvalues[2]);


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
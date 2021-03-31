
let id_customer = $("input[name*='id_customer']");
id_customer.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let name = $("input[name*='name']");
    let phone = $("input[name*='phone']");
    let age = $("input[name*='age']");
    let credit_limit = $("input[name*='credit_limit']");
    let store_id = $("input[name*='store_id']");



    id_customer.val(textvalues[0]);
    name.val(textvalues[1]);
    phone.val(textvalues[2]);
    age.val(textvalues[3]);
    credit_limit.val(textvalues[4]);
    store_id.val(textvalues[5]);

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
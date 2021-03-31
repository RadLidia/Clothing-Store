
let id_sp = $("input[name*='id_sp']");
id_sp.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let store_id = $("input[name*='store_id']");
    let product_id = $("input[name*='phone']");

    id_sp.val(textvalues[0]);
    store_id.val(textvalues[1]);
    product_id.val(textvalues[2]);
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
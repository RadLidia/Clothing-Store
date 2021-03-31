
let id_shipper = $("input[name*='id_shipper']");
id_shipper.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let contact_name = $("input[name*='contact_name']");
    let contact_phone = $("input[name*='contact_phone']");

    id_shipper.val(textvalues[0]);
    contact_name.val(textvalues[1]);
    contact_phone.val(textvalues[2]);
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
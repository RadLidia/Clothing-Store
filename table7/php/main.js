
let id_manufacturer = $("input[name*='id_manufacturer']");
id_manufacturer.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let company_name = $("input[name*='company_name']");
    let phone = $("input[name*='phone']");

    id_manufacturer.val(textvalues[0]);
    company_name.val(textvalues[1]);
    phone.val(textvalues[2]);
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
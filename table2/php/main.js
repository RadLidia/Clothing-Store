
let id_employee = $("input[name*='id_employee']");
id_employee.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let name = $("input[name*='name']");
    let age = $("input[name*='age']");
    let phone = $("input[name*='phone']");
    let store_id = $("input[name*='store_id']");
    let department_id = $("input[name*='department_id']");

    id_employee.val(textvalues[0]);
    name.val(textvalues[1]);
    age.val(textvalues[2]);
    phone.val(textvalues[3]);
    store_id.val(textvalues[4]);
    department_id.val(textvalues[5]);

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
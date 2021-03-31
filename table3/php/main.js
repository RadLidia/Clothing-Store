
let id_department = $("input[name*='id_department']");
id_department.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let name = $("input[name*='name']");
    let nr_of_employees = $("input[name*='nr_of_employees']");


    id_department.val(textvalues[0]);
    name.val(textvalues[1]);
    nr_of_employees.val(textvalues[2]);

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

let id_store = $("input[name*='id_store']");
id_store.attr("readonly","readonly");

$(".btnedit").click(e =>{
    //console.log("icon clicked");
    let textvalues = displayData(e);
    console.log(textvalues);

    let name = $("input[name*='name']");
    let location = $("input[name*='location']");
    let nr_of_employees = $("input[name*='nr_of_employees']");

    id_store.val(textvalues[0]);
    name.val(textvalues[1]);
    location.val(textvalues[2]);
    nr_of_employees.val(textvalues[3]);
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
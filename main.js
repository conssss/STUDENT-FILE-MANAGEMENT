

let id = $("input[name*='ID']")
id.attr("readonly","readonly");


$(".btnedit").click(e =>{
    let textvalues = display(e);

    ;
    let Course = $("input[name*='s_course']");
    let Year = $("input[name*='s_program']");
    let Block = $("input[name*='s_section']");
    let ID = $("input[name*='s_id']");
    let Lastname = $("input[name*='s_lname']");
    let Firstname = $("input[name*='s_fname']");
    let Email = $("input[name*='s_email']");
    let Age = $("input[name*='s_age']");
    let Gender = $("input[name*='s_gender']");
    let Contactno = $("input[name*='s_cnumber']");

    Course.val(textvalues[0]);
    Year.val(textvalues[1]);
    Block.val(textvalues[2]);
    ID.val(textvalues[3]);
    Lastname.val(textvalues[4]);
    Firstname.val(textvalues[5]);
    Email.val(textvalues[6]);
    Age.val(textvalues[7]);
    Gender.val(textvalues[8]);
    Contactno.val(textvalues[9].replace("$", ""));
});


function display(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}
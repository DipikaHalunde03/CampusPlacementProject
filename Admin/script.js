function addNewWEfield()
{
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("weField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Enter Here");


    let weOb=document.getElementById("we");
    let weAddButtonOb= document.getElementById("weAddButton");

    weOb.insertBefore(newNode, weAddButtonOb);

}

function addNewAQfield()
{
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("eqfield");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Enter Here");


    let aqOb=document.getElementById("aq");
    let aqAddButtonOb= document.getElementById("aqAddButton");

    aqOb.insertBefore(newNode, aqAddButtonOb);
}

function addNewProject()
{
    let newNode = document.createElement("li");
    newNode.textContent = document.getElementById("projectsField").value;

    let projectsList = document.getElementById("projectsList");
    projectsList.appendChild(newNode);
}
function addNewSfield() 
{

    let newNode2 = document.createElement("li");
    newNode2.textContent = document.getElementById("skillField").value;

    let skillList = document.getElementById("skillList");
    skillList.appendChild(newNode2);



}


    function generateCV()
    {
        
            let nameField = document.getElementById("nameField").value;
        
            // Update text content in CV template
            document.getElementById("nameT1").innerText = nameField;
            document.getElementById("nameT2").innerText = nameField;
            document.getElementById("addressT").innerText = document.getElementById("addressField").value;
            document.getElementById("contactT").innerText = document.getElementById("contactField").value;
            document.getElementById("emailT").innerText = document.getElementById("emailField").value;
            document.getElementById("fbT").innerText = document.getElementById("fbField").value;
            document.getElementById("instaT").innerText = document.getElementById("instaField").value;
            document.getElementById("linkedT").innerText = document.getElementById("linkedField").value;

            //professional side data
            document.getElementById("objectiveT").innerText = document.getElementById("objectiveField").value;
            document.getElementById("sT").innerText = document.getElementById("skillField").value;

            //we
        
            let weFields = document.querySelectorAll('.weField');
            let workExperienceList = '';
            
            weFields.forEach(field => {
                if (field.value.trim() !== '') {
                    workExperienceList += `<li>${field.value}</li>`;
                }
            });
            
            document.getElementById('weT').innerHTML = workExperienceList;

            //aq
            let  eqFields= document.querySelectorAll('.eqfield');
            let eduqList = '';
            
            eqFields.forEach(field => {
                if (field.value.trim() !== '') {
                    eduqList += `<li>${field.value}</li>`;
                }
            });
            
            document.getElementById('eqT').innerHTML = eduqList;

           
                // Other CV generation code...
            
                // Extract project names from the list
                let projectItems = document.querySelectorAll("#projectsList li");
                let projects = [];
                projectItems.forEach(item => {
                    if (item.textContent.trim() !== "") {
                        projects.push(item.textContent.trim());
                    }
                });
            
                // Update the project list in the CV template
                let projectsListCV = document.getElementById("pT");
                projectsListCV.innerHTML = "";
                projects.forEach(project => {
                    let li = document.createElement("li");
                    li.textContent = project;
                    projectsListCV.appendChild(li);
                });
    
        document.getElementById("cv-form").style.display="none";
        document.getElementById("cv-template").style.display="block";
    }
    
    
  
 
    function printCV()
    {
        window.print();
    }

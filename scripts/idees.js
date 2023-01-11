/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
  
function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
        } else {
        a[i].style.display = "none";
        }
    }
}

/*ajouter un ingrédiant a la liste*/
let ingrediantList=[];
$(document).ready(function(){
    let ingrediantOptionChoisi = $(".ingrediant"); 
    ingrediantOptionChoisi.click(function(event){
        let ingrediant= event.target.textContent;
        if (!ingrediantList.includes(ingrediant)){
        ingrediantList.push(ingrediant);
        let actualListe=$("#liste-des-ingrediants");
        actualListe.empty();
        for (let i = 0; i < ingrediantList.length; i++){

            let ingrediantListItem = document.createElement("li");
            ingrediantListItem.innerText=ingrediantList[i];
            let supprimerIngrediantButton = document.createElement("button");
            supprimerIngrediantButton.innerText="Suprimer";
            supprimerIngrediantButton.classList.add("btn-secondary");
            supprimerIngrediantButton.classList.add("btn");
            supprimerIngrediantButton.addEventListener("click",function(){
                ingrediantList.splice(ingrediantList.indexOf(ingrediantList[i]),1);
                supprimerIngrediantButton.parentElement.remove();
            })

            ingrediantListItem.appendChild(supprimerIngrediantButton);
            actualListe.append(ingrediantListItem);
        }
        }
    })

    
})

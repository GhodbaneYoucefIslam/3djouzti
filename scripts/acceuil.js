//menu pour basculer entre les catégories
let buttons = document.querySelectorAll(".category-button");
buttons.forEach(button => {
    button.addEventListener("click",function(){
        let categoryName=button.getAttribute("name");
        let visiblecategory= document.querySelector("section#"+categoryName);
        let hiddenCategories= document.querySelectorAll(".category-content");
        hiddenCategories.forEach(hiddenCategory => {
            hiddenCategory.style.display="none";
        });
        visiblecategory.style.display="block";
    })
});
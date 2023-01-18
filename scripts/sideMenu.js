let i =1;
$(document).ready(function(){
    sideMenuLink.click(function(e){
        console.log("edjddjioijo");
        let id=e.target.id;
        sideMenuLink.removeClass("active");
        let clickedLink=$("#"+id);
    })

});
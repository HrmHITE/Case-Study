
//Add one event popup after submit download PDF in the form jQuery

jQuery("form").submit(function(event){
    event.preventDefault();
    var a = document.createElement('a');
    a.href = '/wp-content/uploads/2022/12/case-study-arrow-boutique.pdf';
    a.download = 'Arrow Boutique.pdf';
    a.click();
});


//CRM BTN changed after hover
//Used MouseOver and MouseOut JQuery Function

jQuery(document).ready(function(){
    jQuery("#btncrmmain").mouseover(function(){
        jQuery(this).html("Try FREE for 14 days<br><span>or book a demo with one of our specialists.</span>");
        jQuery(this).find("span").css({"font-size":"12px","color":"#182150"});
    });
    jQuery("#btncrmmain").mouseout(function(){
        jQuery(this).text("Try FREE for 14 days");
    });
});
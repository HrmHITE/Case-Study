
//Add one event popup after submit download PDF in the form jQuery

jQuery("form").submit(function(event){
    event.preventDefault();
    var a = document.createElement('a');
    a.href = '/wp-content/uploads/2022/12/case-study-arrow-boutique.pdf';
    a.download = 'Arrow Boutique.pdf';
    a.click();
});

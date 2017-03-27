
 $(document).ready(function(){

  	$("p3").hide();
  	$("button.show").click(function(){
    	$("p3").toggle(500);
  	});
     
     
     
     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});
     
     
     function copyclipboard(intext) {

window.clipboardData.setData('Text', intext);

} 
     
     function CopierCode(Code)
{
      textRange = document.body.createTextRange();
      textRange.moveToElementText(Code);
      textRange.execCommand("Copy");
}
     
     
     
  });





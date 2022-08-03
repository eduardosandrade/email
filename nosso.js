$(document).ready(function() {

	
$('#conteudo').keydown(function(event){
	const textarea = document.querySelector('textarea');
	if(event.keyCode === 9){
        event.preventDefault();
        const start = textarea.selectionStart;
        const end = textarea.selectionEnd;
        textarea.value = textarea.value.substring(0, start) + "\t" + textarea.value.substring(end);
        textarea.selectionStart = start+1;
        textarea.selectionEnd = start+1;
    }

});

		





});





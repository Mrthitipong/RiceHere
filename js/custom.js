$(function(){
$("#box").dialog({
	autoOpen: false,
	title: 'You are login!',
	width: 500,
	height: 500,
	modal: true,
resizable: false,
draggable: false,
	buttons: [
		{
text: 'Okay!',
click: function(){
alert('You said Okay!');
}
},
		{
text: 'No!',
click: function(){
$(this).dialog('close');
}
}
]
});
});

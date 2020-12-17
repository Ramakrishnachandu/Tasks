$(document).ready(function () {
    $('.sbs-toggle-btn').click(function () {
        $('.b-topics-list').css('display', 'none');
    } );
} );

function openNav(){
	document.getElementById("sidenav").style.width="250px";

	
}
function closeNav(){
	document.getElementById("sidenav").style.width="0";
}
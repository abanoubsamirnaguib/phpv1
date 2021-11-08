
$(function(){

if (!$("alert-acc").hasClass("active")){$(".alert-acc").hide();}
$(".submit-acc").click(function(){
    $(".alert-acc").show().addClass("active");
});
});
/**
 * edit by woden 20160901
 * 
 */
$(".btnReg").click(function() {
    var uname = $("input[name=uname]").val();
    var uemail = $("input[name=uemail]").val();
    var upwd = $("input[name=upwd]").val();
    $.ajax({
        url: '../manage/reg.php',
        type: 'POST',
        data: "uname="+uname+"&uemail="+uemail+"&upwd="+upwd
    })
    .done(function() {
        alert("success");
    })
    .fail(function() {
        alert("error");
    })
    .always(function() {
        alert("complete");
    });
    
});
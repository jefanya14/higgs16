function IDalexhdi(){
   var playid = $("#idalexhdi").val();
   $(".respon").show();
   $(".wrong").hide();
   $(".tidakada").hide();
   setTimeout(() => {
       $(".respon").hide();
    },3000)
   if(playid == "" || playid == null || playid.length <= 4)
   {
   $(".wrong").show();
   $(".respon").hide();
   $(".tidakada").hide();
   setTimeout(() => {
       $(".wrong").hide();
    },3000)
   return false;
   }else{
   $(".wrong").hide();
   $(".respon").hide();
   }
   
   $.ajax({
   type : 'POST',
   url : 'system/trueid.php?playid='+playid+'',
   beforeSend : function(){
         $(".respon").show();
   },
   success : function(data){
   if(data == "" || data == null){
   $(".respon").hide();
   $(".tidakada").show();
   setTimeout(() => {
       $(".tidakada").hide();
    },3000)
    return false;
   }else{
   $(".trueid").hide();
   $("#toastnick").text(data);
   $("#toastplayid").text(playid);
   $("input#ressplayid").val(playid);
   $("input#ressnick").val(data);
    $(".respon").hide();
    $('#echolog').hide();
    $('#echoout').show();
   }
   }
   })
   
}
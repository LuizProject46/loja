$(document).ready(function(){
    console.log('oi')
    // if($("#success_page").show()){
    //     setTimeout(()=>{
    //         $("#success_page").fadeOut()
    //     },10000)
    // }

    // if($("#error_message").show()){
    //     setTimeout(()=>{
    //         $("#error_message").fadeOut()
    //     },10000)
    // }

    $("input[name='phone']")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
    
})

$("form").on('submit',function (event){
    event.preventDefault()
    let phone = $("input[name='phone']").val()
    let email =  $("input[name='email']").val()
    let msg = $("textarea[name='msg']").val()
    let name = $("input[name='name']").val()
    
    let params = { 
   
        type: 'send_mail',
        name: name,
        msg: msg,
        phone: phone,
        email: email
    }
    
   $.ajax({
       url: (window.site_url + 'api'),
       method: 'POST',
       dataType: 'json',
       data: params,
       beforeSend: function (){
            $("button").html('<i class="fa fa-spin fa-spinner"></i> Enviando...')
       },
       success: function (data){
        if(data.success == 1){
             $("#success_page").fadeIn().html(data.msg)
            setTimeout(()=>{
                $("#success_page").fadeOut().html(data.msg)
            },10000)
            
            $("input").val("")
            $("textarea").val("")

            
        }else{
            $("#error_message").fadeIn().html(data.msg)
            setTimeout(()=>{
                $("#error_message").fadeOut()
            },10000)
            
        }
    
        $("button").html('Enviar')
       }
   })
   return false
 })
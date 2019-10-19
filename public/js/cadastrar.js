var ajaxCall = undefined;
var ajaxHold = undefined;
var objCaller = undefined;

var sendData = function(){
    $('<div class="modal fade" id="enviando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">Sistema</h4><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div><div class="modal-body"><p>Enviando...</p></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Voltar ao Formulário</button></div></div></div></div>').modal('show').on('shown.bs.modal', function(){
        $.ajax({
            type:"POST",
            url: '/cadastro',
            data: $('form').serialize(),
            success: function(data) {
                var jsonData = data;
                if(jsonData != undefined){
                    if(jsonData.Status == 'FAIL'){
                        $('#enviando').modal('hide');
                        $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">Erro</h4><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button></div><div class="modal-body"><p>'+jsonData.Message+'</p></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div></div></div></div>').modal('show');
                    }
                    else{
                        $('#enviando').modal('hide');
                        $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">Sucesso</h4><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button></div><div class="modal-body"><p>'+jsonData.Message+'</p></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div></div></div></div>').modal('show').on('hide.bs.modal', function(){
                            location.href=($('#redirect').val())+'/home';
                        });
                    }
                }
                else {
                    $('#enviando').modal('hide');
                    $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">Erro Desconhecido</h4><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button></div><div class="modal-body"><p>Não foi possível identificar a fonte do problema, entre em contato comigo através do meu email!</p></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button></div></div></div></div>').modal('show');
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
                $('#enviando').modal('hide');
                console.log(xhr);
                $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel2"><i style="color:#ffd600" class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p>Ocorreu um erro inesperado, tente novamente!</p></div></div></div>').modal('show');
            }
        });
    });
};
var showError = function(strObject,strTitle,strMessage){
    $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel">'+strTitle+'</h4><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div><div class="modal-body"><p>'+strMessage+'</p></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Voltar ao Formulário</button></div></div></div></div>').modal('show');
};

var validator=function(r){for(r=(r=(r=jQuery.trim(r)).replace(".","")).replace(".",""),cpf=r.replace("-","");cpf.length<11;)cpf="0"+cpf;var c=[],f=new Number,a=11;for(i=0;i<11;i++)c[i]=cpf.charAt(i),i<9&&(f+=c[i]*--a);for((x=f%11)<2?c[9]=0:c[9]=11-x,f=0,a=11,y=0;y<10;y++)f+=c[y]*a--;return(x=f%11)<2?c[10]=0:c[10]=11-x,cpf.charAt(9)==c[9]&&cpf.charAt(10)==c[10]&&!cpf.match(/^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/)};

var validateFields = function(){

    var tempString = $('#nome').val();
    if(tempString.length < 3){
        showError('#nome','Olá!','O campo nome é obrigatório.');
        return false;
    }


    var tempString = /^(\([1-9][1-9]\) [0-9][0-9]{4}-[0-9]{4})|(\([1-9][1-9]\) [0-9]{4}-[0-9]{4})$/;
    var tempBoolean = true;
    if(!tempString.test($('#telefone').val()))
        tempBoolean = false;
    if(!tempBoolean){
        showError('#telefone','Ops!','O campo telefone é obrigatório, preencha somente com números conforme o exemplo<br> Ex: (12) 3333-3333<br> DDD mais o número do telefone!');
        return false;
    }



    var tempString = $('#rua').val();
    if(tempString.length == 0){
        showError('#rua','Olá!','O campo Logradouro é obrigatório.');
        return false;
    }

    var tempString = $('#numero').val();
    if(tempString.length == 0){
        showError('#numero','Olá!','O campo Nº é obrigatório.');
        return false;
    }

    var tempString = $('#bairro').val();
    if(tempString.length == 0){
        showError('#bairro','Olá!','O campo Bairro é obrigatório.');
        return false;
    }

    var tempString = $('#cidade').val();
    if(tempString.length == 0){
        showError('#cidade','Olá!','O campo Cidade é obrigatório.');
        return false;
    }

    var tempString = $('#estado').val();
    if(tempString.length != 2){
        showError('#estado','Olá!','O campo Estado é obrigatório.');
        return false;
    }


    var tempString = /^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/;
    var tempBoolean = true;
    if(!tempString.test($('#email').val()))
        tempBoolean = false;
    if(!tempBoolean){
        showError('#contatoEmail','Olá!','O campo email é obrigatório, preencha com um e-mail válido!<br> Ex: seuemail@seuprovedor.com.br');
        return false;
    }

    var tempString = $('#email_confirm').val();
    if(tempString.length == 0 || tempString != $('#email').val()){
        showError('#email_confirm','Olá!','Os campos de E-mail devem ser idênticos.');
        return false;
    }

    var tempString = $('#password').val();
    if(tempString.length < 8){
        showError('#password','Olá!','O campo Senha é obrigatório e deve ter no mínimo 8 caracteres.');
        return false;
    }

    var tempString = $('#password_confirmation').val();
    if(tempString.length == 0 || tempString != $('#password').val()){
        showError('#password_confirmation','Olá!','Os campos de Senha devem ser idênticos.');
        return false;
    }

    return true;
};
$(document).ready(function(){
    $('#cadastrar').click(function(){
        if(validateFields()){
            sendData();
        }
        return false;
    });
});
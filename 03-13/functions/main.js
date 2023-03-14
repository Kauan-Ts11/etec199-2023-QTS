import { Usuario } from "../model/usuario.js";
import { retornaUsuario } from "./http.js";


document.addEventListener(
    'mouseover', () => {
        let usuario = retornaUsuario();
            carregaInformacoesUsuario(usuario);
    }
)

function carregaInformacoesUsuario(usuario){

    document.getElementById('txtNome').value = usuario.nome,
    document.getElementById('txtCpf').value = usuario.cpf,
    document.getElementById('txtRendimento').value = 'R$ '+ usuario.rendimento,
    document.getElementById('txtAliquota').value = usuario.aliquota + '%',
    document.getElementById('txtImposto').value = 'R$ '+ usuario.imposto
    
}
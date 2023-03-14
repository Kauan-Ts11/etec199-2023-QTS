import { Usuario } from "../model/usuario.js";

export function retornaUsuario() {
    const urlParams = new URLSearchParams(window.location.search);

    return objUsuario(
        urlParams.get('txtNome'), urlParams.get('txtCpf'), urlParams.get('txtRendimento')
    )
}

function objUsuario(nome, cpf, rendimento) {
    return new Usuario(nome, cpf, rendimento)
}

import { Pessoa } from "../model/Pessoa.js";

export function retornaPessoa() {
    const urlParams = new URLSearchParams(window.location.search);

    return objPessoa(
        urlParams.get('txtNome'), urlParams.get('txtAltura'), urlParams.get('txtPeso')
    )
}

function objPessoa(nome, altura, peso) {
    return new Pessoa(nome, altura, peso)
}
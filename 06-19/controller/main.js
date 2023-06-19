import { Pessoa } from "../model/Pessoa.js";
import { retornaPessoa } from "./http.js";

document.addEventListener(
    'mouseover', () => {
        let pessoa = retornaPessoa();
        carregaInformacoesPessoa(pessoa);
    }
)

function carregaInformacoesPessoa(pessoa) {
    document.getElementById('txtNome').value =  pessoa.nome,
    document.getElementById('txtAltura').value = pessoa.altura + '  metros',
    document.getElementById('txtPeso').value = pessoa.peso + ' kg',
    document.getElementById('txtImc').value = pessoa.imc,
    document.getElementById('txtCatImc').value = pessoa.categoriaImc
}
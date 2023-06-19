export class Pessoa {


    //CONSTRUTOR

    constructor (nome, altura, peso) {
        this.nome = nome;
        this.altura = altura;
        this.peso = peso;
        this.imc = this.calcularImc();
        this.categoriaImc = this.catImc();
    }


    //MÉTODO CALCULAR IMC 

    calcularImc() {
        return (this.peso / (this.altura * this.altura)).toFixed(1);
    }


    // MÉTODO CATEGORIA DO IMC

    catImc() {

        if(this.imc <= 0) return "INDEFINIDO"

        if(this.imc <= 18.5) {return "Abaixo do Peso"}

        else if (this.imc > 18.5 && this.imc <= 25) {return "Peso Normal"}

        else if (this.imc > 25 && this.imc <= 30) {return "Sobrepeso"}

        else if (this.imc > 30 && this.imc <= 35) {return "Obesidade Grau I"}

        else if (this.imc > 35 && this.imc <= 40) {return "Obesidade Grau II"}

        else if (this.imc > 40) {return "Obesidade Grau III"}
    }

}
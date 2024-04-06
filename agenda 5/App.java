//
// Você foi contratado para desenvolver um programa que implemente um sistema de desconto progressivo para uma loja online. Este sistema deve aplicar
// descontos de acordo com o valor total da compra. As regras de desconto são as seguintes:

// Se o valor total da compra for maior ou igual a R$ 300,00, o cliente recebe um desconto de 15%.
// Escreva um programa em Java que solicite ao usuário que insira o valor total da compra e, em seguida, calcule e exiba o valor do desconto a ser aplicado
// e o valor total a ser pago pelo cliente após o desconto.

import java.util.Scanner; //importando a biblioteca scanner.

public class App {
    public static void main(String[] args) throws Exception {
       Scanner leitor = new Scanner(System.in); //iniciando o scanner.

       System.out.println("Qual foi o valor final da sua compra? ");
       double valor = leitor.nextDouble();

      if (valor < 200){
        System.out.println("Voce recebeu desconto de 5% e pagara " + (String.format("%.1f",(valor -(valor * 0.05)))) + " reais");
      } //Se o valor total da compra for menor do que R$ 200,00, o cliente recebe um desconto de 5%.
      
      if(valor >=200  && valor <300){
        System.out.println("Voce recebeu desconto de 10% e pagara " + (String.format("%.1f",(valor -(valor * 0.10)))) + " reais");
      }// Se o valor total da compra for maior ou igual a R$ 200,00 e menor que R$ 300,00, o cliente recebe um desconto de 10%.

      if(valor >=30){
        System.out.println("Voce recebeu desconto de 15% e pagara " + (String.format("%.1f",(valor -(valor * 0.15)))) + " reais");
      }

    }
}

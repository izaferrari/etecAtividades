//O escritório de Despachante Vale Card é uma empresa especializada em documentação de
// veículos atuando diretamente com os órgãos de trânsito. Entre suas atividades,
// está informar para seus clientes o mês de vencimento do IPVA de seus veículos.
// Para isso, o cliente fornece o número final da placa do veículo, em seguida deve ser
// apresentado o mês que o IPVA deve ser pago. Elabore um programa em linguagem Java que receba o número final da placa do veículo,
// e exiba uma mensagem informando o período que o cliente tem para pagamento do IPVA.
// Caso a placa informada esteja fora da faixa entre 0 e 09, o programa deverá exibir uma mensagem informando
// o valor digitado está incorreto.
//
//

import java.util.Scanner;
public class Main {
    public static void main(String[] args){
     Scanner leitor = new Scanner(System.in);//perguntando o final da placa.
        System.out.println("Qual é o final da sua placa? ");
        int placa = leitor.nextInt();

        //usando switch case para seleçao de opçoes.
        switch (placa){
            case 1:
                System.out.println("Pagamento até 30/04");
                break;
            case 2:
                System.out.println("Pagamento até 31/05");
                break;
            case 3:
                System.out.println("Pagamento até 30/06");
                break;
            case 4:
                System.out.println("Pagamento até 31/07");
                break;
            case 5:
                System.out.println("Pagamento até 31/08");
                break;
            case 6:
                System.out.println("Pagamento até 30/09");
                break;
            case 7:
                System.out.println("Pagamento até 31/10");
                break;
            case 8:
                System.out.println("Pagamento até 30/11");
                break;
            case 9:
                System.out.println("Pagamento até 31/12");
                break;
            default:
                System.out.println("O valor esta incorreto.");
            break;
        }

    }

}
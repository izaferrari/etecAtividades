//importtando a biblioteca.
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //iniciando o scanner.
        Scanner leitor = new Scanner(System.in);

        //perguntando qual é o modelo do carro.
        System.out.println("Qual é o modelo do carro? ");
        String modelo = leitor.nextLine();

        //perguntando valor da diária para locação.
        System.out.println("Qual é o valor diario para locaçao? ");
         double valorDiario = leitor.nextDouble();
        leitor.nextLine();

        //perguntando quantidade de dias de locação.
        System.out.println("Quantos dias ficara alugado? ");
        int dias = leitor.nextInt();
        leitor.nextLine();

        //perguntando quantidade de Km percorridos.
      System.out.println("Quantos km serao percorridos? ");
        double km = leitor.nextDouble();
       leitor.nextLine();
       
      //  `printando` as informaçoes.
        System.out.println("O carro é um " + modelo + ". Você pagará " + String.format("%.2f", km * 0.20) + " pela viagem.");

    }
}
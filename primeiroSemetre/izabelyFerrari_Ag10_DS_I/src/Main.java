/*Paulo, o estudante do Ensino Médio que você conheceu no Mergulhando no Tema, agora deseja
criar um programa que realize a soma de todos os elementos de uma matriz 3x3, contendo números
inteiros. Elabore a codificação em linguagem Java de um software que resolva o problema de Paulo.
IMPORTANTE: O programa deverá solicitar a digitação dos valores e armazenar numa matriz 3x3.*/
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner leitor = new Scanner(System.in); // Criando scanner
        int[][] matriz = new int[3][3]; // Definindo o tamanho da matriz
        int soma = 0; // Iniciando uma variável com 0
        System.out.println("Digite os valores da matriz 3x3:"); // Pedindo para digitar
//Para cada linha i de 0 até 2:
//    Para cada coluna j de 0 até 2:
//        Ler um valor da entrada do usuário usando o scanner "leitor"
//        Armazenar o valor na posição (i, j) da matriz
//        Adicionar o valor lido à variável soma
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                matriz[i][j] = leitor.nextInt(); // Usando o scanner "leitor"
                soma += matriz[i][j];
            }
        }
        // Exibindo a soma
        System.out.println("A soma de todos os elementos da matriz é: " + soma);
    }
}

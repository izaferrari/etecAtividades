//precisei pedir ajuda ao chatgpt para a lógica.

//        Importar a classe Scanner para permitir a entrada de dados do usuário.
//        Criar um objeto Scanner para ler as entradas do usuário.
//        Inicializar os contadores para as respostas "EXCELENTE" e "RUIM" com zero.
//        Utilizar um loop for para realizar a pesquisa com 50 entrevistados.
//        Dentro do loop, solicitar o nome, idade e opinião do entrevistado.
//        Verificar a opinião do entrevistado e incrementar o contador correspondente.
//        Após o loop, exibir na tela a quantidade de respostas "EXCELENTE" e "RUIM".
//        Agora, vamos expandir para testar com 10 entrevistados:
//
//        Inicializar um loop for com 10 iterações.
//        Dentro do loop, solicitar o nome, idade e opinião do entrevistado.
//        Verificar a opinião do entrevistado e incrementar o contador correspondente.
//        Após o loop, exibir na tela a quantidade de respostas "EXCELENTE" e "RUIM".
import java.util.Scanner;
public class Main {
    public static void main(String[] args){
    Scanner leitor = new Scanner(System.in);
    int excelente = 0; //iniciei o contador para as respostas.
    int bom = 0;
    int ruim = 0;
    int opiniao; //tive que declarar ela fora, pois nao era possivel chama-la no switch quando estava somente dentro do for
        for (int i = 0; i < 10; i++)//o interador começa com 0, eu vou fazer o laço ate 50 vezes, o  i++ é para que ele seja repetido 50 vezes.
         {
             System.out.println("Qual é o seu nome? ");
             String nome = leitor.nextLine(); //estou perguntando o nome e armazenando na string nome.
             System.out.println("Qual é a sua idade? ");
             int idade = leitor.nextInt();//estou perguntando aidade e armazenando no int idade/
             leitor.nextLine(); //eu tive que adicionar isso pois estava ficando errado quando executava.

             System.out.println("1-EXCELENTE\n2-BOM\n3-RUIM\nQual é a sua opiniao sobre o atendimento? Digite apenas o numero.");
             opiniao = leitor.nextInt();
             leitor.nextLine();
             switch(opiniao){
                 case 1:
                     excelente++; //o contador esta adicionando um numero toda vez que alguem digitar 1 para nota
                     break;
                 case 2:
                     bom++;
                     break;
                 case 3:
                     ruim++;
                     break;
                 default:
                     System.out.println("Digite uma opçao valida.");
                     break;
             }
         }

        System.out.println("Quantidade de excelente: " + excelente);
        System.out.println("Quantidade de bom: " + bom);
        System.out.println("Quantidade de ruim: " + ruim);
    }
}
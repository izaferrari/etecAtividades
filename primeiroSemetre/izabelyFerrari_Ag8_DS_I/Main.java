/*Um cinema possui capacidade de 40 lugares e está sempre com ocupação total. Certo dia,
cada espectador respondeu a um questionário, no qual constava:
  - idade;
  - opinião em relação ao filme, segundo as seguintes notas:
      A - Ótimo /  B - Bom / C - Regular  / D - Ruim  / E -  Péssimo.
Elabore a codificação em JAVA para que leia os dados, calcule e exiba na tela:
 - a quantidade de respostas "ótimo";
- a média de idade das pessoas que responderam "ruim"
- a porcentagem de respostas "péssimo".
Inicialização das variáveis: */



import java.util.Scanner; //baixando a biblioteca necessaria.
public class Main {
    public static void main(String[] args) {
        Scanner leitor = new Scanner(System.in);
        int idade = 0, capacidade = 40, totalEspectadores=0, respostasOtimo =0, respostasRuins =0,respostasPessimo =0, somaIdadeRuim =0;//descobri que nao posso fazer int idade, A, B, C, D, E = 0;
        char opiniao; //usei char porque ela representa um unico caractere.
        while (totalEspectadores <= capacidade) //quando a total de espectadores for menor ou igual a capacidade
             {
            System.out.print("Idade do espectador: ");
             idade = leitor.nextInt();
            totalEspectadores++; //isso significa que estou somando mais um espectador a variavel

            System.out.print("Qual é a sua opiniao sobre o filme? A - Ótimo /  B - Bom / C - Regular  / D - Ruim  / E -  Péssimo. (digitar em letra maiuscula) ");
                opiniao = leitor.next().charAt(0); //nao existe next.char no scanner :(


            switch(opiniao)/*agora eu vou ver as opinioes e ir mudando as variaveis de acordo com as respostas.*/{
                case 'A':
                    respostasOtimo++;
                    break;
                case 'B':
                    break;
                case 'C':
                    break;
                case 'D':
                    respostasRuins++;
                    somaIdadeRuim+= idade; //coloquei idade a var soma das idades
                    break;
                case 'E':
                    respostasPessimo++;
                    break;
                default:
                    System.out.println("opçao invalida");
                break;
            }
        }
       double mediaIdadeRuins=  respostasRuins > 0 ? (double) somaIdadeRuim/ respostasRuins : 0; // calcular a media de idade das pessoas que responderam "ruim", TIVE QUE COLOCAR respostasRuins > 0 ? (double)// PORQUE
        // "Se você está enfrentando o problema de integer division in floating-point context ao calcular a média de idade das pessoas que responderam "ruim", isso significa que você está tentando dividir
        // dois inteiros e atribuir o resultado a uma variável do tipo double."
       double porcentagemPessimo= (double) respostasPessimo / totalEspectadores * 100; //para saber a porcentagem, eu pego o total de respostas e divido pelo total de espectadores, MESMA COISA AQUI COM O (DOUBLE)
        // multiplico por 100 para ficar certinho

        System.out.println("a quantidade de respostas 'otimo' é:  "+ respostasOtimo);
        System.out.println("a média de idade das pessoas que responderam 'ruim' é: "+ mediaIdadeRuins);
        System.out.println("a porcentagem de respostas 'péssimo' é: "+ porcentagemPessimo +"%");

    }
}
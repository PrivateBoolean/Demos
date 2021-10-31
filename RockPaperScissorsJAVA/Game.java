class Game
{
    public static void main(String[] args)
    {
        int winsNeeded = 0;
        int computersChoice = 0;
        int playerWins = 0;
        int computerWins = 0;
        int result = 0;
        int ultimateWinner = 0;
        int playersChoice = 0;
        char playAgain = 'Y';

        System.out.println("\n\t ROCK, PAPER, SCISSORS\n");
        System.out.println("To choose the amount of wins needed to decide the ultimate winner,\ntype in the number and hit ENTER.");
        System.out.println("To play the game, choose the corresponding number and hit ENTER.");
        
        do {
            System.out.print("Wins needed: ");
            winsNeeded = UserInputs.userInt();
            System.out.println("\n\t1. ROCK\n\t2. PAPER\n\t3. SCISSORS");
            do {

            if (playerWins < winsNeeded && computerWins < winsNeeded) {
                
                computersChoice = GameMethod.computersHand();
 
                do {
                    playersChoice = UserInputs.userInt();
                } while (playersChoice < 1 || playersChoice > 3);

                result = GameMethod.roundWinner(playersChoice, computersChoice);

                if (result == 1) {
                    playerWins++;
                    System.out.println("Round winner: Player");
                }
                if (result == 2) {
                    computerWins++;
                    System.out.println("Round winner: Computer");
                }
                if (result == 3) {
                    System.out.println("Draw");
                }
            } else {
                ultimateWinner = GameMethod.ultimateWinner(playerWins, computerWins);

                switch (ultimateWinner) {
                    case 1:
                        System.out.println("\n\tPLAYER WINS!\n");
                        break;
                    case 2:
                        System.out.println("\n\tCOMPUTER WINS!\n");
                        break;
                    default:
                        System.out.println("Something went wrong.");
                        break;
                }

                }
            } while (ultimateWinner == 0);
            ultimateWinner = 0;
            winsNeeded = 0;
            System.out.println("Would you like to play again? Y/N ");
            playAgain = UserInputs.userChar();
            playerWins = 0;
            computerWins = 0;
        } while (playAgain == 'Y' || playAgain == 'y');

        System.out.println("\nOkay! Thanks for playing!\n\tGG, bye!\n");

    } // End main method
} // End
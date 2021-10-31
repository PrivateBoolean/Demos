class GameMethod
{
    public static int computersHand()
    {
        int computerSays = 1 + (int) (Math.random() * 3);
        return computerSays;
    }

    public static int roundWinner(int playersChoice, int computersChoice)
    {

        // result: 1 = player wins, 2 = computer wins, 3 = draw

        int result = 0;
        if (playersChoice == 1 && computersChoice == 3 || playersChoice == 2 && computersChoice == 1 || playersChoice == 3 && computersChoice == 2)
        {
            result = 1;
        }
        
        if (computersChoice == 1 && playersChoice == 3 || computersChoice == 2 && playersChoice == 1 || computersChoice == 3 && computersChoice == 2)
        {
            result = 2;
        }

        if (computersChoice == 1 && playersChoice == 1 || computersChoice == 2 && playersChoice == 2 || computersChoice == 3 && computersChoice == 3)
        {
            result = 3;
        }
        return result;
    }

    public static int ultimateWinner(int playerWins, int computerWins)
    {

        // ultimateWinner: 1 = player wins, 2 = computer wins

        int ultimateWinner = 0;
        if (playerWins > computerWins) {
            ultimateWinner = 1;
        }
        if (computerWins > playerWins) {
            ultimateWinner = 2;
        }

        return ultimateWinner;
    }

} // End
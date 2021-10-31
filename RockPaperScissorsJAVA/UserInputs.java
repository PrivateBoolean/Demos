import java.io.*;
class UserInputs {

    /*  This class is based on a class the university provided us in the programming course. I went ahead and wrote this based on that class, because
        I wanted to learn how to take user inputs in a better, stable way. Only int and char are needed in this game. */

    static BufferedReader readUser;

    public static int userInt() {
        int userInt = -1;
        boolean noError;
        do
            try {
                userInt = Integer.parseInt(readUser.readLine());
                noError = true;
            } catch (Exception e) {
                System.out.println("Invalid integer! Try again.");
                noError = false;
            }
        while (!noError);
        return userInt;
    }

    public static char userChar() {
        String userChar = null;
        try {
            userChar = readUser.readLine();
            return userChar.charAt(0);
        } catch (Exception e) {
            return ' ';
        }
    }

    static {
        readUser = new BufferedReader(new InputStreamReader(System.in));
    }

} // End
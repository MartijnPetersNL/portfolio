package main;
/**
 * <h1>Program description</h1>
 * @author MartijnPeters
 * @version 1.0.0
 * @since 2020-04-23
 * @docRoot
 * <p>
 */
import javax.swing.JOptionPane;

public class Main {
	public static void main(String[] args) {
	
		String fn =JOptionPane.showInputDialog("Enter first number");
		String sn =JOptionPane.showInputDialog("Enter second number");
		
		int num1 = Integer.parseInt(fn);
		int num2 = Integer.parseInt(sn);
		int sum = num1 + num2;
		
		JOptionPane.showMessageDialog(null,"The answer is" +sum, "the title", JOptionPane.PLAIN_MESSAGE);
	}
}

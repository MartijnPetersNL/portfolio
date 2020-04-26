package main;
import java.awt.*;
import javax.swing.*;
public class Main extends JPanel{

	public static void main(String[] args) {

		Window window1 = new Window();
		window1.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		window1.setSize(230,280);
		window1.setResizable(true);
		window1.setVisible(true);
	}

}

package main;
import java.awt.*;
import javax.swing.*;

public class DrawOval extends JPanel{
	
	private int d = 10; //shape diameter
	
	public void paint(Graphics g) { //paint not PaintComponent
		super.paintComponent(g);
		g.fillOval(10, 10, d, d);
		g.setColor(Color.black);
	}
	
	public void setD(int newD) { //sets diamenter of oval
		d = (newD >= 0 ? newD : 10);
		repaint();
	}
	// for layout maneger
	public Dimension getPreferredSize() {
		return new Dimension(200,200);
	}
	// for layout maneger minimal size
	public Dimension getMiniumSize()  {
		return new Dimension(200,200);
	}
}

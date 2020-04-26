package main;
import java.awt.*;
import javax.swing.*;
import javax.swing.event.*;

public class Window extends JFrame{

	private JSlider slider1;
	private DrawOval myPanel;
	
	public Window() {
		super("Example title");
		myPanel = new DrawOval();
		myPanel.setBackground(Color.green);
		
		slider1 = new JSlider(SwingConstants.HORIZONTAL,0,200, 10);
		slider1.setMajorTickSpacing(10);
		slider1.setPaintTicks(true);
		
		slider1.addChangeListener(
				new ChangeListener() {
					public void stateChanged(ChangeEvent e) {
						myPanel.setD(slider1.getValue());
					}
				}
			);
			
			add(slider1, BorderLayout.SOUTH);
			add(myPanel, BorderLayout.CENTER);
	}
}

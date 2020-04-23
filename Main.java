/**
 * <h1>Program description</h1>
 * @author MartijnPeters
 * @version 1.0.0
 * @since 2020-04-23
 * @docRoot
 * <p>
 */
package main;

import java.util.*;

public class Main {

	public static void main(String[] args) {
		
	String[] stuff = {"babies", "watermelon", "melons", "fudge"};
	LinkedList<String> thelist = new LinkedList<String>(Arrays.asList(stuff));
	
	thelist.add("pumpkin");
	thelist.addFirst("firstthing");
	
	//convert list to an array
	stuff = thelist.toArray(new String[thelist.size()]);
	
	for(String x : stuff)
		System.out.printf("%s ", x);
	}

}

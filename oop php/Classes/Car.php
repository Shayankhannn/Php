// classes are basically blue print or template eg : we have a factory that has a machine that has a blue print of car it can print as many cars as he want based on blueprint
<?php

// we have property and method inside class -- you should see property and method as same way as you see variable and function which is not true
// property is information about particular object rn information about the car eg brand color vehicle type 

// method is just like a function is what we want the car to do something we wanted to print out something inside the websikte or do something specific we have function that do things that kind of same thing as method are 
// method is just function inside object that are related to this particular object 

// visibility modifier -- its a way to go inside a class and then say who has access to this information who has access to this property and method 

class Car {

  private  $brand = "volvo"; // private --  only this particular class has acces to this property 
  protected  $color  = "green"; // protected -- this means not only this class have access to this property but another child class that extends to this class has access 
//   public  $color  = "green";  public  -- this means everyone has access to this property

}

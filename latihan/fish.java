package latihan;

public class fish implements animal{
    fish(){}
      public void move(){
        String bergerak = "berenang";
        System.out.println(bergerak);
    }

    public void eat() {
        String makan = "plankton";
        System.out.println(makan);
    }
      public static void main(String args[]){
    fish ikan = new fish();
    
    ikan.move();
    ikan.eat();
    }
}

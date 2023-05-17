package latihan;

public class bear implements animal{
        bear(){}
    public void move(){
        String bergerak = "berlari";
        System.out.println(bergerak);
    }

    public void eat() {
        String makan = "daging";
        System.out.println(makan);
    }
    public static void main(String args[]){
    bear beruang = new bear();
    
    beruang.move();
    beruang.eat();
    }
    
}


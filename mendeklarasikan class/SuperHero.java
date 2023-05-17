package mendeklarasikan class;

public class SuperHero {
    String superPowers[];
    void setSuperPowers(String superPowers[]){
        this.superPowers = superPowers;
    }
    void printSuperPowers(){
        for (int i = 0; i < superPowers.length; i++) {
            System.out.println(superPowers[i]);
    }
}
}

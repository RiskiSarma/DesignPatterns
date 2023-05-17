package tugas;

public class panasonic implements ac {
    panasonic(){}
    public void baru(){
        System.out.println("ac baru");
        String dingin = "ac nya dingin sekali";
        System.out.println(dingin);
    }
    public void lama(){
        String panas = "acnya panas karna priyonnya sudah rusak";
        System.out.println(panas);
    }
    public static void main(String[] args){
        panasonic p = new panasonic();
        p.baru();
        p.lama();
    }
}

package intro2bab1;

class Demo{
    static int a = 0;
    static void staticMethod(int i){
        System.out.println(i);
    }
    static {    //blok static
        System.out.println("This is a static block");
        a += 1;
    }
}

class StaticDemo{
    public static void main(String args[]){
        System.out.println(Demo.a);
        Demo.staticMethod(5);
        Demo d = new Demo();
        System.out.println(d.a);
        d.staticMethod(0);
        Demo e = new Demo();
        System.out.println(e.a);
        d.a += 3;
        System.out.println(Demo.a+", " +d.a +", " +e.a);
    }
}
package intro2bab1;

class OuterClass {
    int data = 5;
    class InnerClass{
        int data2 = 0;
        void method(){
            System.out.println(data);
            System.out.println(data2);
        }
    }
    public static void main(String args[]){
        OuterClass oc = new OuterClass();
        InnerClass ic = oc.new InnerClass();
        System.out.println(oc.data);
        System.out.println(ic.data2);
        ic.method();
    }
}

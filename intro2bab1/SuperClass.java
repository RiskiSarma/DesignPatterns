package intro2bab1;

class SuperClass {
    int a;
    void display_a(){
        System.out.println("a = " + a);
    }
}

class SubClass extends SuperClass{
    int a;
    void display_a(){
        System.out.println("a = " + a);
    }
    void set_super_a(int n){
        super.a = n;
    }
    void display_super_a(){
        super.display_a();
    }
}

class SuperDemo{
    public static void main(String args[]){
        SuperClass SuperObj = new SuperClass();
        SubClass SubObj = new SubClass();
        SuperObj.a = 1;
        SubObj.a = 2;
        SubObj.set_super_a(3);
        SuperObj.display_a();
        SubObj.display_a();
        SubObj.display_super_a();
        System.out.println(SubObj.a);
    }
}

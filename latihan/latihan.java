package latihan;

public class latihan {

    public class shape {
        String name;
        String size;

        shape() {
        }

        void printShapeInfo() {
            System.out.println(name);
            System.out.println(size);
        }

        void printShapeName(String name) {
            System.out.println(name);
        }

        void printShapeSize(String size) {
            System.out.println(size);
        }
    }

    public class square extends shape {
        int length;
        int width;

        void printShapeLength() {
            System.out.println(length);
        }

        void printShapeWidth() {
            System.out.println(width);
        }

        // overriding method
        void printlnShapeInfo() {
            System.out.println(name);
            System.out.println(size);
            System.out.println(length);
            System.out.println(width);

        }
    }
}
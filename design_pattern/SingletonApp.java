package design_pattern;

public class SingletonApp {
    public static void main(String[] args){
        OrderService orderService = new OrderService();
        orderService.save("0001");

        OrderDetailService orderDetailService = new OrderDetailService();
        orderDetailService.save("0001", "Indomie");
        orderDetailService.save("0001", "Sabun");
        orderDetailService.save("0001", "Pepsoden");
    }
}

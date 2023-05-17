package design_pattern;

import java.sql.Connection;

public class OrderService {

    public void save(String orderId){
        Connection connection = DatabasePool.getConnection();
        connection.sql("INSERT INTO ORDER...");
        DatabasePool.close(connection);
    }
}

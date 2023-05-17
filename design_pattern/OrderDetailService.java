package design_pattern;

import java.net.ConnectException;
import java.sql.Connection;

public class OrderDetailService {
    public void save(String orderiId, String product){
        Connection connection = DatabasePool.getConnection();
         connection.sql("INSERT INTO ORDER_DETAILS ...");
         DatabasePool.close(connection); 
    }
}

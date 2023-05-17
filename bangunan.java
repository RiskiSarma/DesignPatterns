abstract class Bangunan{
  protected String alamat;
  protected int luasBangunan;

}

//class Penginapan yang mewarisi main class bangunan
class Penginapan extends Bangunan{
    String namaPenginapan;
    String noKamar;
    
    void tidur(){
        System.out.println("Saatnya tidur");
    }

    void checkIn(){
        System.out.println("sedang melakukan checkin");
    }
    void checkOut(){
        System.out.println("sedang melakukan checkout");
    }
}

// class Wisma yang mewarisi sub class Penginapan
class Wisma extends Penginapan{
    void makanWisma(){
        System.out.println("wisma telah menyediakan makan, saatnya makan");
    }

    //constructor dari class wisma
    Wisma(String alamat, int luasBangunan, String namaPenginapan, String noKamar){
        this.alamat = alamat;
        this.luasBangunan = luasBangunan;
        this.namaPenginapan = namaPenginapan;
        this.noKamar = noKamar;
    }

    void cetakDetailWisma(){
        System.out.println("nama Wisma:: " + namaPenginapan);
        System.out.println("Alamat Wisma: " + alamat);
        System.out.println("No Wisma: " + noKamar);
        System.out.println("Luas bangunan Wisma: " + luasBangunan);
    }
}

// class Hotel yang mewarisi sub class Penginapan
class Hotel extends Penginapan{
    void hidupAc(){
        System.out.println("AC telah hidup, wah kamarnya dingin sekali");
    }

    void berenang(){
        System.out.println("Saatnya berenang");
    }

    void makanHotel(){
        System.out.println("Hotel Telah menyediakan Makanan Pembuka, saatnya makan");
        System.out.println("Hotel Telah menyediakan Makanan Utama, saatnya makan");
        System.out.println("Hotel Telah menyediakan Makanan Penutup, saatnya makan");
        System.out.println("Saya sudah kenyang, saatnya balik ke kamar");
    }

    // constructor dari class Hotel
    Hotel(String alamat, int luasBangunan, String namaPenginapan, String noKamar){
        this.alamat = alamat;
        this.luasBangunan = luasBangunan;
        this.namaPenginapan = namaPenginapan;
        this.noKamar = noKamar;
    }

    //Cetak detail hotel
    void cetakDetailHotel() {
        System.out.println("nama Hotel: " + namaPenginapan);
        System.out.println("Alamat Hotel: " + alamat);
        System.out.println("No Hotel: " + noKamar);
        System.out.println("Luas bangunan Hotel: " + luasBangunan);
    }

    
}

// class rumah yang mewarisi main class bangunan
class Rumah extends Bangunan{
   protected String noRumah;
   protected String jumlahTingkat;
}

// class Ruko yang mewarisi Sub class Rumah
class Ruko extends Rumah{
    int luasToko;
    int luasRuangan;

    //Membuat constructor class ruko
    Ruko(int luasToko, int luasRuangan,String noRumah, String alamat, String jumlahTingkat){
    this.noRumah = noRumah;
    this.alamat = alamat;
    this.luasBangunan = luasToko+luasRuangan;
    this.luasToko = luasToko;
    this.luasRuangan = luasRuangan;
    this.jumlahTingkat = jumlahTingkat;
    }

    void cetakDetailRuko(){
        System.out.println("No Ruko: " + noRumah);
        System.out.println("Alamat Ruko: " + alamat);
        System.out.println("Jumlah tingkat Ruko: " + jumlahTingkat);
        System.out.println("Luas bangunan Ruko: " + luasBangunan);
        System.out.println("Luas Toko: " + luasToko);
        System.out.println("Luas Ruangan: " + luasRuangan);
    }
}

// class RumahPribadi yang mewarisi Sub class Rumah
class RumahPribadi extends Rumah{
    String luasHalamanDepan;
    String luasHalamanBelakang;

    //Membuat constructor class rumah pribadi
    RumahPribadi(String luasHalamanDepan, String luasHalamanBelakang, String jumlahTingkat, String noRumah, String alamat, int luasBangunan){
        this.noRumah = noRumah;
        this.luasBangunan = luasBangunan;
        this.alamat = alamat;
        this.jumlahTingkat = jumlahTingkat;
        this.luasHalamanDepan = luasHalamanDepan;
        this.luasHalamanBelakang = luasHalamanBelakang;
    }

    //Mencetak detail data rumah
    void cetakDetailRumah(){
        System.out.println("No Rumah: " + noRumah);
        System.out.println("Alamat Rumah: " + alamat);
        System.out.println("Jumlah tingkat Rumah: " + jumlahTingkat);
        System.out.println("Luas bangunan Rumah: " + luasBangunan);
        System.out.println("Luas halaman depan Rumah: " + luasHalamanDepan);
        System.out.println("Luas halaman belakang Rumah: " + luasHalamanBelakang);
    }
}

class Utama{
    public static void main(String[] args) {

        //Membuat object dari class rumah
        RumahPribadi rumah1 = new RumahPribadi("20", "20", "2", "b15", "jalan kenari", 30);
        rumah1.cetakDetailRumah();

        System.out.println("=================");

        //Membuat object dari class ruko
        Ruko ruko1 = new Ruko(20, 15, "b24", "jalan murai batu", "2");
        ruko1.cetakDetailRuko();

        System.out.println("=================");
        //Membuat object dari class wisma
        Wisma wisma1 = new Wisma("jalan ikan terbang", 20, "Hotel diana syariah", "120");
        wisma1.cetakDetailWisma();
        wisma1.checkIn();
        wisma1.makanWisma();
        wisma1.checkOut();

        System.out.println("=================");

        //Membuat object dari class Hotel
        Hotel hotel1 = new Hotel("jalan ikan terbang", 20, "Hotel diana syariah", "120");
        hotel1.cetakDetailHotel();
        hotel1.checkIn();
        hotel1.makanHotel();
        hotel1.berenang();
        hotel1.tidur();
        hotel1.cetakDetailHotel();

        
        

    }
}


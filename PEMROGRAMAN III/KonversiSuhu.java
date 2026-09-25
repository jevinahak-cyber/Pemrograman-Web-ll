import java.util.Scanner;

public class KonversiSuhu {
    public static void main(String[] args) {
        // Membuat objek scanner untuk input
        Scanner scanner = new Scanner(System.in);

        // Menampilkan judul
        System.out.println("Konversi suhu");
        System.out.println("=================");

        // Meminta input suhu dalam Celcius
        System.out.print("Celcius = ");
        double celcius = scanner.nextDouble();

        // Menghitung konversi suhu
        double reamur = 4.0 / 5.0 * celcius;
        double fahrenheit = 9.0 / 5.0 * celcius + 32;
        double kelvin = celcius + 273;

        // Menampilkan hasil konversi
        System.out.println("Reamur = " + reamur);
        System.out.println("Fahrenheit = " + fahrenheit);
        System.out.println("Kelvin = " + kelvin);
        
        // Menutup scanner
        scanner.close();
    }
}

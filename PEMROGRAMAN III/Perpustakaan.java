import java.util.*;

public class Perpustakaan {

    static Map<String, Integer> kategoriBuku = new HashMap<>();
    static Map<String, String> kodeRak = new HashMap<>();
    static Scanner scanner = new Scanner(System.in);

    static {
        kategoriBuku.put("000", 90000);
        kategoriBuku.put("200", 75000);
        kategoriBuku.put("800", 70000);

        kodeRak.put("RAK 1", "R1");
        kodeRak.put("RAK 2", "R2");
        kodeRak.put("RAK 3", "R3");
    }

    // Generate kode buku dengan format: XX-YY-ZZ-AAAA-BB
    public static String generateKodeBuku(String judul, String pengarang, String penerbit, String isbn, String rak) {
        // XX: huruf depan dan akhir dari judul
        String XX = (judul.length() >= 2) 
            ? judul.substring(0, 1).toUpperCase() + judul.substring(judul.length() - 1).toUpperCase()
            : judul.toUpperCase() + judul.toUpperCase();

        // YY: huruf depan dan akhir dari pengarang
        String YY = (pengarang.length() >= 2) 
            ? pengarang.substring(0, 1).toUpperCase() + pengarang.substring(pengarang.length() - 1).toUpperCase()
            : pengarang.toUpperCase() + pengarang.toUpperCase();

        // ZZ: dua huruf pertama penerbit
        String ZZ = penerbit.length() >= 2 
            ? penerbit.substring(0, 2).toUpperCase() 
            : penerbit.toUpperCase();

        // AAAA: YA jika ISBN Ya, NONE jika Tidak
        String AAAA = isbn.equalsIgnoreCase("ya") ? "YA" : "NONE";

        // BB: Kode rak
        String BB = kodeRak.getOrDefault(rak.toUpperCase(), "R?");

        return XX + "-" + YY + "-" + ZZ + "-" + AAAA + "-" + BB;
    }

    public static void main(String[] args) {
        List<Map<String, String>> dataPerpustakaan = new ArrayList<>();

        while (true) {
            System.out.println("\n=== Input Data Buku ===");
            System.out.print("Judul Buku: ");
            String judul = scanner.nextLine();

            System.out.print("Kategori (000/200/800): ");
            String kategori = scanner.nextLine();

            System.out.print("Pengarang: ");
            String pengarang = scanner.nextLine();

            System.out.print("Penerbit: ");
            String penerbit = scanner.nextLine();

            System.out.print("ISBN (Ya/Tidak): ");
            String isbn = scanner.nextLine();

            System.out.print("Jumlah Buku: ");
            int jumlah = Integer.parseInt(scanner.nextLine());

            System.out.print("Tempat Buku (RAK 1/2/3): ");
            String rak = scanner.nextLine();

            // Hitung harga dan nilai buku
            int harga = kategoriBuku.getOrDefault(kategori, 0);
            int nilaiBuku = harga * jumlah;

            // Generate kode buku
            String kodeBuku = generateKodeBuku(judul, pengarang, penerbit, isbn, rak);
            String kodeRakBuku = kodeRak.getOrDefault(rak.toUpperCase(), "R?");

            Map<String, String> data = new LinkedHashMap<>();
            data.put("Judul", judul);
            data.put("Pengarang", pengarang);
            data.put("Penerbit", penerbit);
            data.put("ISBN", isbn);
            data.put("Rak", kodeRakBuku);
            data.put("Kode Buku", kodeBuku);
            data.put("Jumlah", String.valueOf(jumlah));
            data.put("Nilai Buku", String.valueOf(nilaiBuku));

            dataPerpustakaan.add(data);

            System.out.print("Ada data lagi? [Ya/Tidak]: ");
            String lagi = scanner.nextLine();
            if (!lagi.equalsIgnoreCase("ya")) break;
        }

        // Output Data
        System.out.println("\n=== Data Perpustakaan ===");
        System.out.printf("%-3s %-20s %-15s %-12s %-6s %-5s %-25s %-7s %-12s\n",
                "No", "Judul Buku", "Pengarang", "Penerbit", "ISBN", "Rak", "Kode Buku", "Jumlah", "Nilai Buku");

        int no = 1;
        for (Map<String, String> data : dataPerpustakaan) {
            System.out.printf("%-3d %-20s %-15s %-12s %-6s %-5s %-25s %-7s %-12s\n",
                    no++, data.get("Judul"), data.get("Pengarang"), data.get("Penerbit"),
                    data.get("ISBN"), data.get("Rak"), data.get("Kode Buku"),
                    data.get("Jumlah"), data.get("Nilai Buku"));
        }
    }
}

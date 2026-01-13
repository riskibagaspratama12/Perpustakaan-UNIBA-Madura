<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Madilog (Materialisme, Dialektika, Logika)',
                'writer' => 'Tan Malaka',
                'synopsis' => 'Madilog (Materialisme, Dialektika, dan Logika) adalah karya fundamental Tan Malaka yang mengajak bangsa Indonesia beralih dari logika mistika (pemikiran takhayul dan gaib) menuju cara berpikir rasional, ilmiah, dan materialistis berbasis sains untuk mencapai kemerdekaan dan kemajuan sejati, bukan hanya kemerdekaan politik. Ditulis saat pelarian di masa pendudukan Jepang (1942-1943), buku ini memadukan filsafat Barat (Marx, Hegel) dengan konteks lokal untuk membebaskan rakyat dari keterbelakangan mental, menawarkan metode berpikir yang pragmatis dan berbasis bukti nyata sebagai alat perjuangan sosial-politik',
                'category' => 'Philosophy',
                'publisher' => 'Penerbit Narasi',
                'publish_year' => 1943,
                'amount' => 5,
                'status' => 'Available',
                'cover' => 'covers/madilog.jpg',
            ],
            [
                'title' => 'Sejarah Dunia yang Disembunyikan',
                'writer' => 'Jonathan Black',
                'synopsis' => 'Banyak orang mengatakan bahwa sejarah ditulis oleh para pemenang. Hal ini sama sekali tak mengejutkan alias wajar belaka. Tetapi, bagaimana jika sejarah--atau apa yang kita ketahui sebagai sejarah--ditulis oleh orang yang salah? Bagaimana jika semua yang telah kita ketahui hanyalah bagian dari cerita yang salah tersebut? Dalam buku kontroversial yang sangat tersohor ini, Jonathan Black mengupas secara tajam penelusurannya yang brilian tentang misteri sejarah dunia. Dari mitologi Yunani dan Mesir kuno sampai cerita rakyat Yahudi, dari kultus Kristiani sampai Freemason, dari Karel Agung sampai Don Quixote, dari George Washington sampai Hitler, dan dari pewahyuan Muhammad hingga legenda Seribu Satu Malam, Jonathan menunjukkan bahwa pengetahuan sejarah yang terlanjur mapan perlu dipikirkan kembali secara revolusioner. Dengan pengetahuan alternatif ihwal sejarah dunia selama lebih dari 3.000 tahun, dia mengungkap banyak rahasia besar yang selama ini disembunyikan. Buku ini akan membuat Anda mempertanyakan kembali segala sesuatu yang telah diajarkan kepada Anda. Dan, berbagai pengetahuan baru yang diungkapkan sang penulis benar-benar akan membuka dan mencerahkan wawasan Anda.',
                'category' => 'History',
                'publisher' => 'Pustaka Alvabet',
                'publish_year' => 2007,
                'amount' => 9,
                'status' => 'Available',
                'cover' => 'covers/SejarahDunia.jpg',
            ],
            [
                'title' => 'Bumi',
                'writer' => 'Tere Liye',
                'synopsis' => 'Bumi adalah buku pertama dari seri Bumi yang mengisahkan petualangan Raib, Seli, dan Ali di sebuah dunia paralel bernama Bumi. Di sana, mereka menemukan berbagai keajaiban dan tantangan yang menguji keberanian, persahabatan, dan tekad mereka. Dengan latar belakang alam yang menakjubkan dan makhluk-makhluk unik, Bumi mengajak pembaca untuk merenungkan hubungan manusia dengan alam serta pentingnya menjaga keseimbangan ekosistem. Melalui perjalanan seru dan penuh misteri, Tere Liye menyampaikan pesan mendalam tentang cinta, harapan, dan keberanian dalam menghadapi perubahan.',
                'category' => 'Fiction',
                'publisher' => 'Gramedia Pustaka Utama',
                'publish_year' => 2013,
                'amount' => 6,
                'status' => 'Available',
                'cover' => 'covers/Bumi.jpg',
            ],
            [
                'title' => 'Laskar Pelangi',
                'writer' => 'Andrea Hirata',
                'synopsis' => 'Laskar Pelangi adalah novel yang mengisahkan perjuangan sekelompok anak-anak di sebuah desa kecil di Belitung untuk mendapatkan pendidikan di tengah keterbatasan ekonomi dan fasilitas. Dengan semangat pantang menyerah, mereka membentuk "Laskar Pelangi" dan berjuang melawan segala rintangan demi meraih impian mereka. Melalui kisah persahabatan, kegigihan, dan harapan, Andrea Hirata menggambarkan betapa pentingnya pendidikan dan bagaimana mimpi dapat mengubah hidup seseorang, meskipun berasal dari latar belakang yang sederhana.',
                'category' => 'Fiction',
                'publisher' => 'Bentang Pustaka',
                'publish_year' => 2005,
                'amount' => 12,
                'status' => 'Available',
                'cover' => 'covers/LaskarPelangi.jpg',
            ],
            [
                'title' => 'Dilan: Dia adalah Dilanku Tahun 1990',
                'writer' => 'Pidi Baiq',
                'synopsis' => 'Dilan: Dia adalah Dilanku Tahun 1990 adalah novel remaja yang mengisahkan kisah cinta manis dan unik antara Dilan, seorang siswa SMA yang penuh percaya diri dan gaya khasnya, dengan Milea, siswi baru yang menjadi pusat perhatian Dilan. Berlatar belakang kota Bandung pada tahun 1990, cerita ini menggambarkan dinamika hubungan mereka yang penuh dengan kejutan, kehangatan, dan momen-momen lucu. Melalui gaya bahasa yang ringan dan dialog yang segar, Pidi Baiq berhasil menangkap esensi cinta remaja yang sederhana namun mendalam, menjadikan novel ini sangat digemari oleh pembaca muda di Indonesia.',
                'category' => 'Romance',
                'publisher' => 'Pastel Books',
                'publish_year' => 2014,
                'amount' => 3,
                'status' => 'Available',
                'cover' => 'covers/Dilan1990.jpg',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

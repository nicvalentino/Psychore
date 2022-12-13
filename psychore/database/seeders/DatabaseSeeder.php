<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\psikiater;
use App\Models\user;
use App\Models\artikel;
use App\Models\jawaban_psikiater;
use App\Models\pertanyaan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        user::factory(15)->create();

        psikiater::create([
            'name' => 'Melinda Wulandari S.Psim',
            'email' => 'MelindaWulandari@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        psikiater::create([
            'name' => 'Iwan Prasetyo S.Psim',
            'email' => 'IwanPrasetyo@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        psikiater::create([
            'name' => 'Dahlia Ninda S.Psim',
            'email' => 'DahliaNinda@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        psikiater::create([
            'name' => 'Eka Indah Nurmawati S.Psim', 
            'email' => 'EkaIndahM@gmail.com',
            'password' => bcrypt('cobacoba')
        ]);

        artikel::create([
            'title' => 'Mengenal Pentingnya Kesehatan Mental pada Remaja',
            'slug' => 'Mengenal-Pentingnya-Kesehatan-Mental-pada-Remaja',
            'psikiater_id' => '1',
            'excerpt' =>'Kesehatan mental merupakan kondisi dimana individu memiliki kesejahteraan yang tampak dari 
            dirinya yang mampu menyadari potensinya sendiri, memiliki kemampuan untuk mengatasi tekanan hidup normal 
            pada berbagai situasi dalam kehidupan, mampu bekerja secara produktif dan menghasilkan, serta mampu memberikan 
            kontribusi kepada komunitasnya ',
            'body' => 'Kesehatan mental merupakan kondisi dimana individu memiliki kesejahteraan yang tampak dari 
            dirinya yang mampu menyadari potensinya sendiri, memiliki kemampuan untuk mengatasi tekanan hidup normal 
            pada berbagai situasi dalam kehidupan, mampu bekerja secara produktif dan menghasilkan, serta mampu memberikan 
            kontribusi kepada komunitasnya.
            
            Jika kesehatan mental terganggu, maka timbul gangguan mental atau penyakit mental. Gangguan mental dapat mengubah 
            cara seseorang dalam menangani stres, berhubungan dengan orang lain, membuat pilihan, dan memicu hasrat untuk menyakiti 
            diri sendiri.
            
            Kesehatan mental merupakan kondisi dimana individu memiliki kesejahteraan yang tampak dari dirinya yang mampu menyadari 
            potensinya sendiri, memiliki kemampuan untuk mengatasi tekanan hidup normal pada berbagai situasi dalam kehidupan, mampu 
            bekerja secara produktif dan menghasilkan, serta mampu memberikan kontribusi kepada komunitasnya.',
        ]);

        artikel::create([
            'title' => 'Bagaimana Menjaga Kesehatan Mental',
            'slug' => 'Bagaimana-Menjaga-Kesehatan-Mental',
            'psikiater_id' => '2',
            'excerpt' => 'Peribahasa “di dalam tubuh yang sehat, terdapa jiwa yang kuat” sudah tidak asing lagi di telinga 
            masyarakat Indonesia. Namun, kebanyakan orang mengartikan sehat hanya pada faktor fisik yang terbebas dari 
            penyakit. Sejatinya, predikat sehat juga meliputi kesehatan mental ',
            'body' => 'Peribahasa “di dalam tubuh yang sehat, terdapa jiwa yang kuat” sudah tidak asing lagi di telinga 
            masyarakat Indonesia. Namun, kebanyakan orang mengartikan sehat hanya pada faktor fisik yang terbebas dari 
            penyakit. Sejatinya, predikat sehat juga meliputi kesehatan mental. 
            
            Bila mengacu pada organisasi kesehatan dunia (WHO) yang menegaskan, bahwa kesehatan merupakan kondisi fisik, 
            mental dan sosial yang lengkap, tidak hanya sekadar tubuh yang bebas dari penyakit atau seuatu kelemahan. Oleh 
            karena itu, kesehatan mental pun juga perlu diperhatikan.
            
            Mengapa kesehatan mental perlu dijaga? Karena dasar bagi kemampuan manusia untuk berpikir, berekspresi, 
            berinteraksi, berkembang, bekerja hingga mencari hiburan adalah kesehatan mental.',
        ]);

        artikel::create([
            'title' => 'Penyebab Seperempat Ibu Depresi Setelah Melahirkan',
            'slug' => 'Penyebab-Seperempat-ibu-Depresi-Setelah-Melahirkan',
            'psikiater_id' => '3',
            'excerpt' => 'Tingginya angka depresi pada perempuan, baik saat hamil maupun setelah melahirkan, membutuhkan 
            perhatian yang serius dari pemerintah dan keluarga agar dampaknya tak semakin buruk ',
            'body' => 'Tingginya angka depresi pada perempuan, baik saat hamil maupun setelah melahirkan, membutuhkan 
            perhatian yang serius dari pemerintah dan keluarga agar dampaknya tak semakin buruk.
            
            Sejumlah media menyebut sebelum bunuh diri, ibu tersebut mengalami gejala sindrom baby blues, yaitu perasaan 
            sedih, cemas, dan mudah marah, yang terjadi dalam jangka pendek (hingga 10 hari setelah melahirkan). Tapi 
            melihat rangkaian kasus tersebut, ibu ini mungkin memiliki gejala depresi setelah melahirkan, bukan sekadar 
            baby blues.
            
            Postpartum blues atau baby blues syndrome yang mulai disuarakan oleh banyak perempuan di media sosial dialami 
            oleh mayoritas (70%-80%) ibu melahirkan baik di negara berkembang maupun negara maju.
            
            Baby blues disebabkan oleh perubahan hormonal dan sosial (seperti perubahan peran menjadi ibu) setelah 
            melahirkan. Gejala-gejala baby blues yang dialami oleh ibu akan hilang dengan sendirinya, setelah ibu mampu 
            menyesuaikan diri dengan peran barunya. Dengan demikian, baby blues tidak dikategorikan sebagai gangguan 
            kesehatan mental selama masa perinatal.
            
            Berbeda dengan baby blues, depresi bisa dialami oleh ibu pada masa kehamilan, setelah melahirkan maupun 
            pada kedua fase tersebut. Depresi saat hamil juga menjadi salah satu prediktor depresi postpartum
            
            Gejala depresi postpartum mirip baby blues dengan durasi, frekuensi, dan intensitas gejala yang lebih 
            tinggi (parah) dan membutuhkan bantuan tenaga kesehatan untuk menanganinya. Gejala utamanya ditandai 
            dengan adanya pikiran menyakiti diri sendiri/bayinya, keinginan bunuh diri, dan ketidakmampuan merawat 
            bayi yang baru dilahirkan.',
        ]);

        artikel::create([
            'title' => 'Mengatasi Depresi Dengan Terapi Aktivasi Perilaku',
            'slug' => 'Mengatasi-Depresi-Dengan-Terapi-Aktivasi-Perilaku',
            'psikiater_id' => '1',
            'excerpt' => 'Emosi adalah sumber informasi penting yang menuntun perilaku kita, dan memungkinkan kita 
            berfungsi sebagai manusia ',
            'body' => 'Emosi adalah sumber informasi penting yang menuntun perilaku kita, dan memungkinkan kita 
            berfungsi sebagai manusia.
            
            Perasaan bahagia dan tenteram, misalnya, merupakan kepuasan emosional yang kita dapatkan karena terlibat 
            dalam aktivitas berharga yang memperbaiki kualitas hidup kita. Rasa cemas membantu kita menghindari 
            situasi berbahaya yang mengancam keselamatan kita. Rasa bersalah memotivasi kita untuk saling menghormati 
            dan membantu kita memelihara hubungan sosial yang fungsional.
            
            Kesedihan menyadarkan kita ketika kita kehilangan sesuatu yang penting. Depresi adalah bentuk kesedihan 
            yang berat dan berpanjangan. Yang hilang dalam keadaan depresi adalah penghargaan terhadap diri dan harapan.
            
            Sama seperti emosi memandu perilaku kita, perilaku kita juga secara langsung mempengaruhi emosi kita.
            
            Semakin kita menghindari situasi yang berisiko atau menantang, semakin rendah rasa percaya diri yang kita 
            miliki dalam kemampuan mengatasi, dan makin cemas perasaan kita. Semakin kita memperlakukan orang lain tanpa 
            rasa hormat, semakin kita merasa bersalah dan menyesal. Dan makin sering kita menarik diri dari orang-orang 
            dan aktivitas yang sebelumnya telah memberi kita tujuan dan keajaiban di dunia, makin kita kurang bahagia 
            dan tertekan.
            
            Orang dengan depresi mendapati hilangnya kegairahan dan prestasi dari hidup. Yang terburuk, depresi merupakan 
            hilangnya emosi. Tanpa emosi, kita tersesat:mdash;segala hal tidak ada artinya, yang membuat semakin sulit 
            untuk peduli terhadap diri sendiri dan orang lain. Seperti hanya sedikit dari kita yang akan bekerja tanpa 
            imbalan finansial, akan sulit untuk menjalani kehidupan tanpa imbalan emosi.
            
            Masalahnya adalah, ketika depresi menyebabkan inaktivitas, penarikan diri dan isolasi, bahkan lebih sedikit 
            lagi kesempatan untuk memperoleh kesenangan dan rasa pencapaian dalam hidup. Sebagai akibatnya, depresi, 
            keputus asaan, kelesuan, dan motivasi semakin memburuk seiring waktu. Pada titik ini, “lingkaran setan depresi” 
            berada dalam putaran penuh.',
        ]);

        artikel::create([
            'title' => 'Simak Pengertian Self Healing dan 4 Tips Mudah untuk Mengatasinya',
            'slug' => 'Simak-Pengertian-Self-Healing-dan-4-Tips-Mudah-untuk-Mengatasinya',
            'psikiater_id' => '2',
            'excerpt' => 'Akhir-akhir ini kesehatan mental menjadi topik yang hangat dibicarakan. Banyak tagar-tagar 
            seperti “mental health awareness, depression, anxiety, self-healing, self-love, dan sebagainya” muncul di 
            sosial media kita. Tidak jarang juga beberapa artis dan selebgram turut menggaungkan pentingnya ',
            'body' => 'Akhir-akhir ini kesehatan mental menjadi topik yang hangat dibicarakan. Banyak tagar-tagar 
            seperti “mental health awareness, depression, anxiety, self-healing, self-love, dan sebagainya” muncul 
            di sosial media kita. Tidak jarang juga beberapa artis dan selebgram turut menggaungkan pentingnya menjaga 
            kesehatan mental. Namun, memang masih ada penderita gangguan mental yang merasa malu menceritakan kondisinya 
            karena takut mendapat stigma negatif dari masyarakat. Ditambah lagi, masih banyak orang, termasuk keluarga 
            dekat kita sendiri yang suka menjudge penderita gangguan mental sebagai kurang beriman atau kurang beribadah. 
            Hal ini yang masih merupakan tantangan para psikiater, psikolog, ataupun para edukator dan media untuk terus 
            memberikan edukasi terkait kesehatan mental sehingga pengetahuan masyarakat kita meningkat.
            
            Gangguan mental bisa terjadi pada siapa saja, mengenai berbagai kalangan, tidak peduli kaya atau miskin, 
            cantik atau jelek, pendidikan tinggi atau rendah. Hal ini karena gangguan mental disebabkan karena interaksi 
            dari faktor genetik dan lingkungan, sama halnya dengan penyakit kanker, hiperkolesterol, ataupun darah tinggi 
            yang dipengaruhi oleh faktor genetik dan lingkungan.
            
            Faktor lingkungan yang dapat mencetuskan gangguan mental dapat berupa trauma yang dialami pada masa kanak, 
            bullying, bencana alam, atau kematian anggota keluarga. Trauma yang dialami masa kanak misalnya pola asuh 
            orang tua yang penuh dengan kekerasan (abuse), pelecehan seksual, pengabaian (neglect), penyalahgunaan napza 
            dalam keluarga, perceraian orang tua, dan kekerasan dalam rumah tangga (KDRT). Ketika mengalami hal-hal 
            tersebut sebagai anak, anak belum bisa memproses kejadian tersebut sehingga luka yang ditimbulkan akibat 
            trauma tersebut masih terus ada sampai dewasa. Apabila luka tersebut tidak disembuhkan, maka ketika ada suatu
             stressor di masa depan, maka orang tersebut akan lebih mudah mengalami gangguan mental seperti depresi, 
             kecemasan, panik, sulit tidur, ketakutan, rendah diri, menggunakan napza, ataupun menyakiti orang lain.',
        ]);

        artikel::create([
            'title' => 'Broken Home Butuh Kasih Sayang, Bukan Harapan',
            'slug' => 'Broken-Home-Butuh-Kasih-Sayang-Bukan-Harapan',
            'psikiater_id' => '4',
            'excerpt' => 'Sudah jatuh ketiban tangga pula, mungkin istilah ini sesuai dengan yang dialami oleh orang 
            yang satu ini. Banyak orang yang memandang anak broken home memiliki prilaku yang kurang baik. Memang hal 
            tersebut tidak salah',
            'body' => 'Sudah jatuh ketiban tangga pula, mungkin istilah ini sesuai dengan yang dialami oleh orang yang 
            satu ini. Banyak orang yang memandang anak broken home memiliki prilaku yang kurang baik. Memang hal tersebut 
            tidak salah juga, namun masih banyak juga anak yang mengalami broken home tapi  masih memeiliki sikap baik. 
            FYI, jadi alasan yang melatarbelakangi hal tersebut bukan lain karena mereka itu ingin diperhatikan oleh orang 
            sekitarnya.
            
            Mereka yang mungkin meresa kurang deperhatikan di rumahnya, jadi mereka meluapkan emosi dengan hal yang 
            kurang baik sebagai bentuk pelampiasan dengan apa yang terjadi dengan ayah dan ibunya. Secara psikologis 
            mereka sangat terdampak sekali, bagaimana tidak? Mereka yang seharusnya mendapat kasih sayang kedua orang 
            tua seperti anak pada umumnya, tetapi akibat permasalahan perceraian ayah dan ibunya malah kurang mendapat 
            perhatian. Selain itu, pertengkaran yang kerap terjadi membuat anak secara tidak langsung mengalami depresi 
            dengan apa yang mereka lihat dan rasakan.
            
            Disisi lain anak remaja umumnya memandang temannya adalah segala-galanya, dengan harapan mereka dapat 
            perhatian dari temannya tersebut dan hal ini bukan tanpa alasan. Karena mereka menganggap teman sebagai 
            orang yang dapat memahaminya dan tempat untuk ia bercerita. Oleh sebab itu, tidak sedikit remaja yang terjebak 
            pergaulan bebas  karena salah dalam memilih teman. Yang seharusnya teman adalah orang yang dapat mengarahkan 
            dan memperlakukan temannya dengan baik, tetapi malah memanfaatkannya untuk hal yang tidak baik.
            
            Kasih sayang yang mereka inginkan itu adalah kasih sayang yang tulus dan bukan sekedar harapan belaka, entah 
            itu dari teman atau mungkin orang mereka sukai. alasannya, bukan lain karena mereka di rumah sangat jarang 
            sekali mendapat kasih sayang dan perhatian dari kedua orang tuanya. Tentunya mereka tidak mau lagi dan mungkin 
            trauma dengan terjalinnya sebuah hubungan seperti yang orang tuanya alami.',
        ]);

        pertanyaan::create([
            'user_id' => mt_rand(1,15),
            'body' => 'Ciri-ciri apa yang menandakan kesehatan mental seseorang terganggu?',
        ]);

        jawaban_psikiater::create([
            'pertanyaan_id' => 1,
            'psikiater_id' => mt_rand(1,4),
            'body' => 'Terima kasih atas pertanyaannya. Ada banyak ciri yang menandakan kesehatan mental seseorang terganggu, sebagai
            contoh adalah merasa tidak sabar, cepat marah, kualitas tidur buruk, pola makan berubah
            drastis, mengisolasi diri, dan masih banyak ciri lainnya. Jika anda merasa tidak sehat secara
            mental, segera konsultasikan diri anda ke psikiater.'

        ]);

        pertanyaan::create([
            'user_id' => mt_rand(1,15),
            'body' => 'Penyebab gangguan jiwa dan apakah bisa menurun secara genetik?',
        ]);

        jawaban_psikiater::create([
            'pertanyaan_id' => 2,
            'psikiater_id' => mt_rand(1,4),
            'body' => 'Alo, terima kasih atas pertanyaannya untuk PsyChore.

            Gangguan mental atau gangguan jiwa, dapat terjadi ketika seseorang sulit mengendalikan emosi, 
            pola pikir, dan perilaku sehingga dapat menyulitkan aktivitas dan pekerjaannya sehari-hari, 
            tanpa pengobatan secara rutin.
            
            Gangguan jiwa tentunya sangat erat kaitannya dengan faktor genetik atau keturunan yang dapat 
            mempengaruhi ketidakseimbangan zat kimia di otak, terutama jika ditambah dengan adanya 
            riwayat pernah mengalami peristiwa traumatis yang dapat mencetus munculnya gangguan jiwa 
            tersebut pada periode usia tertentu.
            
            Oleh karena itu, sangat penting untuk melakukan deteksi dan pengobatan sedari dini oleh 
            dokter psikiater, pada seseorang yang sudah memiliki riwayat keluarga dengan masalah 
            psikologis terutama yang juga sudah mengalami peristiwa traumatis di hidupnya, untuk dapat 
            mencegah bertambah buruknya gejala gangguan mental di kemudian hari, sehingga tidak 
            terlanjur berakibat terjadinya gejala berat yang sudah mengganggu aktivitas sehari-hari.
            
            Demikian yang dapat kami sampaikan, semoga bermanfaat. Terima kasih.'

        ]);

        pertanyaan::create([
            'user_id' => mt_rand(1,15),
            'body' => 'Bagaimana cara mengatasi mudah emosi akibat kecanduan game online?',
        ]);

        jawaban_psikiater::create([
            'pertanyaan_id' => 3,
            'psikiater_id' => mt_rand(1,4),
            'body' => 'Alo, terima kasih atas pertanyaannya untuk PsyChore.

            Kecanduan game online dapat dialami oleh siapa saja baik anak-anak, remaja hingga 
            dewasa. Bermain game seharusnya menjadi aktivitas menyenangkan yang dilakukan untuk 
            mengilangkan stres bukan malah menyebabkan emosi meningkat hingga melakukan kekerasan 
            verbal.

            Kecanduan game online adalah gangguan mental akibat bermain game dalam waktu yang lama 
            hingga tidakmemedulikan aktivitas lainnya. Kecanduan juga dapat menimbulkan penderita 
            berisiko mengalami masalah psikologis misalnya mengalami gangguan kecemasan hingga depresi.

            Terima kasih, semoga membantu.'
        ]);

        pertanyaan::create([
            'user_id' => mt_rand(1,15),
            'body' => 'Bagaimanakah tanda seseorang dinyatakan sedang mengalami bipolar?',
        ]);

        jawaban_psikiater::create([
            'pertanyaan_id' => 4,
            'psikiater_id' => mt_rand(1,4),
            'body' => 'Alo, terima kasih atas pertanyaannya untuk PsyChore.

            Gangguan bipolar adalah salah satu jenis gangguan kejiwaan yang ditandai dengan perubahan 
            suasana hati secara sangat drastis, dari yang awalnya manik (sangat bahagia) menjadi depresi 
            (sangat sedih) atau sebaliknya. Kondisi ini terjadi akibat terganggunya keseimbangan senyawa 
            kimia di otak yang dipengaruhi juga oleh faktor genetik, lingkungan, gaya hidup, dan status 
            kesehatan secara umum.

            Mengacu pada keterangan Anda yang kerap merasakan senang dan sedih secara bersamaan, memang 
            mungkin saja hal ini menandakan Anda mengalami gangguan bipolar. Akan tetapi, keluhan yang 
            dialami oleh penderita gangguan bipolar semestinya sangatlah hebat, tidak terkendali, dan 
            sampai membuat aktifitas serta fungsi dirinya menjadi sangat terganggu. Jika keluhan yang 
            Anda alami masih tergolong ringan, bisa jadi hal tersebut masih merupakan variasi suasana 
            hati yang wajar.

            Di samping gangguan bipolar, keluhan yang Anda alami sesungguhnya mungkin pula muncul karena 
            faktor lain, seperti gangguan stres pasca trauma, gangguan kepribadian, gangguan siklotimik, 
            skizofrenia, dan sebagainya.

            Membedakan kondisi mana yang termasuk sebagai gangguan kejiwaan dan yang tidak, serta 
            memastikan gangguan kejiwaan seperti apa yang dialami, tentu tidak semudah ini. Terlebih 
            dulu, Anda perlu periksakan diri Anda ke psikiater atau psikolog terdekat agar bisa ditangani 
            dengan tepat.

            Jadilah pribadi yang tenang, perbanyak meditasi, tingkatkan kedekatan Anda pada Tuhan YME
            Sadari bahwa setiap ada kesulitan pasti ke depannya akan ada kemudahan, demikian pula sebaliknya
            Perbaiki hubungan Anda dengan keluarga, carilah juga lingkungan pergaulan yang baik dan bisa memberi semangat positif pada hidup Anda
            Sibukkan diri Anda menjalani beragam aktifitas yang baik, kembangkan bakat dan hobi Anda
            Jangan buang waktu untuk terlalu banyak menyendiri, menyalahkan nasib atau siapapun, apalagi berinteraksi dengan rokok, alkohol, dan NAPZA
            Semoga membantu.'
        ]);

        pertanyaan::create([
            'user_id' => mt_rand(1,15),
            'body' => 'Bagaimana cara mengatasi stres pada ibu rumah tangga agar tidak berkelanjutan?',
        ]);

        jawaban_psikiater::create([
            'pertanyaan_id' => 5,
            'psikiater_id' => mt_rand(1,4),
            'body' => 'Stress merupakan reaksi ketika tubuh menghadapi ancaman, tekanan, maupun situasi 
            yang baru, termasuk kondisi Anda yang semula ibu bekerja kemudian menjadi ibu rumah tangga. 
            Tubuh membutuhkan adaptasi dan penyesuaian dimana pekerjaan rumah selalu ada dan seperti 
            tidak pernah selesai, dan ditambah dengan kurangnya support dari orang terdekat tentu dapat 
            menyebabkan stress.

            Untuk membantu mengelola stress Anda bisa melakukan beberapa tips berikut ini:
            
            Istirahat cukup
            Lakukan pekerjaan semampunya, usahakan tidak terlalu memaksakan diri
            Komunikasikan dengan suami Anda mengenai kendala yang Anda rasakan dirumah
            Curhat dengan orang yang Anda percayai
            Lakukan me time yang Anda sukai
            Olahraga teratur
            Lakukan relaksasi
            Dengarkan musik yang menenangkan
            Jika Anda merasa keluhan tidak membaik atau stress tidak juga berkurang dan mulai mengganggu Anda, akan lebih baik bila Anda berkonsultasi langsung dengan psikolog atau psikiater supaya bisa dilakukan evaluasi dan agar Anda bisa diberikan penanganan yang lebih tepat ya.
            
            Semoga membantu Anda,'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // user::create([

        // ]);

    }


}

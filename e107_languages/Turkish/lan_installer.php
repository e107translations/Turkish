<?php
/*
+---------------------------------------------------------------+
|        e107 website system Turkish Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
|        $Source: ../e107_languages/Turkish/lan_installer.php $
|        $Revision: 1.0 $
|        $Date: 2007/01/13 16:12:56 $
|	$Türkçe Çeviri: shadowtr (http://e107turkiye.com)
+---------------------------------------------------------------+
*/
define("LANINS_001", "Versiyon %1$s");
define("LANINS_002", "Kurulum");
define("LANINS_003", "1");
define("LANINS_004", "Dil Seçimi");
define("LANINS_005", "Lütfen kurulum işlemi boyunca kullanacağınız dili seçiniz");
define("LANINS_007", "4");
define("LANINS_008", "PHP & MySQL Versiyon Kontrolü / Dosya İzin Kontrolü");
define("LANINS_009", "Dosya İzinleri Tekrar Kontrol Ediliyor");
define("LANINS_010", "Dosya yazılabilir değil:");
define("LANINS_010a", "Klasör yazılabilir değil:");
define("LANINS_012", "MySQL özelliği mevcut değil. Bu büyük ihtimalle MySQL PHP özelliği kurulu olmadığından ya da PHP kurulumun MySQL desteğini derleyemediğinden kaynaklanıyor.");
define("LANINS_013", "MySQL numaranız tespit edilemedi. Bu büyük bir sorun değildir, lütfen kuruluma devam edin, ama bilmelisiniz ki e107 MySQL >= 3.23 sürümleriyle kararlı bir şekilde çalışabilir.");
define("LANINS_014", "Dosya İzinleri");
define("LANINS_015", "PHP Versiyonu");
define("LANINS_017", "TAMAM");
define("LANINS_018", "Listede bulunan dosyaların sunucuda yazılabilir olduğundan emin olun. Bu normalde CHMOD ayarlarını 777 yaptığınız takdirde gerçekleşir, ama değişik durumlarda olabilir - her hangi bir problem olursa sunucu firmanızla irtibata geçin.");
define("LANINS_019", "Sunucunuzda yüklü PHP sürümü e107'nin tüm özelliklerini kullanmak için yetersizdir. e107, PHP sürümü 4.3.0 ya da daha üst sürümlerde tam anlamıyla çalışabilir. Ya PHP sürümünüzü güncelleyin ya da sunucu firmanızla irtibata geçin.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL Sunucu Detayları");
define("LANINS_023", "Please enter your MySQL settings here.<br /><br />If you have root permissions you can create a new database by ticking the box, if not you must create a database or use a pre-existing one.<br /><br />If you have only one database use a prefix so that other scripts can share the same database.<br />If you do not know your MySQL details contact your web host.");
define("LANINS_024", "MySQL Sunucu:");
define("LANINS_025", "MySQL Kullanıcı Adı:");
define("LANINS_026", "MySQL Parola:");
define("LANINS_027", "MySQL Veritabanı:");
define("LANINS_028", "Veritabanı Oluştur?");
define("LANINS_029", "Tablo Öneki:");
define("LANINS_030", "MySQL sunucu adını girin. Büyük ihtamalle değişiklik yapmanıza gerek yoktur. Eğer port numarası içeriyorsa \"hostname:port\" şeklinde ya da yerel soket yolunu \":/path/to/socket\" şeklinde girin.");
define("LANINS_031", "Bu kullanıcı adını e107 MySQL sunucunuza bağlanmak için kullanır");
define("LANINS_032", "MySQL sunucunuza ait kullanıcı parolanızı girin");
define("LANINS_033", "e107'nin kullanacağı MySQL veritabanının adını girin. Eğer veritabanı oluşturma yetkisine sahipseniz veritabanı oluştur seçeneğini seçerek otomatik olarak oluşturabilirsiniz, değilseniz varolan bir veritabanını kullanabilirsiniz.");
define("LANINS_034", "Önek e107 tabloları oluşturulurken tablo isimlerinin önünde kullanılır. Böylece veritabanını e107 haricinde başka kurulumlar için de kullanabilirsiniz.");
define("LANINS_036", "3");
define("LANINS_037", "MySQL Bağlantı Doğrulaması");
define("LANINS_038", " ve Veritabanı Oluşturulması");
define("LANINS_039", "Lüten tüm alanları doldurun.");
define("LANINS_040", "Hatalar");
define("LANINS_041", "e107 girdiğiniz bilgileri kullanarak MySQL sunucuyla bağlantıyı kuramadı.<br/>Lütfen geri dönerek bilgilerin doğruluğunu kontrol edin.");
define("LANINS_042", "MySQL sunucuyla bağlantı kuruldu.");
define("LANINS_043", "Veritabanı oluşturulamadı, lütfen sunucunuzda veritabanı oluşturma yetkisine sahip olup olmadığınızı kontrol edin.");
define("LANINS_044", "Veritabanı başarıyla oluşturuldu.");
define("LANINS_045", "Butona tıklayarak sonraki aşamaya geçiniz.");
define("LANINS_046", "5");
define("LANINS_047", "Yönetici Detayları");
define("LANINS_048", "Son Aşamaya Dön");
define("LANINS_049", "İki parola uyuşmuyor. Geri dönüp tekrar deneyiniz.");
define("LANINS_050", "XML Genişlemeleri");
define("LANINS_051", "Kurulu");
define("LANINS_052", "Kurulamadı");
define("LANINS_055", "Kurulum Doğrulaması");
define("LANINS_056", "6");
define("LANINS_057", "	e107 now has all the information it needs to complete the installation.<br /><br />Please click the button to create the database tables and save all your settings.");
define("LANINS_058", "7");
define("LANINS_060", "Unable to read the sql datafile Please ensure the file [b]core_sql.php[/b] exists in the [b]e107_admin/sql[/b] directory.");
define("LANINS_061", "	e107 was unable to create all of the required database tables. Please clear the database and rectify any problems before trying again.");
define("LANINS_069", "e107 has been successfully installed! For security reasons you should now set the file permissions on the [b]e107_config.php[/b] file back to 644. Also please delete install.php from your server after you have clicked the button below.");
define("LANINS_070", "e107 was unable to save the main config file to your server. Please ensure the [b]e107_config.php[/b] file has the correct permissions");
define("LANINS_071", "Kurulum Sonlanıyor");
define("LANINS_072", "Yönetici Kullanıcı Adı");
define("LANINS_073", "Bu ismi siteye giriş için kullanacaksınız.");
define("LANINS_074", "Yönetici Görünen Adı");
define("LANINS_076", "Yönetici Parolası");
define("LANINS_077", "Lütfen yönetici parolasını girin");
define("LANINS_078", "Yönetici Parolası Doğrulama");
define("LANINS_079", "Yönetici parolasını tekrar girin");
define("LANINS_080", "Yönetici Eposta");
define("LANINS_081", "Eposta adresinizi girin");
define("LANINS_083", "MySQL Hata Raporu:");
define("LANINS_084", "Kurulum veritabanıyla bağlantı kuramadı");
define("LANINS_085", "Kurulum bu veritabanını seçemedi :");
define("LANINS_086", "Yönetici Adı, Yönetici Parolası ve Yönetici Eposta adresi <b>zorunlu</b> alanlardır. Lütfen geri dönerek bilgileri doğru bir şekilde girin.");
define("LANINS_105", "A database name or prefix beginning with some digits followed by 'e' or 'E' is not acceptable. <br />A database name or prefix can not be empty.");
define("LANINS_106", "	WARNING - e107 cannot write to the directories and/or files listed. While this will not stop e107 installing, it will mean that certain features are not available.<br /><br />You will need to change the file permissions to use these features");
define("LANINS_107", "	e107_config.php is not an empty file");
define("LANINS_108", "	Possibly you have an existing installation");
define("LANINS_109", "	Inititated");
define("LANINS_111", "e107 Tema");
define("LANINS_112", "e107 Kullanım Kitabı");
define("LANINS_113", "Bir Web sitesi adı girin");
define("LANINS_114", "Lütfen bir konu seçin");
define("LANINS_115", "Tema adı");
define("LANINS_116", "Tema türü");
define("LANINS_117", "Web sitesi tercihleri");
define("LANINS_118", "Eklentileri yüklemek");
define("LANINS_119", "Tema gerektirebilir tüm eklentileri yükleyin.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php henüz var!");
define("LANINS_122", "Muhtemelen varolan yüklemesini var");
define("LANINS_123", "Debug bilgi");
define("LANINS_124", "Backtrace");
define("LANINS_125", "Geçersiz adım");
define("LANINS_126", "Güvenlik nedeniyle şimdi e107_config.php dosyasına geri 644 üzerinde dosya izinleri ayarlamalısınız.");
define("LANINS_127", "[X] veritabanı zaten. Üzerine yazılsın mı? (varolan herhangi bir veri kaybı olur)");
define("LANINS_128", "Üzerine yaz");
define("LANINS_129", "Veritabanı bulunamadı.");
define("LANINS_134", "Yükleme");
define("LANINS_135", "in");
define("LANINS_136", "Silinen varolan veritabanı");
define("LANINS_137", "Varolan bir veritabanını bulundu");
define("LANINS_141", "Lütfen MySQL bilgilerinizi aşağıdaki formu doldurun. Bu bilgileri bilmiyorsanız lütfen barındırma sağlayıcınıza başvurun. Her alan için ek bilgi hover.");
define("LANINS_142", "Önemli: Lütfen e107.htaccess için .htaccess yeniden adlandırın");
define("LANINS_144", "Önemli: Lütfen kopyalayın ve [b]e107.htaccess[/b] içeriğini [b] [/ b] .htaccess dosyanıza yapıştırırsınız. Lütfen içinde olabilir herhangi bir varolan verilerin üzerine değil bak.");
define("LANINS_145", "e107 v2.x PHP [x] yüklü olmasını gerektirir. Lütfen barındırıcınızla bağlantı kurun veya devam etmeden önce [y] bilgileri okuyun.");

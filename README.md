# Test Driven Development(TDD) ve Behaviour Driven Development(BDD) arasındaki farkı açıklayınız.

 - TDD Test odaklı geliştirme anlamına gelir. 
 - BDD Davranış odaklı geliştirme anlamına gelir.
 - TDD de süreç, bir test senaryosu yazarak başlanır.
 - BDD de süreç, beklenen davranışa göre bir senaryo yazılarak başlanır.
 - TDD, işlevselliğin nasıl uygulandığına odaklanılır.
 - BDD, bir uygulamanın son kullanıcıya yönelik davranışına odaklanılır.
 - TDD de işbirliği yanlızca geliştiriciler arasında gereklidir.
 - BDD de tüm paydaşlar arasında işbirliği gereklidir.   

# Unit Test nedir? Unit Test nasıl yapılır?

  - Unit Test, bir yazılımın en küçük test edilebilir bölümlerinin, tek tek ve bağımsız olarak doğru çalışması için incelendiği bir yazılım geliştirme sürecidir. Unit Test yazılım testinin ilk seviyesidir ve entegrasyon testinden önce gelir. Unit Testleri geliştiriciler kendileri yazar ve yürütürler.
  - Geliştireceğimiz yazılımları yazmadan önce Unit Test’ lerini yazmamız gerekiyor ve Unit Test yazmak için de bazı kurallara uymamız gerekiyor.
     1.	En küçük parçacığı test edilmeli
     2.	Sadece bir senaryo test edilir.
     3.	Kullanılan adımlar belirlenir.
     4.	Test method ismi test edilen senaryonun yansıması olmalıdır.
     5.	Test edilen kısım diğer kısımlardan bağımsız olmalıdır.
     6.	Testlerimiz tam otomatik şekilde çalışmalıdır.
     7.	Hızlı çalışabilmeli ve çabuk sonuçlar vermelidir.
     8.	Okunaklı, anlaşılabilir ve sürdürebilir olmalıdır.
     9.	Test başarısız olduğunda durmalı ve iyi bir hata raporu döndürmelidir. Bu hata raporunda neyi test ettin ? ne yapmalı ? beklenen çıktı neydi ve gerçekte ne yaptığıdır ?

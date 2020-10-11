Projekt zaliczeniowy na przedmiot Techniki Internetu
Autor: Błażej Woźniak
Numer indeksu: 301740

WAŻNE: Projekt tworzonny na XAMPP 5.6.40-1

- po wrzuceniu zawartości folderu do htdocs robimy import bazy danych w localhost/phpmyadmin
- podczas importu pliku w folderze database (okulardb.sql) konieczne jest aby odznaczyć "Enable foreign key checks"

- WAŻNE
podczas próby załadowania zdjecia z panelu administracyjnego miałem błąd z brakiem uprawnień. Na linuxie konieczne jest
dodatkowo nadanie uprawnien:

sudo chmod -R 777 /opt/lampp/htdocs

dane do poszczególnych kont z danymi uprawnieniami które są dodawane podczas importu okular.db.sql.

Co do samego działania sklep, to w mojej koncepcji psotanowiłem wyswietlac na belce w widoku zalogowanego użytwkonika
sumę wartości zamówienia które jest realizowane. Natomiast koszyk działa jako tymczasowy kontener na przechowywanie rzeczy podczas robienia zakupów.
Kiedy jesteśmy pewni, że chcemy zakupić wybrane rzeczy w koszyku. Dorzucane są one do naszego zamówienia które jeszcze nie zostało zresetowane czyli zrealizowane lub jest tworzona nowa karta zamówienia jeśli uprzednio była pusta.

dane do panelu administarcyjnego:
Username: admin
Hasło admin

dane przykładowego klienta:
Email: adam@gmail.com
Hasło: 1234

Email: testowy2@onet.pl
Hasło: 1234

Email: testowy@wp.pl
Hasło: 1234

Do użytkownika adam@gmail.com - dodaję również zamówienia jedno w toku drugie historyczne.

W panelu administracyjnym mamy wgląd do aktualnych zamówień ich hipotetyczne wyciagniecie i zresetowanie czyli zrealizowanie. Ponadto oczywiście mamy
możliwość zarządzania użytkownikami w bazie.



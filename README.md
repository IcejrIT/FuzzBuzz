# Laravel FizzBuzz - zadanie rekrutacyjne Jakub Daniel

Applikacja polega na interpretracji liczb od 1 do 100. 
Dla liczb podzielnych przez 3 niech wyświetli tekst "Fizz", 
dla liczb podzielnych przez 5 niech wyświetli "Buzz", 
a dla liczb podzielnych jednocześnie przez 3 oraz 5 wyświetli "FizzBuzz".

## Uruchamianie komendy

Aby uruchomić komendę FizzBuzz, należy użyć komendy `php artisan fizzbuzz` w konsoli w ścieżce projektu.
Aby uruchomić UnitTest należy, użyć komendy `php artisan test` w konsoli w ścieżce projektu.

## Dlaczego wzorzec strategii?
Zastosowałem ten wzorzec dlatego że jest łatwy w implementacji, przestrzega Solid, zapewnia elastyczność 
i co najważniejsze jest wystarczający dla tak prostej aplikacji konsolowej.
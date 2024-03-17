# SOLID

_CO TO JEST_:

Zbiór zasad, sposób zaproponowany przez `Roberta Cecil Martina`, opisujący pięć podstawowych założeń programowania obiektowego. Akronimem SOLID jest podobno `first five object-oriented design` (OOD) principles.

### [ S ] SRP - Single-responsibility principle - zasada jednej odpowiedzialności

_Definicja_:

Klasa powinna mieć tylko jedną odpowiedzialność (nigdy nie powinien istnieć więcej niż jeden powód do modyfikacji klasy).
Przykład 1 - Rejestracja użytkownika
Przykład 2 - Zapisywanie nowego użytkownika, ewentualne logowanie błędów w przypadku wystąpienia wyjątku

### [ O ] Open-closed principle - zasada otwarte-zamkniete

_Definicja_:

Klasy (encje) powinny być otwarte na rozszerzenia i zamknięte na modyfikacje.

### [ L ] Liskov substitution principle - zasada podstawienia Liskov

_Definicja_:

Funkcje które używają wskaźników lub referencji do klas bazowych, muszą być w stanie używać również obiektów klas dziedziczących po klasach bazowych, bez dokładnej znajomości tych obiektów. Zasada ta jest rozszerzeniem zasady Open-closed.

Zasada ta wymusza spełnienie 6 warunków-zasad, abyśmy mogli powiedzieć, że kod spełnia zasadę Liskov:

    1. Typy parametrów we wszystkich klasach w metodzie muszą być takie same
    2. Typ zwracany metody musi być taki sam

Pierwsze 2 zasady będą spełnione dzięki zastosowaniu interfejsu, czyli dzięki zasadzie Open-Closed

    3. Warunki na początku metody (pre-conditions) powinny być takie same we wszystkich klasach
    4. Warunki na końcu metody (post-conditions) powinny być takie same we wszystkich klasach
    5. Wyjątki rzucane przez child muszą być takie same
    6. Parametry wstrzykiwane do konstruktora nie mogą być modyfikowane w metodzie

### [ I ] Interface segragation principle - zasada segregacji interfejsow

_Definicja_:

Powinniśmy tworzyć wiele dedykowanych interfejsow z małą ilością zdefiniowanych metod, a nie jeden ogólny z wieloma metodami. Interfejsy można zawsze implementować w dowolnej ilości, więc nie ma problemu, żeby klasa spełniała kilka interfejsów.

### [ D ] Dependency inversion principle - zasada odwrocenia zaleznosci

_Definicja_:

Wysokopoziomowe moduły nie powinny zależeć od niskopoziomowych - zależność między nimi powinna wynikać z abstrakcji.
Najczęstszą implementacją tej zasady jest wstrzykiwanie zależności w postaci interfejsu, a nie konkretnej klasy. Zależność można wstrzykiwać poprzez konstruktor.
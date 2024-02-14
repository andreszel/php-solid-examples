<?php

declare(strict_types=1);

define('BASEPATH', __DIR__);
define('SEPARATOR', "\n- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n\n");

use Andrzej\Solid\D\example1\MysqlDatabase;
use Andrzej\Solid\D\example1\PostgresSQLDatabase;
use Andrzej\Solid\D\example1\UserManager;
use Andrzej\Solid\I\example1\Airplane;
use Andrzej\Solid\I\example1\Car;
use Andrzej\Solid\I\example1\FutureCar;
use Andrzej\Solid\L\example1\Service\EmailService;
use Andrzej\Solid\L\example1\Service\FirstEmailService;
use Andrzej\Solid\L\example1\Service\SecondEmailService;
use Andrzej\Solid\O\example1\AreaCalculation;
use Andrzej\Solid\O\example1\Circle;
use Andrzej\Solid\O\example1\Rectangle;
use Andrzej\Solid\O\example1\Triangle;
use Andrzej\Solid\O\example2\CreditCardPayment;
use Andrzej\Solid\O\example2\Payment;
use Andrzej\Solid\O\example2\PaymentFactory;
use Andrzej\Solid\O\example2\PaypalPayment;
use Andrzej\Solid\S\example1\Entity\User;
use Andrzej\Solid\S\example1\RegisterEmail;
use Andrzej\Solid\S\example1\RegisterStorage;
use Andrzej\Solid\S\example1\UserRegistration;
use Andrzej\Solid\S\example2\Service\Logger;
use Andrzej\Solid\S\example2\User as Example2User;

require_once('./vendor/autoload.php');

echo "SOLID\n\n";
echo "[ SRP - Single-responsibility principle - zasada jednej odpowiedzialnosci ]\n";
echo "[ DEFINICJA: Klasa powinna mieć tylko jedną odpowiedzialność (nigdy nie powinien istnieć więcej niż jeden powód do modyfikacji klasy). ]\n\n";

echo "-> Example 1\n";
$userRegistration = new UserRegistration(new RegisterStorage, new RegisterEmail);
$userRegistration->register(new User('Andrzej', 'Szelka', 'szelkaandrzej@gmail.com'));

echo "\n";

echo "-> Example 2\n";
$user = new Example2User(new Logger);
$user->create([]);

echo "\n";

echo SEPARATOR;

echo "[ Open-closed principle - zasada otwarte-zamkniete ]\n";
echo "[ Klasy (encje) powinny być otwarte na rozszerzenia i zamknięte na modyfikacje. ]\n\n";

echo "-> Example 1 - strategy pattern\n\n";
$areaCalculation = new AreaCalculation();
echo "Powierzchnia okregu: " . $areaCalculation->area(new Circle(13)) . "\n";
echo "Powierzchnia prostokata: " . $areaCalculation->area(new Rectangle(8.4, 14.4)) . "\n";
echo "Powierzchnia trojkata: " . $areaCalculation->area(new Triangle(8, 12.9)) . "\n";

echo "\n";

echo "-> Example 2\n\n";

echo "strategy pattern\n";
$payment = new Payment(new PaypalPayment());
$payment->pay();
$payment = new Payment(new CreditCardPayment);
$payment->pay();

echo "facory pattern\n\n";
$paymentFactory = new PaymentFactory();
$payment = $paymentFactory->initializePayment('wire');
$payment->pay();
echo "\n";

echo "-> Example 3\n";

echo SEPARATOR;

/*
    Funkcje które używają wskaźników lub referencji do klas bazowych, muszą być w stanie używać również obiektów klas dziedziczących po klasach bazowych,
    bez dokładnej znajomości tych obiektów. Zasada ta jest rozszerzeniem zasady Open-closed, mówiąc prostym językiem zasada mówi o tym,
    że jeżeli klasa X jest podtypem klasy Y - dziedziczy po klasie Y to obiekty klasy Y muszą być zamienialne z klasą S bez zmiany funkcjonalności,
    czyli powinniśmy napisać program tak, że jeżeli zamienimy w programie na inną klasę, która dziedziczy po klasie T to program nadal
    będzie działał poprawnie, a jego funkcjonalność się nie zmieni, czyli klasy muszą być wymienne, efekt taki możemy osiągnąć tylko jeżeli 2 klasy
    będą miały wspólny interfejs, wtedy możemy stosować klasy zamiennie jako parametry, bo wstrzykujemy interfejs

    Zasada ta wymusza spełnienie 6 warunków-zasad, abyśmy mogli powiedzieć, że kod spełnia zasadę Liskov
    
    1. Typy parametrów we wszystkich klasach w metodzie muszą być takie same
    2. Typ zwracany metody musi być taki sam
    Pierwsze 2 zasady będą spełnione dzięki zastosowaniu interfejsu, czyli dzięki zasadzie Open-Closed

    3. Warunki na początku metody (pre-conditions) powinny być takie same we wszystkich klasach
    4. Warunki na końcu metody (post-conditions) powinny być takie same we wszystkich klasach
    5. Wyjątki rzucane przez child muszą być takie same
    6. Parametry wstrzykiwane do konstruktora nie mogą być modyfikowane w metodzie
*/

echo "[ Liskov substitution principle - zasada podstawienia Liskov ]\n\n";

echo "-> Example 1\n\n";

$emailService = new EmailService(new FirstEmailService());
$emailService->sendMessage(
    'szelkaandrzej@gmail.com',
    'Rejestracja nowego konta',
    'Witamy w naszej bajce, prosimy o potwierdzenie konta klikając w link przesłany w treści maila.'
);

echo "\n\n";

$emailService = new EmailService(new SecondEmailService());
$emailService->sendMessage(
    'szelkaandrzej@gmail.com',
    'Rejestracja nowego konta',
    'Witamy w naszej bajce, prosimy o potwierdzenie konta klikając w link przesłany w treści maila.'
);

echo "\n\n";

echo SEPARATOR;

echo "[ Interface segragation principle - zasada segregacji interfejsow ]\n";
echo "[ Powinniśmy tworzyć wiele dedykowanych interfejsow z małą ilością zdefiniowanych metod, a nie jeden ogólny z wieloma metodami ]\n";
echo "[ Interfejsy można zawsze implementować w dowolnej ilości, więc nie ma problemu, żeby klasa spełniała kilka interfejsów ]\n\n";

echo "-> Example 1\n\n";

$futureCar = new FutureCar();
$futureCar->drive();
$futureCar->fly();

$car = new Car();
$car->drive();

$airplane = new Airplane();
$airplane->fly();

echo "\n";

echo SEPARATOR;

echo "[ Dependency inversion principle - zasada odwrocenia zaleznosci ]\n";
echo "[ Wysokopoziomowe moduły nie powinny zależeć od niskopoziomowych - zależność między nimi powinna wynikać z abstrakcji ]\n\n";

echo "-> Example 1\n\n";

$userManager = new UserManager(new MysqlDatabase);
$userManager->add();

$userManager = new UserManager(new PostgresSQLDatabase);
$userManager->add();

echo "\n\n";
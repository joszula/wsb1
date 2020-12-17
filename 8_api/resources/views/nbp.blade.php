<h3>Kurs walut</h3>
@foreach ($nbp as $rate)
    <li> 
        Waluta: {{ $rate['currency'] }}
        <p> Skrót: {{ $rate['code'] }}
        <p> Kurs: {{ $rate['mid'] }}
        </li>
 @endforeach
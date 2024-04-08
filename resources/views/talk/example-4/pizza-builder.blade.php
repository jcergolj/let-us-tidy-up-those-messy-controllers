@extends('layouts.talk-app')

@section('content')
    <x-title>
        Example 4: Pizzas builder pattern
    </x-title>

    <x-body>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-4/PizzaBuilder.php"
        />

<x-subtitle>Usage</x-subtitle>
        <x-code language="php">
$margarita = (new PizzaBuilder())
    ->addSauce('tomato')
    ->addCheese('mozzarella')
    ->build();

var_dump($margarita);

object(Pizza)#1 (3) {
    ["sauce":"Pizza":private]=>
    string(6) "tomato"
    ["cheese":"Pizza":private]=>
    string(10) "mozzarella"
 }

$prosciutto = (new PizzaBuilder())
    ->addSauce('tomato')
    ->addCheese('mozzarella')
    ->addTopping('prosciutto')
    ->addTopping('mushrooms')
    ->build();

var_dump($prosciutto);

object(Pizza)#1 (3) {
    ["sauce":"Pizza":private]=>
    string(6) "tomato"
    ["cheese":"Pizza":private]=>
    string(10) "mozzarella"
    ["toppings":"Pizza":private]=>
    array(1) {
        [0]=>
        string(10) "prosciutto"
        [1]=>
        string(9) "mushrooms"
    }
}
        </x-code>
    </x-body>
@endsection

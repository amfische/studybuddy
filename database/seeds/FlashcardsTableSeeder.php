<?php

use Illuminate\Database\Seeder;
use App\Flashcard;

class FlashcardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'What is event delegation?',
        	'answer' => 'Event delegation is a technique involving adding event listeners to a parent element instead of adding them to the descendant elements. The listener will fire whenever the event is triggered on the descendant elements due to event bubbling up the DOM.asdf

						# heading one'
        ]);

        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'What is a closure, and how/why would you use one?',
        	'answer' => 'A closure is the combination of a function and the lexical environment within which that function was declared. 

1. The word "lexical" refers to the fact that lexical scoping uses the location where a variable is declared within the source code to determine where that variable is available. 

2. Closures are functions that have access to the outer (enclosing) function\'s variables—scope chain even after the outer function has returned.

## heading two

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in vulputate leo, sit amet commodo purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent consequat lacus in nunc feugiat dictum. Nam euismod sapien eros, nec fermentum tellus elementum ut. Duis placerat libero ac semper lacinia. Suspendisse ornare aliquet tellus, eu pellentesque nibh lobortis id. Quisque ut erat hendrerit nunc auctor porttitor. Etiam sed rhoncus purus, tincidunt gravida massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam viverra augue eget erat tincidunt accumsan.

Donec sagittis scelerisque mi nec efficitur. Ut dapibus auctor ma'
        ]);

        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'Explain how prototypal inheritance works',
        	'answer' => 'This is an extremely common JavaScript interview question. All JavaScript objects have a prototype property, that is a reference to another object. When a property is accessed on an object and if the property is not found on that object, the JavaScript engine looks at the object\'s prototype, and the prototype\'s prototype and so on, until it finds the property defined on one of the prototypes or until it reaches the end of the prototype chain. This behavior simulates classical inheritance, but it is really more of delegation than inheritance.'
        ]);

        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'What\'s the difference between host objects and native objects?',
        	'answer' => 'Native objects are objects that are part of the JavaScript language defined by the ECMAScript specification, such as String, Math, RegExp, Object, Function, etc.

						Host objects are provided by the runtime environment (browser or Node), such as window, XMLHTTPRequest, etc.'
        ]);

        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'What\'s the difference between .call and .apply?',
        	'answer' => 'Both .call and .apply are used to invoke functions and the first parameter will be used as the value of this within the function. However, .call takes in comma-separated arguments as the next arguments while .apply takes in an array of arguments as the next argument. An easy way to remember this is C for call and comma-separated and A for apply and an array of arguments.'
        ]);

        Flashcard::create([
        	'category_id' => 1,
        	'question' => 'What are the advantages and disadvantages of using Ajax?',
        	'answer' => 'Advantages

						Better interactivity. New content from the server can be changed dynamically without the need to reload the entire page.
						Reduce connections to the server since scripts and stylesheets only have to be requested once.
						State can be maintained on a page. JavaScript variables and DOM state will persist because the main container page was not reloaded.
						Basically most of the advantages of an SPA.
						Disadvantages

						Dynamic webpages are harder to bookmark.
						Does not work if JavaScript has been disabled in the browser.
						Some webcrawlers do not execute JavaScript and would not see content that has been loaded by JavaScript.
						Basically most of the disadvantages of an SPA.'
        ]);

    }
}

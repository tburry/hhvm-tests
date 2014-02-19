<?php
namespace Test;

return function($context) {

// {{#goodbye}}
Helpers::section($context['goodbye'], ['fn' => function($context) {
    echo 'GOODBYE ';
}]);

echo 'cruel '
    , htmlspecialchars($context['world'])
    , '!';
};
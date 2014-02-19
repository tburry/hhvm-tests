<?php

namespace Test;

return function ($context) {
    echo "Before callback\n";

    Helpers::section($context, ['fn' => function ($context) {
            echo "In callback $context\n";
        }]);

    echo "After callback\n";
};
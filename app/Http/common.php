<?php

if (!function_exists('getDisabilities')) {
    function getDisabilities(): array{
        return ['None', 'Speech', 'Vision', 'Hearing', 'Physical', 'Mental', 'Autistic', 'other_chronic_disease'];
    }
}

if (!function_exists('getLivingStatus')) {
    function getLivingStatus(): array{
        return ['Alive', 'Died', 'Separated', 'Divorced'];
    }
}
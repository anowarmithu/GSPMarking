<?php

if (!function_exists('getDisabilities')) {
    function getDisabilities(): array
    {
        return ['No', 'Mobility and Physical Impairments', 'Vision Disability', 'Hearing Disability', 'Psychological Disorders', 'Other Major Disability'];
//        return ['None', 'Speech', 'Vision', 'Hearing', 'Physical', 'Mental', 'Autistic', 'Other'];
    }
}

if (!function_exists('getLivingStatuses')) {
    function getLivingStatuses(): array
    {
        return ['Alive', 'Late', 'Separated from Family'];
    }
}

if (!function_exists('getGenders')) {
    function getGenders(): array
    {
        return ['Male', 'Female', 'Other'];
    }
}

if (!function_exists('getReligions')) {
    function getReligions(): array
    {
        return ['Islam', 'Hinduism', 'Buddhism', 'Christianity', 'Other'];
    }
}

if (!function_exists('getZones')) {
    function getZones(): array
    {
        return ['Dhaka', 'Chattogram', 'Rajshahi', 'Khulna', 'Rangpur', 'Barishal', 'Sylhet', 'Mymensingh', 'Cumilla', 'Kushtia', ' Nursing', 'Intermediate', 'Other'];
    }
}

if (!function_exists('getBloodGroups')) {
    function getBloodGroups(): array
    {
        return ['Unknown', 'A+', 'B+', 'O+', 'AB+', 'A-', 'B-', 'O-', 'AB-'];
    }
}

if (!function_exists('getFemaleMonthlyExpense')) {
    function getFemaleMonthlyExpense(): int
    {
        return 8000;
    }
}

if (!function_exists('getMaleMonthlyExpense')) {
    function getMaleMonthlyExpense(): int
    {
        return 7000;
    }
}

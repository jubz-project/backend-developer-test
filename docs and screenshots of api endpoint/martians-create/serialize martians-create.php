<?php

$postData = [
    'name' => 'John',
    'age' => '31',
    'gender' => 'M',
    'allow' => '1',
    'inventory' => [
        [
            'itemid' => '2',
            'quantity' => '20',
        ],
        [
            'itemid' => '3',
            'quantity' => '20',
        ],
        [
            'itemid' => '5',
            'quantity' => '20',
        ],
    ],
];

$dataArr = serialize($postData);

$response = $this->post('api/martians-create',[
    'data' => $dataArr,
]);

?>
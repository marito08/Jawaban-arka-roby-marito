<?php 

function Biodata($nama, $umur)
{
    $data = [
        'address' =>  'Jln pangeran ayin',
        'hobbies' => ['membaca','futsal','ngoding'],
        'is_married' => FALSE,
        'list_school' =>
        [
            'SDN114 Palemmbang' => [
                'year_in' => 2003,
                'year_out' => 2009
            ],
            'SMPN 27 Palembang' => [
                'year_in' => 2009,
                'year_out' => 20012
            ],
            'SMAN 16 Palembang' => [
                'year_in' => 20012,
                'year_out' => 2015
            ],
            'Politeknik Negeri Sriwijaya' =>[
                'year_in' => 2015,
                'year_out' => 2018
            ]
        ],
        'skills' =>
        [
            'php' => 'beginer',
            'css' => 'beginer',
            'html' => 'advance'
        ],
        'interist_in_coding' => TRUE;
    ];

    return json_encode($data, TRUE);
}

$biodata = Biodata('robi',22);

echo($biodata);

?>


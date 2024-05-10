<?php


namespace App\classes;


class HomePage
{
    public $students = [];
    public function __construct()
    {
        $this->students = [
            0 => [
                'name' => 'Alu',
                'email' => 'alu@alu.com',
                'mobile' => [
                    'personal' => '420420',
                    'parent' => '36543213',
                ]
            ],
            1 => [
                'name' => 'Mula',
                'email' => 'mula@mula.com',
                'mobile' => [
                    'personal' => '4204202',
                    'parent' => '36543',
                ]],
            2 => [
                'name' => 'Begun',
                'email' => 'Begun@Begun.com',
                'mobile' => [
                    'personal' => '4204203',
                    'parent' => '3562213',
                ]],
        ];
    }
    public function getstudents(){
        return $this->students;
    }
    public function index(){
        header('Location: route.php?page=home');
//        foreach ($this->students as $student){
//            foreach ($student as $value){
//                if (is_array($value)){
//                    foreach ($value as $item){
//                        if (is_array($item)){
//                            foreach ($item as $number){
//                                echo $number.'<br/>';
//                            }
//                        }
//                        else{
//                            echo $item.'<br/>';
//                        }
//                    }
//                }
//                else{
//                    echo $value.'<br/>';
//                }
//            }
//            echo '<br/>';
//        }
    }
}
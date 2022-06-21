<?php

$bilgisayar=[
    
    [
        'ustID'=>'0',
        'ID'=>'1',
        'name'=>'Yazılım'
    ],
    [
        'ustID'=>'0',
        'ID'=>'2',
        'name'=>'Donanım'
    ],
    [
        'ustID'=>'1',
        'ID'=>'3',
        'name'=>'Frontend'
    ],
    [
        'ustID'=>'1',
        'ID'=>'4',
        'name'=>'Backend'
    ],
    [
        'ustID'=>'1',
        'ID'=>'5',
        'name'=>'Full-Stack'
    ],
    [
        'ustID'=>'2',
        'ID'=>'6',
        'name'=>'Network Sistemleri'
    ],
];
 
    //echo '<pre>';
    //print_r($bilgisayar);
    //echo '<pre>';

    function getCategories($arr,$ustID=0){
      
        $html='<ul>';
        foreach($arr as $item ){ 
            if ($item['ustID']==$ustID)
            {
                $html.='<li>';
                $html.= $item['name'];
                $html.=getCategories($arr,$item['ID']);
                $html.='</li>';
            }
        }

        $html.='</ul>';
        return $html;
    }
    

   echo getCategories($bilgisayar);

// function categoryList(array $categories, int $parent = 0) : string
// {
//     $html = '<ul>';
//     foreach ($categories as $category)
//         if ($category['ustID'] == $parent):
//             $html .= '<li>' . $category['name'];
//             $html .= categoryList($categories, $category['ID']);
//             $html .= '</li>';
//         endif;
//     $html .= '</ul>';
//     return $html;
// }

// echo categoryList($bilgisayar)

    ?>
<?php
/**
 * построение дерева вида
 *          0
 *         /
 *        a
 *       /
 *      b
 *    /  \
 *   c    d
 */

$arr = array(
    array('id'=>1, 'parentid'=>0, 'childName'=>'a'),
    array('id'=>2, 'parentid'=>1, 'childName'=>'b'),
    array('id'=>3, 'parentid'=>2, 'childName'=>'c'),
    array('id'=>4, 'parentid'=>2, 'childName'=>'d'),
);

$new = array();
foreach ($arr as $a){
    $new[$a['parentid']][] = $a;
}
$tree = createTree($new, $new[0]); // changed
print_r($tree);

function createTree(&$list, $parent){
    $tree = array();
    foreach ($parent as $k=>$l){
        if(isset($list[$l['id']])){
            $l['child'] = createTree($list, $list[$l['id']]);
        }
        $tree[] = $l;
    }
    return $tree;
}


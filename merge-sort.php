<?php
function mergeSort(&$arr)
{
    if (count($arr) > 1) {
        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        mergeSort($left);
        mergeSort($right);

        $i = $j = $k = 0;

        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[$k] = $left[$i];
                $i++;
            } else {
                $arr[$k] = $right[$j];
                $j++;
            }
            $k++;
        }

        while ($i < count($left)) {
            $arr[$k] = $left[$i];
            $i++;
            $k++;
        }

        while ($j < count($right)) {
            $arr[$k] = $right[$j];
            $j++;
            $k++;
        }
    }
}
?>
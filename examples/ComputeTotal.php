<?php

class Compute
{
    public function computeTotal(int $a, $b, $c): int
    {
        if ($c > 1) {
            $total = $a + $b;
        } elseif ($c < 1) {
            $total = $a - $b;
        } else {
            $total = 0;
        }

        return $total;
    }
}

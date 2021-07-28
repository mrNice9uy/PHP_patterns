<?php

interface INode {
    public function getValue();
}

class ValueNode implements INode {
    private $val;

    function __construct($val) {
        $this->val = $val;
    }

    public function getValue() {
        return $this->val;
    }
}

class AdditionNode implements INode {
    private $op1, $op2;

    function __construct($op1, $op2) {
        $this->op1 = $op1;
        $this->op2 = $op2;
    }

    public function getValue() {
        return $this->op1->getValue() + $this->op2->getValue();
    }
}

$x = new ValueNode(42);
$y = new ValueNode(7);
$z = new ValueNode(10);
$add1 = new AdditionNode($x, $y);
$add2 = new AdditionNode($add1, $z);

echo $add2->getValue();
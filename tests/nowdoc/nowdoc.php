<?php

$str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

$str = <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should not print a capital 'A': \x41
EOT;

$str = <<<'EOL'
"test" foo 'test'
EOL;

$str = array(<<<'EOF'
foo
EOF
, "bar"
);

$str = array(
    "bar",
    <<<'EOF'
foo
EOF
);

$str = sprintf(<<<'EOF'
foo
EOF
);

$str = sprintf(<<<'EOF'
foo
EOF
, true);

$str = sprintf(<<<EOD
foo
EOD
, true);

function foo($a = 1, $b = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD
, $c = 1
) {
    echo $b;
}

function foo1(
    $a = 1,
    $b = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD
    ,
    $c = 1
) {
    echo $b;
}

function foo1(
    $a = 1,
    $b = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD
) {
    echo $b;
}

$var = <<<'EOF'
string
string
string
EOF
    . $var;

$var = $var . <<<'EOF'
string
string
string
EOF;

$var = $var . <<<'EOF'
string
string
string
EOF
    . $var;

$var = <<<'EOF'
string
string
string
EOF
    . $var
    . $var;

$var = $var . $var . <<<'EOF'
string
string
string
EOF;

$var = $var . $var . <<<'EOF'
string
string
string
EOF
    . $var
    . $var;

$var = <<<'EOF'
string
string
string
EOF
    .
    <<<'EOF'
string
string
string
EOF;

$var = <<<'EOF'
string
string
string
EOF
    . $var
    . <<<'EOF'
string
string
string
EOF;

$var = $var . <<<'EOF'
string
string
string
EOF
    . $var
    . <<<'EOF'
string
string
string
EOF
    . $var;

$str = <<<'EOD'
EOD;

$str = <<<'EOD'

EOD;

$str = <<<'EOD'


EOD;

$str = <<<'EOD'



EOD;

$str = <<<'EOD'
string
EOD;

$str = <<<'EOD'
string
string
EOD;

$str = <<<'EOD'
string
string
string
EOD;

static $var =  <<<'EOD'
string
string
string
EOD;

static
    $var =  <<<'EOD'
    string
    string
    string
EOD
    ,
    $foo;

static
    $foo,
    $var =  <<<'EOD'
string
string
string
EOD;

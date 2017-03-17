<?php

// Require the TreeNode class
use RedBrick\DevTest\TreeNode;
require_once( 'TreeNode.php' );

// Read the Tree from disk
$tree = unserialize( file_get_contents( 'tree_serialized.txt' ) );

// Load the parser and parse the tree
require_once( 'parse_tree.php' );
// Call the print_tree function to print the tree sturcture
$output_string = print_tree( $tree );

// Output some info
echo "\n";
echo "\n";
echo 'Output from print_tree()' . "\n";
echo '=====================================================' . "\n";
echo $output_string;
echo "\n";
echo 'SHA1 of output from print_tree()' . "\n";
echo '=====================================================' . "\n";
echo sha1( $output_string ) . "\n";
echo "\n";
